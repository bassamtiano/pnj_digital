<?php

Class Dosen extends Eloquent {
	/* Edit by Fachmi 5/13/2014 9:53 */
	protected $table = "tbl_dosen";
	protected $guarded = array('id_dosen', 'id_jurusan', 'id_golongan');
	protected $fillable = array('nik', 'nip', 'nama', 'alamat', 'tempat_lahir', 'tanggal_lahir', 'agama', 'jenis_kelamin', 'no_telepon', 'email', 'status_nikah', 'foto', 'id_jurusan', 'id_golongan', 's1', 's2', 's3', 'status');	

	public function dosen_all() {
		return Dosen::orderBy('nip', 'asc')->get();
	}

	public function dosen_order_by($column_name, $column_val) {
		return Dosen::orderBy($column_name, $column_val);
	}

	public function dosen_cari() {
		return Dosen::where();
	}

/* ================================================================================
|	
|	Read Process Handler
|	V0.1
|
================================================================================ */ 

	public static function dosen_ambil_ringkas($id_dosen) {
		
	}

	public static function ambil_dosen() {



	}


/* ================================================================================
|	
|	Create, Update, Delete Handler
|	V0.1
|
================================================================================ */ 



	public static function dosen_tambah($nik, $nip, $nama, $alamat, $tempat_lahir, $tanggal_lahir, $agama, $jenis_kelamin, $no_telepon, $email, $status_nikah, $foto, $id_jurusan, $id_golongan, $s1, $s2, $s3, $status) {
		// return Dosen::create(array('nik' => ))
		Return Dosen::create(array('id_dosen' => $id_dosen, 'nik' => $nik, 'nip' => $nip, 'nama' => $nama, 'alamat' => $alamat, 'tempat_lahir' => $tempat_lahir, 'tanggal_lahir' => $tanggal_lahir, 'agama' => $agama, 'jenis_kelamin' => $jenis_kelamin, 'no_telepon' => $no_telepon, 'email' => $email, 'status_nikah' => $status_nikah, 'foto' => $foto, 'id_jurusan' => $id_jurusan, 'id_golongan' => $id_golongan, 's1' => $s1, 's2' => $s2, 's3' => $s3, 'status' => $status));
	}

	public static function dosen_ubah($id_dosen, $nik, $nip, $nama, $alamat, $tempat_lahir, $tanggal_lahir, $agama, $jenis_kelamin, $no_telepon, $email, $status_nikah, $foto, $id_jurusan, $id_golongan, $s1, $s2, $s3, $status) {
		Return Dosen::where('id_dosen', '=', $id_dosen)->update(array('id_dosen' => $id_dosen, 'nik' => $nik, 'nip' => $nip, 'nama' => $nama, 'alamat' => $alamat, 'tempat_lahir' => $tempat_lahir, 'tanggal_lahir' => $tanggal_lahir, 'agama' => $agama, 'jenis_kelamin' => $jenis_kelamin, 'no_telepon' => $no_telepon, 'email' => $email, 'status_nikah' => $status_nikah, 'foto' => $foto, 'id_jurusan' => $id_jurusan, 'id_golongan' => $id_golongan, 's1' => $s1, 's2' => $s2, 's3' => $s3, 'status' => $status));
	}

	public static function dosen_hapus($id_dosen) {
		return Dosen::where('id_dosen', '=', $id_dosen)->delete();
	}	

	public static function mahasiswa_tambah($nim, $nama, $id_biodata, $id_konsentrasi_prodi, $id_kelas, $status, $status_pembayaran) {
		return Mahasiswa::create(array( 'nim' => $nim, 'id_biodata' => $id_biodata, 'id_konsentrasi_prodi' => $id_konsentrasi_prodi, 'id_kelas' => $id_kelas, 'status' => $status, 'status_pembayaran' => $status_pembayaran));
	}

	public static function mahasiswa_ubah($nim) {
		return Mahasiswa::where('nim', '=', $nim)->update(array('id_biodata' => $id_biodata, 'id_konsentrasi_prodi' => $id_konsentrasi_prodi, 'id_kelas' => $id_kelas, 'status' => $status, 'status_pembayaran' => $status_pembayaran));
	}

	public static function mahasiswa_hapus($nim) {
		return Mahasiswa::where('nim', '=', $nim)->delete();
	}


/* ================================================================================
|	
|	Special for actor Mahasiswa
|	V0.1
|
================================================================================ */ 

	public static function dosen_ambil() {
		return Dosen::orderBy('id_dosen', 'asc')->get(array('nik', 'nama', 'alamat', 'email'));
	}

	public static function dosen_ambil_detail() {
		return Dosen::where('id_dosen', '=', $id_dosen)->get(array('nik', 'nip', 'nama', 'alamat', 'tempat_lahir', 'tanggal_lahir', 'agama'));
	}

	



// create table `tbl_dosen` (
//   `id_dosen` int not null auto_increment, 
//   `nik` varchar(18) not null, 
//   `nip` varchar(18) not null,
//   `nama` varchar(50) not null, 
//   `alamat` text not null, 
//   `tempat_lahir` varchar(50) not null, 
//   `tanggal_lahir` date not null, 
//   `agama` varchar(50) not null, 
//   `jenis_kelamin` varchar(1) not null, 
//   `no_telepon` varchar(18) not null, 
//   `email` varchar(50) not null, 
//   `pendidikan` varchar(50) not null, 
//   `status_nikah` varchar(50) not null, 
//   `foto` text not null, 
//   `id_program_studi` int not null, 
//   `id_golongan_jabatan` int not null, 
//   `golongan` varchar(30) not null, 
//   `s1` text not null, 
//   `s2` text not null, 
//   `s3` text not null, 
//   `status` varchar(255) not null, 
//   `created_at` date not null, 
//   `updated_at` date not null, 
//   primary key (`id_dosen`)
// );


}