<?php
	class AdminProdiPengabdianDosen extends Eloquent {
			
	protected $table = 'tbl_dosen_pengabdian';
	protected $guarded = array('id_dosen','id_dosen_pengabdian');
	protected $fillable = array('id_dosen', 'nama_pengabdian', 'tgl_mulai', 'tgl_selesai', 'tempat', 'keterangan', 'nilai');

	public static function admin_prodi_tambah_pengabdian_dosen($id_dosen, $nama_pengabdian, $tgl_mulai, $tgl_selesai, $tempat, $keterangan, $nilai){
		return AdminProdiPengabdianDosen::create(array('id_dosen' => $id_dosen, 'nama_pengabdian' => $nama_pengabdian, 'tgl_mulai' => $tgl_mulai, 'tgl_selesai' => $tgl_selesai, 'keterangan' => $keterangan,'tempat'=> $tempat, 'nilai'=> $nilai));
	}

	public static function admin_prodi_hapus_pengabdian_dosen($id_dosen_pengabdian) {
	return AdminProdiPengabdianDosen::where('id_dosen_pengabdian', '=', $id_dosen_pengabdian)->delete();
	}

	public static function admin_prodi_ubah_pengabdian_dosen($id_dosen_pengabdian,$id_dosen, $nama_pengabdian, $tgl_mulai, $tgl_selesai, $tempat, $keterangan, $nilai){
	return DosenPengabdian::where('id_dosen_pengabdian', '=', $id_dosen_pengabdian)->update(array('id_dosen_pengabdian' => $id_dosen_pengabdian, 'id_dosen' => $id_dosen, 'nama_pengabdian' => $nama_pengabdian, 'tgl_mulai' => $tgl_mulai, 'tgl_selesai' => $tgl_selesai, 'tempat' => $tempat, 'keterangan' => $keterangan, 'nilai' => $nilai));
	}


	}