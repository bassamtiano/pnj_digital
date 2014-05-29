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

	//alert('hai');

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

function AdminHRDUbahDataKaryawan($scope, $http) {

	alert('hix');

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

function AdminHRDBacaPermohonanKaryawan($scope, $http) {

	//alert('hai');

	$http.get('/public/admin_hrd/baca/permohonan/karyawan').success(function(data_p) {
		$scope.data_permohonan = data_p;
	});



}
