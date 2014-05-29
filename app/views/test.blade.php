<html>

<head>


	{{HTML::script('js/jquery.min.js')}}
	{{HTML::script('js/angular.min.js')}}
	{{HTML::script('js/bootstrap.min.js')}}

	{{HTML::style('css/bootstrap.min.css')}}


</head>

<body ng-app>

	<div ng-controller="testController">

		<ul>
			<li ng-repeat="t in test">@{{t.id}}, @{{t.nama}}, @{{t.pilih}} <a ng-click="link_delete(t.id)" href="#">[ delete ]</a></li>

		</ul>

		<form ng-submit="addTest()">
			<input type="text" placeholder="Masukkan ID" ng-model="textID">
			<input type="text" placeholder="Masukkan Nama" ng-model="textNama">
			<select ng-model="textPilih">
				<option value="A">A</option>
				<option value="B">B</option>
				<option value="C">C</option>
			</select>

			<button type="submit">Add</button>
		</form>

		<form ng-submit="replaceTest()">

			<input type="text" placeholder="ID Faktor" ng-model="textReplaceID">

			<input type="text" placeholder="Nama yang akan diganti" ng-model="textReplaceName">
			<select ng-model="textReplacePilih">
				<option value="A">A</option>
				<option value="B">B</option>
				<option value="C">C</option>
			</select>

			<button type="submit" ng-model="subType" ng-value="insert">Replace</button>
		</form>

		<form ng-submit="removeTest()">
			Delete <input type="text" placeholder="Delete by ID" ng-model="textDeleteID">
			<button type="submit">Delete</button>
		</form>


	</div>



<button type="button" class="btn btn-lg btn-primary" data-animation="am-fade-and-scale" data-placement="center" bs-modal="modal">Click to toggle modal
  <br>
  <small>(using an object)</small>
</button>

	<script>

	$scope.modal = {
  "title": "Title",
  "content": "Hello Modal<br />This is a multiline message!"
};

	</script>


	{{HTML::script('js/controllers/test-controller.js')}}

</body>

</html>