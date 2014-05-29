<?php

	class ViewDosen extends Eloquent {

		protected $table = 'view_dosen';
		protected $guarded = array('nik', 'nim');


	}