<?php

	class Inventaris extends Eloquent {

		protected $table = 'tbl_inventaris';
		protected $guarded = array('kode_inventaris');
		protected $fillable = array('kode_inventaris', 'nama_inventaris', 'kondisi_inventaris', 'tahun_anggaran_inventaris', 'id_inventaris_pemilik');

		public function getAuthIdentifier() {
			return $this->getKey();
		}


/* ================================================================================
|	
|	Relation
|	V0.1
|
================================================================================ */ 
		public static function tambah_inventaris($kode_inventaris, $nama_inventaris, $kondisi_inventaris, $tahun_anggaran_inventaris, $id_inventaris_pemilik) {
			return Inventaris::create(array('kode_inventaris' => $kode_inventaris, 'nama_inventaris' => $nama_inventaris, 'kondisi_inventaris' => $kondisi_inventaris, 'tahun_anggaran_inventaris' => $tahun_anggaran_inventaris, 'id_inventaris_pemilik' => $id_inventaris_pemilik));
		}

		public static function ubah_inventaris($id_inventaris, $kode_inventaris, $nama_inventaris, $kondisi_inventaris, $tahun_anggaran_inventaris, $id_inventaris_pemilik) {
			return Inventaris::where('id_inventaris', '=', $id_inventaris)->update(array('kode_inventaris' => $kode_inventaris, 'nama_inventaris' => $nama_inventaris, 'kondisi_inventaris' => $kondisi_inventaris, 'tahun_anggaran_inventaris' => $tahun_anggaran_inventaris, 'id_inventaris_pemilik' => $id_inventaris_pemilik));
		}

		public static function hapus_inventaris($id_inventaris)	{
			return Inventaris::where('id_inventaris', '=', $id_inventaris)->delete();
		}
/* ================================================================================
|	
|	Read Process Handler
|	V0.1
|
================================================================================ */ 

/* ================================================================================
|	
|	Create, Update, Delete Handler
|	V0.1
|
================================================================================ */ 

/* ================================================================================
|	
|	Special for actor Mahasiswa
|	V0.1
|
================================================================================ */ 


}