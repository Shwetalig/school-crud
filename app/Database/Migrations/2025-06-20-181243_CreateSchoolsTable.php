<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateSchoolsTable extends Migration
{
    public function up()
{
    $this->forge->addField([
        'id' => ['type' => 'INT', 'auto_increment' => true],
        'school_name' => ['type' => 'VARCHAR', 'constraint' => 255],
        'contact_person' => ['type' => 'VARCHAR', 'constraint' => 255],
        'email' => ['type' => 'VARCHAR', 'constraint' => 255],
        'num_students' => ['type' => 'INT'],
        'status' => ['type' => 'ENUM', 'constraint' => ['active', 'inactive']],
        'created_at' => ['type' => 'DATETIME', 'null' => true],
        'updated_at' => ['type' => 'DATETIME', 'null' => true],
        'deleted_at' => ['type' => 'DATETIME', 'null' => true],
    ]);
    $this->forge->addKey('id', true);
    $this->forge->createTable('schools');
}


    public function down()
    {
        //
    }
}
