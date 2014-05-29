<?php

	class Golongan extends Eloquent {
		protected $table = "tbl_golongan";
		protected $guarded = array('id_golongan');
		protected $fillable = array('golongan','tunjangan_golongan','keterangan');
	

		public static function tambah_golongan($golongan , $tunjangan_golongan,$keterangan){
			return Golongan::create(array('golongan'=>$golongan, 'tunjangan_golongan'=>$tunjangan_golongan, 'keterangan'=>$keterangan));
		}

		public static function ubah_golongan($id_golongan, $golongan , $tunjangan_golongan,$keterangan){
			return Golongan::where('id_golongan','=', $id_golongan)->update(array('golongan'=>$golongan, 'tunjangan_golongan'=>$tunjangan_golongan, 'keterangan'=>$keterangan));

		}

		public static function hapus_golongan($id_golongan) {
			return Golongan::where('id_golongan', '=', $id_golongan)->delete();
		}

	}