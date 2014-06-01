<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

//

App::missing(function($exception)
{
    return Response::view('layouts.not_found', array(), 404);
});

Route::get('/', function()
{
	return View::make('login');
});

Route::get('generate_hash', function() {
	$admin = 'admin';
	$pass = Hash::make($admin);

	return $pass;
});

Route::get('testnilai', function() {
	$nama = Input::get('nama');
	return DB::select("select semester, uas, uts from test_nilai where nama = ?", array($nama));

});

Route::get('login', array('as' => 'login', 'uses' => 'UserController@get_login'));
Route::post('login', array('uses' => 'UserController@post_login'));

Route::get('modal_test', function() {
	return View::make('layouts.index');
});


// Route::bind('user', function($value, $route)
// {
// 	return BiodataMahasiswa::where('nama', $value)->first();

// });

// Route::bind('user', function($value, $route)
// {
// 	return BiodataMahasiswa::where('nama', $value)->first();

// });

// Route::get('/{user}', function($value)
// {

// 	// return View::make('layouts.index', array('name' => $user));
// 	return View::make('mahasiswa.index', array('nama' => $value->nama ));

// });






//

Route::get('data_karyawan',function() {
	return Karyawan::all();
});

// Data Dosen

Route::get('admin/data_dosen', function() {
	return View::make('admin.data_dosen');
});

// Data Kelas

Route::get('admin/data_kelas', function() {
	return View::make('admin.data_kelas');
});


// Data Mata Kuliah

Route::get('admin/data_matakuliah', function() {
	return View::make('admin.data_matakuliah');
});

// Data Ruang

Route::get('admin/data_ruang', function() {
	return View::make('admin.data_ruang');
});

// Data Slot

Route::get('admin/data_slot', function() {
	return View::make('admin.data_slot');
});




Route::get('test', function() {
	return Test::all();
});

Route::post('test', function() {
	return Test::create(Input::all());
});

Route::post('dtest', function() {
	return Test::where('id', Input::get('delete_id'))->delete();
});

Route::post('utest', function() {
	return Test::where('id', Input::get('replace_id'))->update(array('nama' => Input::get('replace_name'), 'pilih' => Input::get('replace_pilih')));
});


Route::get('vtest', function() {
	return View::make('test');
});

Route::get('dashboard', function() {

	return View::make('layouts.dashboard');

});

Route::get('home', array('as' => 'home', 'uses' => 'UserController@dashboard'));


/* ======================================================================================================================================================================================================== */

/* ================================================================================
|	
|	Route Mahasiswa v0.1
|	Butuh Perbaikan di sisi penggabungan controller
|
================================================================================ */ 



Route::get('mahasiswa', array('as' => 'mahasiswa', 'uses' => 'MahasiswaController@mahasiswa_dashboard'));
Route::get('mahasiswa/ringkas', array('as' => 'mahasiswa_ringkas', 'uses' => 'MahasiswaController@mahasiswa_ringkas'));

Route::get('mahasiswa/read/dashboard_biodata', array('as' => 'mahasiswa_read/biodata', 'uses' => 'MahasiswaController@mahasiswa_read_dashboard_biodata'));
Route::get('mahasiswa/read/jadwal', array('as' => 'mahasiswa_read/jadwal' , 'uses' => 'MahasiswaController@mahasiswa_read_jadwal'));
Route::get('mahasiswa/read/kalender_akademis', array('as' => 'mahasiswa_read/kalender_akademis', 'uses' => 'MahasiswaController@mahasiswa_read_kalender_akademis'));
Route::get('mahasiswa/read/', array('as' => 'mahasiswa_read/'));

/* 

#
#	Bagian Modul Akademis
#

*/

Route::get('mahasiswa/akademis', array('as' => 'mahasiswa_akademis', 'uses' => 'MahasiswaController@mahasiswa_akademis'));
Route::get('mahasiswa/akademis/tab_ringkasan', array('as' => 'mahasiswa_akademis_tab_ringkasan', 'uses' => 'MahasiswaController@mahasiswa_akademis_tab_ringkasan'));
Route::get('mahasiswa/akademis/tab_pembayaran', array('as' => 'mahasiswa_akademis_tab_pembayaran', 'uses' => 'MahasiswaController@mahasiswa_akademis_tab_pembayaran'));
Route::get('mahasiswa/akademis/tab_status_akademis', array('as' => 'mahasiswa_akademis_tab_status_akademis', 'uses' => 'MahasiswaController@mahasiswa_akademis_tab_status_akademis'));

Route::get('mahasiswa/kalender_akademis', array('as' => 'mahasiswa_kalender_akademis', 'uses' => 'MahasiswaController@mahasiswa_kalender_akademis'));

Route::get('mahasiswa/jadwal', array('as' => 'mahasiswa_jadwal', 'uses' => 'MahasiswaController@mahasiswa_jadwal'));

Route::get('mahasiswa/berita_perkuliahan', array('as' => 'mahasiswa_berita_perkuliahan', 'uses' => 'MahasiswaController@mahasiswa_berita_perkuliahan'));

Route::get('mahasiswa/marksheet', array('as' => 'mahasiswa_marksheet', 'uses' => 'MahasiswaController@mahasiswa_marksheet'));

Route::get('mahasiswa/dosen', array('as' => 'mahasiswa_dosen', 'uses' => 'MahasiswaController@mahasiswa_dosen'));

Route::get('mahasiswa/download', array('as' => 'mahasiswa_download', 'uses' => 'MahasiswaController@mahasiswa_download'));

Route::get('mahasiswa/evaluasi_kinerja', array('as' => 'mahasiswa_evaluasi_kinerja', 'uses' => 'MahasiswaController@mahasiswa_evaluasi_kinerja'));

Route::get('mahasiswa/konfirmasi', array('as' => 'mahasiswa_konfirmasi' , 'uses' => 'MahasiswaController@mahasiswa_konfirmasi'));

Route::get('mahasiswa/biodata/rawquery', array('as' => 'mahasiswa_biodata', 'uses' => 'MahasiswaController@mahasiswa_all'));

/* --------------------------------------------------
|
|	Bagian Modals
|	
 --------------------------------------------------*/ 

Route::get('mahasiswa/modal/dosen', array('as' => 'mahasiswa_modal_dosen', 'uses' => 'MahasiswaController@mahasiswa_modal_dosen'));


/* --------------------------------------------------
|
|	Bagian Baca Data
|	V.0.1
|
 --------------------------------------------------*/ 


