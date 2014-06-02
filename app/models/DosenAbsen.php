<?php

	class DosenAbsen extends Eloquent {
		protected $table = 'tbl_dosen_absen';

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

		public static function ubah_absensi_dosen($id_dosen_absen, $status) {
			DosenAbsen::where('id_dosen_absen', '=', $id_dosen_absen)->update(array('status' => $status));
		}
	}