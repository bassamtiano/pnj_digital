<?php

	class AdminHRDController extends BaseController {
		
		public function admin_hrd_dashboard() {
			return View::make('admin_hrd.index');
		}

		public function admin_hrd_beranda() {
			return View::make('admin_hrd.moduls.admin_hrd_beranda');
		}

		public function admin_hrd_data_karyawan() {
			return View::make('admin_hrd.moduls.admin_hrd_data_karyawan');
		}

		public function admin_hrd_absensi_staff() {
			return View::make('admin_hrd.moduls.admin_hrd_absensi_staff');
		}

		public function admin_hrd_permohonan() {
			return View::make('admin_hrd.moduls.admin_hrd_permohonan');
		}

		public function admin_hrd_permohonan_resign() {
			return View::make('admin_hrd.moduls.admin_hrd_permohonan_resign');
		}

		public function admin_hrd_permohonan_cuti() {
			return View::make('admin_hrd.moduls.admin_hrd_permohonan_cuti');	
		}

		public function admin_hrd_permohonan_kas_bon() {
			return View::make('admin_hrd.moduls.admin_hrd_permohonan_kas_bon');
		}

		public function admin_hrd_permohonan_lainnya() {
			return View::make('admin_hrd.moduls.admin_hrd_permohonan_lainnya');
		}

		public function admin_hrd_download() {
			return View::make('admin_hrd.moduls.admin_hrd_download');
		}

		public function admin_hrd_berita() {
			return View::make('admin_hrd.moduls.admin_hrd_berita');
		}
/*----
|
|	Admin HRD Modal
|
 ----*/

		public function admin_hrd_modal_tambah_berita() {
			return View::make('admin_hrd.modals.admin_hrd_modal_tambah_berita');
		}

		public function admin_hrd_modals_absen_pimpinan() {
			return View::make('admin_hrd.modals.admin_hrd_modals_absen_pimpinan');
		}

		public function admin_hrd_modals_absen_keuangan() {
			return View::make('admin_hrd.modals.admin_hrd_modals_absen_keuangan');
		}

		public function admin_hrd_modals_absen_hrd() {

			
			return View::make('admin_hrd.modals.admin_hrd_modals_absen_hrd');
		}

		public function admin_hrd_modals_absen_kemahasiswaan() {
			return View::make('admin_hrd.modals.admin_hrd_modals_absen_kemahasiswaan');
		}

		public function admin_hrd_modals_absen_inventaris() {
			return View::make('admin_hrd.modals.admin_hrd_modals_absen_inventaris');
		}

		public function admin_hrd_modals_tambah_karyawan() {
			return View::make('admin_hrd.modals.admin_hrd_modals_tambah_karyawan');
		}

		public function admin_hrd_modals_ubah_data_karyawan() {
			return View::make('admin_hrd.modals.admin_hrd_modals_ubah_data_karyawan');
		}


/* -------------------------------------------------------------
|
|					Baca Admin HRD 
|---------------------------------------------------------------*/

		public function admin_hrd_baca_karyawan() {
			//return Karyawan::get(array('nik', 'nama', 'alamat', 'status'));
			return Karyawan::all();
		}

		public function admin_hrd_baca_permohonan_karyawan() {
			return ViewKaryawanPermohonan::all();
		}

		public function admin_hrd_baca_karyawan_absensi() {

			$tanggal = '2014-06-01';

			$karyawan_absensi =		DB::table('tbl_karyawan_absensi')
									->join('tbl_karyawan', 'tbl_karyawan.nik', '=', 'tbl_karyawan_absensi.nik')
									->join('tbl_jabatan', 'tbl_jabatan.id_jabatan', '=', 'tbl_karyawan_absensi.id_jabatan')
									->where('tbl_karyawan_absensi.tanggal', '=', $tanggal)
									->get(array('tbl_karyawan_absensi.id_karyawan_absensi', 'tbl_karyawan.nik', 'tbl_karyawan.nama', 'tbl_jabatan.id_jabatan', 'tbl_jabatan.jabatan', 'tbl_karyawan_absensi.tanggal','tbl_karyawan_absensi.keterangan',  'tbl_karyawan_absensi.status'));


			return $karyawan_absensi;

		}


		/*---------------------------------------------------|
		|
		|						Tambah 						 |
		|---------------------------------------------------*/
			
			//Table Pegawai
		public function admin_hrd_tambah_karyawan(){
			$nik = Input::get('nik');
			$id_status_karyawan = Input::get('id_status_karyawan');
			$nama = Input::get('nama');
			$alamat = Input::get('alamat');
			$tempat_lahir = Input::get('tempat_lahir'); 
			$tanggal_lahir = Input::get('tanggal_lahir');
			$agama = Input::get('agama');
			$jenis_kelamin = Input::get('jenis_kelamin');
			$tanggal_mulai_kerja = Input::get('tanggal_mulai_kerja'); 
			$id_golongan = Input::get('id_golongan');
			$id_jabatan = Input::get('id_jabatan');
			$id_jurusan = Input::get('id_jurusan');
			$no_telepon = Input::get('no_telepon');
			$email = Input::get('email');
			$pendidikan = Input::get('pendidikan');
			$status_nikah = Input::get('status_nikah');
			$foto = Input::get('foto');
			$status = Input::get('status');
			return Karyawan::tambah_karyawan($nik, $id_status_karyawan, $nama, $alamat, $tempat_lahir, $tanggal_lahir, $agama, $jenis_kelamin, $tanggal_mulai_kerja, $id_golongan, $id_jabatan, $id_jurusan, $no_telepon, $email, $pendidikan, $status_nikah, $foto, $status); 
		}

			//Table Permohonan
		public function permohonan_tambah(){
			$id_pegawai_permohonan = '1'; 
			$kategori = '1'; 
			$nik = '1';
			$id_jabatan = '1'; 
			$isi = 'test'; 
			$approval = 'yes'; 
			$tanggal = '2014-24-04';
			return PegawaiPermohonan::tambah_pegawai_permohonan($id_pegawai_permohonan, $kategori, $nik, $id_jabatan, $isi, $approval, $tanggal);
		}

		/*---------------------------------------------------|
		|-----------------------Ubah-------------------------|
		|---------------------------------------------------*/

		public function admin_hrd_ubah(){
			$nik = Input::post('nik');
			$id_biodata = 'id_biodata';
			$id_status_pegawai = 'id_status_pegawai';
			$tanggal_mulai_kerja = 'tanggal_mulai_kerja';
			$id_golongan = 'id_golongan';
			$id_jurusan = 'id_jurusan';
			return AdminHRD::ubah_pegawai($nik, $id_biodata, $id_status_pegawai, $tanggal_mulai_kerja, $id_golongan, $id_jurusan); 
		}

		public function admin_hrd_ubah_absen() {
			$id_karyawan_absensi = Input::get('id_karyawan_absensi');
			$status = Input::get('status');


			return KaryawanAbsensi::ubah_karyawan_absensi($id_karyawan_absensi, $status);
		}

		public function admin_hrd_ubah_permohonan() {
			$id_karyawan_permohonan = Input::get('id_karyawan_permohonan');
			$status = Input::get('status');

			return KaryawanPermohonan::ubah_status_permohonan_karyawan($id_karyawan_permohonan, $status);
		}

		/*---------------------------------------------------|
		|-----------------------Hapus------------------------|
		|---------------------------------------------------*/
		public function admin_hrd_hapus(){
			$nik = '1';
			return AdminHRD::hapus_pegawai($nik);
		}

	}