<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\UserModel;
use Firebase\JWT\JWT;

class Login extends ResourceController
{
    use ResponseTrait;
    public function index()
    {
        helper(['form']);
        $rules = [
            'password' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Password harus diisi',
                ]
            ],
            'email' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Username harus diisi',
                ]
            ],
        ];
        if (!$this->validate($rules)) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }
        $model = new UserModel();
        $user = $model->where('username', $this->request->getVar('email'))->first();
        if (!$user) {
            $user = $model->where('email', $this->request->getVar('email'))->first();
            if (!$user) {
                return $this->failNotFound('Username atau Email tidak ditemukan');
            }
        }
        $verify = strcmp(md5($this->request->getVar('password')), $user['password']);
        if ($verify != 0) return $this->fail('Password salah');

        $key = getenv('TOKEN_SECRET');
        $payload = array(
            "iat" => 1356999524,
            "nbf" => 1357000000,
            "uid" => $user['id'],
            "username" => $user['username'],
            "email" => $user['email'],
            "nama" => $user['nama'],
            "role" => $user['role'],
        );
        $token = JWT::encode($payload, $key, 'HS256');
        $hasil = [
            'token' => $token,
            'user' => $user,
            'status' => 200,
        ];
        return $this->respond($hasil);
    }
}
