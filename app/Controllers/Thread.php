<?php

namespace App\Controllers;

use App\Models\ThreadModel;
use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\I18n\Time;

class Thread extends ResourceController
{
    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    public function index()
    {
        $model = new ThreadModel();
        $data['thread'] = $model->orderBy('tanggal', 'DESC')->findAll();
        return $this->respond($data);
    }

    /**
     * Return the properties of a resource object
     *
     * @return mixed
     */
    public function show($id = null)
    {
        $model = new ThreadModel();
        $data = $model->getWhere(['id' => $id])->getRow();
        if ($data) {
            return $this->respond($data);
        } else {
            return $this->failNotFound('Thread tidak ditemukan');
        }
    }

    /**
     * Return a new resource object, with default properties
     *
     * @return mixed
     */
    public function new()
    {
        //
    }

    /**
     * Create a new resource object, from "posted" parameters
     *
     * @return mixed
     */
    public function create()
    {
        helper(['form']);
        $rules = [
            'judul' => [
                'rules' => 'required|min_length[5]|max_length[255]',
                'errors' => [
                    'required' => 'Judul harus diisi',
                    'min_length' => 'Judul minimal 5 Karakter',
                    'max_length' => 'Judul maksimal 255 Karakter',
                ]
            ],
            'isi' => [
                'rules' => 'required|min_length[5]',
                'errors' => [
                    'required' => 'Field Isi harus diisi',
                    'min_length' => 'Field Isi minimal 5 Karakter',
                ]
            ],
        ];
        if (!$this->validate($rules)) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }
        $model = new ThreadModel();
        $data = [
            'judul' => $this->request->getVar('judul'),
            'isi' => $this->request->getVar('isi'),
            'tanggal' => Time::now('Asia/Jakarta', 'id_ID'),
        ];
        $saved = $model->save($data);
        // redirect()->to(('/home'));
        return $this->respondCreated($saved);
    }

    /**
     * Return the editable properties of a resource object
     *
     * @return mixed
     */
    public function edit($id = null)
    {
        //
    }

    /**
     * Add or update a model resource, from "posted" properties
     *
     * @return mixed
     */
    public function update($id = null)
    {
        helper(['form']);
        $rules = [
            'judul' => [
                'rules' => 'required|min_length[5]|max_length[255]',
                'errors' => [
                    'required' => 'Judul harus diisi',
                    'min_length' => 'Judul minimal 5 Karakter',
                    'max_length' => 'Judul maksimal 255 Karakter',
                ]
            ],
            'isi' => [
                'rules' => 'required|min_length[5]',
                'errors' => [
                    'required' => 'Field Isi harus diisi',
                    'min_length' => 'Field Isi minimal 5 Karakter',
                ]
            ],
        ];
        if (!$this->validate($rules)) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }
        $data = [
            'judul' => $this->request->getVar('judul'),
            'isi' => $this->request->getVar('isi'),
            'tanggal' => Time::now('Asia/Jakarta', 'id_ID'),
        ];
        $model = new ThreadModel();
        $saved = $model->update($id, $data);
        return $this->respond($saved);
    }

    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function delete($id = null)
    {
        $model = new ThreadModel();
        $data = $model->find($id);
        if ($data) {
            $model->delete($id);
            return $this->respondDeleted($data, "Thread berhasil dihapus");
        } else {
            return $this->failNotFound('Thread tidak ditemukan');
        }
    }
}
