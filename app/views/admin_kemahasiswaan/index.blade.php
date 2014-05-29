@extends('layouts.dashboard')

@section('sidebar')

<ul class="nav nav-sidebar"> <!-- awal side bar -->
	<li id="menu_admin_kemahasiswaan_data_mahasiswa" class="menu_admin_kemahasiswaan_group"><a ><span class="glyphicon glyphicon-home"></span>Data Mahasiswa</a></li>
	<li>
		<a id="menu_admin_kemahasiswaan_group_perkembangan"><span class="glyphicon glyphicon-file"></span>Perkembangan<i style="float:right" id="group_perkembangan_icon" class="glyphicon glyphicon-chevron-down"></i></a>
		<ul class="nav navbar-sidebar sub-navbar" id="group_perkembangan">
			<li id="menu_admin_kemahasiswaan_perkembangan_kehadiran" class="menu_admin_kemahasiswaan_group"><a ><span class="glyphicon glyphicon-folder-close"></span>Kehadiran</a></li>
			<li id="menu_admin_kemahasiswaan_perkembangan_mark_sheet" class="menu_admin_kemahasiswaan_group"><a  ><span class="glyphicon glyphicon-folder-close"></span>Mark Sheet</a></li>
		</ul>
	</li>
	<li id="menu_admin_kemahasiswaan_permohonan" class="menu_admin_kemahasiswaan_group"><a ><span class="glyphicon glyphicon-home"></span>Permohonan</a></li>
	<li id="menu_admin_kemahasiswaan_download" class="menu_admin_kemahasiswaan_group"><a ><span> ? </span>Download</a></li>
	
</ul> <!-- akhir side bar -->

@stop

@section('content')

	<div class="container-fluid" id="admin_kemahasiswaan_content_dashboard">

	</div>



@stop

@section('head')

	@include('admin_kemahasiswaan.url')
	
	{{HTML::script('js/controllers/AdminKemahasiswaanController.js')}}

	<script>

		$(document).ready(function() {
			dashboard_menu_active('.menu_admin_kemahasiswaan_group', '#admin_kemahasiswaan_content_dashboard', '#' + 'menu_admin_kemahasiswaan_data_mahasiswa');

			$('.menu_admin_kemahasiswaan_group').click(function() {
				dashboard_menu_active('.menu_admin_kemahasiswaan_group', '#admin_kemahasiswaan_content_dashboard', '#' + this.id);
			});

			submenu_container('#menu_admin_kemahasiswaan_group_perkembangan', '#group_perkembangan');
			submenu_container('#menu_admin_kemahasiswaan_group_permohonan', '#group_permohonan');
			
		});

	</script>

@stop