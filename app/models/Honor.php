<?php

class Honor extends Eloquent {

	protected $table = 'tbl_honor';
	protected $guarded = array('id_honor');
	protected $fillable = array('tanggal', 'nik', 'nama', 'departemen', 'golongan_jabatan', 'event', 'jabatan_event', 'keterangan', 'jumlah_honor');

	public static function tambah_honor($tanggal, $nik, $nama, $departemen, $golongan_jabatan, $event, $jabatan_event, $keterangan, $jumlah_honor) {
		return Honor::create(array('tanggal' => $tanggal, 'nik' => $nik, 'nama' => $nama, 'departemen' => $departemen, 'golongan_jabatan' => $golongan_jabatan, 'event' => $event, 'jabatan_event' => $jabatan_event, 'keterangan' => $keterangan, 'jumlah_honor' => $jumlah_honor));
	}

	public static function ubah_honor($tanggal, $nik, $nama, $departemen, $golongan_jabatan, $event, $jabatan_event, $keterangan, $jumlah_honor) {
		return Honor::where('id_honor', '=', $id_honor)->update(array('tanggal' => $tanggal, 'nik' => $nik, 'nama' => $nama, 'departemen' => $departemen, 'golongan_jabatan' => $golongan_jabatan, 'event' => $event, 'jabatan_event' => $jabatan_event, 'keterangan' => $keterangan, 'jumlah_honor' => $jumlah_honor));
	}

	public static function hapus_honor($id_honor) {
		return Honor::where('id_honor')->delete();
	}
}