Route::get('mahasiswa/baca/ringkas', array('as' => 'mahasiswa_baca_ringkas', 'uses' => 'MahasiswaController@mahasiswa_baca_ringkas'));

Route::get('mahasiswa/baca/jadwal', array('as' => 'mahasiswa_baca_jadwal', 'uses' => 'MahasiswaController@mahasiswa_baca_jadwal'));

Route::get('mahasiswa/baca/kalender_akademis', array('as' => 'mahasiswa_baca_kalender_akademis', 'uses' => 'MahasiswaController@mahasiswa_baca_kalender_akademis'));

Route::get('mahasiswa/baca/dosen', array('as' => 'mahasiswa_baca_dosen', 'uses' => 'MahasiswaController@mahasiswa_baca_dosen'));

// Route::get('mahasiswa/baca/dosen_detail', array('as' => 'mahasiswa_baca_dosen_ringkas', 'uses' => 'MahasiswaController@mahasiswa_baca_dosen_detail'));

Route::get('mahasiswa/baca/dosen_penelitian', array('as' => 'mahasiswa_baca_dosen_penelitian', 'uses' => 'MahasiswaController@mahasiswa_baca_dosen_penelitian'));

Route::get('mahasiswa/baca/dosen_pengabdian', array('as' => 'mahasiswa_baca_dosen_pengabdian', 'uses' => 'MahasiswaController@mahasiswa_baca_dosen_pengabdian'));



/* --------------------------------------------------
|
|	Bagian Tambah Data
|	V.0.1
|	
 --------------------------------------------------*/ 

Route::get('mahasiswa/tambah/mahasiswa', array('as' => 'mahasiswa_tambah_mahasiswa', 'uses' => 'MahasiswaController@mahasiswa_tambah_mahasiswa'));

Route::get('mahasiswa/tambah/mahasiswa', array('as' => 'mahasiswa_tambah_mahasiswa', 'uses' => 'MahasiswaController@mahasiswa_tambah_mahasiswa'));

Route::get('admin_jurusan/tambah/jurusan', array('as' => 'admin_jurusan_tambah_jurusan', 'uses' => 'AdminJurusanController@admin_jurusan_tambah_jurusan'));

/* --------------------------------------------------
|
|	Bagian Ubah Data
|	V.0.1
|	
 --------------------------------------------------*/ 



 /* --------------------------------------------------
|
|	Bagian Hapus Data
|	V.0.1
|	
 --------------------------------------------------*/ 



/* ======================================================================================================================================================================================================== */


/* ================================================================================
|	
|	Route Dosen v0.1
|	Scheme on Progress	
|
================================================================================ */ 

Route::get('dosen', array('as' => 'dosen', 'uses' => 'DosenController@dosen_dashboard'));

Route::get('dosen/beranda', array('as' => 'dosen_beranda', 'uses' => 'DosenController@dosen_beranda'));

Route::get('dosen/kegiatan_penelitian', array('as' => 'dosen_kegiatan_penelitian', 'uses' => 'DosenController@dosen_kegiatan_penelitian'));

Route::get('dosen/kegiatan_pengabdian', array('as' => 'dosen_kegiatan_pengabdian', 'uses' => 'DosenController@dosen_kegiatan_pengabdian'));

Route::get('dosen/perkuliahan_akademis', array('as' => 'dosen_perkuliahan_akademis', 'uses' => 'DosenController@dosen_perkuliahan_akademis'));

Route::get('dosen/perkuliahan_nilai', array('as' => 'dosen_perkuliahan_nilai', 'uses' => 'DosenController@dosen_perkuliahan_nilai'));

Route::get('dosen/laporan_perkuliahan', array('as' => 'dosen_laporan_perkuliahan', 'uses' => 'DosenController@dosen_laporan_perkuliahan'));

Route::get('dosen/laporan_absen_dosen', array('as' => 'dosen_laporan_absen_dosen', 'uses' => 'DosenController@dosen_laporan_absen_dosen'));

Route::get('dosen/laporan_slip_gaji', array('as' => 'dosen_laporan_slip_gaji', 'uses' => 'DosenController@dosen_laporan_slip_gaji'));

Route::get('dosen/laporan_permohonan', array('as' => 'dosen_laporan_permohonan', 'uses' => 'DosenController@dosen_laporan_permohonan'));

Route::get('dosen/data_mahasiswa', array('as' => 'dosen_data_mahasiswa', 'uses' => 'DosenController@dosen_data_mahasiswa'));

Route::get('dosen/download', array('as' => 'dosen_download', 'uses' => 'DosenController@dosen_download'));

/* --------------------------------------------------
|
|	Bagian Modals
|	V.0.1	
|
 --------------------------------------------------*/ 

Route::get('dosen/modal/mahasiswa', array('as' => 'dosen_modal_mahasiswa', 'uses' => 'DosenController@dosen_modal_mahasiswa'));

Route::get('dosen/modal/dosen_tambah_penelitian', array('as' => 'dosen_modal_tambah_penelitian', 'uses' => 'DosenController@dosen_modal_tambah_penelitian'));

Route::get('dosen/modal/dosen_ubah_penelitian', array('as' => 'dosen_modal_ubah_penelitian', 'uses' => 'DosenController@dosen_modal_ubah_penelitian'));

Route::get('dosen/modal/hapus_penelitian', array('as' => 'dosen_modal_hapus_penelitian', 'uses' => 'DosenController@dosen_modal_hapus_penelitian'));

Route::get('dosen/modal/dosen_tambah_pengabdian', array('as' => 'dosen_modal_tambah_pengabdian', 'uses' => 'DosenController@dosen_modal_tambah_pengabdian'));

Route::get('dosen/modal/dosen_ubah_pengabdian', array('as' => 'dosen_modal_ubah_pengabdian', 'uses' => 'DosenController@dosen_modal_ubah_pengabdian'));

Route::get('dosen/modal/hapus_pengabdian', array('as' => 'dosen_modal_hapus_pengabdian', 'uses' => 'DosenController@dosen_modal_hapus_pengabdian'));

Route::get('dosen/modal/dosen_ubah_transaksinilai', array('as' => 'dosen_ubah_transaksi_nilai_perkuliahan', 'uses' => 'DosenController@dosen_modal_ubah_transaksi_nilai_perkuliahan'));

/* --------------------------------------------------
|
|	Bagian baca Data
|	V.0.1
|
 --------------------------------------------------*/ 

Route::get('dosen/baca/mahasiswa', array('as' => 'dosen_baca_mahasiswa', 'uses' => 'DosenController@dosen_baca_mahasiswa'));

