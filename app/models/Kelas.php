<?php

	class Kelas extends Eloquent {
		protected $table = "tbl_kelas";
		protected $guarded = array('id_kelas');
		protected $fillable = array('id_kelas','nama_kelas','jumlah_siswa');

		public static function tambah_kelas($nama_kelas , $jumlah_siswa){

			return Kelas::create(array('nama_kelas'=>$nama_kelas, 'jumlah_siswa'=>$jumlah_siswa));

		}

		public static function ubah_kelas($id_kelas, $nama_kelas , $jumlah_siswa){

			return Kelas::where('id_kelas','=', $id_kelas)->update(array('nama_kelas'=>$nama_kelas, 'jumlah_siswa' => $jumlah_siswa));

		}

		public static function hapus_kelas($nik) {
			return Kelas::where('id_kelas', '=', $id_kelas)->delete();
		}

	}