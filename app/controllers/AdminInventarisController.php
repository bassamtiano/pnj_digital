<?php

	class AdminInventarisController extends BaseController {

/* ----------------------------------------------------------------------------------------------------
|
|	Admin Inventaris Modul Utama
|	V1.0
|
 ---------------------------------------------------------------------------------------------------- */

		public function admin_inventaris_dashboard() {
			return View::make('admin_inventaris.index');
		}

		public function admin_inventaris_beranda() {
			return View::make('admin_inventaris.moduls.admin_inventaris_beranda');	
		}

		public function admin_inventaris_data_inventaris_civitas() {
			return View::make('admin_inventaris.moduls.admin_inventaris_data_inventaris_civitas');	
		}

		public function admin_inventaris_data_inventaris_jurusan() {
			return View::make('admin_inventaris.moduls.admin_inventaris_data_inventaris_jurusan');
		}

		public function admin_inventaris_data_inventaris_gedung() {
			return View::make('admin_inventaris.moduls.admin_inventaris_data_inventaris_gedung');	
		}

		public function admin_inventaris_download() {
			return View::make('admin_inventaris.moduls.admin_inventaris_download');	
		}

/* ----------------------------------------------------------------------------------------------------
|
|	Admin Inventaris Modal
|	V1.0
|
 ---------------------------------------------------------------------------------------------------- */

		public function modal_tambah_inventaris_civitas() {
			return View::make('admin_inventaris.modals.admin_inventaris_modal_tambah_inventaris_civitas');
		}
		public function modal_tambah_inventaris_jurusan() {
			return View::make('admin_inventaris.modals.admin_inventaris_modal_tambah_inventaris_jurusan');
		}	

/* ----------------------------------------------------------------------------------------------------
|
|	Admin Inventaris Baca
|	V1.0
|
 ---------------------------------------------------------------------------------------------------- */
 		public function admin_inventaris_baca_inventaris_civitas() {
 			$id_inventaris = 1;

 			

 			return AdminInventarisCivitas::where('id_inventaris','=', $id_inventaris)->get();

 		}

/* ----------------------------------------------------------------------------------------------------
|
|	Admin Inventaris Tambah
|	V1.0
|
 ---------------------------------------------------------------------------------------------------- */

 		public function admin_inventaris_tambah_inventaris_civitas() {
 			$kode_inventaris = Input::get('kode_inventaris');
 			$nama_inventaris = Input::get('nama_inventaris');
 			$kondisi_inventaris = Input::get('kondisi_inventaris');
 			$tahun_anggaran_inventaris = Input::get('tahun_anggaran_inventaris');
 			$pemilik_inventaris = Input::get('pemilik_inventaris');

 			return AdminInventarisCivitas::tambah_inventaris_civitas($kode_inventaris, $nama_inventaris, $kondisi_inventaris, $tahun_anggaran_inventaris, $pemilik_inventaris);
 		}
/* ----------------------------------------------------------------------------------------------------
|
|	Admin Inventaris Ubah
|	V1.0
|
 ---------------------------------------------------------------------------------------------------- */

/* ----------------------------------------------------------------------------------------------------
|
|	Admin Inventaris Hapus
|	V1.0
|
 ---------------------------------------------------------------------------------------------------- */

/* ----------------------------------------------------------------------------------------------------
|
|	Admin Inventaris Database Handler
|	V1.0
|
 ---------------------------------------------------------------------------------------------------- */

	}