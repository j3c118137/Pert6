<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class HobiMahasiswa extends Migration
{
	private $table = "hobi_mahasiswa";
	public function up()
	{
		$this->forge->addField([
			'kode_hobi_mahasiswa' => [
					'type'           => 'INT',
					'constraint'     => '11',
					'unsigned'		=> true,
					'auto_increment' => true,
			],
			'kode_hobi'       => [
					'type'           => 'INT',
					'constraint'     => '11',
					'unsigned'		=> true,
			],
			'nim'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '9',
			],
		]);
		$this->forge->addKey('kode_hobi_mahasiswa', true);
		$this->forge->addforeignKey('kode_hobi', 'hobi', 'kode_hobi', 'CASCADE', 'CASCADE');
		$this->forge->addforeignKey('nim', 'mahasiswa', 'nim', 'CASCADE', 'CASCADE');
		$this->forge->createTable($this->table);
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable($this->table);
	}
}
