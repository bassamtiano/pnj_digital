<?php

	class AdminKemahasiswaanController extends BaseController {

/* ----------------------------------------------------------------------------------------------------
|
|	Admin Kemahasiswaan Modul Utama
|	V1.0
|
 ---------------------------------------------------------------------------------------------------- */

		public function admin_kemahasiswaan_dashboard() {
			return View::make('admin_kemahasiswaan.index');
		}
		
		public function admin_kemahasiswaan_beranda() {
			return View::make('admin_kemahasiswaan.moduls.admin_kemahasiswaan_beranda');	
		}

		public function admin_kemahasiswaan_data_mahasiswa() {
			return View::make('admin_kemahasiswaan.moduls.admin_kemahasiswaan_data_mahasiswa');	
		}

		public function admin_kemahasiswaan_perkembangan_kehadiran() {
			return View::make('admin_kemahasiswaan.moduls.admin_kemahasiswaan_perkembangan_kehadiran');	
		}

		public function admin_kemahasiswaan_perkembangan_marksheet() {
			return View::make('admin_kemahasiswaan.moduls.admin_kemahasiswaan_perkembangan_marksheet');		
		}

		public function admin_kemahasiswaan_permohonan() {
			return View::make('admin_kemahasiswaan.moduls.admin_kemahasiswaan_permohonan');	
		}

		public function admin_kemahasiswaan_permohonan_resign() {
			return View::make('admin_kemahasiswaan.moduls.admin_kemahasiswaan_permohonan_resign');	
		}

		public function admin_kemahasiswaan_permohonan_cuti() {
			return View::make('admin_kemahasiswaan.moduls.admin_kemahasiswaan_permohonan_cuti');		
		}

		public function admin_kemahasiswaan_permohonan_drop_out() {
			return View::make('admin_kemahasiswaan.moduls.admin_kemahasiswaan_permohonan_drop_out');	
		}

		public function admin_kemahasiswaan_download() {
			return View::make('admin_kemahasiswaan.moduls.admin_kemahasiswaan_download');	
		}

/* ----------------------------------------------------------------------------------------------------
|
|	Admin Kemahasiswaan Modal
|	V1.0
|
 ---------------------------------------------------------------------------------------------------- */

		public function admin_kemahasiswaan_modal_kegiatan() {
			return View::make('admin_kemahasiswaan.modals.admin_kemahasiswaan_modal_download');
		}

		public function admin_kemahasiswaan_modal_tambah_mahasiswa() {
			$konsentrasi_prodi = KonsentrasiProdi::get(array('id_konsentrasi_prodi', 'konsentrasi_prodi'));
			$kelas = Kelas::get(array('id_kelas', 'nama_kelas'));
			$jalur_masuk = JalurMasuk::get(array('id_jalur_masuk', 'jalur_masuk'));

			return View::make('admin_kemahasiswaan.modals.admin_kemahasiswaan_modal_tambah_mahasiswa', compact('konsentrasi_prodi', 'kelas', 'jalur_masuk'));
		}

		public function admin_kemahasiswaan_modal_ubah_mahasiswa() {
			$id_mahasiswa = Input::get('id_mahasiswa');

			$mahasiswa = Mahasiswa::where('id_mahasiswa', '=', $id_mahasiswa)->get(array('id_mahasiswa', 'nim', 'id_konsentrasi_prodi', 'id_kelas', 'status', 'nama', 'jenis_kelamin', 'alamat', 'nomor_telepon', 'email', 'tempat_lahir', 'tanggal_lahir', 'tahun_masuk', 'tahun_lulus', 'nama_ayah', 'tanggal_lahir_ayah', 'pekerjaan_ayah', 'nama_ibu', 'tanggal_lahir_ibu', 'pekerjaan_ibu', 'nama_wali', 'pekerjaan_wali', 'foto_diri', 'id_jalur_masuk', 'status_pembayaran'));
			$konsentrasi_prodi = KonsentrasiProdi::get(array('id_konsentrasi_prodi', 'konsentrasi_prodi'));
			$kelas = Kelas::get(array('id_kelas', 'nama_kelas'));

			$konsentrasi_prodi = KonsentrasiProdi::all();
			$kelas = Kelas::all();

			$jalur_masuk = JalurMasuk::get(array('id_jalur_masuk', 'jalur_masuk'));


			return View::make('admin_kemahasiswaan.modals.admin_kemahasiswaan_modal_ubah_mahasiswa', compact('mahasiswa', 'konsentrasi_prodi', 'kelas', 'jalur_masuk'));
		}

		public function admin_kemahasiswaan_modal_detail_mahasiswa() {
			$id_mahasiswa = Input::get('id_mahasiswa');

			$mahasiswa = Mahasiswa::where('id_mahasiswa', '=', $id_mahasiswa)->get(array('id_mahasiswa', 'nim', 'id_konsentrasi_prodi', 'id_kelas', 'status', 'nama', 'jenis_kelamin', 'alamat', 'nomor_telepon', 'email', 'tempat_lahir', 'tanggal_lahir', 'tahun_masuk', 'tahun_lulus', 'nama_ayah', 'tanggal_lahir_ayah', 'pekerjaan_ayah', 'nama_ibu', 'tanggal_lahir_ibu', 'pekerjaan_ibu', 'nama_wali', 'pekerjaan_wali', 'foto_diri', 'id_jalur_masuk', 'status_pembayaran'));
			return View::make('admin_kemahasiswaan.modals.admin_kemahasiswaan_modal_detail_mahasiswa', compact('mahasiswa'));
		}

		public function admin_kemahasiswaan_modal_hapus_mahasiswa() {
			$id_mahasiswa = Input::get('id_mahasiswa');
			$nama = Input::get('nama');
			return View::make('admin_kemahasiswaan.modals.admin_kemahasiswaan_modal_hapus_mahasiswa', compact('id_mahasiswa', 'nama'));
		}

		public function admin_kemahasiswaan_modal_tambah_permohonan() {
			$permohonan = Permohonan::all();
			return View::make('admin_kemahasiswaan.modals.admin_kemahasiswaan_modal_tambah_permohonan', compact('permohonan' ));
		}

		public function admin_kemahasiswaan_modal_ubah_permohonan() {
			$id_mahasiswa_permohonan = Input::get('id_mahasiswa_permohonan');
			$jenis_permohonan = Permohonan::all();
			$permohonan_mahasiswa = MahasiswaPermohonan::where('id_mahasiswa_permohonan', '=', $id_mahasiswa_permohonan)->get();
			return View::make('admin_kemahasiswaan.modals.admin_kemahasiswaan_modal_ubah_permohonan', compact('id_mahasiswa_permohonan', 'jenis_permohonan', 'permohonan_mahasiswa'));
			
		}

		public function admin_kemahasiswaan_modal_hapus_permohonan() {
			$id_mahasiswa_permohonan = Input::get('id_mahasiswa_permohonan');
			$nama = Input::get('nama');
			return View::make('admin_kemahasiswaan.modals.admin_kemahasiswaan_modal_hapus_permohonan', compact('id_mahasiswa_permohonan', 'nama'));
		}


/* ----------------------------------------------------------------------------------------------------
|
|	Admin Kemahasiswaan Baca
|	V1.0
|
 ---------------------------------------------------------------------------------------------------- */

		public function admin_kemahasiswaan_baca_mahasiswa() {
			return ViewMahasiswa::all();
		}

		public function admin_kemahasiswaan_baca_ruang_kelas() {
			return RuangKelas::get(array('nama_ruang_kelas', 'id_ruang_kelas'));
		}

		public function admin_kemahasiswaan_baca_permohonan() {

			return ViewMahasiswaPermohonan::all();
		}

		public function admin_kemahasiswaan_baca_marksheet() {
			$nim = Input::get('nim');
			
			return Nilai::all();
		}

		public function admin_kemahasiswaan_baca_kehadiran_mahasiswa() {
			$nim = '4311010026';
			$kategori = 'bulan';
			$spesifik = 'januari';
			return AbsenMahasiswa::baca_absen_mahasiswa($nim, $kategori, $spesifik);
			// return AbsenMahasiswa::whereRaw('nim = ? and tanggal ')->get(array('tanggal', 'id_timeslot', 'status'));
		}

		public function admin_kemahasiswaan_baca_kehadiran_mahasiswa_jurusan() {
			return 'mahasiswa jurusan';
		}

		public function admin_kemahasiswaan_baca_kehadiran_mahasiswa_program_studi() {
			return 'mahasiswa program studi';
		}

		public function admin_kemahasiswaan_baca_kehadiran_mahasiswa_kelas() {
			return 'mahasiswa kelas';
		}


/* ----------------------------------------------------------------------------------------------------
|
|	Admin Kemahasiswaan Tambah
|	V1.0
|
 ---------------------------------------------------------------------------------------------------- */

 	public function admin_kemahasiswaan_tambah_mahasiswa() {
		$nim = Input::get('nim'); 
		$nama = Input::get('nama');
		$jenis_kelamin = Input::get('jenis_kelamin');
		$alamat = Input::get('alamat');
		$nomor_telepon = Input::get('nomor_telepon');
		$email = Input::get('email');
		$tempat_lahir = Input::get('tempat_lahir');
		$tanggal_lahir = Input::get('tanggal_lahir');
		$id_konsentrasi_prodi = Input::get('id_konsentrasi_prodi');
		$tahun_masuk = Input::get('tahun_masuk');
		$tahun_lulus = Input::get('tahun_lulus');
		$nama_ayah = Input::get('nama_ayah');
		$tanggal_lahir_ayah = Input::get('tanggal_lahir_ayah');
		$pekerjaan_ayah = Input::get('pekerjaan_ayah');
		$nama_ibu = Input::get('nama_ibu');
		$tanggal_lahir_ibu = Input::get('tanggal_lahir_ibu');
		$pekerjaan_ibu = Input::get('pekerjaan_ibu');
		$nama_wali = Input::get('nama_wali');
		$pekerjaan_wali = Input::get('pekerjaan_wali');
		// $foto_diri = Input::get('foto_diri');
		$foto_diri = "a";
		$id_jalur_masuk = Input::get('id_jalur_masuk');
		$id_kelas = Input::get('id_kelas');
		$status = Input::get('status');
		$status_pembayaran = Input::get('status_pembayaran');
		
		return Mahasiswa::mahasiswa_tambah($nim, $nama, $jenis_kelamin, $alamat, $nomor_telepon, $email, $tempat_lahir, $tanggal_lahir, $id_konsentrasi_prodi, $tahun_masuk, $tahun_lulus, $nama_ayah, $tanggal_lahir_ayah, $pekerjaan_ayah, $nama_ibu, $tanggal_lahir_ibu, $pekerjaan_ibu, $nama_wali, $pekerjaan_wali, $foto_diri, $id_jalur_masuk, $id_kelas, $status, $status_pembayaran);
	}


 	public function admin_kemahasiswaan_tambah_permohonan() {
 		$id_permohonan = Input::get('id_permohonan');
 		$id_mahasiswa = Input::get('id_mahasiswa');
 		$tanggal_pengajuan = Input::get('tanggal_pengajuan');
 		$keterangan = Input::get('keterangan');
 		$status = Input::get('status');

 		return MahasiswaPermohonan::permohonan_tambah($id_permohonan, $id_mahasiswa, $tanggal_pengajuan, $keterangan, $status);

	}


/* ----------------------------------------------------------------------------------------------------
|
|	Admin Kemahasiswaan Ubah
|	V1.0
|
 ---------------------------------------------------------------------------------------------------- */

 	public function admin_kemahasiswaan_ubah_permohonan() {
 		$id_mahasiswa_permohonan = Input::get('id_mahasiswa_permohonan');
 		$id_permohonan = Input::get('id_permohonan');
 		$id_mahasiswa = Input::get('id_mahasiswa');
 		$tanggal_pengajuan = Input::get('tanggal_pengajuan');
 		$keterangan = Input::get('keterangan');
 		$status = Input::get('status');

 		return MahasiswaPermohonan::permohonan_ubah($id_mahasiswa_permohonan, $id_permohonan, $id_mahasiswa, $tanggal_pengajuan, $keterangan, $status);
 	}


/* ----------------------------------------------------------------------------------------------------
|
|	Admin Kemahasiswaan Hapus
|	V1.0
|
 ---------------------------------------------------------------------------------------------------- */

 	public function admin_kemahasiswaan_hapus_permohonan() {
 		$id_mahasiswa_permohonan = Input::get('id_mahasiswa_permohonan');
 		return MahasiswaPermohonan::permohonan_hapus($id_mahasiswa_permohonan);
 	}

/* ----------------------------------------------------------------------------------------------------
|
|	Admin Kemahasiswaan Database Handler
|	V1.0
|
 ---------------------------------------------------------------------------------------------------- */


		public function admin_kemahasiswaan_tambah_jurusan() {
			$id_jurusan = 'id_jurusan';
			$jurusan = 'jurusan';
			return Jurusan::tambah_jurusan($id_jurusan, $jurusan);		
		}
		
		public function admin_kemahasiswaan_ubah_jurusan() {
			$id_jurusan = 'id_jurusan';
			$jurusan = 'jurusan';
			return Jurusan::tambah_jurusan($id_jurusan, $jurusan);
		}

		public function admin_kemahasiswaan_hapus_jurusan() {
			$id_jurusan = 'id_jurusan';
			return Jurusan::tambah_jurusan($id_jurusan);
		}

		public function admin_kemahasiswaan_tambah_konsentrasi_prodi() {
			$id_konsentrasi_prodi = 'id_konsentrasi_prodi';
			$konsentrasi_prodi = 'konsentrasi_prodi';
			$id_jurusan = 'id_jurusan';
			return KonsentrasiProdi::tambah_konsentrasi_prodi($id_konsentrasi_prodi, $konsentrasi_prodi, $id_jurusan);
		}

		public function admin_kemahasiswaan_ubah_konsentrasi_prodi() {
			$id_konsentrasi_prodi = 'id_konsentrasi_prodi';
			$konsentrasi_prodi = 'konsentrasi_prodi';
			$id_jurusan = 'id_jurusan';
			return KonsentrasiProdi::ubah_konsentrasi_prodi($id_konsentrasi_prodi, $konsentrasi_prodi, $id_jurusan);
		}

		public function admin_kemahasiswaan_hapus_konsentrasi_prodi() {
			$id_konsentrasi_prodi = 'id_konsentrasi_prodi';
			return KonsentrasiProdi::hapus_konsentrasi_prodi($id_konsentrasi_prodi);
		}

		public function admin_kemahasiswaan_tambah_biodata_mahasiswa() {
			$id_biodata_mahasiswa = 'id_biodata_mahasiswa';
			$nama = 'nama';
			$jenis_kelamin = 'jenis_kelamin';
			$alamat = 'alamat';
			$nomor_telepon = 'nomor_telepon';
			$email = 'email';
			$asal_sekolah = 'asal_sekolah';
			$tahun_lulus = 'tahun_lulus';
			$id_konsentrasi = 'id_konsentrasi';
			$nama_ayah = 'nama_ayah';
			$ttl_ayah = 'ttl_ayah';
			$pekerjaan_ayah = 'pekerjaan_ayah';
			$nama_ibu = 'nama_ibu';
			$ttl_ibu = 'ttl_ibu';
			$pekerjaan_ibu = 'pekerjaan_ibu';
			$nama_wali = 'nama_wali';
			$pekerjaan_wali = 'pekerjaan_wali';
			$foto_diri = 'foto_diri';
			$id_jalur_masuk = 'id_jalur_masuk';
			$id_ujian = 'id_ujian';
			return KonsentrasiProdi::tambah_biodata_mahasiswa($id_biodata_mahasiswa, $nama, $jenis_kelamin, $alamat, $nomor_telepon, $email, $asal_sekolah, $tahun_lulus, $id_konsentrasi, $nama_ayah, $ttl_ayah, $pekerjaan_ayah, $nama_ibu, $ttl_ibu, $pekerjaan_ibu, $nama_wali, $pekerjaan_wali, $foto_diri, $id_jalur_masuk, $id_ujian);
		}

		public function admin_kemahasiswaan_ubah_biodata_mahasiswa() {
			$id_biodata_mahasiswa = 'id_biodata_mahasiswa';
			$nama = 'nama';
			$jenis_kelamin = 'jenis_kelamin';
			$alamat = 'alamat';
			$nomor_telepon = 'nomor_telepon';
			$email = 'email';
			$asal_sekolah = 'asal_sekolah';
			$tahun_lulus = 'tahun_lulus';
			$id_konsentrasi = 'id_konsentrasi';
			$nama_ayah = 'nama_ayah';
			$ttl_ayah = 'ttl_ayah';
			$pekerjaan_ayah = 'pekerjaan_ayah';
			$nama_ibu = 'nama_ibu';
			$ttl_ibu = 'ttl_ibu';
			$pekerjaan_ibu = 'pekerjaan_ibu';
			$nama_wali = 'nama_wali';
			$pekerjaan_wali = 'pekerjaan_wali';
			$foto_diri = 'foto_diri';
			$id_jalur_masuk = 'id_jalur_masuk';
			$id_ujian = 'id_ujian';
			return KonsentrasiProdi::ubah_biodata_mahasiswa($id_biodata_mahasiswa, $nama, $jenis_kelamin, $alamat, $nomor_telepon, $email, $asal_sekolah, $tahun_lulus, $id_konsentrasi, $nama_ayah, $ttl_ayah, $pekerjaan_ayah, $nama_ibu, $ttl_ibu, $pekerjaan_ibu, $nama_wali, $pekerjaan_wali, $foto_diri, $id_jalur_masuk, $id_ujian);
		}

		public function admin_kemahasiswaan_hapus_biodata_mahasiswa() {
			$id_biodata_mahasiswa = 'id_biodata_mahasiswa';
			return KonsentrasiProdi::hapus_biodata_mahasiswa($id_biodata_mahasiswa);
		}

		

		public function admin_kemahasiswaan_ubah_mahasiswa() {
			$id_mahasiswa = Input::get('id_mahasiswa'); 
			$nim = Input::get('nim'); 
			$nama = Input::get('nama');
			$jenis_kelamin = Input::get('jenis_kelamin');
			$alamat = Input::get('alamat');
			$nomor_telepon = Input::get('nomor_telepon');
			$email = Input::get('email');
			$tempat_lahir = Input::get('tempat_lahir');
			$tanggal_lahir = Input::get('tanggal_lahir');
			$id_konsentrasi_prodi = Input::get('id_konsentrasi_prodi');
			$tahun_masuk = Input::get('tahun_masuk');
			$tahun_lulus = Input::get('tahun_lulus');
			$nama_ayah = Input::get('nama_ayah');
			$tanggal_lahir_ayah = Input::get('tanggal_lahir_ayah');
			$pekerjaan_ayah = Input::get('pekerjaan_ayah');
			$nama_ibu = Input::get('nama_ibu');
			$tanggal_lahir_ibu = Input::get('tanggal_lahir_ibu');
			$pekerjaan_ibu = Input::get('pekerjaan_ibu');
			$nama_wali = Input::get('nama_wali');
			$pekerjaan_wali = Input::get('pekerjaan_wali');
			// $foto_diri = Input::get('foto_diri');



			$foto_diri = "a";
			$id_jalur_masuk = Input::get('id_jalur_masuk');
			$id_kelas = Input::get('id_kelas');
			$status = Input::get('status');
			$status_pembayaran = Input::get('status_pembayaran');

			// if(Input::hashFile('foto_diri')) {
				
			// }

			
			return Mahasiswa::mahasiswa_ubah($id_mahasiswa, $nim, $nama, $jenis_kelamin, $alamat, $nomor_telepon, $email, $tempat_lahir, $tanggal_lahir, $id_konsentrasi_prodi, $tahun_masuk, $tahun_lulus, $nama_ayah, $tanggal_lahir_ayah, $pekerjaan_ayah, $nama_ibu, $tanggal_lahir_ibu, $pekerjaan_ibu, $nama_wali, $pekerjaan_wali, $foto_diri, $id_jalur_masuk, $id_kelas, $status, $status_pembayaran);

		}

		public function admin_kemahasiswaan_hapus_mahasiswa() {
			$id_mahasiswa = Input::get('id_mahasiswa');
			return Mahasiswa::mahasiswa_hapus($id_mahasiswa);
		}

		


	}