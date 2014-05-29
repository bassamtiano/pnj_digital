@extends('layouts.dashboard')

@section('sidebar')

	<ul class="nav nav-sidebar"> <!-- awal side bar -->
		<li id="menu_mahasiswa_dashboard" class="menu_mahasiswa_group"><a ><span class="glyphicon glyphicon-home"></span>Dashboard</a></li>
		<li id="menu_mahasiswa_akademis" class="menu_mahasiswa_group"><a ><span class="glyphicon glyphicon-list-alt"></span>Akademis</a></li>
		<li id="menu_mahasiswa_kalender_akademis" class="menu_mahasiswa_group"><a ><span class="glyphicon glyphicon-list-alt"></span>Kalender Akademis</a></li>
		<li>
			<a id="menu_mahasiswa_group_perkuliahan"><span class="glyphicon glyphicon-file"></span>Perkuliahan<i style="float:right" id="group_perkuliahan_icon" class="glyphicon glyphicon-chevron-down"></i></a>
			<ul class="nav navbar-sidebar sub-navbar" id="group_perkuliahan">
				<li id="menu_mahasiswa_jadwal" class="menu_mahasiswa_group"><a ><span class="glyphicon glyphicon-folder-close"></span>Jadwal</a></li>
				<li id="menu_mahasiswa_berita_perkuliahan" class="menu_mahasiswa_group"><a  ><span class="glyphicon glyphicon-folder-close"></span>Berita Kuliah</a></li>
				<li id="menu_mahasiswa_marksheet" class="menu_mahasiswa_group"><a ><span class="glyphicon glyphicon-folder-close"></span>Marksheet</a></li>
			</ul>
		</li>
		<li id="menu_mahasiswa_dosen" class="menu_mahasiswa_group"><a ><span class="glyphicon glyphicon-list-alt"></span>Dosen</a></li>
		<li id="menu_mahasiswa_download" class="menu_mahasiswa_group"><a ><span> ? </span>Download</a></li>
		<li id="menu_mahasiswa_evaluasi_kinerja" class="menu_mahasiswa_group"><a ><span> ? </span>Evaluasi Kinerja Dosen</a></li>

		<input type="text" ng-model="sometext" />
		<h1>Hello @{{ sometext }}</h1>

	</ul> <!-- akhir side bar -->

@stop

@section('content')

	<div class="container-fluid" id="mahasiswa_content_dashboard">



	</div>

@stop

@section('modal_dialog')



@stop


@section('support_script')

	@include('mahasiswa.url');

	
	{{HTML::script('js/controllers/MahasiswaController.js')}}

	<script>

		$(document).ready(function() {
			dashboard_menu_active('.menu_mahasiswa_group', '#mahasiswa_content_dashboard', '#menu_mahasiswa_dashboard');

			$('.menu_mahasiswa_group').click(function() {
				dashboard_menu_active('.menu_mahasiswa_group', '#mahasiswa_content_dashboard', '#' + this.id);
			});

			submenu_container('#menu_mahasiswa_group_perkuliahan', '#group_perkuliahan');
			
		});

	</script>



@stop
