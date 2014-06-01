@extends('layouts.dashboard')

@section('sidebar')

<ul class="nav nav-sidebar"> <!-- awal side bar -->
	<li id="menu_admin_inventaris_beranda" class="menu_admin_inventaris_group"><a ><span class="glyphicon glyphicon-home"></span>Beranda</a></li>
	<li id="menu_admin_inventaris_data_inventaris" class="menu_admin_inventaris_group"><a ><span class="glyphicon glyphicon-folder-close"></span>Inventaris</a></li>
	<li id="menu_admin_inventaris_download" class="menu_admin_inventaris_group"><a ><span> ? </span>Download</a></li>
</ul> <!-- akhir side bar -->

@stop

@section('content')

	<div class="container-fluid" id="admin_inventaris_content_dashboard">

	</div>

@stop

@section('support_script')
	
	@include('admin_inventaris.url')
	{{HTML::script('js/controllers/AdminInventarisController.js')}}

	<script>

		$(document).ready(function() {
			$('.menu_admin_inventaris_group').click(function() {
				dashboard_menu_active('.menu_admin_inventaris_group', '#admin_inventaris_content_dashboard', '#' + this.id);
			});

			submenu_container('#menu_admin_inventaris_group_data_inventaris', '#group_data_inventaris');
			
		});

	</script>

@stop