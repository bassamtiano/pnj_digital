<?php

	class BiodataMahasiswa extends Eloquent {

		protected $table = 'biodata_mahasiswa';
		protected $fillable = array('nama', 'jenis_kelamin', 'alamat', 'nomor_telepon', 'email', 'asal_sekolah', 'tahun_lulus', 'id_konsentrasi', 'nama_ayah', 'ttl_ayah', 'pekerjaan_ayah', 'nama_ibu', 'ttl_ibu', 'pekerjaan_ibu', 'nama_wali', 'pekerjaan_wali', 'foto_diri', 'id_jalur_masuk', 'id_ujian');

		protected $guarded = array('id_biodata');

		public static function biodata_mahasiswa_all() {
			// return BiodataMahasiswa::orderBy('id_biodata', 'asc')->paginate(20);
			$no_pendaftaran = '1';
			$nim = '1';
			return DB::select("select status from mahasiswa where no_pendaftaran = ? and nim = ?", array($no_pendaftaran, $nim));
		}

		public static function biodata_mahasiswa_ringkas($id_biodata) {
			return BiodataMahasiswa::select('nama', 'alamat')->where('id_biodata', '=', $id_biodata)->get();
		}

		public static function biodata_mahasiswa_detil() {
			
		}

		public static function biodata_mahasiswa_sort($nama_kolom, $tipe) {
			return BiodataMahasiswa::orderBy($nama_kolom, $tipe)->paginate(20);
		}

		public static function biodata_mahasiswa_cari($nama_kolom, $isi_kolom) {
			return BiodataMahasiswa::where($nama_kolom, 'LIKE', '%' . $isi_kolom . '%')->paginate(20);
		}

		public static function biodata_mahasiswa_tambah( $nama, $jenis_kelamin, $alamat, $nomor_telepon, $email, $asal_sekolah, $tahun_lulus, $id_konsentrasi, $nama_ayah, $ttl_ayah, $pekerjaan_ayah, $nama_ibu, $ttl_ibu, $pekerjaan_ibu, $nama_wali, $pekerjaan_wali, $foto_diri, $id_jalur_masuk, $id_ujian) {
			BiodataMahasiswa::create(compact('nama', 'jenis_kelamin', 'alamat', 'nomor_telepon', 'email', 'asal_sekolah', 'tahun_lulus', 'id_konsentrasi', 'nama_ayah', 'ttl_ayah', 'pekerjaan_ayah', 'nama_ibu', 'ttl_ibu', 'pekerjaan_ibu', 'nama_wali', 'pekerjaan_wali', 'foto_diri', 'id_jalur_masuk', 'id_ujian'));
		}

		public static function biodata_mahasiswa_ubah($id_biodata, $nama, $jenis_kelamin, $alamat, $nomor_telepon, $email, $asal_sekolah, $tahun_lulus, $id_konsentrasi, $nama_ayah, $ttl_ayah, $pekerjaan_ayah, $nama_ibu, $ttl_ibu, $pekerjaan_ibu, $nama_wali, $pekerjaan_wali, $foto_diri, $id_jalur_masuk, $id_ujian) {
			$biodata_mahasiswa = BiodataMahasiswa::find($id_biodata);
			if($foto_diri != null) $biodata_mahasiswa->foto_diri = $foto_diri;

			$biodata_mahasiswa->nama = $nama;
			$biodata_mahasiswa->jenis_kelamin = $jenis_kelamin;
			$biodata_mahasiswa->alamat = $alamat;
			$biodata_mahasiswa->nomor_telepon = $nomor_telepon;
			$biodata_mahasiswa->email = $email;
			$biodata_mahasiswa->asal_sekolah = $asal_sekolah;
			$biodata_mahasiswa->tahun_lulus = $tahun_lulus;
			$biodata_mahasiswa->id_konsentrasi = $id_konsentrasi;
			$biodata_mahasiswa->nama_ayah = $nama_ayah;
			$biodata_mahasiswa->ttl_ayah = $ttl_ayah;
			$biodata_mahasiswa->pekerjaan_ayah = $pekerjaan_ayah;
			$biodata_mahasiswa->nama_ibu = $nama_ibu;
			$biodata_mahasiswa->ttl_ibu = $ttl_ibu;
			$biodata_mahasiswa->pekerjaan_ibu = $pekerjaan_ibu;
			$biodata_mahasiswa->nama_wali = $nama_wali;
			$biodata_mahasiswa->pekerjaan_wali = $pekerjaan_wali;
			$biodata_mahasiswa->foto_diri = $foto_diri;
			$biodata_mahasiswa->id_jalur_masuk = $id_jalur_masuk;
			$biodata_mahasiswa->id_ujian = $id_ujian;
			$biodata_mahasiswa->save();
		}

		public function biodata_mahasiswa_hapus($id_biodata) {
			BiodataMahasiswa::destroy($id_biodata);
		}

	}