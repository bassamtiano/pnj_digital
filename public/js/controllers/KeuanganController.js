function KeuanganBacaPenggajian($scope, $http) {
	
	$http.get('keuangan/baca/penggajian').success(function(data_p) {
		$scope.data_penggajian = data_p;
	});

	$scope.modal_detail_data_penggajian = function() {
		$('.modal').load(url_keuangan_modal_detail_penggajian , function() {
			$('.modal').modal('show');	
			
		});
	}

}

function KeuanganBacaKaryawan($scope, $http) {
	
	$http.get('keuangan/baca/karyawan').success(function(data_k) {
		$scope.data_karyawan = data_k;
	});

}

function KeuanganBacaAbsensi($scope, $http) {
	
	$http.get('keuangan/baca/absensi').success(function(data_a) {
		$scope.data_absensi = data_a;
	});

}

function KeuanganBacaDepartemen($scope, $http) {

	$http.get('keuangan/baca/departemen').success(function(data_d) {
		$scope.data_departemen = data_d;
	});

}

function KeuanganBacaHonor($scope, $http) {

	$http.get('keuangan/baca/honor').success(function(data_h) {
		$scope.data_honor = data_h;
	});

}