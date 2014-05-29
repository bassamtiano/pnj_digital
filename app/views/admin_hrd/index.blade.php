@extends('layouts.dashboard')

@section('sidebar')

<ul class="nav nav-sidebar"> <!-- awal side bar -->
	<li id="menu_admin_hrd_beranda" class="menu_admin_hrd_group"><a ><span class="glyphicon glyphicon-home"></span>Beranda</a></li>
	<li id="menu_admin_hrd_data_karyawan" class="menu_admin_hrd_group"><a ><span class="glyphicon glyphicon-home"></span>Data Karyawan</a></li>
	<li id="menu_admin_hrd_absensi_staff" class="menu_admin_hrd_group"><a ><span class="glyphicon glyphicon-home"></span>Absensi Staff</a></li>
	<li>
		<a id="menu_admin_hrd_group_permohonan"><span class="glyphicon glyphicon-file"></span>Permohonan<i style="float:right" id="group_permohonan_icon" class="glyphicon glyphicon-chevron-down"></i></a>
		<ul class="nav navbar-sidebar sub-navbar" id="group_permohonan">
			<li id="menu_admin_hrd_permohonan_resign" class="menu_admin_hrd_group"><a ><span class="glyphicon glyphicon-folder-close"></span>Resign</a></li>
			<li id="menu_admin_hrd_permohonan_cuti" class="menu_admin_hrd_group"><a  ><span class="glyphicon glyphicon-folder-close"></span>Cuti</a></li>
			<li id="menu_admin_hrd_permohonan_kas_bon" class="menu_admin_hrd_group"><a ><span class="glyphicon glyphicon-folder-close"></span>Kas Bon</a></li>
			<li id="menu_admin_hrd_permohonan_lainnya" class="menu_admin_hrd_group"><a ><span class="glyphicon glyphicon-folder-close"></span>Lainnya</a></li>
		</ul>
	</li>
	<li id="menu_admin_hrd_berita" class="menu_admin_hrd_group"><a ><span class="glyphicon glyphicon-home"></span>Info Kegiatan / Berita</a></li>
	<li id="menu_admin_hrd_download" class="menu_admin_hrd_group"><a ><span class="glyphicon glyphicon-save"></span>Download</a></li>
</ul> <!-- akhir side bar -->

@stop

@section('content')

	<div class="container-fluid" id="admin_hrd_content_dashboard">

	</div>

@stop

@section('support_script')
	
	@include('admin_hrd.url')
	{{ HTML::script('js/controllers/AdminHRDController.js') }}

	<script>

		$(document).ready(function() {
			$('.menu_admin_hrd_group').click(function() {
				dashboard_menu_active('.menu_admin_hrd_group', '#admin_hrd_content_dashboard', '#' + this.id);
			});

			submenu_container('#menu_admin_hrd_group_permohonan', '#group_permohonan');
			
		});

	</script>

@stop