Route::get('dosen/baca/mahasiswa_detail', array('as' => 'dosen_baca_mahasiswa_detail', 'uses' => 'DosenController@dosen_baca_mahasiswa_detail'));

Route::get('dosen/baca/pengabdian', array('as' => 'dosen_baca_pengabdian', 'uses' => 'DosenController@dosen_baca_pengabdian'));

Route::get('dosen/baca/penelitian', array('as' => 'dosen_baca_penelitian', 'uses' => 'DosenController@dosen_baca_penelitian'));

 /* --------------------------------------------------
|
|	Ubah Tambah Data
|	V.0.1
|
 --------------------------------------------------*/ 
Route::get('dosen/tambah/penelitian', array('as' => 'dosen_tambah_penelitian', 'uses' => 'DosenController@dosen_tambah_penelitian'));

Route::get('dosen/tambah/pengabdian', array('as' => 'dosen_tambah_pengabdian', 'uses' => 'DosenController@dosen_tambah_pengabdian'));

Route::get('dosen/tambah/transaksinilai', array('as' => 'dosen_tambah_transaksi_nilai_perkuliahan', 'uses' => 'DosenController@dosen_tambah_transaksi_nilai_perkuliahan'));

Route::get('dosen/golongan/tambah', array('as' => 'dosen_tambah_golongan', 'uses' => 'DosenController@dosen_tambah_golongan'));

Route::get('dosen/matakuliah/tambah', array('as' => 'dosen_tambah_mata_kuliah', 'uses' => 'DosenController@dosen_tambah_mata_kuliah'));

Route::get('dosen/timeslot/tambah', array('as' => 'dosen_tambah_timeslot', 'uses' => 'DosenController@dosen_tambah_timeslot'));

Route::get('dosen/perkuliahan/tambah', array('as' => 'dosen_tambah_jadwal_perkuliahan', 'uses' => 'DosenController@dosen_tambah_jadwal_perkuliahan'));

Route::get('dosen/absenmahasiswa/tambah', array('as' => 'dosen_tambah_absen_mahasiswa', 'uses' => 'DosenController@dosen_tambah_absen_mahasiswa'));

/* --------------------------------------------------
|
|	Bagian Ubah Data
|	V.0.1
|	
 --------------------------------------------------*/ 

 /*devi*/
Route::get('dosen/ubah/pengabdian', array('as' => 'dosen_ubah_pengabdian', 'uses' => 'DosenController@dosen_ubah_pengabdian'));

Route::get('dosen/ubah/penelitian', array('as' => 'dosen_ubah_penelitian', 'uses' => 'DosenController@dosen_ubah_penelitian'));

Route::get('dosen/ubah/transaksinilai', array('as' => 'dosen_ubah_transaksi_nilai_perkuliahan', 'uses' => 'DosenController@dosen_ubah_transaksi_nilai_perkuliahan'));

Route::get('dosen/matakuliah/ubah', array('as' => 'dosen_ubah_mata_kuliah', 'uses' => 'DosenController@dosen_ubah_mata_kuliah'));

Route::get('dosen/timeslot/ubah', array('as' => 'dosen_ubah_timeslot', 'uses' => 'DosenController@dosen_ubah_timeslot'));

Route::get('dosen/perkuliahan/ubah', array('as' => 'dosen_ubah_jadwal_perkuliahan', 'uses' => 'DosenController@dosen_ubah_jadwal_perkuliahan'));
 
Route::get('dosen/golongan/ubah', array('as' => 'dosen_ubah_golongan', 'uses' => 'DosenController@dosen_ubah_golongan'));

Route::get('dosen/absenmahasiswa/ubah', array('as' => 'dosen_ubah_absen_mahasiswa', 'uses' => 'DosenController@dosen_ubah_absen_mahasiswa'));
/*----*/

 /* --------------------------------------------------
|
|	Bagian Hapus Data
|	V.0.1
|	
 --------------------------------------------------*/ 
 /*devi*/
Route::get('dosen/hapus/pengabdian', array('as' => 'dosen_hapus_pengabdian', 'uses' => 'DosenController@dosen_hapus_pengabdian'));

Route::get('dosen/hapus/penelitian', array('as' => 'dosen_hapus_penelitian', 'uses' => 'DosenController@dosen_hapus_penelitian'));

Route::get('dosen/matakuliah/hapus', array('as' => 'dosen_hapus_mata_kuliah', 'uses' => 'DosenController@dosen_hapus_mata_kuliah'));

Route::get('dosen/timeslot/hapus', array('as' => 'dosen_hapus_timeslot', 'uses' => 'DosenController@dosen_hapus_timeslot'));

Route::get('dosen/perkuliahan/hapus', array('as' => 'dosen_hapus_jadwal_perkuliahan', 'uses' => 'DosenController@dosen_hapus_jadwal_perkuliahan'));

Route::get('dosen/transaksinilai/hapus', array('as' => 'dosen_hapus_transaksi_nilai_perkuliahan', 'uses' => 'DosenController@dosen_hapus_transaksi_nilai_perkuliahan'));
 
Route::get('dosen/golongan/haspus', array('as' => 'dosen_hapus_golongan', 'uses' => 'DosenController@dosen_hapus_golongan'));

Route::get('dosen/absenmahasiswa/hapus', array('as' => 'dosen_hapus_absen_mahasiswa', 'uses' => 'DosenController@dosen_hapus_absen_mahasiswa'));



/* ======================================================================================================================================================================================================== */



/* ================================================================================
|	
|	Route Admin Jurusan v0.1
|	Scheme on Progress
|
================================================================================ */ 

Route::get('admin_jurusan', array('as' => 'admin_jurusan', 'uses' => 'AdminJurusanController@admin_jurusan_dashboard'));

Route::get('admin_jurusan/beranda', array('as' => 'admin_jurusan_beranda', 'uses' => 'AdminJurusanController@admin_jurusan_beranda'));

Route::get('admin_jurusan/data_jurusan', array('as' => 'admin_jurusan_data_jurusan', 'uses' => 'AdminJurusanController@admin_jurusan_data_jurusan'));

Route::get('admin_jurusan/absen_staff', array('as' => 'admin_jurusan_absen_staff', 'uses' => 'AdminJurusanController@admin_jurusan_absen_staff'));

Route::get('admin_jurusan/data_dosen', array('as' => 'admin_jurusan_data_dosen', 'uses' => 'AdminJurusanController@admin_jurusan_data_dosen'));

