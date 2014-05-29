<?php

	class KaryawanController extends BaseController {

		public function karyawan_dashboard() {
			return View::make('karyawan.index');
		}

		public function karyawan_beranda() {
			return View::make('karyawan.moduls.karyawan_beranda');
		}

		public function karyawan_profil() {
			return View::make('karyawan.moduls.karyawan_profil');
		}

		public function karyawan_absensi() {
			return View::make('karyawan.moduls.karyawan_absensi');
		}

		public function karyawan_slip_gaji() {
			return View::make('karyawan.moduls.karyawan_slip_gaji');
		}

		public function karyawan_permohonan() {
			return View::make('karyawan.moduls.karyawan_permohonan');
		}

		public function karyawan_form_permohonan_resign() {
			return View::make('karyawan.moduls.karyawan_form_permohonan_resign');
		}

		public function karyawan_form_permohonan_cuti() {
			return View::make('karyawan.moduls.karyawan_form_permohonan_cuti');
		}

		public function karyawan_form_permohonan_kas_bon() {
			return View::make('karyawan.moduls.karyawan_form_permohonan_kas_bon');
		}

		public function karyawan_form_permohonan_lainnya() {
			return View::make('karyawan.moduls.karyawan_form_permohonan_lainnya');
		}

		public function karyawan_download() {
			return View::make('karyawan.moduls.karyawan_download');
		}

/* ----------------------------------------------------------------------------------------------------
|
|	Karyawan Modal
|	V1.0
|
 ---------------------------------------------------------------------------------------------------- */

		public function karyawan_modal_tambah_permohonan() {

			$id_karyawan = Input::get('id_karyawan');
			$permohonan = Permohonan::all();
			return View::make('karyawan.modals.karyawan_modal_tambah_permohonan', compact('id_karyawan', 'permohonan'));
		}

/* ----------------------------------------------------------------------------------------------------
|
|	Karyawan Baca
|	V1.0
|
 ---------------------------------------------------------------------------------------------------- */

	 	public function karyawan_baca_permohonan() {
			
	 		$id_karyawan = "1";
	 		$permohonan = DB::table('tbl_karyawan_permohonan')
	 						->join('tbl_permohonan', 'tbl_karyawan_permohonan.id_permohonan', '=', 'tbl_permohonan.id_permohonan')
	 						->where('tbl_karyawan_permohonan.id_karyawan', '=', $id_karyawan)
	 						->get(array('tbl_karyawan_permohonan.id_karyawan_permohonan', 'tbl_permohonan.permohonan', 'tbl_karyawan_permohonan.tanggal_pengajuan', 'tbl_karyawan_permohonan.keterangan', 'tbl_karyawan_permohonan.status'));

	 		return $permohonan;
	 	}


 /* ----------------------------------------------------------------------------------------------------
|
|	Karyawan Tambah
|	V1.0
|
 ---------------------------------------------------------------------------------------------------- */
 		public function karyawan_tambah_permohonan() {

 			$id_karyawan = "1";
 			$id_permohonan = Input::get('id_permohonan');
 			$tanggal_pengajuan = "1993-10-10";
 			$keterangan = Input::get('keterangan');
			$status = null;

 			return KaryawanPermohonan::tambah_permohonan_karyawan($id_karyawan, $id_permohonan, $tanggal_pengajuan, $keterangan, $status);

 		}

 /* ----------------------------------------------------------------------------------------------------
|
|	Karyawan Ubah
|	V1.0
|
 ---------------------------------------------------------------------------------------------------- */

 		public function karyawan_ubah_permohonan() {

 			$id_karyawan = "1";
 			$id_permohonan = Input::get('');
 			$tanggal_pengajuan = "";
 			$keterangan = "";
 			$status = null;

 			return KaryawanPermohonan::tambah_permohonan_karyawan($id_karyawan, $id_permohonan, $tanggal_pengajuan, $keterangan, $status);

 		}

/* ----------------------------------------------------------------------------------------------------
|
|	Karyawan Hapus
|	V1.0
|
 ---------------------------------------------------------------------------------------------------- */

	}