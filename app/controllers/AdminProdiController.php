<?php

	class AdminProdiController extends BaseController {

		public function admin_prodi_dashboard() {
			return View::make('admin_prodi.index');
		}

		public function admin_prodi_beranda() {
			return View::make('admin_prodi.moduls.admin_prodi_beranda');
		}

		public function admin_prodi_karyawan() {
			return View::make('admin_prodi.moduls.admin_prodi_karyawan');
		}

		public function admin_prodi_mahasiswa() {
			return View::make('admin_prodi.moduls.admin_prodi_mahasiswa');
		}

		public function admin_prodi_absen_dosen() {
			return View::make('admin_prodi.moduls.admin_prodi_absen_dosen');
		}

		public function admin_prodi_absen_mahasiswa() {
			return View::make('admin_prodi.moduls.admin_prodi_absen_mahasiswa');
		}

		public function admin_prodi_download() {
			return View::make('admin_prodi.moduls.admin_prodi_download');
		}

		public function admin_prodi_penelitian() {
			return View::make('admin_prodi.moduls.admin_prodi_penelitian');
		}

		public function admin_prodi_pengabdian() {
			return View::make('admin_prodi.moduls.admin_prodi_pengabdian');
		}

		public function admin_prodi_kuisioner() {
			return View::make('admin_prodi.moduls.admin_prodi_kuisioner');
		}


/* ----------------------------------------------------------------------------------------------------
|
|	Admin Program Studi Modal
|	V1.0
|
 ---------------------------------------------------------------------------------------------------- */

 		public function admin_prodi_modal_mahasiswa() {

 		}

 		public function admin_prodi_modal_tambah_karyawan(){
 			return View::make('admin_prodi.modals.admin_prodi_modal_tambah_karyawan');
 		}

		public function admin_prodi_modal_detail_karyawan(){
 			return View::make('admin_prodi.modals.admin_prodi_modal_detail_karyawan');
 		} 

 		public function admin_prodi_modal_ubah_karyawan(){
 			return View::make('admin_prodi.modals.admin_prodi_modal_ubah_karyawan');
 		} 

 		public function admin_prodi_modal_hapus_karyawan(){
 			return View::make('admin_prodi.modals.admin_prodi_modal_hapus_karyawan');
 		} 

 		public function admin_prodi_modal_tambah_penelitian_dosen(){
 			$dosen = Dosen::get(array('id_dosen', 'nama'));
 			return View::make('admin_prodi.modals.admin_prodi_modal_tambah_penelitian_dosen', compact('dosen'));
 		} 			

 		public function admin_prodi_modal_detail_penelitian_dosen(){
 			$id_dosen_penelitian = Input::get('id_dosen_penelitian');

 			$detail_penelitian_dosen = AdminProdiPenelitianDosen::where('id_dosen_penelitian', '=', $id_dosen_penelitian)->get(array('id_dosen_penelitian', 'judul_penelitian', 'id_dosen', 'tanggal_penelitian', 'attachment', 'status_share'));
 			return View::make('admin_prodi.modals.admin_prodi_modal_detail_penelitian_dosen', compact('id_dosen_penelitian', 'detail_penelitian_dosen'));
 		} 		

 		public function admin_prodi_modal_ubah_penelitian_dosen(){

 			$id_dosen_penelitian = Input::get('id_dosen_penelitian');

			$admin_prodi_penelitian_dosen = AdminProdiPenelitianDosen::where('id_dosen_penelitian', '=', $id_dosen_penelitian)->get();

 			return View::make('admin_prodi.modals.admin_prodi_modal_ubah_penelitian_dosen', compact('id_dosen_penelitian', 'admin_prodi_penelitian_dosen'));
 		}

 		public function admin_prodi_modal_hapus_penelitian_dosen(){
 			$id_dosen_penelitian = Input::get('id_dosen_penelitian');
 			return View::make('admin_prodi.modals.admin_prodi_modal_hapus_penelitian_dosen', compact('id_dosen_penelitian'));
 		} 			

 		public function admin_prodi_modal_tambah_pengabdian_dosen(){
 			$dosen = Dosen::get(array('id_dosen', 'nama'));
 			return View::make('admin_prodi.modals.admin_prodi_modal_tambah_pengabdian_dosen', compact('dosen'));
 
 		} 		

 		public function admin_prodi_modal_detail_pengabdian_dosen(){
 			return View::make('admin_prodi.modals.admin_prodi_modal_detail_pengabdian_dosen');
 		}
 		
 		public function admin_prodi_modal_ubah_pengabdian_dosen(){
 			$dosen = Dosen::get(array('id_dosen', 'nama'));
 			$id_dosen_pengabdian = Input::get('id_dosen_pengabdian');
			$pengabdian_dosen = DosenPengabdian::where('id_dosen_pengabdian', '=', $id_dosen_pengabdian)->get();
 			return View::make('admin_prodi.modals.admin_prodi_modal_ubah_pengabdian_dosen');
 		}

 		public function admin_prodi_modal_hapus_pengabdian_dosen(){
 			$id_dosen_pengabdian = Input::get('id_dosen_pengabdian');
 			return View::make('admin_prodi.modals.admin_prodi_modal_hapus_pengabdian_dosen', compact('id_dosen_pengabdian'));
 		}



/* ----------------------------------------------------------------------------------------------------
|
|	Admin Program Studi Baca
|	V1.0
|
 ---------------------------------------------------------------------------------------------------- */


		public function admin_prodi_baca_mahasiswa() {
			return ViewMahasiswa::all();
		}

		public function admin_prodi_baca_pengabdian(){
			return ViewAdminProdiPengabdian::all();
		}

		public function admin_prodi_baca_penelitian_dosen() {
			return ViewPenelitianDosen::all();
		}
//======================= AME START=========================================//
		public function admin_prodi_tambah_pengabdian_dosen(){
			$id_dosen = Input::get('id_dosen');
			$nama_pengabdian = Input::get('nama_pengabdian');
			$tgl_mulai = Input::get('tgl_mulai');
			$tgl_selesai = Input::get('tgl_selesai');
			$tempat = Input::get('tempat');
			$keterangan = Input::get('keterangan');
			$nilai = Input::get('nilai');
			return AdminProdiPengabdianDosen::admin_prodi_tambah_pengabdian_dosen( $id_dosen, $nama_pengabdian, $tgl_mulai, $tgl_selesai, $tempat, $keterangan, $nilai);
		}

		public function admin_prodi_hapus_pengabdian_dosen(){
			$id_dosen_pengabdian = Input::get('id_dosen_pengabdian');			
			return AdminProdiPengabdianDosen::admin_prodi_hapus_pengabdian_dosen($id_dosen_pengabdian);
		}

		public function admin_prodi_ubah_pengabdian_dosen(){
			$id_dosen_pengabdian = Input::get('id_dosen_pengabdian');
			$id_dosen = Input::get('id_dosen');
			$nama_pengabdian = Input::get('nama_pengabdian');
			$tgl_mulai = Input::get('tgl_mulai');
			$tgl_selesai = Input::get('tgl_selesai');
			$tempat = Input::get('tempat');
			$keterangan = Input::get('keterangan');
			$nilai = Input::get('nilai');
			return AdminProdiPengabdianDosen::admin_prodi_ubah_pengabdian_dosen($id_dosen_pengabdian,$id_dosen, $nama_pengabdian, $tgl_mulai, $tgl_selesai, $tempat, $keterangan, $nilai);
		}

//====================== AME END ======================================//

//======================= AJI =========================================//
		
		//=================== Dosen Penelitian ==================//
		public function admin_prodi_tambah_penelitian_dosen(){
			$id_dosen = Input::get('id_dosen');
			$judul_penelitian = Input::get('judul_penelitian');
			$tanggal_penelitian = Input::get('tanggal_penelitian');
			$attachment = Input::get('attachment');
			$status_share = Input::get('status_share');

			return AdminProdiPenelitianDosen::tambah_penelitian_dosen($id_dosen, $judul_penelitian, $tanggal_penelitian, $attachment, $status_share);
		}


		public function admin_prodi_hapus_penelitian_dosen(){
			$id_dosen_penelitian = Input::get('id_dosen_penelitian');			
			return AdminProdiPenelitianDosen::hapus_penelitian_dosen($id_dosen_penelitian);
		}
		// public function dosen_tambah_penelitian(){
		// 	$id_dosen_penelitian = '1';
		// 	$judul_penelitian = 'adada';
		// 	$id_dosen = '1';
		// 	$nik = '1';
		// 	$tanggal_penelitian = '20120101';
		// 	$attachment = 'adada';
		// 	$status_share = 'adad';
		// 	return DosenPenelitian::tambah_penelitian($id_dosen_penelitian, $judul_penelitian, $id_dosen, $nik, $tanggal_penelitian, $attachment, $status_share);
		// }

		// public function dosen_ubah_penelitian(){
		// 	$id_dosen_penelitian = '1';
		// 	$judul_penelitian = 'sssss';
		// 	$id_dosen = '1';
		// 	$nik = '1';
		// 	$tanggal_penelitian = '20120101';
		// 	$attachment = 'adada';
		// 	$status_share = 'adad';
		// 	return DosenPenelitian::tambah_penelitian($id_dosen_penelitian, $judul_penelitian, $id_dosen, $nik, $tanggal_penelitian, $attachment, $status_share);
		// }

		// public function dosen_hapus_penelitian(){
		// 	$id_dosen_penelitian = '1';			
		// 	return DosenPenelitian::hapus_penelitian($id_dosen_penelitian);
		// }

		// //======================== Dosen Pengabdian ====================//
 	// 	public function dosen_tambah_pengabdian() {
		// 	$id_dosen_pengabdian = '1';
		// 	$id_dosen = '1';
		// 	$nik = '1111';
		// 	$nama_pengabdian = 'bejo';
		// 	$tgl_mulai = '20140420';
		// 	$tgl_selesai = '20140421';
		// 	$tempat = 'bogor';
		// 	$keterangan = 'apa ya ga tau nih';
		// 	$authority = 'ga tau juga';
		// 	return DosenPengabdian::tambah_pengabdian($id_dosen_pengabdian, $id_dosen, $nik, $nama_pengabdian, $tgl_mulai, $tgl_selesai, $tempat, $keterangan, $authority);			
		// }

		// public function dosen_ubah_pengabdian() {
		// 	$id_dosen_pengabdian = '1';
		// 	$id_dosen = '1';
		// 	$nik = '1111';
		// 	$nama_pengabdian = 'tono';
		// 	$tgl_mulai = '20140420';
		// 	$tgl_selesai = '20140421';
		// 	$tempat = 'bogor';
		// 	$keterangan = 'apa ya ga tau nih';
		// 	$authority = 'ga tau juga';
		// 	return DosenPengabdian::ubah_pengabdian($id_dosen_pengabdian, $id_dosen, $nik, $nama_pengabdian, $tgl_mulai, $tgl_selesai, $tempat, $keterangan, $authority);
		// }

		// public function dosen_hapus_pengabdian() {
		// 	$id_dosen_pengabdian = '1';
		// 	return DosenPengabdian::hapus_pengabdian($id_dosen_pengabdian);
		// }
//==================================================================//

	}