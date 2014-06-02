/* ------------------------------------------------------------------*/ 
/* ------------------------MAHASISWA----------------------------------*/ 
/* ------------------------------------------------------------------*/ 
function DosenBacaMahasiswaController($scope, $http) {

	$http.get('/public/dosen/baca/mahasiswa').success(function(data) {
		$scope.data_mahasiswa = data;
	});


	$scope.dosen_modal_detail_mahasiswa= function(nim) {
		$('.modal').load(url_dosen_modal_detail_mahasiswa + '?nim=' + nim, function() {

			$('.modal').modal('show');	
		});
	}

	$scope.query = {};
	$scope.model_pilihan_cari = 'nim';

}


/* ------------------------------------------------------------------*/ 
/* ------------------------DOWNLOAD----------------------------------*/ 
/* ------------------------------------------------------------------*/ 
function DosenDownloadController($scope, $http) {
	$http.get('/public/dosen/baca/download').success(function(data) {
		$scope.download = data;
	});
}



/* ------------------------------------------------------------------*/ 
/* ------------------------PENELITIAN----------------------------------*/ 
/* ------------------------------------------------------------------*/ 
function DosenPenelitianController($scope, $http) {

	$http.get('/public/dosen/baca/penelitian').success(function(data) {
		$scope.penelitian = data;
	});


	$scope.dosen_modal_tambah_penelitian = function() {
		$('.modal').load(url_dosen_modal_tambah_penelitian, function() {
			$('.modal').modal('show');	
			
		});
	}

	$scope.dosen_modal_ubah_penelitian = function(id_dosen_penelitian) {

		$('.modal').load(url_dosen_modal_ubah_penelitian + '?id_dosen_penelitian=' + id_dosen_penelitian, function() {
			$('.modal').modal('show');	
			
		});
	}

	$scope.dosen_modal_hapus_penelitian = function(id_dosen_penelitian, nik) {
		alert('nani mulu');
		$('.modal').load(url_dosen_modal_hapus_penelitian + '?id_dosen_penelitian=' + id_dosen_penelitian, function() {
			$('.modal').modal('show');
		});
	}

	$scope.query = {};
	$scope.model_pilihan_cari = 'id_dosen_penelitian';
}



/* ------------------------------------------------------------------*/ 
/* ------------------------PENGABDIAN----------------------------------*/ 
/* ------------------------------------------------------------------*/ 
function DosenBacaPengabdianController($scope, $http) {
	// Modified Abdul Fachmi 5/14/2014 3:23PM

	//alert('hai');

	$http.get('/public/dosen/baca/pengabdian').success(function(data) {
		$scope.pengabdian = data;
	});

	$scope.dosen_modal_tambah_pengabdian = function() {

		$('.modal').load(url_dosen_modal_tambah_pengabdian , function() {
			$('.modal').modal('show');				
		});
	}

	$scope.dosen_modal_ubah_pengabdian = function(id_dosen_pengabdian) {
		$('.modal').load(url_dosen_modal_ubah_pengabdian + '?id_dosen_pengabdian=' + id_dosen_pengabdian, function() {
			$('.modal').modal('show');
		});
	}

	$scope.dosen_modal_hapus_pengabdian = function(id_dosen_pengabdian, nik) {
		$('.modal').load(url_dosen_modal_hapus_pengabdian + '?id_dosen_pengabdian=' + id_dosen_pengabdian, function() {
			$('.modal').modal('show');
		});
	}

	$scope.query = {};
	$scope.model_pilihan_cari = 'id_dosen_pengabdian';

} 


/* ------------------------------------------------------------------*/ 
/* -----------------------NILAI---------------------------------*/ 
/* ------------------------------------------------------------------*/ 
function DosenTransaksiNilaiController($scope, $http) {

	$http.get('/public/dosen/baca/nilai').success(function(data) {
		$scope.nilai = data;
	});	

	$scope.dosen_modal_ubah_transaksi_nilai_perkuliahan = function(id_transaksi_nilai_perkuliahan) {
		$('.modal').load(url_dosen_modal_ubah_transaksi_nilai_perkuliahan + 'id_transaksi_nilai_perkuliahan=' + id_transaksi_nilai_perkuliahan, function() {
			$('.modal').modal('show');				
		});
	}
}


/* ------------------------------------------------------------------*/ 
/* -----------------------MATA KULIAH---------------------------------*/ 
/* ------------------------------------------------------------------*/ 
function DosenMatakuliahController($scope, $http) {

	$http.get('/public/dosen/baca/mata_kuliah').success(function(data) {
		$scope.mata_kuliah = data;
	});


	$scope.dosen_modal_tambah_mata_kuliah = function() {
		$('.modal').load(url_dosen_modal_tambah_mata_kuliah, function() {
			$('.modal').modal('show');	
			
		});
	}

	$scope.dosen_modal_ubah_mata_kuliah = function(id_mata_kuliah) {

		$('.modal').load(url_dosen_modal_ubah_mata_kuliah + '?id_mata_kuliah=' + id_mata_kuliah, function() {
			$('.modal').modal('show');	
			
		});
	}

	$scope.dosen_modal_hapus_mata_kuliah = function(id_mata_kuliah) {
		alert('nani mulu');
		$('.modal').load(url_dosen_modal_hapus_mata_kuliah + '?id_mata_kuliah=' + id_mata_kuliah, function() {
			$('.modal').modal('show');
		});
	}
	$scope.query = {};
	$scope.model_pilihan_cari = 'id_mata_kuliah';
}

