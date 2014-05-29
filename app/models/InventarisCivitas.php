<?php

	class InventarisCivitas extends Eloquent {

		protected $table = 'tbl_adm_inventaris';
		protected $guarded = array('kode_inventaris');
		protected $fillable = array('kode_inventaris', 'nama_inventaris', 'kondisi_inventaris', 'tahun_anggaran_inventaris', 'pemilik_inventaris');

		public function getAuthIdentifier() {
			return $this->getKey();
		}


/* ================================================================================
|	
|	Relation
|	V0.1
|
================================================================================ */ 
			
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