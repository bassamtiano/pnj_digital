<?php

	class ViewPenelitianDosen extends Eloquent {

		protected $table = 'view_admin_prodi_dosen_penelitian';
		protected $guarded = array('nik');

		public static function view_admin_prodi_dosen_penelitian($nik) {
			return ViewPenelitianDosen::where('nik', '=', $nik)->get(array('nik', 'nama', 'judul_penelitian', 'tanggal_penelitian'));
		}

	}