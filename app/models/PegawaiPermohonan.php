
<?php

	class PegawaiPermohonan extends Eloquent {

		protected $table = 'tbl_pegawai_permohonan';
		protected $guarded = array('id_pegawai_permohonan');
		protected $fillable = array('kategori', 'nik', 'id_jabatan', 'isi', 'approval', 'tanggal');


		public static function pegawai_permohonan() {

		}

		//hapus aja
		public static function tambah_pegawai_permohonan($id_pegawai_permohonan, $kategori, $nik, $id_jabatan, $isi, $approval, $tanggal){
			return PegawaiPermohonan::create(array('id_pegawai_permohonan' => $id_pegawai_permohonan, 'kategori' => $kategori, 'nik' => $nik, 'id_jabatan' => $id_jabatan, 'isi' => $isi, 'approval' => $approval, 'tanggal' => $tanggal));
		}

		public static function ubah_pegawai_permohonan($id_pegawai_permohonan, $kategori, $nik, $id_jabatan, $isi, $approval, $tanggal){
			return PegawaiPermohonan::where('id_pegawai_permohonan', '=', $id_pegawai_permohonan)->update(array('kategori' => $kategori, 'nik' => $nik, 'id_jabatan' => $id_jabatan, 'isi' => $isi, 'approval' => $approval, 'tanggal' => $tanggal));
		}

		public static function hapus_pegawai($id_pegawai_permohonan) {
			return PegawaiPermohonan::where('id_pegawai_permohonan', '=', $id_pegawai_permohonan)->delete();
		}

		//hapus aja

	}