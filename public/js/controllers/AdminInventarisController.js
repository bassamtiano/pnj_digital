
function AdminInventarisCivitasController($scope, $http) {
	$http.get('/public/admin_inventaris/baca/civitas').success(function(data){
		$scope.inventariscivitas = data;
	});

	$scope.modal_tambah_inventaris_civitas = function() {
		$('.modal').load(url_modal_tambah_inventaris_civitas , function() {
			$('.modal').modal('show');
			
		});
	}
}

function TambahInventarisJurusanController($scope, $http) {
	$scope.modal_tambah_inventaris_jurusan = function() {
		$('.modal').load(url_modal_tambah_inventaris_jurusan , function() {
			$('.modal').modal('show');
			
		});
	}
}
