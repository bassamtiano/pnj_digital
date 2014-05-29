<?php

	class Jurusan extends Eloquent {
		
		protected $table = "tbl_jurusan";
		protected $guarded = array('no');
		protected $fillable = array('nama_jurusan','kepala_jurusan','jumlah_prodi','akreditasi','keterangan');

		public static function tambah_jurusan($nama_jurusan,$kepala_jurusan,$jumlah_prodi,$akreditasi,$keterangan) {
			return Jurusan::create(array('nama_jurusan' => $nama_jurusan, 'kepala_jurusan' => $kepala_jurusan, 'jumlah_prodi' => $jumlah_prodi,'akreditasi' => $akreditasi, 'keterangan' => $keterangan));
		}

		public static function ubah_jurusan($id_jurusan, $jurusan) {
			return Jurusan::where('id_jurusan', '=', $id_jurusan)->update(array('jurusan' => $jurusan));
		}

		public static function hapus_jurusan($id_jurusan) {
			return Jurusan::where('id_jurusan', '=', $id_jurusan)->delete();
		}
	}
