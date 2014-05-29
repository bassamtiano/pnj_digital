

function DosenBacaMahasiswaController($scope, $http) {

	$http.get('/public/dosen/baca/mahasiswa').success(function(data) {
		$scope.data_mahasiswa = data;
	});

	$scope.modal_baca_mahasiswa_detail = function(nim) {
		$('.modal').load(url_dosen_modal_mahasiswa + '?nim=' + nim, function() {
			$('.modal').modal('show');	
		});
	}



}



function DosenPenelitianController($scope, $http) {

	$http.get('/public/dosen/baca/penelitian').success(function(data) {
		$scope.penelitian = data;
	});


	$scope.dosen_modal_tambah_penelitian = function() {
		$('.modal').load(url_dosen_modal_tambah_penelitian, function() {
			$('.modal').modal('show');	
			
		});
	}

	$scope.dosen_modal_ubah_penelitian = function() {

		$('.modal').load(url_dosen_modal_ubah_penelitian, function() {
			$('.modal').modal('show');	
			
		});
	}
}

	$scope.dosen_modal_ubah_penelitian = function(id_dosen_penelitian) {

		alert(id_dosen_penelitian);

		$('.modal').load(url_dosen_modal_ubah_penelitian + '?id_dosen_penelitian=' + id_dosen_penelitian, function() {
			$('.modal').modal('show');
		});
	}


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
		$('.modal').load(url_dosen_modal_hapus_pengabdian + '?id_dosen_pengabdian=' + id_dosen_pengabdian + '&nik=' + nik, function() {
			$('.modal').modal('show');
		});
	}

} 
