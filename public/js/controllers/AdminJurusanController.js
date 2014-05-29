function AdminJurusanBacaJurusanController($scope, $http) {
	$http.get('/public/admin_jurusan/baca/jurusan').success(function(data_j) {
		$scope.data_jurusan = data_j;
		// alert(data_j);
	});
}

