@extends('layouts.dashboard')

@section('sidebar')

<ul class="nav nav-sidebar"> <!-- awal side bar -->
	<li id="menu_keuangan_beranda" class="menu_keuangan_group"><a ><span class="glyphicon glyphicon-home"></span>Beranda</a></li>	

	<li>
		<a id="menu_keuangan_group_departemen"><span class="glyphicon glyphicon-file"></span>Departemen<i style="float:right" id="group_departemen_icon" class="glyphicon glyphicon-chevron-down"></i></a>
		<ul class="nav navbar-sidebar sub-navbar" id="group_departemen">
			<li id="menu_keuangan_departemen_data_approval" class="menu_keuangan_group"><a ><span class="glyphicon glyphicon-folder-close"></span>Aproval</a></li>
			<li id="menu_keuangan_departemen_data_penggajian" class="menu_keuangan_group"><a  ><span class="glyphicon glyphicon-folder-close"></span>Penggajian</a></li>
			<li id="menu_keuangan_departemen_laporan_data_karyawan" class="menu_keuangan_group"><a ><span class="glyphicon glyphicon-folder-close"></span>Laporan Karyawan</a></li>
			<li id="menu_keuangan_departemen_laporan_data_absensi" class="menu_keuangan_group"><a ><span class="glyphicon glyphicon-folder-close"></span>Laporan Absensi</a></li>
		</ul>
	</li>

	<li id="menu_keuangan_departemen_sipil" class="menu_keuangan_group"><a ><span class="glyphicon glyphicon-folder-close"></span>Departemen Sipil</a></li>
	<li id="menu_keuangan_departemen_akuntansi" class="menu_keuangan_group"><a ><span class="glyphicon glyphicon-folder-close"></span>Departemen Akuntansi</a></li>
	<li id="menu_keuangan_departemen_administrasi_niaga" class="menu_keuangan_group"><a style="font-size:12px;"><span class="glyphicon glyphicon-folder-close"></span>Departemen Administrasi Niaga</a></li>
	<li id="menu_keuangan_departemen_mesin" class="menu_keuangan_group"><a ><span class="glyphicon glyphicon-folder-close"></span>Departemen Mesin</a></li>
	<li id="menu_keuangan_departemen_gedung_q" class="menu_keuangan_group"><a ><span class="glyphicon glyphicon-folder-close"></span>Departemen Gedung Q</a></li>


	<li>
		<a id="menu_keuangan_group_data_input"><span class="glyphicon glyphicon-file"></span>Data Input<i style="float:right" id="group_data_input_icon" class="glyphicon glyphicon-chevron-down"></i></a>
		<ul class="nav navbar-sidebar sub-navbar" id="group_data_input">
			<li id="menu_keuangan_data_input_pemasukkan" class="menu_keuangan_group"><a ><span class="glyphicon glyphicon-folder-close"></span>Pemasukkan</a></li>
			<li id="menu_keuangan_data_input_pengeluaran" class="menu_keuangan_group"><a  ><span class="glyphicon glyphicon-folder-close"></span>Pengeluaran</a></li>
			<li id="menu_keuangan_data_input_golongan_jabatan" class="menu_keuangan_group"><a ><span class="glyphicon glyphicon-folder-close"></span>Golongan Jabatan</a></li>
			<li id="menu_keuangan_data_input_status" class="menu_keuangan_group"><a ><span class="glyphicon glyphicon-folder-close"></span>Status</a></li>
			<li id="menu_keuangan_data_input_departemen" class="menu_keuangan_group"><a ><span class="glyphicon glyphicon-folder-close"></span>Departemen</a></li>
			<li id="menu_keuangan_data_input_tunjangan_jabatan" class="menu_keuangan_group"><a ><span class="glyphicon glyphicon-folder-close"></span>Tunjangan Jabatan</a></li>
			<li id="menu_keuangan_data_input_honor" class="menu_keuangan_group"><a ><span class="glyphicon glyphicon-folder-close"></span>Honor</a></li>
		</ul>
	</li>

	<li>
		<a id="menu_keuangan_group_laporan"><span class="glyphicon glyphicon-file"></span>Data Inventaris<i style="float:right" id="group_laporan_icon" class="glyphicon glyphicon-chevron-down"></i></a>
		<ul class="nav navbar-sidebar sub-navbar" id="group_laporan">
			<li id="menu_keuangan_laporan_pemasukkan" class="menu_keuangan_group"><a ><span class="glyphicon glyphicon-folder-close"></span>Pemasukkan</a></li>
			<li id="menu_keuangan_laporan_pengeluaran" class="menu_keuangan_group"><a  ><span class="glyphicon glyphicon-folder-close"></span>Pengeluaran</a></li>
		</ul>
	</li>

	<li id="menu_keuangan_download" class="menu_keuangan_group"><a ><span> ? </span>Download</a></li>
</ul> <!-- akhir side bar -->

@stop

@section('content')

	<div class="container-fluid" id="keuangan_content_dashboard">

	</div>

@stop

@section('support_script')
	
	{{HTML::script('js/controllers/keuanganController.js')}}
	@include('keuangan.url')
	
	<script>

		$(document).ready(function() {
			$('.menu_keuangan_group').click(function() {
				dashboard_menu_active('.menu_keuangan_group', '#keuangan_content_dashboard', '#' + this.id);
			});

			submenu_container('#menu_keuangan_group_departemen', '#group_departemen');
			submenu_container('#menu_keuangan_group_data_input', '#group_data_input');
			submenu_container('#menu_keuangan_group_laporan', '#group_laporan');
			
		});

	</script>

@stop