<?php

	class AdminProdiPenelitianDosen extends Eloquent {
			
		protected $table = 'tbl_dosen_penelitian';
		protected $guarded = array('id_dosen_penelitian', 'id_dosen');
		protected $fillable = array('id_dosen', 'judul_penelitian', 'tanggal_penelitian', 'attachment', 'status_share');

		public static function tambah_penelitian_dosen($id_dosen, $judul_penelitian, $tanggal_penelitian, $attachment, $status_share){
			return AdminProdiPenelitianDosen::create(array('id_dosen' => $id_dosen, 'judul_penelitian' => $judul_penelitian, 'tanggal_penelitian' => $tanggal_penelitian, 'attachment' => $attachment, 'status_share' => $status_share));	
		}

		// public static function ubah_penelitian_dosen($id_dosen_penelitian, $id_dosen, $judul_penelitian, $tanggal_penelitian, $attachment, $status_share) {
		// 	return AdminProdiPenelitianDosen::where('id_dosen_penelitian', '=', $id_dosen_penelitian)->update(array('id_dosen_penelitian' => $id_dosen_penelitian, 'id_dosen' => $id_dosen, 'judul_penelitian' => $judul_penelitian, 'tanggal_penelitian' => $tanggal_penelitian, 'attachment' => $attachment, 'status_share' => $status_share));
		// } 

		public static function ubah_penelitian_dosen($id_dosen_penelitian, $judul_penelitian, $id_dosen, $tanggal_penelitian, $attachment, $status_share) {
			return AdminProdiPenelitianDosen::where('id_dosen_penelitian', '=', $id_dosen_penelitian)->update(array('id_dosen_penelitian' => $id_dosen_penelitian, 'id_dosen' => $id_dosen, 'judul_penelitian' => $judul_penelitian, 'tanggal_penelitian' => $tanggal_penelitian, 'attachment' => $attachment, 'status_share' => $status_share));
		}

		public static function hapus_penelitian_dosen($id_dosen_penelitian) {
			return AdminProdiPenelitianDosen::where('id_dosen_penelitian', '=', $id_dosen_penelitian)->delete();
		}

		public static function dosen_penelitian_baca_detail($id_dosen_penelitian) {
			return AdminProdiPenelitianDosen::where('id_dosen_penelitian', '=', $id_dosen_penelitian)->get(array('id_dosen_penelitian', 'judul_penelitian', 'id_dosen', 'tanggal_penelitian', 'attachment', 'status_share'));
		}
	}