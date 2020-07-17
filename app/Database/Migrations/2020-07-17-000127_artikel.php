<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Artikel extends Migration
{
	public function up()
	{
		$this->forge->addField([
            'id'           => [
                'type'              => 'INT',
                'constraint'        => 11,
                'auto_increment'    => TRUE
            ],
            'title'         => [
                'type'              => 'VARCHAR',
                'constraint'        => '100',
            ],
            'slug'         => [
                'type'              => 'VARCHAR',
                'constraint'        => '100',
			],
			'content'         => [
                'type'              => 'TEXT'
            ]
        ]);
        $this->forge->addKey('id', TRUE);
        $this->forge->createTable('artikel');
	}

	public function down()
	{
		$this->forge->dropTable('artikel');
	}
}