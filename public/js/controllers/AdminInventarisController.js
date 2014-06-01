
function AdminInventarisController($scope, $http) {

	$http.get('/public/admin_inventaris/baca/inventaris').success(function(data){
		$scope.inventaris = data;
	});

	$scope.modal_tambah_inventaris = function() {
		$('.modal').load(url_modal_tambah_inventaris , function() {
			$('.modal').modal('show');
			
		});
	}

	$scope.modal_ubah_inventaris = function(id_inventaris) {

		$('.modal').load(url_modal_ubah_inventaris + '?id_inventaris=' + id_inventaris , function() {
			$('.modal').modal('show');
			
		});
	}

	$scope.modal_hapus_inventaris = function(id_inventaris, nama_inventaris) {
		
		$('.modal').load(url_modal_hapus_inventaris + '?id_inventaris=' + id_inventaris + '&nama_inventaris=' + encodeURIComponent(nama_inventaris) , function() {
			$('.modal').modal('show');
			
		});

	}
}