Route::get('admin_jurusan/download', array('as' => 'admin_jurusan_download', 'uses' => 'AdminJurusanController@admin_jurusan_download'));

/* --------------------------------------------------
|
|	Bagian Modals
|	V.0.1	
|
 --------------------------------------------------*/ 

Route::get('admin_jurusan/modal/tambah_jurusan', array('as' => 'modal_tambah_data_jurusan', 'uses' => 'AdminJurusanController@modal_tambah_data_jurusan'));
Route::get('admin_jurusan/modal/tambah_kegiatan_jurusan', array('as' => 'modal_tambah_kegiatan_jurusan', 'uses' => 'AdminJurusanController@modal_tambah_kegiatan_jurusan'));

/* ======================================================================================================================================================================================================== */



/* ================================================================================
|	
|	Route Admin Prodi v0.1
|	Scheme on Progress
|
================================================================================ */ 

Route::get('admin_prodi', array('as' => 'admin_prodi', 'uses' => 'AdminProdiController@admin_prodi_dashboard'));

Route::get('admin_prodi/beranda', array('as' => 'admin_prodi_beranda', 'uses' => 'AdminProdiController@admin_prodi_beranda'));

Route::get('admin_prodi/karyawan', array('as' => 'admin_prodi_karyawan', 'uses' => 'AdminProdiController@admin_prodi_karyawan'));

Route::get('admin_prodi/mahasiswa', array('as' => 'admin_prodi_mahasiswa', 'uses' => 'AdminProdiController@admin_prodi_mahasiswa'));

Route::get('admin_prodi/absen_dosen', array('as' => 'admin_prodi_absen_dosen', 'uses' => 'AdminProdiController@admin_prodi_absen_dosen'));

Route::get('admin_prodi/absen_mahasiswa', array('as' => 'admin_prodi_absen_mahasiswa', 'uses' => 'AdminProdiController@admin_prodi_absen_mahasiswa'));

Route::get('admin_prodi/download', array('as' => 'admin_prodi_download', 'uses' => 'AdminProdiController@admin_prodi_download'));

Route::get('admin_prodi/penelitian', array('as' => 'admin_prodi_penelitian', 'uses' => 'AdminProdiController@admin_prodi_penelitian'));

Route::get('admin_prodi/pengabdian', array('as' => 'admin_prodi_pengabdian', 'uses' => 'AdminProdiController@admin_prodi_pengabdian'));

Route::get('admin_prodi/kuisioner', array('as' => 'admin_prodi_kuisioner', 'uses' => 'AdminProdiController@admin_prodi_kuisioner'));

/* --------------------------------------------------
|
|	Bagian Modal
|	V.0.1
|
 --------------------------------------------------*/ 
Route::get('admin_prodi/modal/tambah_karyawan', array('as' => 'admin_prodi_modal_tambah_karyawan', 'uses' => 'AdminProdiController@admin_prodi_modal_tambah_karyawan'));

Route::get('admin_prodi/modal/detail_karyawan', array('as' => 'admin_prodi_modal_detail_karyawan', 'uses' => 'AdminProdiController@admin_prodi_modal_detail_karyawan'));

Route::get('admin_prodi/modal/ubah_karyawan', array('as' => 'admin_prodi_modal_ubah_karyawan', 'uses' => 'AdminProdiController@admin_prodi_modal_ubah_karyawan'));

Route::get('admin_prodi/modal/hapus_karyawan', array('as' => 'admin_prodi_modal_hapus_karyawan', 'uses' => 'AdminProdiController@admin_prodi_modal_hapus_karyawan'));

Route::get('admin_prodi/modal/mahasiswa', array('as' => 'admin_prodi_modal_mahasiswa', 'uses' => 'AdminProdiController@admin_prodi_modal_mahasiswa'));

Route::get('admin_prodi/modal/detail_pengabdian_dosen', array('as' => 'admin_prodi_modal_detail_pengabdian_dosen', 'uses' => 'AdminProdiController@admin_prodi_modal_detail_pengabdian_dosen'));

Route::get('admin_prodi/modal/ubah_pengabdian_dosen', array('as' => 'admin_prodi_modal_ubah_pengabdian_dosen', 'uses' => 'AdminProdiController@admin_prodi_modal_ubah_pengabdian_dosen'));

Route::get('admin_prodi/modal/tambah_pengabdian_dosen', array('as' => 'admin_prodi_modal_tambah_pengabdian_dosen', 'uses' => 'AdminProdiController@admin_prodi_modal_tambah_pengabdian_dosen'));

Route::get('admin_prodi/modal/hapus_pengabdian_dosen', array('as' => 'admin_prodi_modal_hapus_pengabdian_dosen', 'uses' => 'AdminProdiController@admin_prodi_modal_hapus_pengabdian_dosen')); 

Route::get('admin_prodi/modal/tambah_penelitian_dosen', array('as' => 'admin_prodi_modal_tambah_penelitian_dosen', 'uses' => 'AdminProdiController@admin_prodi_modal_tambah_penelitian_dosen'));

Route::get('admin_prodi/modal/detail_penelitian_dosen', array('as' => 'admin_prodi_modal_detail_penelitian_dosen', 'uses' => 'AdminProdiController@admin_prodi_modal_detail_penelitian_dosen'));

Route::get('admin_prodi/modal/ubah_penelitian_dosen', array('as' => 'admin_prodi_modal_ubah_penelitian_dosen', 'uses' => 'AdminProdiController@admin_prodi_modal_ubah_penelitian_dosen'));

Route::get('admin_prodi/modal/hapus_penelitian_dosen', array('as' => 'admin_prodi_modal_hapus_penelitian_dosen', 'uses' => 'AdminProdiController@admin_prodi_modal_hapus_penelitian_dosen'));

/* --------------------------------------------------
|
|	Bagian baca Data
|	V.0.1
|
 --------------------------------------------------*/ 

Route::get('admin_prodi/baca/mahasiswa', array('as' => 'admin_prodi_baca_mahasiswa', 'uses' => 'AdminProdiController@admin_prodi_baca_mahasiswa'));

Route::get('admin_prodi/baca/penelitian_dosen', array('as' => 'admin_prodi_baca_penelitian_dosen', 'uses' => 'AdminProdiController@admin_prodi_baca_penelitian_dosen'));

Route::get('admin_prodi/baca/admin_prodi_pengabdian', array('as' => 'admin_prodi_baca_pengabdian','uses' => 'AdminProdiController@admin_prodi_baca_pengabdian'));
//========================== AJI =================================//

