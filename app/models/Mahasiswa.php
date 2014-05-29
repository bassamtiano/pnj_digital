<?php

	class Mahasiswa extends Eloquent {

		protected $table = 'tbl_mahasiswa';
		protected $guarded = array('nim');
		protected $fillable = array('nim', 'nama', 'jenis_kelamin', 'alamat', 'nomor_telepon', 'email', 'id_konsentrasi_prodi', 'tahun_masuk', 'tahun_lulus', 'nama_ayah', 'tanggal_lahir_ayah', 'pekerjaan_ayah', 'nama_ibu', 'tanggal_lahir_ibu', 'pekerjaan_ibu', 'nama_wali', 'pekerjaan_wali', 'foto_diri', 'id_jalur_masuk', 'id_kelas', 'status', 'status_pembayaran');

		public function getAuthIdentifier() {
			return $this->getKey();
		}


/* ================================================================================
|	
|	Relation
|	V0.1
|
================================================================================ */ 

		public function KonsentrasiProdi() {
			return $this->hasOne('KonsentrasiProdi');
		}


			
/* ================================================================================
|	
|	Read Process Handler
|	V0.1
|
================================================================================ */ 

		public static function mahasiswa_all() {
			return Mahasiswa::orderBy('nim', 'asc')->get();
		}

		public static function mahasiswa_sort_by($column_name, $tipe) {
			return Mahasiswa::orderBy($column_name, $tipe)->get();
		}

		public static function mahasiswa_cari($column_name, $column_val) {
			return Mahasiswa::where($column_name, 'LIKE', '%' . $column_val . '%')->get();
		}





/* ================================================================================
|	
|	Create, Update, Delete Handler
|	V0.1
|
================================================================================ */ 

		public static function mahasiswa_tambah($nim, $nama, $jenis_kelamin, $alamat, $nomor_telepon, $email, $tempat_lahir, $tanggal_lahir, $id_konsentrasi_prodi, $tahun_masuk, $tahun_lulus, $nama_ayah, $tanggal_lahir_ayah, $pekerjaan_ayah, $nama_ibu, $tanggal_lahir_ibu, $pekerjaan_ibu, $nama_wali, $pekerjaan_wali, $foto_diri, $id_jalur_masuk, $id_kelas, $status, $status_pembayaran) {
			return Mahasiswa::create(array( 'nim' => $nim, 'nama' => $nama, 'jenis_kelamin' => $jenis_kelamin, 'alamat' => $alamat, 'nomor_telepon' => $nomor_telepon, 'email' => $email, 'tempat_lahir' => $tempat_lahir, 'tanggal_lahir' => $tanggal_lahir, 'id_konsentrasi_prodi' => $id_konsentrasi_prodi, 'tahun_masuk' => $tahun_masuk, 'tahun_lulus' => $tahun_lulus, 'nama_ayah' => $nama_ayah, 'tanggal_lahir_ayah' => $tanggal_lahir_ayah, 'pekerjaan_ayah' => $pekerjaan_ayah, 'nama_ibu' => $nama_ibu, 'tanggal_lahir_ibu' => $tanggal_lahir_ibu, 'pekerjaan_ibu' => $pekerjaan_ibu, 'nama_wali' => $nama_wali, 'pekerjaan_wali' => $pekerjaan_wali, 'foto_diri' => $foto_diri, 'id_jalur_masuk' => $id_jalur_masuk, 'id_kelas' => $id_kelas, 'status' => $status, 'status_pembayaran' => $status_pembayaran));
		}

		public static function mahasiswa_ubah($id_mahasiswa, $nim, $nama, $jenis_kelamin, $alamat, $nomor_telepon, $email, $tempat_lahir, $tanggal_lahir, $id_konsentrasi_prodi, $tahun_masuk, $tahun_lulus, $nama_ayah, $tanggal_lahir_ayah, $pekerjaan_ayah, $nama_ibu, $tanggal_lahir_ibu, $pekerjaan_ibu, $nama_wali, $pekerjaan_wali, $foto_diri, $id_jalur_masuk, $id_kelas, $status, $status_pembayaran) {
			return Mahasiswa::where('id_mahasiswa', '=', $id_mahasiswa)->update(array('nim' => $nim, 'nama' => $nama, 'jenis_kelamin' => $jenis_kelamin, 'alamat' => $alamat, 'nomor_telepon' => $nomor_telepon, 'email' => $email, 'tempat_lahir' => $tempat_lahir, 'tanggal_lahir' => $tanggal_lahir, 'id_konsentrasi_prodi' => $id_konsentrasi_prodi, 'tahun_masuk' => $tahun_masuk, 'tahun_lulus' => $tahun_lulus, 'nama_ayah' => $nama_ayah, 'tanggal_lahir_ayah' => $tanggal_lahir_ayah, 'pekerjaan_ayah' => $pekerjaan_ayah, 'nama_ibu' => $nama_ibu, 'tanggal_lahir_ibu' => $tanggal_lahir_ibu, 'pekerjaan_ibu' => $pekerjaan_ibu, 'nama_wali' => $nama_wali, 'pekerjaan_wali' => $pekerjaan_wali, 'foto_diri' => $foto_diri, 'id_jalur_masuk' => $id_jalur_masuk, 'id_kelas' => $id_kelas, 'status' => $status, 'status_pembayaran' => $status_pembayaran));
		}

		public static function mahasiswa_hapus($id_mahasiswa) {
			return Mahasiswa::where('id_mahasiswa', '=', $id_mahasiswa)->delete();
		}




/* ================================================================================
|	
|	Special for actor Mahasiswa
|	V0.1
|
================================================================================ */ 


		public static function mahasiswa_baca_ringkas($nim) {
			return Mahasiswa::where('nim', '=', $nim)->get(array('nim', 'nama', 'jenis_kelamin', 'status'));
		}

		public static function mahasiswa_ambil() {
			return Mahasiswa::where('nim', '=', $nim)->get(array('nim', 'nama', 'tempat_lahir', 'tanggal_lahir', 'alamat', 'id_konsentrasi_prodi', 'email', 'nomor_telepon', 'status'));
		}

		public static function mahasiswa_baca_detail($nim) {
			return 	Mahasiswa::where('nim', '=', $nim)->get(array('nim', 'nama', 'jenis_kelamin', 'alamat', 'nomor_telepon', 'email', 'id_konsentrasi_prodi', 'tahun_masuk', 'tahun_lulus', 'nama_ayah', 'tanggal_lahir_ayah', 'pekerjaan_ayah', 'nama_ibu', 'tanggal_lahir_ibu', 'pekerjaan_ibu', 'nama_wali', 'pekerjaan_wali', 'foto_diri', 'id_jalur_masuk', 'id_kelas', 'status', 'status_pembayaran'));
		}

		public static function test_relasi() {
			return Mahasiswa::where('nim', '=', '1')->KonsentrasiProdi()->whereIdKonsentrasiProdi('id_konsentrasi_prodi')->get();
		}





}