<?php

	class MahasiswaPermohonan extends Eloquent {

		protected $table = 'tbl_mahasiswa_permohonan';
		protected $guarded = array('id_mahasiswa_permohonan');

		public static function permohonan_tambah($id_permohonan, $id_mahasiswa, $tanggal_pengajuan, $keterangan, $status) {
			MahasiswaPermohonan::create(array('id_permohonan' => $id_permohonan, 'id_mahasiswa' => $id_mahasiswa, 'tanggal_pengajuan' => $tanggal_pengajuan, 'keterangan' => $keterangan, 'status' => $status));
		}

		public static function permohonan_ubah($id_mahasiswa_permohonan, $id_permohonan, $id_mahasiswa, $tanggal_pengajuan, $keterangan, $status) {
			MahasiswaPermohonan::where('id_mahasiswa_permohonan', '=', $id_mahasiswa_permohonan)->update(array('id_permohonan' => $id_permohonan, 'id_mahasiswa' => $id_mahasiswa, 'tanggal_pengajuan' => $tanggal_pengajuan, 'keterangan' => $keterangan, 'status' => $status));
		}

		public static function permohonan_hapus($id_mahasiswa_permohonan) {
			MahasiswaPermohonan::where('id_mahasiswa_permohonan', '=', $id_mahasiswa_permohonan)->delete();
		}

	}