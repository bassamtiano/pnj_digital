@extends('layouts.dashboard')

@section('sidebar')

	<ul class="nav nav-sidebar"> <!-- awal side bar -->
		<li id="menu_admin_jurusan_beranda" class="menu_admin_jurusan_group"><a href="#"><span class="glyphicon glyphicon-home"></span>Beranda</a></li>
		<li id="menu_admin_jurusan_data_jurusan" class="menu_admin_jurusan_group"><a href="#"><span class="glyphicon glyphicon-list-alt"></span>Data Jurusan</a></li>
		<li id="menu_admin_jurusan_absen_staff" class="menu_admin_jurusan_group"><a href="#"><span class="glyphicon glyphicon-list-alt"></span>Absen Staff</a></li>
		<li id="menu_admin_jurusan_data_dosen" class="menu_admin_jurusan_group"><a href="#"><span class="glyphicon glyphicon-list-alt"></span>Data Dosen</a></li>
		<li id="menu_admin_jurusan_download" class="menu_admin_jurusan_group"><a href="#"><span class="glyphicon glyphicon-download-alt"></span>Download</a></li>
	</ul> <!-- akhir side bar -->

@stop

@section('content')

	<div class="container-fluid" id="admin_jurusan_content_dashboard">

	</div>

@stop

@section('support_script')

	@include('admin_jurusan.url')
	{{HTML::script('js/controllers/AdminJurusanController.js')}}
	
	<script>



		$(document).ready(function() {

			$('.menu_admin_jurusan_group').click(function() {
				dashboard_menu_active('.menu_admin_jurusan_group', '#admin_jurusan_content_dashboard', '#' + this.id);
			});

		});

	</script>

@stop