<?php

	class DosenPenelitian extends Eloquent {
		// Abdul Fachmi		
		protected $table = 'tbl_dosen_penelitian';
		protected $guarded = array('id_dosen_penelitian', 'id_dosen');
		protected $fillable = array('judul_penelitian', 'id_dosen', 'tanggal_penelitian', 'attachment', 'status_share');

		public static function tambah_penelitian($judul_penelitian, $id_dosen, $tanggal_penelitian, $attachment, $status_share){
			return DosenPenelitian::create(array('judul_penelitian' => $judul_penelitian, 'id_dosen' => $id_dosen,'tanggal_penelitian' => $tanggal_penelitian, 'attachment' => $attachment, 'status_share' => $status_share));	
		}

		public static function ubah_penelitian($id_dosen_penelitian, $judul_penelitian, $id_dosen, $tanggal_penelitian, $attachment, $status_share) {
			return DosenPenelitian::where('id_dosen_penelitian', '=', $id_dosen_penelitian)->update(array('id_dosen_penelitian' => $id_dosen_penelitian, 'judul_penelitian' => $judul_penelitian, 'id_dosen' => $id_dosen, 'tanggal_penelitian' => $tanggal_penelitian, 'attachment' => $attachment, 'status_share' => $status_share));
		}

		public static function hapus_penelitian($id_dosen_penelitian) {
			return DosenPenelitian::where('id_dosen_penelitian', '=', $id_dosen_penelitian)->delete();
		}
	}
