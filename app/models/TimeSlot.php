<?php

	class TimeSlot extends Eloquent {
		protected $table = "tbl_timeslot";
		protected $guarded = array('id_timeslot');
		protected $fillable = array('hari','watku');

		public static function tambah_timeslot($hari , $waktu){

			return TimeSlot::create(array('hari'=>$hari, 'waktu'=>$waktu));

		}

		public static function ubah_timeslot($id_timeslot, $hari , $waktu){

			return TimeSlot::where('id_timeslot','=', $id_timeslot)->update(array('hari'=>$hari, 'waktu'=>$waktu));

		}

		public static function hapus_timeslot($id_timeslot) {
			return TimeSlot::where('id_timeslot', '=', $id_timeslot)->delete();
		}

	}