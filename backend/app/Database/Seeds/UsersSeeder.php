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
        $admin_password = password_hash('admin', PASSWORD_DEFAULT);

        $dataYouWannaInsert = [
                [
                    'fullname' => 'Admin User',
                    'email' => 'admin@gmail.com',
                    'password' => $admin_password,
                    'type' => 'manager',
                    'created_at' => $now,
                    'updated_at' => $now,
                ],
                [
                    'fullname' => 'Juan DelaCruz',
                    'email' => 'data@gmail.com',
                    'password' => $password,
                    'type' => 'client',
                    'created_at' => $now,
                    'updated_at' => $now,
                ],
                [
                    'fullname' => 'Juan DelaCruz',
                    'email' => 'data@gmail.com',
                    'password' => $password,
                    'type' => 'client',
                    'created_at' => $now,
                    'updated_at' => $now,
                ],
                [
                    'fullname' => 'Juan DelCruz',
                    'email' => 'data@gmail.com',
                    'password' => $password,
                    'type' => 'client',
                    'created_at' => $now,
                    'updated_at' => $now,
                ],
                [
                    'fullname' => 'Juan DelaCruz',
                    'email' => 'data@gmail.com',
                    'password' => $password,
                    'type' => 'client',
                    'created_at' => $now,
                    'updated_at' => $now,
                ]
        ];

        $this->db->table('accounts')->insertBatch($dataYouWannaInsert);
    }
}
