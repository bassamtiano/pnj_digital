<!doctype html>

<html>

<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

	{{HTML::script('js/jquery.min.js')}}
	{{HTML::script('js/angular.min.js')}}
	{{HTML::script('js/bootstrap.min.js')}}

	{{HTML::style('css/bootstrap.min.css')}}
	{{HTML::style('css/bootstrap-theme.min.css')}}

</head>

<body>

	<div class="container">

		<div class="container" style="margin-top:50px;">
			<div class="row">
				<div class="col-md-6">
					<div class="jumbotron" style="background-color:white; border:solid #EBEBEB 1px;">
						<img src="img/Logo_Politeknik_Negeri_Jakarta.jpg" height="300">
						<h2 class="text-center">Sistem Informasi <br> Politeknik Negeri Jakarta</h2>
						<p>Sistem Informasi ini adalah Sistem Informasi untuk semua anggota k</p>
						
					</div>
				</div>
				<div class="col-md-6" >

					<div class="panel panel-default">
					<div class="panel-body">

						<div style="padding-top:20px;padding-bottom:20px;">
							<h1>Log In</h1>
						</div>
						<form class="form-horizontal" role="form" style="margin-left:15px; margin-right:15px;">
							<div class="form-group">
								<label for="inputEmail3" class="col-sm-2 control-label">Email</label>
								<div class="col-sm-10">
									<input type="email" class="form-control" id="inputEmail3" placeholder="Email">
								</div>
							</div>
							<div class="form-group">
								<label for="inputPassword3" class="col-sm-2 control-label">Password</label>
								<div class="col-sm-10">
									<input type="password" class="form-control" id="inputPassword3" placeholder="Password">
								</div>
							</div>

							<div class="form-group">
								<div class="col-sm-offset-2 col-sm-10">
									<div class="checkbox">
										<label>
											<input type="checkbox"> Ingat Saya
										</label>
									</div>
								</div>
							</div>

							<div class="form-group">
								<button class="btn btn-primary col-sm-3">Log In</button>
								<label class="col-sm-9">
									<a href="#" style="float:right; margin-top:7px;">
										<span class="glyphicon glyphicon-question-sign"></span>
										Bantuan
									</a>
									<a href="#" style="float:right; margin-top:7px;">
										<span class="glyphicon glyphicon-info-sign"></span>
										Lupa Password
									</a>
								</label>
							</div>

						</form>

						<div style="margin-top:50px;">
							<blockquote style="border-left-color:#f0ad4e; background-color:#FCF8F2;">
								<h4 style="color:#d9534f;"><span class="glyphicon glyphicon-warning-sign" style="margin-right:10px;"></span>Keterangan</h4>
								<p>
									<ol>
										<li>
											Perhatikan Penulisan Huruf besar dan kecil pada Username dan Password Anda
										</li>
										<li>
											Klik Lupa Password jika anda lupa password
										</li>
									</ol>
								</p>
							</blockquote>
						</div>
					
					</div>

					
				</div>
				</div>
			</div>
		</div>



		<!-- Bagian Modal -->

		<div class="modal fade" id="bantuan_login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

			<div class="modal-dialog">

				<div class="modal-content">

					<div class="modal-header">
						Hai
					</div>


					<div class="modal-body">
						Hai
					</div>

				</div>

			</div>

		</div>

	</div> <!-- Akhir Main Container -->

</body>


</html>