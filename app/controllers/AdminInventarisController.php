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

		public function admin_inventaris_data_inventaris() {
			return View::make('admin_inventaris.moduls.admin_inventaris_data_inventaris');	
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

 		public function admin_inventaris_modal_tambah_inventaris() {

 			$data_inventaris_pemilik = InventarisPemilik::all();
 			return View::make('admin_inventaris.modals.admin_inventaris_modal_tambah_inventaris', compact('data_inventaris_pemilik'));
 		}

 		public function admin_inventaris_modal_ubah_inventaris() {

 			$id_inventaris = Input::get('id_inventaris');
 			$data_inventaris = Inventaris::where('id_inventaris', '=', $id_inventaris)->get(array('id_inventaris', 'kode_inventaris', 'nama_inventaris', 'kondisi_inventaris', 'tahun_anggaran_inventaris', 'id_inventaris_pemilik'));
 			$data_inventaris_pemilik = InventarisPemilik::all();

 			return View::make('admin_inventaris.modals.admin_inventaris_modal_ubah_inventaris', compact('data_inventaris', 'data_inventaris_pemilik'));
 		}

 		public function admin_inventaris_modal_hapus_inventaris() {
 			$id_inventaris = Input::get('id_inventaris');
 			$nama_inventaris = Input::get('nama_inventaris');
			return View::make('admin_inventaris.modals.admin_inventaris_modal_hapus_inventaris', compact('id_inventaris', 'nama_inventaris'));
 		}

/* ----------------------------------------------------------------------------------------------------
|
|	Admin Inventaris Baca
|	V1.0
|
 ---------------------------------------------------------------------------------------------------- */
 		public function admin_inventaris_baca_inventaris() {
 			
 			// return AdminInventarisCivitas::where('id_inventaris','=', $id_inventaris)->get();

 			$data_inventaris = 	DB::table('tbl_inventaris')
 								->join('tbl_inventaris_pemilik', 'tbl_inventaris_pemilik.id_inventaris_pemilik', '=', 'tbl_inventaris.id_inventaris_pemilik')
 								->get(array('tbl_inventaris.id_inventaris', 'tbl_inventaris.kode_inventaris', 'tbl_inventaris.nama_inventaris', 'tbl_inventaris.kondisi_inventaris', 'tbl_inventaris.tahun_anggaran_inventaris', 'tbl_inventaris.id_inventaris_pemilik', 'tbl_inventaris_pemilik.pemilik'));

 			return $data_inventaris;

 		}

/* ----------------------------------------------------------------------------------------------------
|
|	Admin Inventaris Tambah
|	V1.0
|
 ---------------------------------------------------------------------------------------------------- */

 		public function admin_inventaris_tambah_inventaris() {
 			$kode_inventaris = Input::get('kode_inventaris');
 			$nama_inventaris = Input::get('nama_inventaris');
 			$kondisi_inventaris = Input::get('kondisi_inventaris');
 			$tahun_anggaran_inventaris = Input::get('tahun_anggaran_inventaris');
 			$id_inventaris_pemilik = Input::get('id_inventaris_pemilik');

 			return Inventaris::tambah_inventaris($kode_inventaris, $nama_inventaris, $kondisi_inventaris, $tahun_anggaran_inventaris, $id_inventaris_pemilik);
 		}
/* ----------------------------------------------------------------------------------------------------
|
|	Admin Inventaris Ubah
|	V1.0
|
 ---------------------------------------------------------------------------------------------------- */

 	public function admin_inventaris_ubah_inventaris() {
 		$id_inventaris = Input::get('id_inventaris');
 		$kode_inventaris = Input::get('kode_inventaris');
		$nama_inventaris = Input::get('nama_inventaris');
		$kondisi_inventaris = Input::get('kondisi_inventaris');
		$tahun_anggaran_inventaris = Input::get('tahun_anggaran_inventaris');
		$id_inventaris_pemilik = Input::get('id_inventaris_pemilik');

		return Inventaris::ubah_inventaris($id_inventaris, $kode_inventaris, $nama_inventaris, $kondisi_inventaris, $tahun_anggaran_inventaris, $id_inventaris_pemilik);


 	}

/* ----------------------------------------------------------------------------------------------------
|
|	Admin Inventaris Hapus
|	V1.0
|
 ---------------------------------------------------------------------------------------------------- */

 	public function admin_inventaris_hapus_inventaris() {

 		$id_inventaris = Input::get('id_inventaris');
 		return Inventaris::hapus_inventaris($id_inventaris);

 	}

/* ----------------------------------------------------------------------------------------------------
|
|	Admin Inventaris Database Handler
|	V1.0
|
 ---------------------------------------------------------------------------------------------------- */

}