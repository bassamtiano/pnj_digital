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

		public static function status_absen_sekarang() {
			$tanggal = date('Y-m-d');
			$data_mahasiswa = AbsenMahasiswa::where('tanggal', '=', $tanggal)->get(array('nim'))->first();

			if(empty($data_mahasiswa)) {
				return array('status' => 1);
			}

			else {
				return array('status' => 0);
			}

			
		}

		public static function tambah_absen_mahasiswa(){

			$id_konsentrasi_prodi = '1';

			foreach (Mahasiswa::where('id_konsentrasi_prodi', '=', $id_konsentrasi_prodi)->get(array('nim')) as $dm) {
				AbsenMahasiswa::create(array('tanggal' => date('Y-m-d'), 'jam_mulai' => null, 'jam_akhir' => null, 'nim' => $dm->nim, 'keterangan' => null, 'status' => 0));	
			}

			return '1';
			
		}

		public static function ubah_absen_mahasiswa($id_mahasiswa_absen, $jam_mulai, $jam_akhir, $status){

			return AbsenMahasiswa::where('id_mahasiswa_absen','=', $id_mahasiswa_absen)->update(array('jam_mulai' => $jam_mulai, 'jam_akhir' => $jam_akhir, 'status' => $status));

		}

		public static function hapus_absen_mahasiswa($id_absen_mahasiswa) {
			return AbsenMahasiswa::where('id_mahasiswa_absen', '=', $id_absen_mahasiswa)->delete();
		}

	}