/* --------------------------------------------------
|
|	Bagian Tambah Data
|	V.0.1
|	
 --------------------------------------------------*/ 
Route::get('admin_prodi/tambah/admin_prodi_tambah_pengabdian_dosen', array('as' => 'admin_prodi_tambah_pengabdian_dosen', 'uses' => 'AdminProdiController@admin_prodi_tambah_pengabdian_dosen'));

Route::get('admin_prodi/admin_prodi_tambah_penelitian_dosen', array('as' => 'admin_prodi_tambah_penelitian_dosen', 'uses' => 'AdminProdiController@admin_prodi_tambah_penelitian_dosen'));

Route::get('admin_prodi/modal/tambah_karyawan', array('as' => 'admin_prodi_modal_tambah_karyawan', 'uses' => 'AdminProdiController@admin_prodi_modal_tambah_karyawan'));

Route::get('admin_prodi/dosen_tambah_pengabdian', array('as' => 'dosen_tambah_pengabdian', 'uses' => 'AdminProdiController@dosen_tambah_pengabdian'));

/* --------------------------------------------------
|
|	Bagian Ubah Data
|	V.0.1
|	
 --------------------------------------------------*/ 
Route::get('admin_prodi/modal/ubah_karyawan', array('as' => 'admin_prodi_modal_ubah_karyawan', 'uses' => 'AdminProdiController@admin_prodi_modal_ubah_karyawan'));

Route::get('admin_prodi/admin_prodi_ubah_penelitian_dosen', array('as' => 'admin_prodi_ubah_penelitian_dosen', 'uses' => 'AdminProdiController@admin_prodi_ubah_penelitian_dosen'));

Route::get('admin_prodi/dosen_ubah_pengabdian', array('as' => 'dosen_ubah_pengabdian', 'uses' => 'AdminProdiController@dosen_ubah_pengabdian'));

 /* --------------------------------------------------
|
|	Bagian Hapus Data
|	V.0.1
|	
 --------------------------------------------------*/ 
Route::get('admin_prodi/modal/hapus_karyawan', array('as' => 'admin_prodi_modal_hapus_karyawan', 'uses' => 'AdminProdiController@admin_prodi_modal_hapus_karyawan'));

Route::get('admin_prodi/hapus/penelitian_dosen', array('as' => 'admin_prodi_hapus_penelitian_dosen', 'uses' => 'AdminProdiController@admin_prodi_hapus_penelitian_dosen'));

Route::get('admin_prodi/dosen_hapus_pengabdian', array('as' => 'dosen_hapus_pengabdian', 'uses' => 'AdminProdiController@dosen_hapus_pengabdian'));



/* ======================================================================================================================================================================================================== */



/* ================================================================================
|	
|	Route Admin Kemahasiswaan v0.1
|	Scheme on Progress
|
================================================================================ */ 

Route::get('admin_kemahasiswaan', array('as' => 'admin_kemahasiswaan', 'uses' => 'AdminKemahasiswaanController@admin_kemahasiswaan_dashboard'));

Route::get('admin_kemahasiswaan/beranda', array('as' => 'admin_kemahasiswaan_beranda', 'uses' => 'AdminKemahasiswaanController@admin_kemahasiswaan_beranda'));

Route::get('admin_kemahasiswaan/data_mahasiswa', array('as' => 'admin_kemahasiswaan_data_mahasiswa', 'uses' => 'AdminKemahasiswaanController@admin_kemahasiswaan_data_mahasiswa'));

Route::get('admin_kemahasiswaan/perkembangan_kehadiran', array('as' => 'admin_kemahasiswaan_perkembangan_kehadiran', 'uses' => 'AdminKemahasiswaanController@admin_kemahasiswaan_perkembangan_kehadiran'));

Route::get('admin_kemahasiswaan/perkembangan_marksheet', array('as' => 'admin_kemahasiswaan_perkembangan_marksheet', 'uses' => 'AdminKemahasiswaanController@admin_kemahasiswaan_perkembangan_marksheet'));

Route::get('admin_kemahasiswaan/permohonan', array('as' => 'admin_kemahasiswaan_permohonan', 'uses' => 'AdminKemahasiswaanController@admin_kemahasiswaan_permohonan'));

Route::get('admin_kemahasiswaan/permohonan_resign', array('as' => 'admin_kemahasiswaan_permohonan_resign', 'uses' => 'AdminKemahasiswaanController@admin_kemahasiswaan_permohonan_resign'));

Route::get('admin_kemahasiswaan/permohonan_cuti', array('as' => 'admin_kemahasiswaan_permohonan_cuti', 'uses' => 'AdminKemahasiswaanController@admin_kemahasiswaan_permohonan_cuti'));

Route::get('admin_kemahasiswaan/permohonan_drop_out', array('as' => 'admin_kemahasiswaan_permohonan_drop_out', 'uses' => 'AdminKemahasiswaanController@admin_kemahasiswaan_permohonan_drop_out'));

Route::get('admin_kemahasiswaan/download', array('as' => 'admin_kemahasiswaan_download', 'uses' => 'AdminKemahasiswaanController@admin_kemahasiswaan_download'));

/* --------------------------------------------------
|
|	Bagian Modal
|	V.0.1
|
 --------------------------------------------------*/ 

Route::get('admin_kemahasiswaan/modal/tambah_mahasiswa', array('as' => 'admin_kemahasiswaan_modal_tambah_mahasiswa', 'uses' => 'AdminKemahasiswaanController@admin_kemahasiswaan_modal_tambah_mahasiswa'));

Route::get('admin_kemahasiswaan/modal/ubah_mahasiswa', array('as' => 'admin_kemahasiswaan_modal_ubah_mahasiswa', 'uses' => 'AdminKemahasiswaanController@admin_kemahasiswaan_modal_ubah_mahasiswa'));

Route::get('admin_kemahasiswaan/modal/hapus_mahasiswa', array('as' => 'admin_kemahasiswaan_modal_hapus_mahasiswa', 'uses' => 'AdminKemahasiswaanController@admin_kemahasiswaan_modal_hapus_mahasiswa'));

Route::get('admin_kemahasiswaan/modal/detail_mahasiswa', array('as' => 'admin_kemahasiswaan_modal_detail_mahasiswa', 'uses' => 'AdminKemahasiswaanController@admin_kemahasiswaan_modal_detail_mahasiswa'));

Route::get('admin_kemahasiswaan/modal/tambah_permohonan', array('as' => 'admin_kemahasiswaan_modal_tambah_permohonan', 'uses' => 'AdminKemahasiswaanController@admin_kemahasiswaan_modal_tambah_permohonan')); 

