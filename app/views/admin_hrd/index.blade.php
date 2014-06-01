@extends('layouts.dashboard')

@section('sidebar')

<ul class="nav nav-sidebar"> <!-- awal side bar -->
	<li id="menu_admin_hrd_beranda" class="menu_admin_hrd_group"><a ><span class="glyphicon glyphicon-home"></span>Beranda</a></li>
	<li id="menu_admin_hrd_data_karyawan" class="menu_admin_hrd_group"><a ><span class="glyphicon glyphicon-home"></span>Data Karyawan</a></li>
	<li id="menu_admin_hrd_absensi_staff" class="menu_admin_hrd_group"><a ><span class="glyphicon glyphicon-home"></span>Absensi Staff</a></li>
	<li id="menu_admin_hrd_permohonan" class="menu_admin_hrd_group"><a ><span class="glyphicon glyphicon-home"></span>Permohonan</a></li>
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

			
			
		});

	</script>

@stop