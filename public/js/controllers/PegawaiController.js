function PegawaiBacaPenggajian($scope, $http) {
	
	$http.get('pegawai/baca/penggajian').success(function(data_p) {
		$scope.data_penggajian = data_p;
	});

	$scope.modal_detail_data_penggajian = function() {
		$('.modal').load(url_pegawai_modal_detail_penggajian , function() {
			$('.modal').modal('show');	
			
		});
	}

}

function PegawaiBacaKaryawan($scope, $http) {
	
	$http.get('pegawai/baca/karyawan').success(function(data_k) {
		$scope.data_karyawan = data_k;
	});

}

function PegawaiBacaAbsensi($scope, $http) {
	
	$http.get('pegawai/baca/absensi').success(function(data_a) {
		$scope.data_absensi = data_a;
	});

}