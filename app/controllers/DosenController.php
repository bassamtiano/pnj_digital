<?php
	
	class DosenController extends BaseController {
	/* Edit by Fachmi 5/13/2014 10:18 PM */

		public function dosen_dashboard() {
			return View::make('dosen.index');
		}

		public function dosen_beranda() {
			return View::make('dosen.moduls.dosen_beranda');
		}

		public function dosen_kegiatan_penelitian() {
			return View::make('dosen.moduls.dosen_kegiatan_penelitian');
		}

		public function dosen_kegiatan_pengabdian() {
			return View::make('dosen.moduls.dosen_kegiatan_pengabdian');
		}

		public function dosen_perkuliahan_akademis() {
			return View::make('dosen.moduls.dosen_perkuliahan_akademis');
		}

		public function dosen_perkuliahan_nilai() {
			return View::make('dosen.moduls.dosen_perkuliahan_nilai');	
		}

		public function dosen_laporan_perkuliahan() {
			return View::make('dosen.moduls.dosen_laporan_perkuliahan');
		}

		public function dosen_laporan_absen_dosen() {
			return View::make('dosen.moduls.dosen_laporan_absen_dosen');
		}

		public function dosen_laporan_slip_gaji() {
			return View::make('dosen.moduls.dosen_laporan_slip_gaji');
		}

		public function dosen_laporan_permohonan() {
			return View::make('dosen.moduls.dosen_laporan_permohonan');
		}

		public function dosen_data_mahasiswa() {
			return View::make('dosen.moduls.dosen_data_mahasiswa');
		}


		public function dosen_download() {
			return View::make('dosen.moduls.dosen_download');
		}		


/* --------------------------------------------------
|
|	Bagian modal
|
 --------------------------------------------------*/ 


/* ----------------------------------------------------------*/ 
/* ------------------------MAHASISWA-------------------------*/ 		
/* ----------------------------------------------------------*/ 
		public function dosen_modal_detail_mahasiswa() {
			$nim = Input::get('nim');

			$mahasiswa = Mahasiswa::where('nim', '=', $nim)->get(array('id_mahasiswa', 'nim', 'id_konsentrasi_prodi', 'id_kelas', 'status', 'nama', 'jenis_kelamin', 'alamat', 'nomor_telepon', 'email', 'tempat_lahir', 'tanggal_lahir', 'tahun_masuk', 'tahun_lulus', 'nama_ayah', 'tanggal_lahir_ayah', 'pekerjaan_ayah', 'nama_ibu', 'tanggal_lahir_ibu', 'pekerjaan_ibu', 'nama_wali', 'pekerjaan_wali', 'foto_diri', 'id_jalur_masuk', 'status_pembayaran'));
			return View::make('dosen.modals.dosen_modal_detail_mahasiswa', compact('mahasiswa'));
		}

/* ----------------------------------------------------------*/ 
/* ------------------------PENELITIAN------------------------*/ 
/* ----------------------------------------------------------*/ 
		public function dosen_modal_tambah_penelitian() {
			return View::make('dosen.modals.dosen_modal_tambah_penelitian');
		}

		public function dosen_modal_ubah_penelitian() {
			
			$id_dosen_penelitian = Input::get('id_dosen_penelitian');

			$penelitian_dosen = DosenPenelitian::where('id_dosen_penelitian', '=', $id_dosen_penelitian)->get();

			return View::make('dosen.modals.dosen_modal_ubah_penelitian', compact('id_dosen_penelitian', 'penelitian_dosen'));
		}

		public function dosen_modal_hapus_penelitian() {
			$id_dosen_penelitian = Input::get('id_dosen_penelitian');

			return View::make('dosen.modals.dosen_modal_hapus_penelitian', compact('id_dosen_penelitian'));	
		}


/* ----------------------------------------------------------*/ 
/* --------------------------PENGABDIAN-----------------------*/ 
/* ----------------------------------------------------------*/ 
		public function dosen_modal_tambah_pengabdian() {			
			// $dosen = Dosen::get(array('id_dosen', 'nik'));

			// return View::make('dosen.modals.dosen_modal_tambah_pengabdian', compact('dosen'));
			return View::make('dosen.modals.dosen_modal_tambah_pengabdian');
		}

		public function dosen_modal_ubah_pengabdian() {
			
			$id_dosen_pengabdian = Input::get('id_dosen_pengabdian');
			
			$pengabdian_dosen = DosenPengabdian::where('id_dosen_pengabdian', '=', $id_dosen_pengabdian)->get();

			return View::make('dosen.modals.dosen_modal_ubah_pengabdian', compact('id_dosen_pengabdian', 'pengabdian_dosen'));
		}

		public function dosen_modal_hapus_pengabdian() {
			$id_dosen_pengabdian = Input::get('id_dosen_pengabdian');			

			return View::make('dosen.modals.dosen_modal_hapus_pengabdian', compact('id_dosen_pengabdian'));
		}


/* ----------------------------------------------------------*/ 
/* ---------------------------NILAI-------------------------------*/ 
/* ----------------------------------------------------------*/ 

		public function dosen_modal_ubah_transaksi_nilai_perkuliahan() {
			
			$id_transaksi_nilai_perkuliahan = Input::get('id_transaksi_nilai_perkuliahan');
			
			$transaksi_nilai = TransaksiNilaiPerkuliahan::where('id_transaksi_nilai_perkuliahan', '=', $id_transaksi_nilai_perkuliahan)->get();

			return View::make('dosen.modals.dosen_modal_ubah_transaksinilai', compact('id_transaksi_nilai_perkuliahan', 'transaksi_nilai'));
		}
/* ----------------------------------------------------------*/ 
/* ------------------------MATAKULIAH-------------------------*/ 
/* ----------------------------------------------------------*/ 

		public function dosen_modal_tambah_mata_kuliah() {
			return View::make('dosen.modals.dosen_modal_tambah_mata_kuliah');
		}



/* -------------------------------------------------------------------*/ 







/* --------------------------------------------------
|
|	Bagian baca data yang dibutuhkan
|
 --------------------------------------------------*/ 

 		public function dosen_baca_mahasiswa() {
 			return ViewMahasiswa::all();
 		}

 		public function dosen_baca_pengabdian() {
 			$id_dosen = 1;

 			return DosenPengabdian::where('id_dosen', '=', $id_dosen)->get();
 		}



 		public function dosen_baca_penelitian() {
 			$id_dosen = 1;

 			return DosenPenelitian::where('id_dosen', '=', $id_dosen)->get();
 		}

 		public function dosen_baca_download() {
			$id_laporan_download = 1;

 			return DosenPenelitian::where('id_laporan_download', '=', $id_laporan_download)->get();
 		}

 		public function dosen_baca_nilai(){

 			$id_dosen = '1';

			$baca_nilai =	DB::table('tbl_nilai')
							->join('tbl_mahasiswa', 'tbl_mahasiswa.nim', '=', 'tbl_nilai.nim')
							->join('tbl_dosen', 'tbl_dosen.id_dosen', '=', 'tbl_nilai.id_dosen')
							->join('tbl_mata_kuliah', 'tbl_mata_kuliah.id_mata_kuliah', '=', 'tbl_nilai.id_mata_kuliah')
							->where('tbl_nilai.id_dosen', '=', $id_dosen)
							->get(array('tbl_nilai.id_nilai', 'tbl_nilai.nim', 'tbl_mahasiswa.nama', 'tbl_nilai.id_mata_kuliah', 'tbl_mata_kuliah.mata_kuliah', 'tbl_nilai.semester', 'tbl_nilai.tugas', 'tbl_nilai.uts', 'tbl_nilai.uas'));

			return $baca_nilai;
 		}


 		public function dosen_ambil_data_dosen_ringkas() {

 		}


 		public function dosen_ambil_data_dosen() {

 		}

 		public function dosen_ambil_penelitian() {

 		}

 		public function dosen_ambil_pengabdian() {

 		}

 		public function dosen_ambil_absen_akademis() {

 		}

/* --------------------------------------------------
|
|	Bagian tambah data yang dibutuhkan
|
 --------------------------------------------------*/
 /*devi*/

  		public function dosen_tambah_mata_kuliah(){
			$mata_kuliah= 'PSSI'; 
			$id_konsentrasi_prodi='ELEKTRO';
			$sks= '2';
			$semester= '4';
			$jumlah_jam= '5';
			$silabus= 'bla bla bla';
			$kelompok= 'bla bla';
			return Matakuliah::tambah_mata_kuliah($mata_kuliah , $id_konsentrasi_prodi, $sks, $semester, $jumlah_jam, $silabus, $kelompok);
		}

  		public function dosen_tambah_timeslot(){
			$hari='senin'; 
			$waktu= '2';
			return TimeSlot::tambah_timeslot($hari, $waktu);
		}
 
  		public function dosen_tambah_jadwal_perkuliahan(){
			$id_matkul_dosen_kelas='1';
			$id_timeslot='2';
			$id_ruang_kelas= '3';
			return JadwalPerkuliahan::tambah_jadwal_perkuliahan($id_matkul_dosen_kelas, $id_timeslot, $id_ruang_kelas);
		}

  		public function dosen_tambah_transaksi_nilai_perkuliahan(){
			$nim = Input::get('id_mahasiswa');
			$id_dosen = Input::get('id_dosen');
			$id_matkul = Input::get('id_matkul');
			$nilai_tugas = Input::get('nilai_tugas');
			$nilai_uts = Input::get('nilai_uts');
			$nilai_uas = Input::get('nilai_uas');
			return TransaksiNilaiPerkuliahan::tambah_transaksi_nilai_perkuliahan($nim, $id_dosen, $id_matkul, $nilai_tugas, $nilai_uts, $nilai_uas);
		}


  		public function dosen_tambah_golongan(){
			$golongan= 'PNS';
			$tunjangan_golongan= '200000';
			$keterangan= 'baik';
			return Golongan::tambah_golongan($golongan, $tunjangan_golongan,$keterangan);
		}

  		public function dosen_tambah_absen_mahasiswa(){
			$id_kelas= '12';
			$id_matkul= '23';
			$id_dosen= '22';
			$nim= '232';
			$id_ruang_kelas= '34';
			$tanggal= '1';
			$jam='3';
			$acara_perkuliahan= 'kuis';
			return AbsenMahasiswa::tambah_absen_mahasiswa($id_kelas, $id_matkul, $id_dosen, $nim, $id_ruang_kelas, $tanggal, $jam, $acara_perkuliahan);
		}

/*----*/

  		public function dosen_tambah_penelitian(){
			
			$judul_penelitian = Input::get('judul_penelitian');
			$id_dosen = Input::get('id_dosen');
			$tanggal_penelitian = Input::get('tanggal_penelitian');
			$attachment = Input::get('attachment');
			//$attachment = 'a';
			$status_share =Input::get('status_share');
			return DosenPenelitian::tambah_penelitian($judul_penelitian, $id_dosen, $tanggal_penelitian, $attachment, $status_share);



		
		}

 		public function dosen_tambah_pengabdian() {
			// $id_dosen_pengabdian = Input::get('id_dosen_pengabdian');
			$id_dosen = Input::get('id_dosen');
			//$nik = Input::get('nik');
			$nama_pengabdian = Input::get('nama_pengabdian');
			$tgl_mulai = Input::get('tgl_mulai');
			$tgl_selesai = Input::get('tgl_selesai');
			$tempat = Input::get('tempat');
			$keterangan = Input::get('keterangan');
			$nilai = Input::get('nilai');
			return DosenPengabdian::tambah_pengabdian($id_dosen, $nama_pengabdian, $tgl_mulai, $tgl_selesai, $tempat, $keterangan, $nilai);
		}

 		public function dosen_tambah_absen_akademis() {
 			// $id_absen_dosen = Input::get('id_absen_dosen');
			$id_dosen = Input::get('id_dosen');
			$tanggal = Input::get('tanggal');
			$jam = Input::get('jam');
			$id_matkul = Input::get('id_matkul');
			return AbsenDosen::tambah_absen_dosen($id_dosen, $tanggal, $jam, $id_matkul);
 		}

 		public function dosen_tambah_nilai() {

 		}

/* --------------------------------------------------
|
|	Bagian ubah data yang dibutuhkan
|
 --------------------------------------------------*/ 	
/*Dev-*/


  		public function dosen_ubah_mata_kuliah(){
  			$id_mata_kuliah='1';
			$mata_kuliah= 'BATABASE'; 
			$id_konsentrasi_prodi='7';
			$sks= '3';
			$semester= '5';
			$jumlah_jam= '6';
			$silabus= 'bla bla bla';
			$kelompok= 'bla bla';
			return Matakuliah::ubah_mata_kuliah($id_mata_kuliah, $mata_kuliah , $id_konsentrasi_prodi, $sks, $semester, $jumlah_jam, $silabus, $kelompok);
		}

  		public function dosen_ubah_timeslot(){
  			$id_timeslot='1';
			$hari='selasa'; 
			$waktu= '2';
			return TimeSlot::ubah_timeslot($id_timeslot,$hari, $waktu);
		}
 
  		public function dosen_ubah_jadwal_perkuliahan(){
  			$id_jadwal_perkuliahan='1';
			$id_matkul_dosen_kelas='4';
			$id_timeslot='3';
			$id_ruang_kelas= '3';
			return JadwalPerkuliahan::ubah_jadwal_perkuliahan($id_jadwal_perkuliahan,$id_matkul_dosen_kelas, $id_timeslot, $id_ruang_kelas);
		}

  		public function dosen_ubah_transaksi_nilai_perkuliahan(){
  			$id_transaksi_nilai_perkuliahan= Input::get('id_transaksi_nilai_perkuliahan');			
			$id_mahasiswa = Input::get('id_mahasiswa');
			$id_dosen= Input::get('id_dosen');			
			$id_matkul= Input::get('id_matkul');
			$nilai_tugas= Input::get('nilai_tugas');
			$nilai_uts= Input::get('nilai_uts');
			$nilai_uas= Input::get('nilai_uas');
			return TransaksiNilaiPerkuliahan::ubah_transaksi_nilai_perkuliahan($id_transaksi_nilai_perkuliahan, $id_mahasiswa, $id_dosen, $id_matkul, $nilai_tugas, $nilai_uts, $nilai_uas);
		}

  		public function dosen_ubah_golongan(){
  			$id_golongan='1';
			$golongan= 'SWASTA';
			$tunjangan_golongan= '200000';
			$keterangan= 'baik';
			return Golongan::ubah_golongan($id_golongan, $golongan , $tunjangan_golongan,$keterangan);
		}

  		public function dosen_ubah_absen_mahasiswa(){
  			$id_absen_mahasiswa='1';
			$id_kelas= '13';
			$id_matkul= '23';
			$id_dosen= '22';
			$nim= '232';
			$id_ruang_kelas= '34';
			$tanggal= '1';
			$jam='3';
			$acara_perkuliahan= 'kuis';
			return AbsenMahasiswa::ubah_absen_mahasiswa($id_absen_mahasiswa, $id_kelas, $id_matkul, $id_dosen, $nim, $id_ruang_kelas, $tanggal, $jam, $acara_perkuliahan);
		}

/*--------*/

		public function dosen_ubah_penelitian(){

			$id_dosen_penelitian = Input::get('id_dosen_penelitian');
			$judul_penelitian = Input::get('judul_penelitian');
			$id_dosen = Input::get('id_dosen');
			
			$tanggal_penelitian = Input::get('tanggal_penelitian');
			$attachment ='de';
			$status_share  = Input::get('status_share');
			return DosenPenelitian::ubah_penelitian($id_dosen_penelitian, $judul_penelitian, $id_dosen, $tanggal_penelitian, $attachment, $status_share);
		}

		public function dosen_ubah_pengabdian() {
			$id_dosen_pengabdian = Input::get('id_dosen_pengabdian');
			$id_dosen = Input::get('id_dosen');
			// $nik = Input::get('nik');
			$nama_pengabdian = Input::get('nama_pengabdian');
			$tgl_mulai = Input::get('tgl_mulai');
			$tgl_selesai = Input::get('tgl_selesai');
			$tempat = Input::get('tempat');
			$keterangan = Input::get('keterangan');
			$nilai = Input::get('nilai');
			return DosenPengabdian::ubah_pengabdian($id_dosen_pengabdian, $id_dosen, $nama_pengabdian, $tgl_mulai, $tgl_selesai, $tempat, $keterangan, $nilai);
		}

		public function dosen_ubah_absen_dosen() {
			$id_absen_dosen = '1';
			$id_dosen = '1';
			$tanggal = '20121010';
			$jam = '5';
			$id_matkul = '1';
			return AbsenDosen::ubah_absen_dosen($id_absen_dosen, $id_dosen, $tanggal, $jam, $id_matkul);
		}

		public function dosen_ubah_nilai() {

 		}

/* --------------------------------------------------
|
|	Bagian hapus data yang dibutuhkan
|
 --------------------------------------------------*/ 	
/*Dev-*/
 		public function dosen_hapus_mata_kuliah(){
			$id_mata_kuliah = '1';			
			return Matakuliah::hapus_mata_kuliah($id_mata_kuliah);
		}
		public function dosen_hapus_timeslot(){
			$id_timeslot = '1';			
			return TimeSlot::hapus_timeslot($id_timeslot);
		}

		public function dosen_hapus_jadwal_perkuliahan(){
			$id_jadwal_perkuliahan = '1';			
			return JadwalPerkuliahan::hapus_jadwal_perkuliahan($id_jadwal_perkuliahan);
		}

		public function dosen_hapus_transaksi_nilai_perkuliahan(){
			$id_transaksi_nilai_perkuliahan = '1';			
			return TransaksiNilaiPerkuliahan::hapus_transaksi_nilai_perkuliahan($id_transaksi_nilai_perkuliahan);
		}

		public function dosen_hapus_golongan(){
			$id_golongan = '1';			
			return Golongan::hapus_golongan($id_golongan);
		}
		
		public function dosen_hapus_absen_mahasiswa(){
			$id_absen_mahasiswa = '1';			
			return AbsenMahasiswa::hapus_absen_mahasiswa($id_absen_mahasiswa);
		}

/*----*/
	
 		public function dosen_hapus_penelitian(){
			$id_dosen_penelitian = Input::get('id_dosen_penelitian');
			return DosenPenelitian::hapus_penelitian($id_dosen_penelitian);
		}

		public function dosen_hapus_pengabdian() {
			$id_dosen_pengabdian = Input::get('id_dosen_pengabdian');
			return DosenPengabdian::hapus_pengabdian($id_dosen_pengabdian);
		}

		public function dosen_hapus_absen_dosen() {
			$id_absen_dosen = '1';
			return AbsenDosen::hapus_absen_dosen($id_absen_dosen);
		}

		public function dosen_hapus_nilai() {

		}

	}