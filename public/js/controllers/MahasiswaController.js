function MahasiswaBacaKalenderAkademisController($scope, $http) {

	alert('hai');

	$http.get('/public/mahasiswa/baca/kalender_akademis').success(function(data) {

	});

}

function MahasiswaBacaJadwalController($scope, $http) {

	alert('hai');

	$http.get('/public/mahasiswa/baca/jadwal').success(function(data) {
		$scope.jadwal = data;
	});

}

function MahasiswaBacaBeritaKuliah($scope, $http) {
	$http.get('/public/mahasiswa/baca/berita_kuliah').success(function(data) {
		$scope.jadwal = data;
	});
}

function MahasiswaBacaDosenController($scope, $http) {

	$http.get('/public/mahasiswa/baca/dosen').success(function(data) {
		$scope.dosen = data;
	});
	
	

	$scope.modal_baca_dosen_detail = function(id_dosen) {
		$('.modal').load(url_mahasiswa_modal_dosen + '?id_dosen=' + id_dosen , function() {
			$('.modal').modal('show');	
		});
	} 

	$scope.query_dosen = {};
	$scope.model_pilihan_cari_dosen = 'nik';
}





function MahasiswaBacaMarksheetController($scope, $http) {
	
	$http.get('/public/mahasiswa/baca/marksheet').success(function(data) {
		$scope.dosen = data;
	});

}