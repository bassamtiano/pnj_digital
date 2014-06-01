<?php

	class AdminJurusanController extends BaseController {
		public function admin_jurusan_dashboard() {
			return View::make('admin_jurusan.index');
		}

		public function admin_jurusan_beranda() {
			return View::make('admin_jurusan.moduls.admin_jurusan_beranda');
		}

		public function admin_jurusan_data_jurusan() {
			return View::make('admin_jurusan.moduls.admin_jurusan_data_jurusan');
		}

		public function admin_jurusan_absen_staff() {
			return View::make('admin_jurusan.moduls.admin_jurusan_absen_staff');
		}

		public function admin_jurusan_data_dosen() {
			return View::make('admin_jurusan.moduls.admin_jurusan_data_dosen');
		}

		public function admin_jurusan_download() {
			return View::make('admin_jurusan.moduls.admin_jurusan_download');
		}
		//////////// Controller Database/////////

/* --------------------------------------------------
|
|	Bagian modal
|
 --------------------------------------------------*/ 

		public function modal_tambah_data_jurusan() {
			return View::make('admin_jurusan.modals.admin_jurusan_modal_tambah_jurusan');
		}

		public function modal_ubah_data_jurusan() {
			$id_jurusan = Input::get('id_jurusan');

			$data_jurusan = Jurusan::where('id_jurusan', '=', $id_jurusan)->get();

			return View::make('admin_jurusan.modals.admin_jurusan_modal_ubah_jurusan', compact('data_jurusan'));
		}

		public function modal_hapus_data_jurusan() {
			$id_jurusan = Input::get('id_jurusan');
			$jurusan = Input::get('jurusan');

			return View::make('admin_jurusan.modals.admin_jurusan_modal_hapus_jurusan', compact('id_jurusan', 'jurusan'));
		}

		public function modal_tambah_kegiatan_jurusan() {
			return View::make('admin_jurusan.modals.tambah_kegiatan_jurusan');
		}
		

/* --------------------------------------------------
|
|	Bagian baca
|
 --------------------------------------------------*/ 
 		public function admin_jurusan_baca_jurusan() {
 			$data_jurusan =		DB::table('tbl_jurusan')
 								->join('tbl_dosen', 'tbl_dosen.id_dosen', '=' , 'tbl_jurusan.id_kepala_jurusan')
 								->get(array('tbl_jurusan.id_jurusan', 'tbl_jurusan.jurusan', 'tbl_jurusan.id_kepala_jurusan', 'tbl_dosen.nama', 'tbl_jurusan.akreditasi'));

 			return $data_jurusan;
 		}
 		public function admin_jurusan_baca_absen_staff(){
 			return Absen::all();
 		}
 		public function admin_jurusan_baca_dosen(){
 			return ViewDosen::all();
 		}
 		public function admin_jurusan_baca_berita(){
 			return Berita::all();
 		}




/* --------------------------------------------------
|
|	Bagian tambah
|
 --------------------------------------------------*/ 
 		public function admin_jurusan_tambah_jurusan(){
 			$jurusan = Input::get('jurusan');
 			$id_kepala_jurusan = Input::get('id_kepala_jurusan');
 			$akreditasi = Input::get('akreditasi');
 			
 			return Jurusan::tambah_jurusan($jurusan,$id_kepala_jurusan,$akreditasi);
 		}

 		public function admin_jurusan_tambah_berita(){
 			$judul_berita= Input::get('judul_berita');
 			$isi = Input::get('isi');
 			$attachment = Input::get('attachment');
 			$tanggal = Input::get('tanggal');
 			return Berita::tambah_berita($judul_berita,$isi,$attachment,$tanggal);
 		}
/* --------------------------------------------------
|
|	Bagian Ubah
|
 --------------------------------------------------*/  

 		public function admin_jurusan_ubah_jurusan(){
 			$id_jurusan = Input::get('id_jurusan');
 			$jurusan = Input::get('jurusan');
 			$id_kepala_jurusan = Input::get('id_kepala_jurusan');
 			$akreditasi = Input::get('akreditasi');
 			
 			return Jurusan::ubah_jurusan($id_jurusan, $jurusan, $id_kepala_jurusan, $akreditasi);
 		}

/* --------------------------------------------------
|
|	Bagian Hapus
|
 --------------------------------------------------*/  

 		public function admin_jurusan_hapus_jurusan(){

 			$id_jurusan = Input::get('id_jurusan');
 			return Jurusan::hapus_jurusan($id_jurusan);
 		}

	}


		
		// public function dosen_modal_mahasiswa() {

		// 	$nim = Input::get('nim');
		// 	$data_mahasiswa = ViewMahasiswa::where('nim', '=', $nim)->get(array('nim', 'nama', 'jenis_kelamin', 'alamat', 'nomor_telepon', 'email', 'jurusan', 'konsentrasi_prodi', 'nama_kelas','jalur_masuk', 'status', 'nomor_telepon', 'email', 'jurusan', 'konsentrasi_prodi', 'nama_kelas', 'status' ));

		// 	return View::make('dosen.modals.dosen_modal_mahasiswa', compact('data_mahasiswa'));

		// }

		/////Tambah Jurusan//////


		// public function admin_jurusan_tambah_jurusan(){
		// 	$id_jurusan = '001';
		// 	$jurusan = 'Elektro';
		// 	return Jurusan::tambah_jurusan($id_jurusan,$jurusan);
		// }

		// /////Tambah Absen Dosen/////
		// public function admin_jurusan_tambah_absen_dosen(){
		// 	$id_absen_dosen = "001";
		// 	$id_dosen = '021';
		// 	$tanggal = '2014-04-25';
		// 	$jam = '03:38:41';
		// 	$id_matkul = '001';
		// 	return AbsenDosen:: tambah_absen_dosen($id_absen_dosen,$id_dosen,$tanggal,$jam,$id_matkul);
		// }

		// /////Tambah Absen Pegawai/////
		// public function admin_jurusan_tambah_absen_pegawai(){
		// 	$id_absen_pegawai = '001';
		// 	$nik = '001';
		// 	$jam_ke ='1';
		// 	$tanggal = '2014-04-24';
		// 	$keterangan = 'tepat waktu';
		// 	return AbsenPegawai::tambah_absen_pegawai($id_absen_pegawai,$nik,$jam_ke,$tanggal,$keterangan);
		// }

		// /////Ubah Jurusan/////
		// public function admin_jurusan_ubah_jurusan(){
		// 	$id_jurusan = Input::post('id_jurusan');
		// 	$jurusan = 'jurusan';
		// 	return Jurusan::ubah_jurusan($id_jurusan,$jurusan);
		// }

		// /////Ubah Absen Dosen/////
		// public function admin_jurusan_ubah_absen_dosen(){
		// 	$id_absen_dosen = Input::post('id_absen_dosen');
		// 	$id_dosen = 'id_dosen';
		// 	$tanggal = 'tanggal';
		// 	$jam = 'jam';
		// 	$id_matkul = 'id_matkul';
		// 	return AbsenDosen::ubah_absen_dosen($id_absen_dosen,$id_dosen,$tanggal,$jam,$id_matkul);
		// }

		// /////Ubah Absen Pegawai/////
		// public function admin_jurusan_ubah_absen_pegawai(){
		// 	$id_absen_pegawai = Input::post('id_absen_pegawai');
		// 	$nik = 'nik';
		// 	$jam_ke = 'jam_ke';
		// 	$tanggal = 'tanggal';
		// 	$keterangan = 'keterangan';
		// 	return AbsenPegawai::ubah_absen_pegawai($id_absen_pegawai,$nik,$jam_ke,$tanggal,$keterangan);
		// }

		// /////Hapus Jurusan////
		// public function admin_jurusan_hapus_jurusan(){
		// 	$id_jurusan = '001';
		// 	return Jurusan::hapus_jurusan($id_jurusan);
		// }

		// ////Hapus Absen Dosen/////
		// public function admin_jurusan_hapus_absen_dosen(){
		// 	$id_absen_dosen = '001';
		// 	return AbsenDosen::hapus_absen_dosen($id_absen_dosen);
		// }
		// ////Hapus Absen Pegawai////
		// public function admin_jurusan_hapus_absen_pegawai(){
		// 	$id_absen_pegawai = '001';
		// 	return AbsenPegawai::hapus_absen_pegawai($id_absen_pegawai);
		// }