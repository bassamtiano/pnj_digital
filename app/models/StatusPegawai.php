<?php

class StatusPegawai extends Eloquent {
	// Abdul Fachmi
	protected $table = 'tbl_status_pegawai';
	protected $guarded = array('id_status_pegawai');
	protected $fillable = array('status_pegawai', 'tunjangan_pemerintah');

	public static function tambah_status_pegawai($status_pegawai, $tunjangan_pemerintah) {
		return StatusPegawai::create(array('status_pegawai' => $status_pegawai, 'tunjangan_pemerintah' => $tunjangan_pemerintah));
	}

	public static function ubah_status_pegawai($id_status_pegawai, $status_pegawai, $tunjangan_pemerintah) {
		return StatusPegawai::where('id_status_pegawai', '=', $id_status_pegawai)->update(array('id_status_pegawai' => $id_status_pegawai, 'status_pegawai' => $status_pegawai, 'tunjangan_pemerintah' => $tunjangan_pemerintah));
	}

	public static function hapus_status_pegawai($id_status_pegawai) {
		return StatusPegawai::where('id_status_pegawai', '=', $id_status_pegawai)->delete();
	}
}