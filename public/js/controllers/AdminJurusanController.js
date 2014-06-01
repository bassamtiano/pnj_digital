function AdminJurusanBacaJurusanController($scope, $http) {
	$http.get('/public/admin_jurusan/baca/jurusan').success(function(data_j) {
		$scope.data_jurusan = data_j;
	});

	$scope.modal_tambah_jurusan = function() {
		$('.modal').load(url_modal_tambah_data_jurusan , function() {
			$('.modal').modal('show');	
			
		});
	}

	$scope.modal_ubah_jurusan = function(id_jurusan) {

		$('.modal').load(url_modal_ubah_data_jurusan + '?id_jurusan=' + id_jurusan , function() {
			$('.modal').modal('show');	
			
		});
	}

	$scope.modal_hapus_jurusan = function(id_jurusan, jurusan) {


		$('.modal').load(url_modal_hapus_data_jurusan + '?id_jurusan=' + id_jurusan + '&jurusan=' + encodeURIComponent(jurusan) , function() {
			$('.modal').modal('show');
		});

		
	}

}


function AdminJurusanBacaDosenController($scope, $http) {
	$http.get('/public/admin_jurusan/baca/dosen').success(function(data_d) {
		$scope.data_dosen = data_d;
	});
}

function TambahJurusanController($scope, $http) {
	$scope.modal_tambah_jurusan = function() {
		$('.modal').load(url_modal_tambah_data_jurusan , function() {
			$('.modal').modal('show');
		});
	}
}

function TambahKegiatanJurusanController($scope, $http) {
	
	$scope.modal_tambah_kegiatan_jurusan = function() {
		$('.modal').load(url_modal_tambah_kegiatan_jurusan , function() {
			$('.modal').modal('show');
			
		});
	}
}
