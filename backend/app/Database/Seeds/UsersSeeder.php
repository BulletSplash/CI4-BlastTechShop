<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UsersSeeder extends Seeder
{
    public function run()
    {
        $now = date('Y-m-d H:i:s');
        // if you want password that is hashed
        $password = password_hash('Password123!', PASSWORD_DEFAULT);

        $dataYouWannaInsert = [
                [
                    'fullname' => 'Juan Dela Cruz',
                    'email' => 'data@gmail.com',
                    'password' => $password,
                    'created_at' => $now,
                    'updated_at' => $now,
                ],
                [
                    'fullname' => 'Juan Dela Cruz',
                    'email' => 'data@gmail.com',
                    'password' => $password,
                    'created_at' => $now,
                    'updated_at' => $now,
                ],
                [
                    'fullname' => 'Juan Dela Cruz',
                    'email' => 'data@gmail.com',
                    'password' => $password,
                    'created_at' => $now,
                    'updated_at' => $now,
                ],
                [
                    'fullname' => 'Juan Dela Cruz',
                    'email' => 'data@gmail.com',
                    'password' => $password,
                    'created_at' => $now,
                    'updated_at' => $now,
                ],
                [
                    'fullname' => 'Juan Dela Cruz',
                    'email' => 'data@gmail.com',
                    'password' => $password,
                    'created_at' => $now,
                    'updated_at' => $now,
                ]
        ];

        $this->db->table('accounts')->insertBatch($dataYouWannaInsert);
    }
}
