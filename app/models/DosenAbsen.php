<?php

	class DosenAbsen extends Eloquent {
		protected $table = 'tbl_dosen_absen';

		protected $fillable = array('id_dosen', 'tanggal', 'keterangan', 'status');

		public static function status_dosen_absen_sekarang() {
			$tanggal = date('Y-m-d');
			$data_dosen = DosenAbsen::where('tanggal', '=', $tanggal)->get(array('id_dosen'))->first();

			if(empty($data_dosen)) {
				return array('status' => 1);
			}

			else {
				return array('status' => 0);
			}
		}

		public static function tambah_absen_dosen() {
			
			$id_jurusan = 1;

			foreach (Dosen::where('id_jurusan', '=', $id_jurusan)->get(array('id_dosen')) as $dd) {
				DosenAbsen::create(array('id_dosen' => $dd->id_dosen, 'tanggal' => date('Y-m-d'), 'keterangan' => null, 'status' => 0));
			}

			return $dd->id_dosen;
		}

		public static function ubah_absensi_dosen($id_dosen_absen, $status) {
			DosenAbsen::where('id_dosen_absen', '=', $id_dosen_absen)->update(array('status' => $status));
		}
	}