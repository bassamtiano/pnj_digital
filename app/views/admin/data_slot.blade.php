@extends('layouts.dashboard')

@section('head')
		<title>Mahasiswa</title>
@stop

@section('user-type')
	Mahasiswa
@stop

@section('sidebar')

	<ul class="nav nav-sidebar"> <!-- awal side bar -->
		<li class="active">
			<a href="#"><span class="glyphicon glyphicon-home"></span>Dashboard</a>
		</li>
		<li>
		<a href="#"><span class="glyphicon glyphicon-file"></span>Data<i style="float:right" class="glyphicon glyphicon-chevron-down"></i></a>
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
	<div class="container"> <!-- awal judul form-->
		 <form class="navbar-form navbar-right" role="search"> <!-- buat search -->
        	<div class="form-group">
          		<input type="text" class="form-control" placeholder="Search">
        	</div>
        	<button type="submit" class="btn btn-default">Search</button>
      	</form><!-- buat search -->
	</div> <!-- awal judul form-->

	<!-- Awal Dashboard konten --> 
	<div class="container" ng-controller="DataSlotController">
		<div class="row"> <!-- awal div row -->
			<div class="col-md-4 panel panel-default"> <!-- awal col-md-4 buat form dengan panel-->
				<div class="panel-heading"> <!-- panel heading -->
					<h3 class="panel-title">
						Tambah Time Slot
					</h3>
				</div> <!-- panel heading -->
				<div class="panel-body"> <!-- panel body -->
					<!-- awal form_data time slot -->
					<form class="form-horizontal" role="form" ng-submit="submitDataSlot()">
					<!-- id time slot -->
						<div class="form-group">
							<label for="input_id" class="col-md-4 control-table">ID Waktu</label>
							<div class="col-md-8">
								<input type="text" class="form-control" id="input_id_dataSlot" name="idDataSlot" ng-model="newDataSlotID" placeholder="Id Waktu">
							</div>
						</div> <!-- akhir id_timeslot -->

						<!-- awal hari -->
						<div class="form-group">
							<label for="input_hari" class="col-md-4 control-table">Hari</label>
							<div class="col-md-8">
								<input type="text" class="form-control" id="input_hari_dataSlot" name="hariDataSlot" ng-model="newDataSlotHari" placeholder="hari">
							</div>
						</div> <!-- akhir hari -->

						<!-- Awal Waktu -->
						<div class="form-group">
							<label for="input_jurusan" class="col-md-4 control-table">Waktu</label>
							<div class="col-md-8">
								<select class="form-control" id="input_waktu_dataslot" name="waktuDataSlot" ng-model="newDataSlotWaktu">
									<option value="7.30">7.30</option>
									<option value="8.15">8.15</option>
								</select>
							</div>
						</div>
						<!-- Akhir Waktu -->

						<!-- Tombol -->
						<div class="form-group">
							<div class="col-sm-offset-2 col-sm-10">
								<button type="submit" class="btn btn-success">Tambah</button>
								
							</div>
						</div><!-- Akhir Tombol -->
					</form><!-- akhir form_data time slot <button type="submit" class="btn btn-success">Kosongkan</button> -->
				</div> <!-- panel body -->
			</div> <!-- akhir col-md-4 buat form dengan panel-->

			<div class="col-md-8 panel panel-default" > <!-- awal col-md-8 buat table-->
				<div class="panel-heading"> <!-- panel heading -->
					<h3 class="panel-title">
						Data Time Slot
					</h3>
				</div> <!-- panel heading -->
				<div class="panel-body"> <!-- panel body -->
					<div class="container-fluid table-scrollable table-reponsive table-bordered" style="overflow-x:auto;" > <!-- awal div container table -->
						<div style="display:block; height:40px; width:450px;"> <!-- awal untuk head table -->
							<table class="table table-hover"> 
								<thead> <!-- nama colom table -->
									<tr>
										<th width="50px">Id</th>
										<th width="200px">Hari</th>
										<th width="200px">Waktu</th>
									</tr>
								</thead><!-- nama colom table -->
							</table>
						</div> <!-- akhir untuk head table -->

						<div style="display:block; height:310px; width:450px; overflow-y:visible; overflow-x:hidden;"> <!-- awal untuk body table -->
							<table class="table table-striped table-hover">
								<tbody> <!-- isi Table -->
									<tr ng-repeat="ds in dataslots">
										<td width="50px"><p style="word-wrap:break-word;">@{{ds.idDataSlot}}</p></td>
										<td width="200px"><p style="word-wrap:break-word;">@{{ds.hariDataSlot}}</p></td>
										<td width="200px"><p style="word-wrap:break-word;">@{{ds.waktuDataSlot}}</p></td>
									</tr>
								</tbody> <!-- isi Table -->
							</table>
						</div> <!-- awal untuk body table -->
					</div>  <!-- awal div container table -->
					<br>
					<!--<div class="form-group">
						<div>
							<button type="submit" class="btn btn-success">Hapus</button>
							<button type="submit" class="btn btn-success">Ubah</button>
						</div>
					</div> Akhir Tombol Submit -->
						
				</div> <!-- panel body -->
			</div> <!-- akhir col-md-8 buat table-->
		</div> <!-- akhir div row -->
	</div>
	<!-- Akhir Dashboard konten -->
	{{HTML::script('js/controllers/DataSlotController.js')}}
@stop