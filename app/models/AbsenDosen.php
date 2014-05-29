<?php

class AbsenDosen extends Eloquent {
	// Abdul Fachmi
	protected $table = 'tbl_absen_dosen';
	protected $guarded = array('id_absen_dosen', 'id_dosen', 'id_matkul');
	protected $fillable = array('id_dosen', 'tanggal', 'jam', 'id_matkul');

	public static function tambah_absen_dosen($id_dosen, $tanggal, $jam, $id_matkul) {
		return AbsenDosen::create(array('id_dosen' => $id_dosen, 'tanggal' => $tanggal, 'jam' => $jam, 'id_matkul' => $id_matkul));
	}

	public static function ubah_absen_dosen($id_absen_dosen, $id_dosen, $tanggal, $jam, $id_matkul) {
		return AbsenDosen::where('id_absen_dosen', '=', $id_absen_dosen)->update(array('id_absen_dosen' => $id_absen_dosen, 'id_dosen' => $id_dosen, 'tanggal' => $tanggal, 'jam' => $jam, 'id_matkul' => $id_matkul));
	}

	public static function hapus_absen_dosen($id_absen_dosen) {
		return AbsenDosen::where('id_absen_dosen', '=', $id_absen_dosen)->delete();
	}
}