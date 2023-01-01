<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class User extends Seeder
{
    // Jalankan lewat terminal dengan perintah 'php spark db:seed User' (tanpa tanda petik)

    public function run()
    {
        $data = [
            [
                'username'  => 'admin',
                'password'  => md5('admin'),
                'nama'      => 'Admin',
                'email'     => 'admin@admin.isk',
                'role'      => 0
            ],
            [
                'username'  => 'coba1',
                'password'  => md5('coba1'),
                'nama'      => 'coba1',
                'email'     => 'coba1@user.isk',
                'role'      => 1
            ],
            [
                'username'  => 'coba2',
                'password'  => md5('coba2'),
                'nama'      => 'coba2',
                'email'     => 'coba2@user.isk',
                'role'      => 1
            ],
            [
                'username'  => 'coba3',
                'password'  => md5('coba3'),
                'nama'      => 'coba3',
                'email'     => 'coba3@user.isk',
                'role'      => 1
            ],
            [
                'username'  => 'coba4',
                'password'  => md5('coba4'),
                'nama'      => 'coba4',
                'email'     => 'coba4@user.isk',
                'role'      => 1
            ],
            [
                'username'  => 'coba5',
                'password'  => md5('coba5'),
                'nama'      => 'coba5',
                'email'     => 'coba5@user.isk',
                'role'      => 1
            ],
            [
                'username'  => 'coba6',
                'password'  => md5('coba6'),
                'nama'      => 'coba6',
                'email'     => 'coba6@user.isk',
                'role'      => 1
            ],
            [
                'username'  => 'coba7',
                'password'  => md5('coba7'),
                'nama'      => 'coba7',
                'email'     => 'coba7@user.isk',
                'role'      => 1
            ],
            [
                'username'  => 'coba8',
                'password'  => md5('coba8'),
                'nama'      => 'coba8',
                'email'     => 'coba8@user.isk',
                'role'      => 1
            ],
            [
                'username'  => 'coba9',
                'password'  => md5('coba9'),
                'nama'      => 'coba9',
                'email'     => 'coba9@user.isk',
                'role'      => 1
            ],
            [
                'username'  => 'coba10',
                'password'  => md5('coba10'),
                'nama'      => 'coba10',
                'email'     => 'coba10@user.isk',
                'role'      => 1
            ]
        ];

        $this->db->table('user')->insertBatch($data);
    }
}
