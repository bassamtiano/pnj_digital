<?php

	class AbsenMahasiswa extends Eloquent {
		protected $table = "tbl_mahasiswa_absen";
		protected $guarded = array('id_mahasiswa_absen');
		protected $fillable = array('nim', 'id_timeslot','tanggal', 'status');

		

		public static function baca_absen_mahasiswa($nim, $kategori, $spesifik) {

			if($kategori == 'hari') {
				if($spesifik == 'januari') {
					
					$absen_hari = AbsenMahasiswa::whereRaw('nim = ? and month(tanggal) = ? and year(tanggal) = ?', array($nim, '1', '2014'))->get(array('tanggal'));

					$hitung_jam = DB::table('tbl_mahasiswa_absen')
		                     ->select(DB::raw('tanggal, id_timeslot'))
		                     ->whereRaw('nim = ? and month(tanggal) = ?', array($nim, '1'))
		                     ->get();


		            

					foreach($absen_hari as $absen_hari_field) {

						

						return var_dump($absen_hari_field->tanggal);

						
						// return $absen_hari_field = $absen_hari_field . $absen_hari_field['tanggal'];

						// if(empty($absen_hari_value)) {
						// 	$absen_hari_value = $absen_hari_value['tanggal'];
						// }
						// else {
						// 	$absen_hari_value = $absen_hari_value . $absen_hari_value['tanggal'];
						// }
						// return $absen_hari_field['tanggal'];
					}

					

					// return AbsenMahasiswa::whereRaw('nim = ? and month(tanggal) = ? and year(tanggal) = ?', array($nim, '1', '2014'))->get(array('tanggal'))->count('id_timeslot');
				}
				else if($spesifik == 'februari') {

				}
			}
			else if($kategori == 'bulan') {
				$median = array();

				for($b = 1; $b<= 12; $b++) {
					$absen = AbsenMahasiswa::whereRaw('nim = ? and month(tanggal) = ? and year(tanggal) = ?', array($nim, $b, '2014'))->count();
					$absen_a = array('bulan' => $b, 'jumlah' => $absen);
					array_push($median, $absen_a);

				}

				return $median;
			}
			else if($kategori == 'tahun') {

				$tahun_aktif = DB::table('tbl_mahasiswa_absen')
		                     ->select(DB::raw('distinct year(tanggal) as tahun'))
		                     ->get();
				
				
				$median_tahun = array();
				$testa = "";

		        foreach ($tahun_aktif as $field_tahun => $value_tahun) {
		        	foreach ($value_tahun as $k => $v) {

		        		$absen_tahun = AbsenMahasiswa::whereRaw('nim = ? and year(tanggal) = ?', array($nim, $v))->count();
		        		$absen_t = array('tahun' => $v, 'jumlah' => $absen_tahun);
		        		array_push($median_tahun, $absen_t);
		        		
		        	}
		        }

				return $median_tahun;

			}

		}

		public static function tambah_absen_mahasiswa($id_mahasiswa, $id_timeslot, $tanggal, $status){
			return AbsenMahasiswa::create(array('id_mahasiswa' => $id_mahasiswa, 'id_timeslot' => $id_timeslot,'tanggal' => $tanggal, 'status' => $status));
		}

		public static function ubah_absen_mahasiswa($id_absen_mahasiswa, $id_mahasiswa, $id_timeslot, $tanggal, $status){

			return AbsenMahasiswa::where('id_mahasiswa_absen','=', $id_absen_mahasiswa)->update(array('id_mahasiswa' => $id_mahasiswa, 'id_timeslot' => $id_timeslot,'tanggal' => $tanggal, 'status' => $status));

		}

		public static function hapus_absen_mahasiswa($id_absen_mahasiswa) {
			return AbsenMahasiswa::where('id_mahasiswa_absen', '=', $id_absen_mahasiswa)->delete();
		}

	}