<?php

	class BeritaPerkuliahan extends Eloquent {

		protected $table = "tbl_berita_perkuliahan";
		protected $guarded = array('id_berita_perkuliahan');
		protected $fillable = array('tanggal', 'id_timeslot_mulai', 'id_timeslot_berakhir', 'id_dosen', 'id_ruang_kelas', 'deskripsi');

		public static function tambah_berita_perkuliahan( $tanggal, $id_timeslot_mulai, $id_timeslot_berakhir, $id_ruang_kelas, $deskripsi) {
			return BeritaPerkuliahan::create(array('tanggal' => $tanggal, 'id_timeslot_mulai' => $id_timeslot_mulai, 'id_timeslot_berakhir' => $id_timeslot_berakhir, 'id_ruang_kelas' => $id_ruang_kelas, 'deskripsi' => $deskripsi));
		}

		public static function ubah_berita_perkuliahan() {
			return BeritaPerkuliahan::where('id_berita_perkuliahan', '=', $id_berita_perkuliahan)->update(array('tanggal' => $tanggal, 'id_timeslot_mulai' => $id_timeslot_mulai, 'id_timeslot_berakhir' => $id_timeslot_berakhir, 'id_ruang_kelas' => $id_ruang_kelas, 'deskripsi' => $deskripsi));
		}

		public static function hapus_berita_perkuliahan($id_berita_perkuliahan) {
			return BeritaPerkuliahan::where('id_berita_perkuliahan', '=', $id_berita_perkuliahan)->delete();
		}

	}