Route::get('admin_kemahasiswaan/modal/ubah_permohonan', array('as' => 'admin_kemahasiswaan_modal_ubah_permohonan', 'uses' => 'AdminKemahasiswaanController@admin_kemahasiswaan_modal_ubah_permohonan')); 

Route::get('admin_kemahasiswaan/modal/hapus_permohonan', array('as' => 'admin_kemahasiswaan_modal_hapus_permohonan', 'uses' => 'AdminKemahasiswaanController@admin_kemahasiswaan_modal_hapus_permohonan')); 



/* --------------------------------------------------
|
|	Bagian Baca Data
|	V.0.1
|
 --------------------------------------------------*/ 

Route::get('admin_kemahasiswaan/baca/mahasiswa', array('as' => 'admin_kemahasiswaan_baca_mahasiswa', 'uses' => 'AdminKemahasiswaanController@admin_kemahasiswaan_baca_mahasiswa'));

Route::get('admin_kemahasiswaan/baca/permohonan', array('as' => 'admin_kemahasiswaan_baca_permohonan', 'uses' => 'AdminKemahasiswaanController@admin_kemahasiswaan_baca_permohonan'));

/* --------------------------------------------------
|
|	Bagian Tambah Data
|	V.0.1
|
 --------------------------------------------------*/ 

Route::get('admin_kemahasiswaan/tambah/mahasiswa', array('as' => 'admin_kemahasiswaan_tambah_mahasiswa', 'uses' => 'AdminKemahasiswaanController@admin_kemahasiswaan_tambah_mahasiswa'));

Route::get('admin_kemahasiswaan/tambah/permohonan', array('as' => 'admin_kemahasiswaan_tambah_permohonan', 'uses' => 'AdminKemahasiswaanController@admin_kemahasiswaan_tambah_permohonan'));



 /* --------------------------------------------------
|
|	Bagian Ubah Data
|	V.0.1
|
 --------------------------------------------------*/ 

Route::get('admin_kemahasiswaan/ubah/mahasiswa', array('as' => 'admin_kemahasiswaan_ubah_mahasiswa', 'uses' => 'AdminKemahasiswaanController@admin_kemahasiswaan_ubah_mahasiswa'));

Route::get('admin_kemahasiswaan/ubah/permohonan', array('as' => 'admin_kemahasiswaan_ubah_permohonan', 'uses' => 'AdminKemahasiswaanController@admin_kemahasiswaan_ubah_permohonan'));

 /* --------------------------------------------------
|
|	Bagian Hapus Data
|	V.0.1
|
 --------------------------------------------------*/ 
Route::get('admin_kemahasiswaan/hapus/mahasiswa', array('as' => 'admin_kemahasiswaan_hapus_mahasiswa', 'uses' => 'AdminKemahasiswaanController@admin_kemahasiswaan_hapus_mahasiswa'));

Route::get('admin_kemahasiswaan/hapus/permohonan', array('as' => 'admin_kemahasiswaan_hapus_permohonan', 'uses' => 'AdminKemahasiswaanController@admin_kemahasiswaan_hapus_permohonan'));

/* ======================================================================================================================================================================================================== */


/* ================================================================================
|	
|	Route Admin Inventaris v0.1
|	Scheme on Progress
|
================================================================================ */ 

Route::get('admin_inventaris', array('as' => 'admin_inventaris', 'uses' => 'AdminInventarisController@admin_inventaris_dashboard'));

Route::get('admin_inventaris/beranda', array('as' => 'admin_inventaris_beranda', 'uses' => 'AdminInventarisController@admin_inventaris_beranda'));

Route::get('admin_inventaris/data_inventaris_civitas', array('as' => 'admin_inventaris_data_inventaris_civitas', 'uses' => 'AdminInventarisController@admin_inventaris_data_inventaris_civitas'));

Route::get('admin_inventaris/data_inventaris_jurusan', array('as' => 'admin_inventaris_data_inventaris_jurusan', 'uses' => 'AdminInventarisController@admin_inventaris_data_inventaris_jurusan'));

Route::get('admin_inventaris/data_inventaris_gedung', array('as' => 'admin_inventaris_data_inventaris_gedung', 'uses' => 'AdminInventarisController@admin_inventaris_data_inventaris_gedung'));

Route::get('admin_inventaris/download', array('as' => 'admin_inventaris_download', 'uses' => 'AdminInventarisController@admin_inventaris_download'));

/* --------------------------------------------------
|
|	Bagian Modals
|	V.0.1	
|
 --------------------------------------------------*/ 

Route::get('admin_inventaris/modal/tambah_inventaris_civitas', array('as' => 'modal_tambah_inventaris_civitas', 'uses' => 'AdminInventarisController@modal_tambah_inventaris_civitas'));

Route::get('admin_inventaris/modal/tambah_inventaris_jurusan', array('as' => 'modal_tambah_inventaris_jurusan', 'uses' => 'AdminInventarisController@modal_tambah_inventaris_jurusan'));

/* --------------------------------------------------
|
|	Bagian Baca Data
|	V.0.1
|
 --------------------------------------------------*/ 


/* --------------------------------------------------
|
|	Bagian Tambah Data
|	V.0.1
|
 --------------------------------------------------*/ 


 /* --------------------------------------------------
|
|	Bagian Ubah Data
|	V.0.1
|
 --------------------------------------------------*/ 


 /* --------------------------------------------------
|
|	Bagian Hapus Data
|	V.0.1
|
 --------------------------------------------------*/ 

/* ======================================================================================================================================================================================================== */



/* ================================================================================
|	
|	Route Admin Human Resource Developement v0.1
|	Scheme on Progress
|
================================================================================ */ 

Route::get('admin_hrd', array('as' => 'admin_hrd', 'uses' => 'AdminHRDController@admin_hrd_dashboard'));

Route::get('admin_hrd/beranda', array('as' => 'admin_hrd_beranda', 'uses' => 'AdminHRDController@admin_hrd_beranda'));

Route::get('admin_hrd/data_karyawan', array('as' => 'admin_hrd_data_karyawan', 'uses' => 'AdminHRDController@admin_hrd_data_karyawan'));

Route::get('admin_hrd/absensi_staff', array('as' => 'admin_hrd_absensi_staff', 'uses' => 'AdminHRDController@admin_hrd_absensi_staff'));

Route::get('admin_hrd/permohonan_resign', array('as' => 'admin_hrd_permohonan_resign', 'uses' => 'AdminHRDController@admin_hrd_permohonan_resign'));

