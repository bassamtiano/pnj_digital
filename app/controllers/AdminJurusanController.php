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
			return View::make('admin_jurusan.modals.tambah_jurusan');
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
 			return Jurusan::all();
 		}




/* --------------------------------------------------
|
|	Bagian tambah
|
 --------------------------------------------------*/ 
 		public function admin_jurusan_tambah_jurusan(){
 			$nama_jurusan = Input::get('nama_jurusan');
 			$kepala_jurusan = Input::get('kepala_jurusan');
 			$jumlah_prodi = Input::get('jumlah_prodi');
 			$akreditasi = Input::get('akreditasi');
 			$keterangan = Input::get('keterangan');

 			// return Jurusan::mahasiswa_tambah($no,$nama,$kepala_jurusan,$jumlah_prodi,$akreditasi,$keterangan);
 			return Jurusan::tambah_jurusan($nama_jurusan,$kepala_jurusan,$jumlah_prodi,$akreditasi,$keterangan);
 		}
 		public function admin_jurusan_tambah_kegiatan(){
 			$nama_event = Input::get('nama_event');
 			$tujuan = Input::get('tujuan');
 			$waktu = Input::get('waktu');
 			return Jurusan::tambah_kegiatan($nama_event,$tujuan,$waktu);
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