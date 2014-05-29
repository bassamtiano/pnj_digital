@extends('layouts.dashboard')

@section('sidebar')

	<ul class="nav nav-sidebar">
		<li id="menu_admin_prodi_beranda" class="menu_admin_prodi_group"><a ><span class="glyphicon glyphicon-home"></span>Beranda</a></li>
		<li>
			<a id="menu_admin_prodi_group_data_prodi"><span class="glyphicon glyphicon-file"></span>Data Program Studi<i style="float:right" id="group_data_prodi_icon" class="glyphicon glyphicon-chevron-down"></i></a>
			<ul class="nav navbar-sidebar sub-navbar" id="group_data_prodi">
				<li id="menu_admin_prodi_karyawan" class="menu_admin_prodi_group"><a><span class="glyphicon glyphicon-folder-close"></span>Karyawan</a></li>
				<li id="menu_admin_prodi_mahasiswa" class="menu_admin_prodi_group"><a><span class="glyphicon glyphicon-folder-close"></span>Mahasiswa</a></li>
				<li id="menu_admin_prodi_absen_dosen" class="menu_admin_prodi_group"><a><span class="glyphicon glyphicon-folder-close"></span>Absen Dosen</a></li>
				<li id="menu_admin_prodi_absen_mahasiswa" class="menu_admin_prodi_group"><a><span class="glyphicon glyphicon-folder-close"></span>Absen Mahasiswa</a></li>
			</ul>
		</li>
		<li id="menu_admin_prodi_download" class="menu_admin_prodi_group"><a><span class="glyphicon glyphicon-file"></span>Kegiatan / Acara</a></li>
		<li id="menu_admin_prodi_penelitian" class="menu_admin_prodi_group"><a><span class="glyphicon glyphicon-file"></span>Penelitian</a></li>
		<li id="menu_admin_prodi_pengabdian" class="menu_admin_prodi_group"><a><span class="glyphicon glyphicon-file"></span>Pengabdian</a></li>
		<li id="menu_admin_prodi_kuisioner" class="menu_admin_prodi_group"><a><span class="glyphicon glyphicon-file"></span>Kuisioner</a></li>
	</ul>

@stop

@section('content')

	<div class="container-fluid" id="admin_prodi_content_dashboard">

	</div>

@stop

@section('support_script')
	
	{{HTML::script('js/controllers/AdminProdiController.js')}}

	@include('admin_prodi.url')

	<script type="text/javascript">

		$(document).ready(function() {



			$('.menu_admin_prodi_group').click(function() {
				dashboard_menu_active('.menu_admin_prodi_group',  '#admin_prodi_content_dashboard' ,'#' + this.id);
			});

			submenu_container('#menu_admin_prodi_group_data_prodi', '#group_data_prodi');

			
		});

	</script>

@stop