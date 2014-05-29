<?php

	class KonsentrasiProdi extends Eloquent {
		
		protected $table = "tbl_konsentrasi_prodi";
		protected $guarded = array('id_konsentrasi_prodi');
		protected $fillable = array('konsentrasi_prodi', 'id_jurusan');

		public function mahasiswa() {
			return $this->hasMany('Mahasiswa');
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

		public static function tambah_konsentrasi_prodi($konsentrasi_prodi, $id_jurusan) {
			return KonsentrasiProdi::create(array('konsentrasi_prodi' => $konsentrasi_prodi, 'id_jurusan' => $id_jurusan));
		}

		public static function ubah_konsentrasi_prodi($id_konsentrasi_prodi, $konsentrasi_prodi, $id_jurusan) {
			return KonsentrasiProdi::where('id_konsentrasi_prodi', '=', $id_konsentrasi_prodi)->update(array('konsentrasi_prodi' => $konsentrasi_prodi, 'id_jurusan' => $id_jurusan));
		}

		public static function hapus_konsentrasi_prodi($id_konsentrasi_prodi) {
			return KonsentrasiProdi::where('id_konsentrasi_prodi', '=', $id_konsentrasi_prodi)->delete();
		}
	}