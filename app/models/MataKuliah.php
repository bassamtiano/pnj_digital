<?php

	class MataKuliah extends Eloquent {
		protected $table = "tbl_mata_kuliah";
		protected $guarded = array('id_mata_kuliah');
		protected $fillable = array('mata_kuliah','id_konsentrasi_prodi','sks','semester','jumlah_jam','silabus','kelompok');
	
		public static function tambah_mata_kuliah($mata_kuliah , $id_konsentrasi_prodi, $sks, $semester, $jumlah_jam, $silabus, $kelompok){

			return MataKuliah::create(array('mata_kuliah'=>$mata_kuliah, 'id_konsentrasi_prodi'=>$id_konsentrasi_prodi, 'sks'=>$sks, 'semester'=>$semester, 'jumlah_jam'=>$jumlah_jam, 'silabus'=>$silabus, 'kelompok'=>$kelompok));

		}

		public static function ubah_mata_kuliah($id_mata_kuliah, $mata_kuliah , $id_konsentrasi_prodi, $sks, $semester, $jumlah_jam, $silabus, $kelompok){

			return MataKuliah::where('id_mata_kuliah','=', $id_mata_kuliah)->update(array('mata_kuliah'=>$mata_kuliah, 'id_konsentrasi_prodi'=>$id_konsentrasi_prodi, 'sks'=>$sks, 'semester'=>$semester, 'jumlah_jam'=>$jumlah_jam, 'silabus'=>$silabus, 'kelompok'=>$kelompok));

		}

		public static function hapus_mata_kuliah($id_mata_kuliah) {
			return MataKuliah::where('id_mata_kuliah', '=', $id_mata_kuliah)->delete();
		}

	}