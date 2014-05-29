@extends('layouts.dashboard')

@section('sidebar')
	
	<ul class="nav nav-sidebar"> <!-- awal side bar -->
		<li id="menu_dosen_beranda" class="menu_dosen_group"><a><span class="glyphicon glyphicon-home"></span>Beranda</a></li>			

		<li>
			<a id="menu_dosen_group_kegiatan_dosen" class="sub-navbar-key"><span class="glyphicon glyphicon-file"></span>Kegiatan Dosen<i style="float:right" id="group_kegiatan_dosen_icon" class="glyphicon glyphicon-chevron-down"></i></a>
			<ul id="group_kegiatan_dosen" class="nav navbar-sidebar sub-navbar">
				<li id="menu_dosen_kegiatan_penelitian" class="menu_dosen_group"><a href="#" ><span class="glyphicon glyphicon-folder-close"></span>Penelitian</a></li>
				<li id="menu_dosen_kegiatan_pengabdian" class="menu_dosen_group"><a href="#" ><span class="glyphicon glyphicon-folder-close"></span>Pengabdian</a></li>				
			</ul>
		</li>

		<li>
			<a id="menu_dosen_group_perkuliahan"><span class="glyphicon glyphicon-file"></span>Perkuliahan<i style="float:right" id="group_perkuliahan_icon" class="glyphicon glyphicon-chevron-down"></i></a>
			<ul id="group_perkuliahan" class="nav navbar-sidebar sub-navbar">
				<li id="menu_dosen_perkuliahan_akademis" class="menu_dosen_group"><a href="#" ><span class="glyphicon glyphicon-folder-close"></span>Akademis</a></li>
				<li id="menu_dosen_perkuliahan_nilai" class="menu_dosen_group"><a href="#" ><span class="glyphicon glyphicon-folder-close"></span>Nilai</a></li>				
			</ul>
		</li>

		<li>
			<a id="menu_dosen_group_laporan"><span class="glyphicon glyphicon-file"></span>Laporan<i style="float:right" id="group_laporan_icon" class="glyphicon glyphicon-chevron-down"></i></a>
			<ul id="group_laporan" class="nav navbar-sidebar sub-navbar">
				<li id="menu_dosen_laporan_perkuliahan" class="menu_dosen_group"><a href="#" ><span class="glyphicon glyphicon-folder-close"></span>Perkuliahan</a></li>
				<li id="menu_dosen_laporan_absen_dosen" class="menu_dosen_group"><a href="#" ><span class="glyphicon glyphicon-folder-close"></span>Absen Dosen</a></li>				
				<li id="menu_dosen_laporan_slip_gaji" class="menu_dosen_group"><a href="#" ><span class="glyphicon glyphicon-folder-close"></span>Slip Gaji</a></li>				
				<li id="menu_dosen_laporan_permohonan" class="menu_dosen_group"><a href="#" ><span class="glyphicon glyphicon-folder-close"></span>Permohonan</a></li>				
			</ul>
		</li>

		<li id="menu_dosen_data_mahasiswa" class="menu_dosen_group"><a href="#"><span class="glyphicon glyphicon-list-alt"></span>Data Mahasiswa</a></li>
		<li id="menu_dosen_download" class="menu_dosen_group"><a href="#"><span class="glyphicon glyphicon-download-alt"></span>Download</a></li>
	</ul> <!-- akhir side bar -->

@stop

@section('content')

	<div class="container-fluid" id="dosen_content_dashboard">

	</div>

@stop

@section('support_script')
	

	@include('dosen.url');

	{{HTML::script('js/controllers/DosenController.js')}}

	<script>

		$(document).ready(function() {

			dashboard_menu_active('.menu_dosen_group', '#dosen_content_dashboard', '#menu_dosen_beranda');

			$('.menu_dosen_group').click(function() {
				dashboard_menu_active('.menu_dosen_group', '#dosen_content_dashboard', '#' + this.id);
			});

			submenu_container('#menu_dosen_group_kegiatan_dosen', '#group_kegiatan_dosen');
			submenu_container('#menu_dosen_group_perkuliahan', '#group_perkuliahan');
			submenu_container('#menu_dosen_group_laporan', '#group_laporan');


		});

	</script>

@stop