<?php

	class Jurusan extends Eloquent {
		
		protected $table = "tbl_jurusan";
		protected $guarded = array('no');
		protected $fillable = array('jurusan','id_kepala_jurusan','akreditasi');

		public static function tambah_jurusan($jurusan,$id_kepala_jurusan,$akreditasi) {
			return Jurusan::create(array('jurusan' => $jurusan, 'id_kepala_jurusan' => $id_kepala_jurusan,'akreditasi' => $akreditasi));
		}

		public static function ubah_jurusan($id_jurusan, $jurusan, $id_kepala_jurusan, $akreditasi) {
			return Jurusan::where('id_jurusan', '=', $id_jurusan)->update(array('jurusan' => $jurusan, 'id_kepala_jurusan' => $id_kepala_jurusan,'akreditasi' => $akreditasi));

		}

		public static function hapus_jurusan($id_jurusan) {
			return Jurusan::where('id_jurusan', '=', $id_jurusan)->delete();
		}
	}
