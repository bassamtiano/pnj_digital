<?php

class BiodataPegawai extends Eloquent {
	// Abdul Fachmi
	protected $table = "tbl_biodata_pegawai";
	protected $guarded = array('id_biodata_pegawai');
	protected $fillable = array('nama', 'alamat','tempat_lahir','tanggal_lahir','agama','jenis_kelamin',
		'no_telepon','email','pendidikan','status_nikah','foto');

	public static function tambah_biodata_pegawai($nama, $alamat, $tempat_lahir, $tanggal_lahir, 
		$agama, $jenis_kelamin, $no_telepon, $email, $pendidikan, $status_nikah, $foto) {
		return BiodataPegawai::create(array('nama' => $nama, 'alamat' => $alamat, 
			'tempat_lahir' => $tempat_lahir, 'tanggal_lahir' => $tanggal_lahir, 'agama' => $agama, 'jenis_kelamin' => $jenis_kelamin, 
			'no_telepon' => $no_telepon, 'email' => $email, 'pendidikan' => $pendidikan, 'status_nikah' => $status_nikah, 'foto' => $foto));
	}

	public static function ubah_biodata_pegawai($id_biodata_pegawai, $nama, $alamat, $tempat_lahir, $tanggal_lahir, 
		$agama, $jenis_kelamin, $no_telepon, $email, $pendidikan, $status_nikah, $foto) {
		return BiodataPegawai::where('id_biodata_pegawai', '=', $id_biodata_pegawai)->update(array('id_biodata_pegawai' => $id_biodata_pegawai, 'nama' => $nama, 'alamat' => $alamat, 
			'tempat_lahir' => $tempat_lahir, 'tanggal_lahir' => $tanggal_lahir, 'agama' => $agama, 'jenis_kelamin' => $jenis_kelamin, 
			'no_telepon' => $no_telepon, 'email' => $email, 'pendidikan' => $pendidikan, 'status_nikah' => $status_nikah, 'foto' => $foto));
	}

	public static function hapus_biodata_pegawai($id_biodata_pegawai) {
		return BiodataPegawai::where('id_biodata_pegawai', '=', $id_biodata_pegawai)->delete();
	}
}
