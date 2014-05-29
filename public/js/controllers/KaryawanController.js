function KaryawanBacaPermohonanController($scope, $http) {
	$http.get('/public/karyawan/baca/permohonan').success(function(data_permohonan) {
		$scope.permohonan = data_permohonan;
	});
}

function KaryawanTambahPermohonan(id_karyawan) {
	$('.modal').load(url_karyawan_modal_tambah_permohonan + '?id_karyawan=' + id_karyawan  , function() {
			$('.modal').modal('show');	
			
	});
}