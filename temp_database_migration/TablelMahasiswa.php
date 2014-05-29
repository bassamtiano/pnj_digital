<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Mahasiswa extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tbl_mahasiswa', function(Blueprint $table)
		{
			$table->increments('id_mahasiswa');
			$table->string('nim', 20)->nullable();
			$table->string('nama', 100);
			$table->string('jenis_kelamin', 100)->nullable();
			$table->string('alamat', 50)->nullable();
			$table->integer('nomor_telepon')->nullable();
			$table->integer('email');
			$table->integer('tempat_lahir');
			$table->integer('tanggal_lahir');
			$table->integer('id_konsentrasi_prodi');
			$table->integer('tahun_masuk');
			$table->integer('tahun_lulus');
			$table->integer('nama_ayah');
			$table->integer('tanggal_lahir_ayah');
			$table->integer('pekerjaan_ayah');
			$table->integer('nama_ibu');
			$table->integer('tanggal_lahir_ibu');
			$table->integer('pekerjaan_ibu');
			$table->integer('nama_wali');
			$table->integer('pekerjaan_wali');
			$table->integer('foto_diri');
			$table->integer('id_jalur_masuk');
			$table->integer('id_kelas');
			$table->integer('status');
			$table->integer('status_pembayaran');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tbl_mahasiswa');
	}

}
