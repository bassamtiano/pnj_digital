<?php

	class RuangKelas extends Eloquent {
		protected $table = "tbl_ruang_kelas";
		protected $guarded = array('id_ruang_kelas');
		protected $fillable = array('id_ruang_kelas','nama_ruang_kelas','jenis_ruang_kelas','id_inventaris');

		public static function tambah_ruang_kelas($id_ruang_kelas, $nama_ruang_kelas , $jenis_ruang_kelas, $id_inventaris){
			return RuangKelas::create(array('nama_ruang_kelas'=>$nama_ruang_kelas, 'jenis_ruang_kelas'=>$jenis_ruang_kelas,'id_inventaris'=>$id_inventaris));

		}

		public static function ubah_ruang_kelas($id_ruang_kelas, $nama_ruang_kelas , $jenis_ruang_kelas, $id_inventaris){
			return RuangKelas::where('id_ruang_kelas','=', $id_ruang_kelas)->update(array('nama_ruang_kelas'=>$nama_ruang_kelas, 'jenis_ruang_kelas'=>$jenis_ruang_kelas, 'id_inventaris'=>$id_inventaris));
		}

		public static function hapus_ruang_kelas($id_ruang_kelas) {
			return RuangKelas::where('id_ruang_kelas', '=', $id_ruang_kelas)->delete();
		}

	}