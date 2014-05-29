<?php

	class KeuanganController extends BaseController {

		public function keuangan_dashboard() {
			return View::make('keuangan.index');
		}

		public function keuangan_beranda() {
			return View::make('keuangan.moduls.keuangan_beranda');
		}

		public function keuangan_departemen_data_approval() {
			return View::make('keuangan.moduls.keuangan_departemen_data_approval');
		}

		public function keuangan_departemen_data_penggajian() {
			return View::make('keuangan.moduls.keuangan_departemen_data_penggajian');
		}

		public function keuangan_departemen_laporan_data_karyawan() {
			return View::make('keuangan.moduls.keuangan_departemen_laporan_data_karyawan');
		}

		public function keuangan_departemen_laporan_data_absensi() {
			return View::make('keuangan.moduls.keuangan_departemen_laporan_data_absensi');
		}

		public function keuangan_departemen_laporan_data_penggajian() {
			return View::make('keuangan.moduls.keuangan_departemen_laporan_data_penggajian');
		}

		public function keuangan_departemen_sipil() {
			return View::make('keuangan.moduls.keuangan_departemen_sipil');
		}

		public function keuangan_departemen_akuntansi() {
			return View::make('keuangan.moduls.keuangan_departemen_akuntansi');
		}

		public function keuangan_departemen_administrasi_niaga() {
			return View::make('keuangan.moduls.keuangan_departemen_administrasi_niaga');
		}

		public function keuangan_departemen_mesin() {
			return View::make('keuangan.moduls.keuangan_departemen_mesin');
		}

		public function keuangan_departemen_gedung_q() {
			return View::make('keuangan.moduls.keuangan_departemen_gedung_q');
		}

		public function keuangan_data_input_pemasukkan() {
			return View::make('keuangan.moduls.keuangan_data_input_pemasukkan');
		}
		
		public function keuangan_data_input_pengeluaran() {
			return View::make('keuangan.moduls.keuangan_data_input_pengeluaran');
		}

		public function keuangan_data_input_golongan_jabatan() {
			return View::make('keuangan.moduls.keuangan_data_input_golongan_jabatan');
		}

		public function keuangan_data_input_status() {
			return View::make('keuangan.moduls.keuangan_data_input_status');
		}

		public function keuangan_data_input_departemen() {
			return View::make('keuangan.moduls.keuangan_data_input_departemen');
		}

		public function keuangan_data_input_tunjangan_jabatan() {
			return View::make('keuangan.moduls.keuangan_data_input_tunjangan_jabatan');
		}

		public function keuangan_data_input_honor() {
			return View::make('keuangan.moduls.keuangan_data_input_honor');
		}

		public function keuangan_laporan_pemasukkan() {
			return View::make('keuangan.moduls.keuangan_laporan_pemasukkan');
		}

		public function keuangan_laporan_pengeluaran() {
			return View::make('keuangan.moduls.keuangan_laporan_pengeluaran');
		}

		public function keuangan_download() {
			return View::make('keuangan.moduls.keuangan_download');		
		}


/* --------------------------------------------------
|
|	Bagian Modal Karyawan
|
 --------------------------------------------------*/ 

 		public function keuangan_modal_detail_penggajian() {
 			return View::make('keuangan.modals.keuangan_modal_detail_penggajian');
 		}

/* --------------------------------------------------
|
|	Bagian Baca Karyawan
|
 --------------------------------------------------*/ 

 		public function keuangan_baca_penggajian() {
 			return Penggajian::all();
 		}

 		public function keuangan_baca_karyawan() {
 			return Karyawan::all();
 		}

 		public function keuangan_baca_absensi() {
 			return Absensi::all();
 		}


/* --------------------------------------------------
|
|	Bagian Tambah Karyawan
|
 --------------------------------------------------*/ 


/* --------------------------------------------------
|
|	Bagian Ubah Karyawan
|
 --------------------------------------------------*/ 


 /* --------------------------------------------------
|
|	Bagian Hapus Karyawan
|
 --------------------------------------------------*/ 


	}