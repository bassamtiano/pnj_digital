<?php

class Departemen extends Eloquent {
	
	protected $table = 'tbl_departemen';
	protected $guarded = array('kode_departemen');
	protected $fillable = array('departemen');

	public static function tambah_departemen($kode_departemen, $departemen) {
		return Departemen::create(array('departemen' => $departemen));
	}

	public static function ubah_departemen($kode_departemen) {
		return Departemen::where('kode_departemen', '=', $kode_departemen)->update(array('kode_departemen' => $kode_departemen));
	}

	public static function hapus_departemen($kode_departemen) {
		return Departemen::where('kode_departemen', '=', $kode_departemen)->delete();
	}
}