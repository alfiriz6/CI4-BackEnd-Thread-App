<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\RESTful\ResourceController;

class User extends ResourceController
{
    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    public function index()
    {
        $model = new UserModel();
        $data['user'] = $model->findAll();
        return $this->respond($data);
    }

    /**
     * Return the properties of a resource object
     *
     * @return mixed
     */
    public function show($id = null)
    {
        $model = new UserModel();
        $data = $model->getWhere(['id' => $id])->getRow();
        if ($data) {
            return $this->respond($data);
        } else {
            return $this->failNotFound('User tidak ditemukan');
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
        //
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
        helper('form');
        // $rules = [
        //     'password' => [
        //         'rules' => 'required|min_length[5]|max_length[50]',
        //         'errors' => [
        //             'required' => 'Password harus diisi',
        //             'min_length' => 'Password minimal 5 Karakter',
        //             'max_length' => 'Password maksimal 50 Karakter',
        //         ]
        //     ],
        //     'password_confirm' => [
        //         'rules' => 'matches[password]',
        //         'errors' => [
        //             'matches' => 'Konfirmasi Password tidak sesuai dengan Password',
        //         ]
        //     ],
        //     'nama' => [
        //         'rules' => 'required|min_length[5]|max_length[100]',
        //         'errors' => [
        //             'required' => 'Nama harus diisi',
        //             'min_length' => 'Nama minimal 5 Karakter',
        //             'max_length' => 'Nama maksimal 100 Karakter',
        //         ]
        //     ],
        //     'email' => [
        //         'rules' => 'required|min_length[5]|max_length[50]|is_unique[user.email]',
        //         'errors' => [
        //             'required' => 'Email harus diisi',
        //             'min_length' => 'Email minimal 5 Karakter',
        //             'max_length' => 'Email maksimal 50 Karakter',
        //             'is_unique' => 'Email telah terdaftar'
        //         ]
        //     ],
        // ];
        // if (!$this->validate($rules)) {
        //     session()->setFlashdata('error', $this->validator->listErrors());
        //     return redirect()->back()->withInput();
        // }
        $data = [
            'email' => $this->request->getVar('email'),
            'password' => md5($this->request->getVar('password')),
            'nama' => $this->request->getVar('nama'),
        ];
        $model = new UserModel();
        $saved = $model->update($id, $data);
        $this->respondUpdated($saved, "User berhasil diupdate");
    }

    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function delete($id = null)
    {
        $model = new UserModel();
        $data = $model->find($id);
        if ($data) {
            $model->delete($id);
            return $this->respondDeleted($data, "User berhasil dihapus");
        } else {
            return $this->failNotFound('User tidak ditemukan');
        }
    }
}
