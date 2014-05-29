<?php

class PegawaiHonor extends Eloquent {
	// Abdul Fachmi
	protected $table = 'tbl_pegawai_honor';
	protected $guarded = array('id_pegawai_honor');
	protected $fillable = array('nik', 'keterangan_honor', 'honor', 'tanggal_aktivitas');

	public static function tambah_pegawai_honor($nik, $keterangan_honor, $honor, $tanggal_aktivitas) {
		return PegawaiHonor::create(array('nik' => $nik, 'keterangan_honor' => $keterangan_honor, 'honor' => $honor, 'tanggal_aktivitas' => $tanggal_aktivitas));
	}

	public static function ubah_pegawai_honor($id_pegawai_honor, $nik, $keterangan_honor, $honor, $tanggal_aktivitas) {
		return PegawaiHonor::where('id_pegawai_honor', '=', $id_pegawai_honor)->update(array('id_pegawai_honor' => $id_pegawai_honor, 'nik' => $nik, 'keterangan_honor' => $keterangan_honor, 'honor' => $honor, 'tanggal_aktivitas' => $tanggal_aktivitas));
	}

	public static function hapus_pegawai_honor($id_pegawai_honor) {
		return PegawaiHonor::where('id_pegawai_honor')->delete();
	}
}