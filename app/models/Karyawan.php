<?php

/* Not fixed */

	class Karyawan extends Eloquent {

		protected $table = "tbl_karyawan";
		protected $guarded = array('id_karyawan', 'nik');
		protected $fillable = array('id_status_karyawan', 'nik', 'nama', 'alamat', 'tempat_lahir', 'tanggal_lahir', 'agama', 'jenis_kelamin', 'tanggal_mulai_kerja', 'id_golongan', 'id_jabatan', 'id_jurusan', 'no_telepon', 'email','pendidikan', 'status_nikah', 'foto', 'status');

		public static function tambah_karyawan($nik, $id_status_karyawan, $nama, $alamat, $tempat_lahir, $tanggal_lahir, $agama, $jenis_kelamin, $tanggal_mulai_kerja, $id_golongan, $id_jabatan, $id_jurusan, $no_telepon, $email, $pendidikan, $status_nikah, $foto, $status) {
			return Karyawan::create(array('nik' => $nik, 'id_status_karyawan' => $id_status_karyawan, 'nama' => $nama, 'alamat' => $alamat, 'tempat_lahir' => $tempat_lahir, 'tanggal_lahir' => $tanggal_lahir, 'tanggal_mulai_kerja' => $tanggal_mulai_kerja, 'id_golongan' => $id_golongan, 'id_jabatan' => $id_jabatan, 'id_jurusan' => $id_jurusan, 'no_telepon' => $no_telepon, 'email' => $email, 'pendidikan' => $pendidikan, 'status_nikah' => $status_nikah, 'foto' => $foto, 'status' => $status));
		}

		public static function ubah_karyawan($id_karyawan ,$id_status_karyawan, $nik, $nama, $alamat, $tempat_lahir, $tanggal_lahir, $agama, $jenis_kelamin, $tanggal_mulai_kerja, $id_golongan, $id_jabatan, $id_jurusan, $no_telepon, $email, $pendidikan, $status_nikah, $foto) {
			return Pegawai::where('id_karyawan', '=', $id_karyawan)->update(array('nik' => $nik, 'id_status_karyawan' => $id_status_karyawan, 'nama' => $nama, 'alamat' => $alamat, 'tempat_lahir' => $tempat_lahir, 'tanggal_lahir' => $tanggal_lahir, 'agama' => $agama, 'jenis_kelamin' => $jenis_kelamin, 'tanggal_mulai_kerja' => $tanggal_mulai_kerja, 'id_golongan' => $id_golongan, 'id_jabatan' => $id_jabatan, 'id_jurusan' => $id_jurusan, 'no_telepon' => $no_telepon, 'email' => $email, 'pendidikan' => $pendidikan, 'status_nikah' => $status_nikah, 'foto' => $foto));
		}

		public static function hapus_karyawan($id_karyawan) {
			return Pegawai::where('nik', '=', $nik)->delete();
		}

		
	}