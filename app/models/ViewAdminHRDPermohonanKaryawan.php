<?php

	class ViewAdminHRDPermohonanKaryawan extends Eloquent {

			protected $table = 'view_permohonan_karyawan';
			protected $guarded = array('id_karyawan');

			public static function admin_hrd_permohonan_karyawan($id_karyawan) {
				return ViewAdminHRDPermohonanKaryawan::where('id_karyawan', '=', $id_karyawan)->get(array('id_karyawan', 'nama',  'jabatan', 'keterangan', 'status'));
			}

		}