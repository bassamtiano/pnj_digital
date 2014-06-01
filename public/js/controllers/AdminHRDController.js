function AdminHRDBacaBeritaController($scope, $http) {
	alert("tes");

	$scope.modal_tambah_berita = function() {
		$('.modal').load(url_admin_hrd_modal_tambah_berita , function() {
			$('.modal').modal('show');	
			
		});
	}

		$scope.modals_absen_pimpinan = function() {
		$('.modal').load(url_admin_hrd_modals_absen_pimpinan , function() {
			$('.modal').modal('show');	
			
		});
	}
}

function AdminHRDBacaDataKaryawan($scope, $http) {

	$http.get('/public/admin_hrd/baca/karyawan').success(function(data_k) {
		$scope.data_karyawan = data_k;
	});



	$scope.admin_hrd_modals_tambah_karyawan = function() {
		//alert('hai');
		$('.modal').load(url_admin_hrd_modals_tambah_karyawan , function() {
			$('.modal').modal('show');	
		});
	}


	$scope.modals_ubah_data_karyawan = function() {
		$('.modal').load(url_admin_hrd_modals_ubah_data_karyawan , function() {
			$('.modal').modal('show');
		});
	}


}

function AdminHRDBacaAbsenStaffController($scope, $http) {

	//alert('hai');

	$scope.modals_absen_pimpinan = function() {
		$('.modal').load(url_admin_hrd_modals_absen_pimpinan , function() {
			$('.modal').modal('show');	
			
		});
	}


	$scope.modals_absen_keuangan = function() {
		$('.modal').load(url_admin_hrd_modals_absen_keuangan , function() {
			$('.modal').modal('show');	
			
		});
	}

	$scope.modals_absen_hrd = function() {
		$('.modal').load(url_admin_hrd_modals_absen_hrd , function() {
			$('.modal').modal('show');	
			
		});
	}

	$scope.modals_absen_kemahasiswaan = function() {
		$('.modal').load(url_admin_hrd_modals_absen_kemahasiswaan , function() {
			$('.modal').modal('show');	
			
		});
	}

	$scope.modals_absen_inventaris = function() {
		$('.modal').load(url_admin_hrd_modals_absen_inventaris , function() {
			$('.modal').modal('show');	
			
		});
	}

	
}

function AdminHRDBacaKaryawanAbsensi($scope, $http) {
	
	$http.get('/public/admin_hrd/baca/karyawan_absensi').success(function(data_ka) {
		$scope.karyawan_absensi = data_ka;
	});

	$scope.ubah_status_hadir = function(id_ka) {

		$http.get('/public/admin_hrd/ubah/absen?id_karyawan_absensi=' + id_ka + '&status=1').success(function() {
			$http.get('/public/admin_hrd/baca/karyawan_absensi').success(function(data_ka) {
				$scope.karyawan_absensi = data_ka;
			});			
		});
		
	}

	$scope.ubah_status_absen = function(id_ka) {

		$http.get('/public/admin_hrd/ubah/absen?id_karyawan_absensi=' + id_ka + '&status=0').success(function() {
			$http.get('/public/admin_hrd/baca/karyawan_absensi').success(function(data_ka) {
				$scope.karyawan_absensi = data_ka;
			});
		});
	}

}

function AdminHRDBacaKaryawanPermohonan($scope, $http) {

	$http.get('/public/admin_hrd/baca/permohonan/karyawan').success(function(data_p) {
		$scope.permohonan = data_p;
	});
	
	$scope.ubah_batal_permohonan_karyawan = function(id_permohonan) {
		$http.get('/public/admin_hrd/ubah/permohonan?id_karyawan_permohonan=' + id_permohonan + '&status=0').success(function() {
			$http.get('/public/admin_hrd/baca/permohonan/karyawan').success(function(data_p) {
				$scope.permohonan = data_p;
			});
		});
	}

	$scope.ubah_setuju_permohonan_karyawan = function(id_permohonan) {
		$http.get('/public/admin_hrd/ubah/permohonan?id_karyawan_permohonan=' + id_permohonan + '&status=1').success(function() {
			$http.get('/public/admin_hrd/baca/permohonan/karyawan').success(function(data_p) {
				$scope.permohonan = data_p;
			});
		});
	}

}
