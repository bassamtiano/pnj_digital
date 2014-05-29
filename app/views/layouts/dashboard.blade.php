<html>

<head>

	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" type="image/png" href="img/favicon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

	{{HTML::script('js/jquery.min.js')}}
	{{HTML::script('js/bootstrap.min.js')}}
	{{HTML::script('js/angular.min.js')}}

	
	{{HTML::style('css/bootstrap.min.css')}}
	{{HTML::style('css/broccoli-template.css')}}
	{{HTML::style('font-awesome/css/font-awesome.css')}}

	@yield('head')

	


	<script type="text/javascript">

	function dashboard_menu_active(class_name, id_container ,id_menu) {
		$(class_name).removeClass('active');
		$(id_menu).addClass('active');
		
		$(id_container).load(window[ 'url_' + id_menu.substring(6)]);
		
	}

	function submenu_container(submenu_key, submenu_container) {
		$(submenu_key).click(function() {

			$(submenu_container).slideToggle('slow');
			// $(submenu_key).class('');

			

			$(submenu_container + '_icon').toggleClass('glyphicon-chevron-down glyphicon-chevron-left');
			// $(submenu_container + "_icon").removeClass('glyphicon glyphicon-chevron-down').addClass('glyphicon glyphicon-chevron-right')
			// $(submenu_container + "_icon").attr('glyphicon glyphicon-chevron-right', 'glyphicon glyphicon-chevron-down');

		});
	}

	$(document).ready(function(){
		$(".pull-downs").each(function(){
			$(this).css('margin-top', $(this).parent().height() - $(this).height());
		});
	});

	// function modal_close() {
	// 	$('.modal').modal('hide');
	// 	$('body').removeClass('modal-open');
	// 	$('.modal-backdrop').remove();
	// }

	</script>


	<style>


		html {
			font-size: 10px;
		}

		a {
			cursor:pointer;
		}

		#dashboard-layout-header {
			background-color:#0A7C9F;
		}

		.sidebar {
			display:none;
		}

		@media (min-width: 768px) {
			.sidebar {
				position: fixed;

				top: 51px;
				bottom: 0px;
				left: 0px;

				z-index: 1000;
				display: block;

				overflow-x:hidden;
				overflow-y:auto;

				background-color: #1F2730;
			}
		}

		.nav-sidebar {
			/*margin-right: -18px;  20px padding + 1px border */
			margin-right: -17px; 
			margin-bottom: 20px;
			margin-left: -20px;

			

			color: #FFFF00;
		}
		.nav-sidebar > li > a {
			
			padding-left: 20px;

			color:white;	
			border-bottom:solid #141B21 0.9pt;
		}


		.nav-sidebar > li > a:hover{
			background-color: #324250;
		}

		.nav-sidebar > li > a > span{
			margin-right:20px;
		}

		.nav-sidebar > .active > a {
			color: #fff;
			background-color: #324250;
			border-right: solid #658FAE 5px;
		}


		.col-md-9, .col-md-3 {
		    float:none;
		    display:inline-block;
		    vertical-align:middle;
		    margin-right:-4px;
		}

		.sub-navbar > li{
			border-bottom: solid #141B21 0.8pt;
			background-color: #1F2730;	
			
		}

		.sub-navbar > .active {
			background-color: #324250;
			border-right: solid black 2pt;
		}

		.sub-navbar > .active > a {
			border-right: solid #658FAE 3px;
		}

		.sub-navbar > li > a{
			color:white;
			margin-left:40px;
		}

		.sub-navbar > li > a > span {
			margin-right:30px;
		}

		

		.sub-navbar > li:hover {
			background-color: #324250;
		}

		.sub-navbar > li > a:hover {
			background-color: #324250;
		}

		/* Bagian Dropdown User Name */

		
		.logopnj {
			position: block;
			max-height: 5px;
			padding: 0;
			margin: 0;
		}


		#dropdown_user_name {
			
			background-color: #0A7C9F;
			color:white;
		}

		#dropdown_user_name:hover {
			
			background-color: #324D61;
		}

		#dropdown_user_name:focus {
			background-color: #324D61;
		}

		#dropdown_user_name:after  {
			background-color: #324D61;
		}

		.nav > .navbar-nav > .navbar-right > li > a {
			color:white;
		}

		.brocolli-nav-bar-option {
			background-color: #0A7C9F;
			color:white;
		}

		.navbar-right > li > .brocolli-nav-bar-option:hover {
			color:white;
			background-color:#324D61;
		}

		.brocolli-nav-bar-option > span {
			margin-right: 10px;
		}


		.moduls-main-content {
			background-color: white;
			padding:20px;

			height: 80%;

		}

		.moduls-main-content > .col-md-12 > .container-fluid > .row {
			font-size: 18px;

			padding-top: 5px;
			padding-bottom: 5px;
		}

	</style>

</head>

<body style="background-color:#F4F4F4" ng-app>

	<div class="navbar navbar-fixed-top" role="navigation" id="dashboard-layout-header">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-2">
					<img src="img/pnj-dashboard.png" height="40" style="margin-top:5px;">
				</div>
				<div class="col-md-10">

					<div class="" >

						<ul class="nav navbar-nav navbar-right" >
							<li>
								<a href="#" class="brocolli-nav-bar-option"><span class="glyphicon glyphicon-envelope"></span>Message<span class="badge">1</span></a>
							</li>
							<li class="dropdown-toggle">
								<a href="#" class="" data-toggle="dropdown" id="dropdown_user_name">@yield('username')</a>
								<ul class="dropdown-menu">
									<li><a href="#"><span class="glyphicon glyphicon-user"></span> My Profile</a></li>
									<li class="divider"></li>
									<li><a href="#"><span class="glyphicon glyphicon-log-out"></span> Log Out</a></li>
								</ul>
							</li>
						</ul>

					</div>

				</div>
			</div>
		</div>
	</div>

	<div class="container-fluid" >


		<div class="row">

			<div class="col-md-2 sidebar">
				@yield('sidebar')
			</div>

			<div class="col-md-10 col-md-offset-2" style="margin-top:51px; overflow-x:hidden;" >



					@yield('content')

				
			</div>

		</div>

	</div>

	<div id="modal" class="modal fade" role="dialog" aria-hidden="true"></div>
<!-- 
	<div id="modal_tambah" class="modal fade" role="dialog" aria-hidden="true"></div>

	<div id="modal_ubah" class="modal fade" role="dialog" aria-hidden="true"></div>

	<div id="modal_hapus" class="modal fade" role="dialog" aria-hidden="true"></div>

	<div id="modal_detail" class="modal fade" role="dialog" aria-hidden="true"></div> -->

	@yield('support_script')


</body>

</htmL>