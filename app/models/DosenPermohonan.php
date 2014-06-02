<?php

	class DosenPermohonan extends Eloquent {
		
		protected $table = "tbl_dosen_permohonan";
		protected $guarded = array('id_dosen_permohonan');
		protected $fillable = array('id_permohonan','id_dosen','tanggal_pengajuan','keterangan','status');

		public static function tambah_dosen_permohonan($id_permohonan,$id_dosen,$tanggal_pengajuan,$keterangan,$status) {
			return DosenPermohonan::create(array('id_permohonan' => $id_permohonan, 'id_dosen' => $id_dosen,'tanggal_pengajuan' => $tanggal_pengajuan,'keterangan' => $keterangan, 'status' => $status));
		}

		public static function ubah_dosen_permohonan($id_permohonan, $id_dosen, $tanggal_pengajuan, $keterangan, $status) {
			return DosenPermohonan::where('id_dosen_permohonan', '=', $id_dosen_permohonan)->update(array('id_permohonan' => $id_permohonan, 'id_dosen' => $id_dosen, 'tanggal_pengajuan' => $tanggal_pengajuan,'keterangan' => $keterangan,'status' => $status));
		}

		public static function hapus_jurusan($id_dosen_permohonan) {
			return DosenPermohonan::where('id_dosen_permohonan', '=', $id_dosen_permohonan)->delete();
		}
	}
