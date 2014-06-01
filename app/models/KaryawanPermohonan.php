<?php

	class KaryawanPermohonan extends Eloquent {

		protected $table = 'tbl_karyawan_permohonan';
		protected $guarded = array('id_karyawan_permohonan');
		protected $fillable = array('id_permohonan', 'id_karyawan', 'tanggal_pengajuan', 'keterangan', 'status');

		public static function tambah_permohonan_karyawan($id_permohonan, $id_karyawan, $tanggal_pengajuan, $keterangan, $status) {
			return KaryawanPermohonan::create(array('id_permohonan' => $id_permohonan, 'id_karyawan' => $id_karyawan, 'tanggal_pengajuan' => $tanggal_pengajuan, 'keterangan' => $keterangan, 'status' => $status));
		}

		public static function ubah_status_permohonan_karyawan($id_karyawan_permohonan, $status) {

			return KaryawanPermohonan::where('id_karyawan_permohonan', '=', $id_karyawan_permohonan)->update(array('status' => $status));
		}



	}