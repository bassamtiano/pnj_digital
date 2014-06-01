<?php

	class KaryawanAbsensi extends Eloquent {

		protected $table = 'tbl_karyawan_absensi';
		protected $guarded = array('id_karyawan_absensi');


		public static function ubah_karyawan_absensi($id_karyawan_absensi, $status) {
			return KaryawanAbsensi::where('id_karyawan_absensi', '=', $id_karyawan_absensi)->update(array('status' => $status));
		}
	}