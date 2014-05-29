<?php

class AdminInventarisCivitas extends Eloquent {
	// Abdul Fachmi
	protected $table = 'tbl_adm_inventaris';
	protected $guarded = array('id_inventaris');
	protected $fillable = array('id_inventaris','kode_inventaris', 'nama_inventaris', 'kondisi_inventaris', 'tahun_anggaran_inventaris', 'pemilik_inventaris');

	public static function tambah_inventaris_civitas($kode_inventaris, $nama_inventaris, $kondisi_inventaris, $tahun_anggaran_inventaris, $pemilik_inventaris){
		return AdminInventarisCivitas::create(array('kode_inventaris' => $kode_inventaris, 'nama_inventaris' => $nama_inventaris, 'kondisi_inventaris' => $kondisi_inventaris, 'pemilik_inventaris' => $pemilik_inventaris));
	}
 	
	// public static function ubah_pengabdian($id_dosen_pengabdian, $id_dosen, $nama_pengabdian, $tgl_mulai, $tgl_selesai, $tempat, $keterangan, $nilai){
	// 	return DosenPengabdian::where('id_dosen_pengabdian', '=', $id_dosen_pengabdian)->update(array('id_dosen_pengabdian' => $id_dosen_pengabdian, 'id_dosen' => $id_dosen, 'nama_pengabdian' => $nama_pengabdian, 'tgl_mulai' => $tgl_mulai, 'tgl_selesai' => $tgl_selesai, 'tempat' => $tempat, 'keterangan' => $keterangan, 'nilai' => $nilai));
	// }

	public static function hapus_inventaris_civitas($id_inventaris) {
		return AdminInventarisCivitas::where('id_inventaris', '=', $id_inventaris)->delete();
	}
}
