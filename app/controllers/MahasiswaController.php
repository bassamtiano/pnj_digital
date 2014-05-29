<?php

	class MahasiswaController extends BaseController {


		// public function __construct() {
		// 	$this->beforeFilter('auth');
		// }


/* --------------------------------------------------
|
|	Bagian user interface
|
 --------------------------------------------------*/ 


		public function mahasiswa_dashboard() {
			// return View::make('mahasiswa.index');
			return View::make('mahasiswa.index');
		}

		public function mahasiswa_konfirmasi() {
			return View::make('mahasiswa.moduls.mahasiswa_konfirmasi');
		}

		public function mahasiswa_akademis() {
			return View::make('mahasiswa.moduls.mahasiswa_akademis');
		}

		public function mahasiswa_kalender_akademis() {
			return View::make('mahasiswa.moduls.mahasiswa_kalender_akademis');
		}

		public function mahasiswa_jadwal() {
			return View::make('mahasiswa.moduls.mahasiswa_jadwal');
		}

		public function mahasiswa_berita_perkuliahan() {
			return View::make('mahasiswa.moduls.mahasiswa_berita_perkuliahan');
		}		

		public function mahasiswa_marksheet() {
			return View::make('mahasiswa.moduls.mahasiswa_marksheet');
		}

		public function mahasiswa_dosen() {
			return View::make('mahasiswa.moduls.mahasiswa_dosen');
		}

		public function mahasiswa_download() {
			return View::make('mahasiswa.moduls.mahasiswa_download');
		}

		public function mahasiswa_evaluasi_kinerja() {
			return View::make('mahasiswa.moduls.mahasiswa_evaluasi_kinerja');
		}

		public function mahasiswa_praktek_kerja_lapangan() {
			return View::make('mahasiswa.moduls.mahasiswa_praktek_kerja_lapangan');
		}

		public function mahasiswa_tugas_akhir() {
			return View::make('mahasiswa.moduls.mahasiswa_tugas_akhir');
		}

		public function mahasiswa_wisuda() {
			return View::make('mahasiswa.moduls.mahasiswa_wisuda');
		}


/* --------------------------------------------------
|
|	Bagian modals
|
 --------------------------------------------------*/ 

 		public function mahasiswa_modal_dosen() {
 			$id_dosen = Input::get('id_dosen');

 			$dosen = ViewDosen::where('id_dosen', '=', $id_dosen)->get(array('nik', 'nip', 'nama', 'alamat', 'tempat_lahir', 'tanggal_lahir', 'jurusan', 'status', 'no_telepon', 'email'));
			$penelitian = DosenPenelitian::where('id_dosen', '=', $id_dosen)->get(array('judul_penelitian', 'tanggal_penelitian', 'attachment'));
			$pengabdian = DosenPengabdian::where('id_dosen', '=', $id_dosen)->get(array('nama_pengabdian', 'tgl_mulai', 'tgl_selesai', 'tempat'));

 			return View::make('mahasiswa.modals.mahasiswa_modal_dosen', compact('dosen', 'penelitian', 'pengabdian'));
 		}

/* --------------------------------------------------
|
|	Bagian Baca Data
|
 --------------------------------------------------*/ 

 		public function mahasiswa_baca_ringkas() {
 			$nim = '1';
 			return ViewMahasiswa::view_mahasiswa_ringkas($nim);
 		}

 		public function mahasiswa_baca_mahasiswa_detail() {
			 			
 		}

 		public function mahasiswa_baca_jadwal() {

 			$kelas = Input::get('kelas');
 			// $hari = Input::get('hari');

 			$jadwal =	DB::table('tbl_jadwal_perkuliahan')
 						->join('tbl_mata_kuliah', 'tbl_mata_kuliah.id_mata_kuliah', '=', 'tbl_jadwal_perkuliahan.id_mata_kuliah')
 						->join('tbl_dosen', 'tbl_dosen.id_dosen', '=', 'tbl_jadwal_perkuliahan.id_dosen')
 						->join('tbl_kelas', 'tbl_kelas.id_kelas', '=', 'tbl_jadwal_perkuliahan.id_kelas')
 						->join('tbl_timeslot', 'tbl_timeslot.id_timeslot', '=', 'tbl_jadwal_perkuliahan.id_timeslot')
 						->join('tbl_ruang_kelas','tbl_ruang_kelas.id_ruang_kelas', '=', 'tbl_jadwal_perkuliahan.id_ruang_kelas')
 						->select('tbl_mata_kuliah.mata_kuliah', 'tbl_dosen.nama', 'tbl_ruang_kelas.nama_ruang_kelas')
 						// ->whereRaw('tbl_jadwal_perkuliahan.id_kelas = "' . $kelas . '" and tbl_timeslot.waktu = "' . $waktu . '" ')
 						->whereRaw('tbl_jadwal_perkuliahan.id_kelas = "' . $kelas . '"')
 						->orderBy('tbl_timeslot.waktu', 'asc')
 						->get();

 			return $jadwal;
 		}

 		public function mahasiswa_baca_kalender_akademis() {
 			return KalenderAkademis::all();
 		}


 		public function mahasiswa_baca_berita_kuliah($nim) {

 		}

 		public function mahasiswa_baca_marksheet($nim) {

 		}

 		public function mahasiswa_baca_dosen() {
			return ViewDosen::all();
		}



		public function mahasiswa_baca_dosen_detail() {

			$id_dosen = Input::get('id_dosen');

			$dosen_detil =	DB::table('tbl_dosen')
							->join('tbl_golongan', 'tbl_golongan.id_golongan', '=', 'tbl_dosen.id_golongan')
							->join('tbl_konsentrasi_prodi', 'tbl_konsentrasi_prodi.id_konsentrasi_prodi', '=', 'tbl_dosen.id_konsentrasi_prodi')
							->select('tbl_dosen.nik', 'tbl_dosen.nip', 'tbl_dosen.nama', 'tbl_dosen.alamat', 'tbl_konsentrasi_prodi.konsentrasi_prodi', 'tbl_dosen.s1', 'tbl_dosen.s2', 'tbl_dosen.s3', 'tbl_dosen.status', 'tbl_dosen.no_telepon', 'tbl_dosen.email', 'tbl_golongan.golongan', 'tbl_dosen.tempat_lahir', 'tbl_dosen.tanggal_lahir')
							->where('id_dosen', '=', $id_dosen)
							->orderBy('tbl_dosen.id_dosen', 'asc')
							->get();

			return $dosen_detil;
		}

		public function mahasiswa_baca_dosen_penelitian() {
			$dosen_penelitian =	DB::table('tbl_dosen')
								->join('tbl_dosen_penelitian', 'tbl_dosen_penelitian.id_dosen', '=', 'tbl_dosen.id_dosen')
								->select('tbl_dosen_penelitian.judul_penelitian', 'tbl_dosen_penelitian.attachment', 'tbl_dosen_penelitian.tanggal_penelitian')
								->orderBy('tbl_dosen_penelitian.tanggal_penelitian', 'asc')
								->get();

			return $dosen_penelitian;
		}

		public function mahasiswa_baca_dosen_pengabdian() {
			$dosen_pengabdian =	DB::table('tbl_dosen')
								->join('tbl_dosen_pengabdian', 'tbl_dosen_pengabdian.id_dosen', '=', 'tbl_dosen.id_dosen')
								->select('tbl_dosen_pengabdian.nama_pengabdian', 'tbl_dosen_pengabdian.tgl_mulai', 'tbl_dosen_pengabdian.tgl_selesai', 'tbl_dosen_pengabdian.tempat')
								->orderBy('tbl_dosen_pengabdian.tanggal_mulai', 'asc')
								->get();

			return $dosen_pengabdian;
		}

	}