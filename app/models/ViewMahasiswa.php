<?php

	class ViewMahasiswa extends Eloquent {

		protected $table = 'view_mahasiswa';
		protected $guarded = array('nim');

		public static function view_mahasiswa_ringkas($nim) {
			return ViewMahasiswa::where('nim', '=', $nim)->get(array('nim', 'nama'));
		}

	}