<?php

	class JalurMasuk extends Eloquent {

		protected $table = "tbl_jalur_masuk";
		protected $fillable = array('jalur_masuk');
		protected $hidden = array('id_jalur_masuk');

	}