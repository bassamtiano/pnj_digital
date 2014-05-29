<?php

class Penggajian extends Eloquent {
	// Abdul Fachmi
	protected $table = "tbl_penggajian";
	protected $guarded = array('id_penggajian');
	protected $fillable = array('no_slip', 'tanggal_gaji', 'nik', 'absen', 'gaji_pokok', 'tunjangan_pemerintah', 
		'tunjangan_jabatan', 'honor', 'gaji_bersih', 'keterangan');


	public static function tambah_penggajian($no_slip, $tanggal_gaji, $nik, $absen, $gaji_pokok, 
		$tunjangan_pemerintah, $tunjangan_jabatan, $honor, $gaji_bersih, $keterangan) {
		
		return Penggajian::create(array('no_slip' => $no_slip, 'tanggal_gaji' => $tanggal_gaji, 
			'nik' => $nik, 'absen' => $absen, 'gaji_pokok' => $gaji_pokok, 'tunjangan_pemerintah' => $tunjangan_pemerintah, 
			'tunjangan_jabatan' => $tunjangan_jabatan, 'honor' => $honor, 'gaji_bersih' => $gaji_bersih, 'keterangan' => $keterangan));
	}

	public static function ubah_penggajian($id_penggajian, $no_slip, $tanggal_gaji, $nik, $absen, $gaji_pokok, 
		$tunjangan_pemerintah, $tunjangan_jabatan, $honor, $gaji_bersih, $keterangan) {

		return Penggajian::where('id_penggajian', '=', $id_penggajian)->update(array('id_penggajian' => $id_penggajian, 'no_slip' => $no_slip, 'tanggal_gaji' => $tanggal_gaji, 
			'nik' => $nik, 'absen' => $absen, 'gaji_pokok' => $gaji_pokok, 'tunjangan_pemerintah' => $tunjangan_pemerintah, 
			'tunjangan_jabatan' => $tunjangan_jabatan, 'honor' => $honor, 'gaji_bersih' => $gaji_bersih, 'keterangan' => $keterangan));
	}

	public static function hapus_penggajian($id_penggajian) {
		return Penggajian::where('id_gpenggajian' , '=', $id_penggajian)->delete();
	}
}