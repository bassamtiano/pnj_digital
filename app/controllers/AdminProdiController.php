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

 		public function admin_prodi_modal_tambah_absen_dosen() {
 			return View::make('admin_prodi.modals.admin_prodi_modal_tambah_absen_dosen');
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


 		public function admin_prodi_modal_tambah_absen_mahasiswa() {
 			return View::make('admin_prodi.modals.admin_prodi_modal_tambah_absen_mahasiswa');
 		}

 		public function admin_prodi_modal_ubah_status_hadir_mahasiswa() {
 			$id_mahasiswa_absen = Input::get('id_mahasiswa_absen');
 			$nama = Input::get('nama');
 			$timeslot = TimeSlot::get(array('id_timeslot', 'waktu'));

 			return View::make('admin_prodi.modals.admin_prodi_modal_ubah_status_hadir_mahasiswa', compact('id_mahasiswa_absen', 'nama', 'timeslot'));
 		}


		public function admin_prodi_moodal_ubah_status_absen_mahasiswa() {
			$id_mahasiswa_absen = Input::get('id_mahasiswa_absen');
 			$nama = Input::get('nama');

			return View::make('admin_prodi.modals.admin_prodi_modal_ubah_status_absen_mahasiswa', compact('id_mahasiswa_absen', 'nama'));
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

		public function admin_prodi_baca_status_mahasiswa_absen_sekarang() {
			return AbsenMahasiswa::status_absen_sekarang();
		}

		public function admin_prodi_baca_status_dosen_absen_sekarang() {
			return DosenAbsen::status_dosen_absen_sekarang();
		}

		public function admin_prodi_baca_absen_mahasiswa() {

			$data_absen = array();
			$absen_mahasiswa =	DB::table('tbl_mahasiswa_absen')
								->join('tbl_mahasiswa', 'tbl_mahasiswa.nim', '=', 'tbl_mahasiswa_absen.nim')
								->join('tbl_kelas', 'tbl_kelas.id_kelas', '=', 'tbl_mahasiswa.id_kelas')
								->join('tbl_konsentrasi_prodi', 'tbl_konsentrasi_prodi.id_konsentrasi_prodi', '=', 'tbl_mahasiswa.id_konsentrasi_prodi')
								->get(array('tbl_mahasiswa_absen.id_mahasiswa_absen', 'tbl_mahasiswa_absen.tanggal', 'tbl_mahasiswa_absen.jam_mulai', 'tbl_mahasiswa_absen.jam_akhir', 'tbl_mahasiswa_absen.nim', 'tbl_mahasiswa.nama', 'tbl_kelas.nama_kelas', 'tbl_konsentrasi_prodi.konsentrasi_prodi', 'tbl_mahasiswa_absen.keterangan', 'tbl_mahasiswa_absen.status'));


			foreach ($absen_mahasiswa as $mab) {
			    $jam_mulai = $mab->jam_mulai;
			    $jam_akhir = $mab->jam_akhir;

			    foreach (TimeSlot::where('id_timeslot', '=', $jam_mulai)->get(array('waktu')) as $w_mulai) {
			    	$waktu_mulai = $w_mulai->waktu;
			    }

			    foreach (TimeSlot::where('id_timeslot', '=', $jam_akhir)->get(array('waktu')) as $w_akhir) {
			    	$waktu_akhir = $w_akhir->waktu;
			    }

			    $id_mahasiswa_absen = $mab->id_mahasiswa_absen;
			    $tanggal = $mab->tanggal;
			    $nim = $mab->nim;
			    $nama = $mab->nama;
			    $nama_kelas = $mab->nama_kelas;
			    $konsentrasi_prodi = $mab->konsentrasi_prodi;
			    $keterangan = $mab->keterangan;
			    $status = $mab->status;


			    $absen_m = array('id_mahasiswa_absen' => $id_mahasiswa_absen, 'tanggal' => $tanggal, 'jam_mulai' => $jam_mulai, 'waktu_mulai' => $waktu_mulai, 'jam_akhir' => $jam_akhir, 'waktu_akhir' => $waktu_akhir, 'nim' => $nim, 'nama' => $nama, 'nama_kelas' => $nama_kelas, 'konsentrasi_prodi' => $konsentrasi_prodi, 'keterangan' => $keterangan, 'status' => $status);
				array_push($data_absen, $absen_m);

			}

			return $data_absen;
			
		}

		public function admin_prodi_baca_absen_dosen() {
			$absen_dosen =		DB::table('tbl_dosen_absen')
								->join('tbl_dosen', 'tbl_dosen.id_dosen', '=', 'tbl_dosen_absen.id_dosen')
								->get(array('tbl_dosen_absen.id_dosen_absen', 'tbl_dosen_absen.id_dosen', 'tbl_dosen.nip', 'tbl_dosen.nama', 'tbl_dosen_absen.tanggal', 'tbl_dosen_absen.keterangan', 'tbl_dosen_absen.status'));

			return $absen_dosen;

		}

/* ----------------------------------------------------------------------------------------------------
|
|	Admin Program Studi Tambah
|	V1.0
|
 ---------------------------------------------------------------------------------------------------- */

		public function admin_prodi_tambah_absen_mahasiswa() {
			return AbsenMahasiswa::tambah_absen_mahasiswa();
		}

		public function admin_prodi_tambah_absen_dosen() {
			return DosenAbsen::tambah_absen_dosen();
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


		public function admin_prodi_ubah_hadir_mahasiswa() {
			$id_mahasiswa_absen = Input::get('id_mahasiswa_absen');
			$jam_mulai = Input::get('jam_mulai');
			$jam_akhir = Input::get('jam_akhir');
			$status = "1";
			AbsenMahasiswa::ubah_absen_mahasiswa($id_mahasiswa_absen, $jam_mulai, $jam_akhir, $status);
		}

		public function admin_prodi_ubah_absen_mahasiswa() {
			$id_mahasiswa_absen = Input::get('id_mahasiswa_absen');
			$jam_mulai = null;
			$jam_akhir = null;
			$status = "0";
			AbsenMahasiswa::ubah_absen_mahasiswa($id_mahasiswa_absen, $jam_mulai, $jam_akhir, $status);
		}

		public function admin_prodi_ubah_absensi_dosen() {
			$id_dosen_absen = Input::get('id_dosen_absen');
			$status = Input::get('status');

			DosenAbsen::ubah_absensi_dosen($id_dosen_absen, $status);
		}

	}