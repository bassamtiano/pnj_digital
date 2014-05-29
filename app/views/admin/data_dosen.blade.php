@extends('layouts.dashboard')<!-- Dashboard gw=default -->

@section('head')
<title>Coba Table</title>
@stop

@section('user_status')
	Dosen
@stop

@section('user_name')
	Test
@stop

@section('sidebar')

	<ul class="nav nav-sidebar"> <!-- awal side bar -->
		<li class="active">
			<a href="#"><span class="glyphicon glyphicon-home"></span>BERANDA</a>
		</li>
		<li>
		<a href="#" class="sub-navbar-key"><span class="glyphicon glyphicon-file"></span>Data<i style="float:right" class="glyphicon glyphicon-chevron-down"></i></a>
		<ul class="nav navbar-sidebar sub-navbar">
			<li><a href="#" ><span class="glyphicon glyphicon-folder-close"></span>Mata Kuliah</a></li>
			<li><a href="#" ><span class="glyphicon glyphicon-folder-close"></span>Dosen</a></li>
			<li><a href="#" ><span class="glyphicon glyphicon-folder-close"></span>Kelas</a></li>
			<li><a href="#" ><span class="glyphicon glyphicon-folder-close"></span>Ruang</a></li>
			<li><a href="#" ><span class="glyphicon glyphicon-folder-close"></span>Time Slot</a></li>
			<li><a href="#" ><span class="glyphicon glyphicon-folder-close"></span>Relasi MDK</a></li>
		</ul>
		</li>
		<li><a href="#"><span class="glyphicon glyphicon-list-alt"></span>Penjadwalan</a></li>
		<li><a href="#"><span> ? </span>Bantuan</a></li>
	</ul> <!-- akhir side bar -->

@stop

@section('content')
	<div class="container"> <!-- buka div container navbar table atas-->
		 <form class="navbar-form navbar-right" role="search"> <!-- kolom search -->
        	<div class="form-group">
          		<input type="text" class="form-control" placeholder="Search">
        	</div>
        	<button type="submit" class="btn btn-default">Search</button>
      	</form><!-- buat search -->
	</div> <!-- tutup div container navbar table atas-->
	<div class="container-fluid table scrollable table-bordered" style="overflow-x:auto;" ng-controller="DataDosenController"><!-- Buka div container table -->
		<div style="display:block; height: 40px; width: 1200px"><!-- Buka div head(table) -->
			<table class="table table-hover">
				<thead>
					<tr>
					<th width="150px">NIP</th>
					<th width="150px">Nama</th>
					<th width="200px">Tempat</th>
					<th width="200px">Tanggal Lahir</th>
					<th width="100px">Status</th>
					<th width="200px">Jurusan</th>
					<th width="100px">Program</th>
					<th width="100px">Jabatan</th>
				</thead>
			</table>
		</div><!-- Tutup div head(table) -->
	

	<div style="display:block; height:150px; overflow-y:visible; overflow-x:hidden; width:1200px;" class="table-body-scrollable"><!-- div isi table -->
		<table class="table table-bordered table-striped table-hover">
			<tbody>
			<tr ng-repeat="dd in datadosen">
				<td width="150px"><p style="word-wrap:break-word">@{{ dd.NIP}}</td>
				<td width="150px"><p style="word-wrap:break-word">@{{ dd.Nama}}</td>
				<td width="200px"><p style="word-wrap:break-word">@{{ dd.Tempat}}</td>
				<td width="200px"><p style="word-wrap:break-word">@{{ dd.Tgl_Lahir}}</td>
				<td width="100px"><p style="word-wrap:break-word">@{{ dd.Status}}</td>
				<td width="200px"><p style="word-wrap:break-word">@{{ dd.Jurusan}}</td>
				<td width="100px"><p style="word-wrap:break-word">@{{ dd.Program}}</td>
				<td width="100px"><p style="word-wrap:break-word">@{{ dd.Jabatan}}</td>
			</tr>
			</tbody>
		</table>
	</div><!-- tutup div isi table -->
</div><!-- Tutup div container table -->

	<div class="container"> <!-- buka div container navbar table bawah-->
        	<button type="submit" class="btn btn-default">Ubah</button>
        	<button type="submit" class="btn btn-default">Hapus</button>
	</div> <!-- tutup div container navbar table bawah-->

	<img src="img/logo-pnj.png">

@stop

@section('support_script')

	{{HTML::script("js/controllers/DataDosenController.js")}}

@stop