Route::get('admin_hrd/permohonan_cuti', array('as' => 'admin_hrd_permohonan_cuti', 'uses' => 'AdminHRDController@admin_hrd_permohonan_cuti'));

Route::get('admin_hrd/permohonan_kas_bon', array('as' => 'admin_hrd_permohonan_kas_bon', 'uses' => 'AdminHRDController@admin_hrd_permohonan_kas_bon'));

Route::get('admin_hrd/permohonan_lainnya', array('as' => 'admin_hrd_permohonan_lainnya', 'uses' => 'AdminHRDController@admin_hrd_permohonan_lainnya'));

Route::get('admin_hrd/download', array('as' => 'admin_hrd_download', 'uses' => 'AdminHRDController@admin_hrd_download'));

Route::get('admin_hrd/berita', array('as' => 'admin_hrd_berita', 'uses' => 'AdminHRDController@admin_hrd_berita'));

Route::get('admin_hrd/tambah', array('as' => 'admin_hrd_tambah', 'uses' => 'AdminHRDController@admin_hrd_tambah'));

Route::get('admin_hrd/ubah', array('as' => 'admin_hrd_ubah', 'uses' => 'AdminHRDController@admin_hrd_ubah'));

Route::get('admin_hrd/hapus', array('as' => 'admin_hrd_hapus', 'uses' => 'AdminHRDController@admin_hrd_hapus'));

Route::get('admin_hrd/permohonan/tambah', array('as' => 'permohonan_tambah', 'uses' => 'AdminHRDController@permohonan_tambah'));

/* --------------------------------------------------
|
|	Bagian Modal Data
|	V.0.1
|
 --------------------------------------------------*/ 

Route::get('admin_hrd/modal/tambah_berita', array('as' => 'admin_hrd_modal_tambah_berita', 'uses' => 'AdminHRDController@admin_hrd_modal_tambah_berita'));

Route::get('admin_hrd/modal/absen_pimpinan', array('as' => 'admin_hrd_modals_absen_pimpinan', 'uses' => 'AdminHRDController@admin_hrd_modals_absen_pimpinan'));

Route::get('admin_hrd/modal/absen_keuangan', array('as' => 'admin_hrd_modals_absen_keuangan', 'uses' => 'AdminHRDController@admin_hrd_modals_absen_keuangan'));

Route::get('admin_hrd/modal/admin_hrd', array('as' => 'admin_hrd_modals_absen_hrd', 'uses' => 'AdminHRDController@admin_hrd_modals_absen_hrd'));

Route::get('admin_hrd/modal/absen_kemahasiswaan', array('as' => 'admin_hrd_modals_absen_kemahasiswaan', 'uses' => 'AdminHRDController@admin_hrd_modals_absen_kemahasiswaan'));

Route::get('admin_hrd/modal/absen_inventaris', array('as' => 'admin_hrd_modals_absen_inventaris', 'uses' => 'AdminHRDController@admin_hrd_modals_absen_inventaris'));

Route::get('admin_hrd/modal/tambah_karyawan', array('as' => 'admin_hrd_modals_tambah_karyawan', 'uses' => 'AdminHRDController@admin_hrd_modals_tambah_karyawan'));

Route::get('admin_hrd/modal/ubah_data_karyawan', array('as' => 'admin_hrd_modals_ubah_data_karyawan', 'uses' => 'AdminHRDController@admin_hrd_modals_ubah_data_karyawan'));

/* --------------------------------------------------
|
|	Bagian Baca Data
|	V.0.1
|
 --------------------------------------------------*/ 

Route::get('admin_hrd/baca/karyawan', array('as' => 'admin_hrd_baca_karyawan', 'uses' => 'AdminHRDController@admin_hrd_baca_karyawan'));

/* --------------------------------------------------
|
|	Bagian Tambah Data
|	V.0.1
|
 --------------------------------------------------*/ 

Route::get('admin_hrd/tambah/karyawan', array('as' => 'admin_hrd_tambah_karyawan', 'uses' => 'AdminHRDController@admin_hrd_tambah_karyawan'));

 /* --------------------------------------------------
|
|	Bagian Ubah Data
|	V.0.1
|
 --------------------------------------------------*/ 


 /* --------------------------------------------------
|
|	Bagian Hapus Data
|	V.0.1
|
 --------------------------------------------------*/ 


/* ======================================================================================================================================================================================================== */



/* ================================================================================
|	
|	Route Pegawai v0.1
|		
|
================================================================================ */ 

Route::get('pegawai', array('as' => 'pegawai', 'uses' => 'PegawaiController@pegawai_dashboard'));

Route::get('pegawai/beranda', array('as' => 'pegawai_beranda', 'uses' => 'PegawaiController@pegawai_beranda'));

Route::get('pegawai/departemen_data_approval', array('as' => 'pegawai_departemen_data_approval', 'uses' => 'PegawaiController@pegawai_departemen_data_approval'));

Route::get('pegawai/departemen_data_penggajian', array('as' => 'pegawai_departemen_data_penggajian', 'uses' => 'PegawaiController@pegawai_departemen_data_penggajian'));

Route::get('pegawai/departemen_laporan_data_karyawan', array('as' => 'pegawai_departemen_laporan_data_karyawan', 'uses' => 'PegawaiController@pegawai_departemen_laporan_data_karyawan'));

Route::get('pegawai/departemen_laporan_data_absensi', array('as' => 'pegawai_departemen_laporan_data_absensi', 'uses' => 'PegawaiController@pegawai_departemen_laporan_data_absensi')); //

Route::get('pegawai/departemen_laporan_data_penggajian', array('as' => 'pegawai_departemen_laporan_data_penggajian', 'uses' => 'PegawaiController@pegawai_departemen_laporan_data_penggajian'));


Route::get('pegawai/departemen_sipil', array('as' => 'pegawai_departemen_sipil', 'uses' => 'PegawaiController@pegawai_departemen_sipil'));

Route::get('pegawai/departemen_akuntansi', array('as' => 'pegawai_departemen_akuntansi', 'uses' => 'PegawaiController@pegawai_departemen_akuntansi'));

Route::get('pegawai/departemen_administrasi_niaga', array('as' => 'pegawai_departemen_administrasi_niaga', 'uses' => 'PegawaiController@pegawai_departemen_administrasi_niaga'));

Route::get('pegawai/departemen_mesin', array('as' => 'pegawai_departemen_mesin', 'uses' => 'PegawaiController@pegawai_departemen_mesin'));

