<?php

	class TestNilai extends Eloquent {
		protected $table = "test_nilai";

		protected $guarded = array();

		public function getUasAtribute($value) {
			return (integer) $value;
		}

		
	}