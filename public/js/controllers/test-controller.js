function testController($scope, $http) {

	fetch_test($scope, $http);

	$scope.addTest = function() {
		var a = {
			id: $scope.textID,
			nama: $scope.textNama,
			pilih: $scope.textPilih
		};

		alert($scope.subType);

		$http.post('/pnj_digital/public/test', a).success(function() {
			fetch_test($scope, $http);
		});

	};

	$scope.replaceTest = function() {

		var u = {
			replace_id: $scope.textReplaceID,
			replace_name: $scope.textReplaceName,
			replace_pilih: $scope.textReplacePilih
		};

		$http.post('/pnj_digital/public/utest', u).success(function() {
			fetch_test($scope, $http);
		});

	};

	$scope.removeTest = function() {

		var d = {
			delete_id: $scope.textDeleteID

		};

		$http.post('/pnj_digital/public/dtest', d).success(function() {
			fetch_test($scope, $http);
		});

	};

	$scope.link_delete = function(link_value) {

		var d = {
			delete_id: link_value
		}

		$http.post('/pnj_digital/public/dtest', d).success(function() {
			fetch_test($scope, $http);
		});

	};
}

function fetch_test($scope, $http) {
	$http.get('/pnj_digital/public/test').success(function(data) {
		$scope.test = data;
	});
}