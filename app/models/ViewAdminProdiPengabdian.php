<?php

	class ViewAdminProdiPengabdian extends Eloquent {

		protected $table = 'admin_prodi_pengabdian_dosen';
		protected $guarded = array('nik');

		public static function admin_prodi_pengabdian_dosen($nik) {
			return ViewAdminProdiPengabdian::where('nik', '=', $nik)->get(array('nik', 'nama',  'nama_pengabdian', 'tgl_mulai', 'tgl_selesai', 'nilai'));
		}

	}