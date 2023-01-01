<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\UserModel;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;

class Me extends ResourceController
{
    use ResponseTrait;
    public function index()
    {
        $key = getenv('TOKEN_SECRET');
        $header = $this->request->getServer('HTTP_AUTHORIZATION');
        if (!$header) return $this->failUnauthorized('Token Required');
        $token = explode(' ', $header)[1];

        try {
            $decoded = JWT::decode($token, new Key($key, 'HS256'));
            $response = [
                'id' => $decoded->uid,
                // 'username' => $decoded->username,
                // 'nama' => $decoded->nama,
                // 'email' => $decoded->email,
                // 'role' => $decoded->role
            ];
            return $this->respond($response);
        } catch (\Throwable $th) {
            return $this->fail('Invalid Token');
        }
    }
}
