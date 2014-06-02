<?php

	class TransaksiNilaiPerkuliahan extends Eloquent {
		protected $table = "tbl_transaksi_nilai_perkuliahan";
		protected $guarded = array('id_transaksi_nilai_perkuliahan');
		protected $fillable = array('id_mahasiswa', 'id_dosen','id_matkul', 'semester', 'nilai_tugas','nilai_uts','nilai_uas');

		public static function tambah_transaksi_nilai_perkuliahan($id_mahasiswa, $id_dosen, $id_matkul, $semester, $nilai_tugas, $nilai_uts, $nilai_uas){

			return TransaksiNilaiPerkuliahan::create(array('id_mahasiswa'=>$id_mahasiswa, 'id_dosen'=>$id_dosen,'id_matkul'=>$id_matkul, 'semester' => $semester,'nilai_tugas'=>$nilai_tugas, 'nilai_uts'=>$nilai_uts, 'nilai_uas'=>$nilai_uas));

		}

		public static function ubah_transaksi_nilai_perkuliahan($id_transaksi_nilai_perkuliahan, $id_mahasiswa, $id_dosen, $id_matkul, $semester, $nilai_tugas, $nilai_uts, $nilai_uas){

			return TransaksiNilaiPerkuliahan::where('id_transaksi_nilai_perkuliahan','=', $id_transaksi_nilai_perkuliahan)->update(array('id_mahasiswa'=>$id_mahasiswa, 'id_dosen'=>$id_dosen,'id_matkul'=>$id_matkul, 'semester' => $semester,'nilai_tugas'=>$nilai_tugas, 'nilai_uts'=>$nilai_uts, 'nilai_uas'=>$nilai_uas));


		}

		public static function hapus_transaksi_nilai_perkuliahan($id_transaksi_nilai_perkuliahan) {
			return TransaksiNilaiPerkuliahan::where('id_transaksi_nilai_perkuliahan', '=', $id_transaksi_nilai_perkuliahan)->delete();
		}

	}