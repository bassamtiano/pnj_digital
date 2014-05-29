@extends('layouts.dashboard')

@section('sidebar')

<ul class="nav nav-sidebar"> <!-- awal side bar -->
	<li id="menu_karyawan_beranda" class="menu_karyawan_group"><a ><span class="glyphicon glyphicon-home"></span>Beranda</a></li>	
	<li id="menu_karyawan_absensi" class="menu_karyawan_group"><a ><span class="glyphicon glyphicon-home"></span>Absensi</a></li>	
	<li id="menu_karyawan_slip_gaji" class="menu_karyawan_group"><a ><span class="glyphicon glyphicon-home"></span>Slip Gaji</a></li>	
	<li id="menu_karyawan_permohonan" class="menu_karyawan_group"><a ><span class="glyphicon glyphicon-home"></span>Permohonan</a></li>	
	<li id="menu_karyawan_download" class="menu_karyawan_group"><a ><span> ? </span>Download</a></li>
</ul> <!-- akhir side bar -->

@stop

@section('content')

	<div class="container-fluid" id="karyawan_content_dashboard">

	</div>

@stop

@section('support_script')

	{{HTML::script('js/controllers/KaryawanController.js')}}

	@include('karyawan.url')
	
	<script>

		$(document).ready(function() {
			$('.menu_karyawan_group').click(function() {
				dashboard_menu_active('.menu_karyawan_group', '#karyawan_content_dashboard', '#' + this.id);
			});

			submenu_container('#menu_karyawan_group_form_permohonan', '#group_form_permohonan');
			
		});

	</script>

@stop