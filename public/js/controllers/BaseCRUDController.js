function BaseCRUDController($scope, $http) {
	$scope.create = function() {

		var url = "";
		var insert = {

		};

		$http.post(url, insert).success(function() {
			r_handler($scope, $http, $read_url, $variabel_read);
		});
	};

	$scope.update = function() {
		var url = "";
		var update = {

		};

		$http.post(url, update).success(function() {
			r_handler($scope, $http, $read_url, $variabel_read);
		});
	};

	$scope.delete = function() {

		var url = "";
		var delete = {

		};

		$http.post(url, update).success(function() {
			r_handler($scope, $http, $read_url, $variabel_read);
		});
	};

	$scope.search = function() {
		
	}

	
}

function r_handler($scope, $http) {

	var url = "";

	$http.get(url).success(function(data) {
		$scope.$variabel_read = data;
	});
}