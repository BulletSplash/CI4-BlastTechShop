<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateUsersTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',  // important
                'constraint'     => 11,     // important, but some doesnt need this
                'unsigned'       => true,   // optional
                'auto_increment' => true,   // optional if you want auto counting, but important for the id
                'null'           => false,  // not needed for id, but needed for most
                'default'        => 1,      // optional
            ],

            'fullname' => [
                'type'           => 'VARCHAR',  // important
                'constraint'     => '100',
                'null'           => false,  // not needed for id, but needed for most
            ],

            'email' => [
                'type'           => 'VARCHAR',  // important
                'constraint'     => '100',
                'null'           => false,  // not needed for id, but needed for most
            ],

            'password' => [
                'type'           => 'VARCHAR',  // important
                'constraint'     => '100',
                'null'           => false,  // not needed for id, but needed for most
            ],

            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],

            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],

            'deleted_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ]
        ]);

        $this->forge->addKey('id', true);
        $this->forge->addUniqueKey('id');
        $this->forge->addUniqueKey('email');
        $this->forge->addUniqueKey('password');
        $this->forge->createTable('accounts', true);
    }

    public function down()
    {
        $this->forge->dropTable('accounts', true);
    }
}