Route::get('pegawai/departemen_gedung_q', array('as' => 'pegawai_departemen_gedung_q', 'uses' => 'PegawaiController@pegawai_departemen_gedung_q'));


Route::get('pegawai/data_input_pemasukkan', array('as' => 'pegawai_data_input_pemasukkan', 'uses' => 'PegawaiController@pegawai_data_input_pemasukkan'));

Route::get('pegawai/data_input_pengeluaran', array('as' => 'pegawai_data_input_pengeluaran', 'uses' => 'PegawaiController@pegawai_data_input_pengeluaran'));

Route::get('pegawai/data_input_golongan_jabatan', array('as' => 'pegawai_data_input_golongan_jabatan', 'uses' => 'PegawaiController@pegawai_data_input_golongan_jabatan'));

Route::get('pegawai/data_input_status', array('as' => 'pegawai_data_input_status', 'uses' => 'PegawaiController@pegawai_data_input_status'));

Route::get('pegawai/data_input_departemen', array('as' => 'pegawai_data_input_departemen', 'uses' => 'PegawaiController@pegawai_data_input_departemen'));

Route::get('pegawai/data_input_tunjangan_jabatan', array('as' => 'pegawai_data_input_tunjangan_jabatan', 'uses' => 'PegawaiController@pegawai_data_input_tunjangan_jabatan'));

Route::get('pegawai/data_input_honor', array('as' => 'pegawai_data_input_honor', 'uses' => 'PegawaiController@pegawai_data_input_honor'));


Route::get('pegawai/laporan_pemasukkan', array('as' => 'pegawai_laporan_pemasukkan', 'uses' => 'PegawaiController@pegawai_laporan_pemasukkan'));

Route::get('pegawai/laporan_pengeluaran', array('as' => 'pegawai_laporan_pengeluaran', 'uses' => 'PegawaiController@pegawai_laporan_pengeluaran'));


Route::get('pegawai/download', array('as' => 'pegawai_download', 'uses' => 'PegawaiController@pegawai_download'));

Route::get('pegawai/tambah/pegawai', array('as' => 'pegawai_tambah_pegawai', 'uses' => 'PegawaiController@pegawai_tambah_pegawai'));


/* --------------------------------------------------
|
|	Bagian Modal Pegawai
|	V.0.1
|
 --------------------------------------------------*/ 

Route::get('pegawai/modal/detail_penggajian', array('as' => 'pegawai_modal_detail_penggajian',  'uses' => 'PegawaiController@pegawai_modal_detail_penggajian'));


/* --------------------------------------------------
|
|	Bagian Baca Data
|	V.0.1
|
 --------------------------------------------------*/ 

Route::get('pegawai/baca/penggajian', array('as' => 'pegawai_baca_penggajian', 'uses' => 'PegawaiController@pegawai_baca_penggajian'));

Route::get('pegawai/baca/karyawan', array('as' => 'pegawai_baca_karyawan', 'uses' => 'PegawaiController@pegawai_baca_karyawan'));

Route::get('pegawai/baca/absensi', array('as' => 'pegawai_baca_absensi', 'uses' => 'PegawaiController@pegawai_baca_absensi'));

/* --------------------------------------------------
|
|	Bagian Tambah Data
|	V.0.1
|
 --------------------------------------------------*/ 


 /* --------------------------------------------------
|
|	Bagian Ubah Data
|	V.0.1
|
 --------------------------------------------------*/ 


 /* --------------------------------------------------
|
|	Bagian Hapus Data
|	V.0.1
|
 --------------------------------------------------*/ 


/* ======================================================================================================================================================================================================== */



/* ================================================================================
|	
|	Route Karyawan v0.1	
|	Scheme on Progress
|
================================================================================ */ 

Route::get('karyawan', array('as' => 'karyawan', 'uses' => 'KaryawanController@karyawan_dashboard'));

Route::get('karyawan/beranda', array('as' => 'karyawan_beranda', 'uses' => 'KaryawanController@karyawan_beranda'));

Route::get('karyawan/profil', array('as' => 'karyawan_profil', 'uses' => 'KaryawanController@karyawan_profil'));

Route::get('karyawan/absensi', array('as' => 'karyawan_absensi', 'uses' => 'KaryawanController@karyawan_absensi'));

Route::get('karyawan/slip_gaji', array('as' => 'karyawan_slip_gaji', 'uses' => 'KaryawanController@karyawan_slip_gaji'));

Route::get('karyawan/permohonan', array('as' => 'karyawan_permohonan', 'uses' => 'KaryawanController@karyawan_permohonan'));

Route::get('karyawan/form_permohonan_resign', array('as' => 'karyawan_form_permohonan_resign', 'uses' => 'KaryawanController@karyawan_form_permohonan_resign'));

Route::get('karyawan/form_permohonan_cuti', array('as' => 'karyawan_form_permohonan_cuti', 'uses' => 'KaryawanController@karyawan_form_permohonan_cuti'));

Route::get('karyawan/form_permohonan_kas_bon', array('as' => 'karyawan_form_permohonan_kas_bon', 'uses' => 'KaryawanController@karyawan_form_permohonan_kas_bon'));

Route::get('karyawan/form_permohonan_lainnya', array('as' => 'karyawan_form_permohonan_lainnya', 'uses' => 'KaryawanController@karyawan_form_permohonan_lainnya'));

Route::get('karyawan/download', array('as' => 'karyawan_download', 'uses' => 'KaryawanController@karyawan_download'));

/* --------------------------------------------------
|
|	Bagian Modal Data
|	V.0.1
|
 --------------------------------------------------*/ 

Route::get('karyawan/modal/tambah_permohonan', array('as' => 'karyawan_modal_tambah_permohonan', 'uses' => 'KaryawanController@karyawan_modal_tambah_permohonan'));

/* --------------------------------------------------
|
|	Bagian Baca Data
|	V.0.1
|
 --------------------------------------------------*/ 
 
Route::get('karyawan/baca/permohonan', array('as' => 'karyawan_baca_permohonan', 'uses' => 'KaryawanController@karyawan_baca_permohonan'));



/* --------------------------------------------------
|
|	Bagian Tambah Data
|	V.0.1
|
 --------------------------------------------------*/ 


 /* --------------------------------------------------
|
|	Bagian Ubah Data
|	V.0.1
|
 --------------------------------------------------*/ 


 /* --------------------------------------------------
|
|	Bagian Hapus Data
|	V.0.1
|
 --------------------------------------------------*/ 


