

<!-- 
|====================================================================================================|
|	Bassamtiano Renaufalgi Irnawan																	 |
|	Halaman Login 0.2																				 |
|====================================================================================================|
-->

<html>

<head>
	{{HTML::script('js/jquery.min.js')}}
	{{HTML::script('js/angular.min.js')}}
	{{HTML::script('js/bootstrap.min.js')}}

	{{HTML::style('css/bootstrap.min.css')}}


</head>

<style>

	#right-sidebar-login {
		position: fixed;
		top: 37pt;
		bottom: 0px;
		right: 0px;

		z-index: 1000;
		display: block;

		overflow-x:hidden;
		overflow-y:auto;

		background-color: #1F2730;

	}

</style>

<body ng-app style="background-color:#0A7C9F">

	<div class="navbar navbar-fixed-top" role="navigation" id="dashboard-layout-header">
		<div class="container-fluid" style="background-color:#101619">
			<div class="row">
				<div class="col-md-12" style="height:50px;">

				</div>
			</div>
		</div>
	</div>





	<div class="container-fluid" ng-controller="testController" style="margin-top:37pt;">
		<div class="row">

			<div class="col-md-9" style="padding-top:20px;" >

				
					<img src="img/pnj-dashboard.png" height="100"/>

					<div class="panel" style="margin-top:20px;">
						<div class="panel-heading" style="background-color:#055A73; color:white;">
							<h3 style="font-size:18pt" class="panel-title">Informasi Terkinis</h3>
						</div>
						<div class="panel-body" style="overflow-y:auto;height:350px;">
							
						</div>
					</div>

				


			</div>

			

			<div class="col-md-3" style="background-color:#F4F4F4" id="right-sidebar-login">

				<form role="form" action="{{ url('login') }}" method="post" style="margin-top:40px; padding-left:15px; padding-right:15px;">
					<div class="form-group">
						<label for="user_id">Email :</label>
						<input type="text" name="id_user" class="form-control" id="login_email" placeholder="Email">
					</div>
					<div class="form-group">
						<label for="password">Password :</label>
						<input type="password" name="password" class="form-control" id="login_password" placeholder="Password">
					</div>
					<div class="checkbox">
						<label>
						<input type="checkbox"> Tetap Masuk
						</label>
					</div>
					<input type="submit" class="btn btn-success" value="Masuk">
				</form>

			</div>
		</div>
	</div>

{{HTML::script('js/controllers/test-controller.js')}}

</body>

</html>