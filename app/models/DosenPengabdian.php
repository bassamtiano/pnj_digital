<?php

class DosenPengabdian extends Eloquent {
	// Abdul Fachmi
	protected $table = 'tbl_dosen_pengabdian';
	protected $guarded = array('id_dosen_pengabdian', 'id_dosen');
	protected $fillable = array('id_dosen', 'nama_pengabdian', 'tgl_mulai', 'tgl_selesai', 'tempat', 'keterangan', 'nilai');

	public static function tambah_pengabdian($id_dosen, $nama_pengabdian, $tgl_mulai, $tgl_selesai, $tempat, $keterangan, $nilai){
		return DosenPengabdian::create(array('id_dosen' => $id_dosen, 'nama_pengabdian' => $nama_pengabdian, 'tgl_mulai' => $tgl_mulai, 'tgl_selesai' => $tgl_selesai, 'tempat' => $tempat, 'keterangan' => $keterangan, 'nilai' => $nilai));
	}

	public static function ubah_pengabdian($id_dosen_pengabdian, $id_dosen, $nama_pengabdian, $tgl_mulai, $tgl_selesai, $tempat, $keterangan, $nilai){
		return DosenPengabdian::where('id_dosen_pengabdian', '=', $id_dosen_pengabdian)->update(array('id_dosen_pengabdian' => $id_dosen_pengabdian, 'id_dosen' => $id_dosen, 'nama_pengabdian' => $nama_pengabdian, 'tgl_mulai' => $tgl_mulai, 'tgl_selesai' => $tgl_selesai, 'tempat' => $tempat, 'keterangan' => $keterangan, 'nilai' => $nilai));
	}

	public static function hapus_pengabdian($id_dosen_pengabdian) {
		return DosenPengabdian::where('id_dosen_pengabdian', '=', $id_dosen_pengabdian)->delete();
	}
}

// <?php

// class DosenPengabdian extends Eloquent {
// 	// ABdul Fachmi
// 	protected $table = 'tbl_dosen_pengabdian';
// 	protected $guarded = array('id_dosen_pengabdian', 'id_dosen');
// 	protected $fillable = array('id_dosen', 'nik', 'nama_pengabdian', 'tgl_mulai', 'tgl_selesai', 'tempat', 'keterangan', 'nilai');

// 	public static function tambah_pengabdian($id_dosen, $nik, $nama_pengabdian, $tgl_mulai, $tgl_selesai, $tempat, $keterangan, $nilai){
// 		return DosenPengabdian::create(array('id_dosen' => $id_dosen, 'nik' => $nik, 'nama_pengabdian' => $nama_pengabdian, 'tgl_mulai' => $tgl_mulai, 'tgl_selesai' => $tgl_selesai, 'keterangan' => $keterangan, 'nilai' => $nilai));
// 	}

// 	public static function ubah_pengabdian($id_dosen_pengabdian, $id_dosen, $nik, $nama_pengabdian, $tgl_mulai, $tgl_selesai, $tempat, $keterangan, $nilai){
// 		return DosenPengabdian::where('id_dosen_pengabdian', '=', $id_dosen_pengabdian)->update(array('id_dosen_pengabdian' => $id_dosen_pengabdian, 'id_dosen' => $id_dosen, 'nik' => $nik, 'nama_pengabdian' => $nama_pengabdian, 'tgl_mulai' => $tgl_mulai, 'tgl_selesai' => $tgl_selesai, 'keterangan' => $keterangan, 'nilai' => $nilai));
// 	}

// 	public static function hapus_pengabdian($id_dosen_pengabdian) {
// 		return DosenPengabdian::where('id_dosen_pengabdian', '=', $id_dosen_pengabdian)->delete();
// 	}
// }