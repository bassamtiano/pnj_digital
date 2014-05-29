<?php

class LaporanDownload extends Eloquent {
	protected $table = 'tbl_laporan_download';
	protected $guarded = array('id_laporan_download');
	protected $fillable = array('judul', 'target', 'tanggal_upload');

	public static function tambah_laporan_download($judul, $target, $tanggal_upload) {
		return LaporanDownload::create(array('judul' => $judul, 'target' => $target, 'tanggal_upload' => $tanggal_upload));
	}

	public function ubah_laporan_download($id_laporan_download, $judul, $target, $tanggal_upload) {
		return LaporanDownload::where('id_laporan_download', '=', $id_laporan_download)->update(array('id_laporan_download' => $id_laporan_download, 'judul' => $judul, 'target' => $target, 'tanggal_upload' => $tanggal_upload));
	}

	public function hapus_laporan_download($id_laporan_download) {
		return LaporanDownload::where('id_laporan_download', '=', $id_laporan_download)->delete();
	}
}
