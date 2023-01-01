<?php

// Menjalankan semua Seeder sekaligus melalui terminal dengan perintah "php spark db:seed AllSeeder" (tanpa tanda petik dua)

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class AllSeeder extends Seeder
{
    public function run()
    {
        $this->call('Thread');
        $this->call('User');
    }
}