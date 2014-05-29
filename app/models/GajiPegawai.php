<?php

class GajiPegawai extends Eloquent {
	// Abdul Fachmi
	protected $table = "tbl_gaji_pegawai";
	protected $guarded = array('id_gaji_pegawai');
	protected $fillable = array('no_slip', 'tanggal_gaji', 'nik', 'absen', 'gaji_pokok', 'tunjangan_pemerintah', 
		'tunjangan_jabatan', 'honor', 'gaji_bersih', 'keterangan');


	public static function tambah_gaji_pegawai($no_slip, $tanggal_gaji, $nik, $absen, $gaji_pokok, 
		$tunjangan_pemerintah, $tunjangan_jabatan, $honor, $gaji_bersih, $keterangan) {
		
		return GajiPegawai::create(array('no_slip' => $no_slip, 'tanggal_gaji' => $tanggal_gaji, 
			'nik' => $nik, 'absen' => $absen, 'gaji_pokok' => $gaji_pokok, 'tunjangan_pemerintah' => $tunjangan_pemerintah, 
			'tunjangan_jabatan' => $tunjangan_jabatan, 'honor' => $honor, 'gaji_bersih' => $gaji_bersih, 'keterangan' => $keterangan));
	}

	public static function ubah_gaji_pegawai($id_gaji_pegawai, $no_slip, $tanggal_gaji, $nik, $absen, $gaji_pokok, 
		$tunjangan_pemerintah, $tunjangan_jabatan, $honor, $gaji_bersih, $keterangan) {

		return GajiPegawai::where('id_gaji_pegawai', '=', $id_gaji_pegawai)->update(array('id_gaji_pegawai' => $id_gaji_pegawai, 'no_slip' => $no_slip, 'tanggal_gaji' => $tanggal_gaji, 
			'nik' => $nik, 'absen' => $absen, 'gaji_pokok' => $gaji_pokok, 'tunjangan_pemerintah' => $tunjangan_pemerintah, 
			'tunjangan_jabatan' => $tunjangan_jabatan, 'honor' => $honor, 'gaji_bersih' => $gaji_bersih, 'keterangan' => $keterangan));
	}

	public static function hapus_gaji_pegawai($id_gaji_pegawai) {
		return GajiPegawai::where('id_gaji_pegawai' , '=', $id_gaji_pegawai)->delete();
	}
}