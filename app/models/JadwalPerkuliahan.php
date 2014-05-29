<?php

	class JadwalPerkuliahan extends Eloquent {
		protected $table = "tbl_jadwal_perkuliahan";
		protected $guarded = array('id_jadwal_perkuliahan');
		protected $fillable = array('id_matkul_dosen_kelas','id_timeslot','id_ruang_kelas');

		public static function tambah_jadwal_perkuliahan($id_matkul_dosen_kelas , $id_timeslot, $id_ruang_kelas){

			return JadwalPerkuliahan::create(array('id_matkul_dosen_kelas'=>$id_matkul_dosen_kelas, 'id_timeslot'=>$id_timeslot,'id_ruang_kelas'=>$id_ruang_kelas));

		}

		public static function ubah_jadwal_perkuliahan($id_jadwal_perkuliahan, $id_matkul_dosen_kelas , $id_timeslot, $id_ruang_kelas){

			return JadwalPerkuliahan::where('id_jadwal_perkuliahan','=', $id_jadwal_perkuliahan)->update(array('id_matkul_dosen_kelas'=>$id_matkul_dosen_kelas, 'id_timeslot'=>$id_timeslot, 'id_ruang_kelas'=>$id_ruang_kelas));

		}

		public static function hapus_jadwal_perkuliahan($id_jadwal_perkuliahan) {
			return JadwalPerkuliahan::where('id_jadwal_perkuliahan', '=', $id_jadwal_perkuliahan)->delete();
		}

	}