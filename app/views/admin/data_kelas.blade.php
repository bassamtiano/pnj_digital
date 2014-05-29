@extends('layouts.dashboard')

@section('head')
		<title>Mahasiswa</title>
@stop

@section('user_name')
	Test
@stop

@section('user_status')
	Dosen
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
          		<input type="text" class="form-control" placeholder="Search" ng-model="search">
        	</div>
        	<button type="submit" class="btn btn-default">Search</button>
      	</form><!-- buat search -->
	</div> <!-- awal judul form-->

	<!-- Awal Dashboard konten -->
	<div class="container" ng-controller="DataKelasController">
		<div class="row"> <!-- awal div row -->
			<div class="col-md-4 panel panel-default"> <!-- awal col-md-4 buat form dengan panel-->
				<div class="panel-heading"> <!-- panel heading -->
					<h3 class="panel-title">
						Tambah Ruang
					</h3>
				</div> <!-- panel heading -->
				<div class="panel-body"> <!-- panel body -->
					<!-- awal form_data time slot -->
					<form class="form-horizontal" role="form" ng-submit="submitDataKelas()" >
					<!-- id time slot -->
						<div class="form-group">
							<label for="input_id" class="col-md-4 control-table">ID Kelas</label>
							<div class="col-md-8">
								<input type="text" class="form-control" id="input_id_kelas" name="id" placeholder="ID Kelas" ng-model="newDataKelasID">
							</div>
						</div> <!-- akhir id_timeslot -->

						<!-- awal hari -->
						<div class="form-group">
							<label for="input_kelas" class="col-md-4 control-table">Kelas</label>
							<div class="col-md-8">
								<input type="text" class="form-control" id="input_kelas" name="kelas" placeholder="Kelas" ng-model="newDataKelasKelas">
							</div>
						</div> <!-- akhir hari -->

						<!-- Awal Waktu -->
						<div class="form-group">
							<label for="input_jumlah" class="col-md-4 control-table">Jumlah Mahasiswa</label>
							<div class="col-md-8">
								<select class="form-control" name="jumlah" id="input_jumlah" ng-model="newDataKelasJumlah">
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
									<option value="6">6</option>
									<option value="7">7</option>
									<option value="8">8</option>
									<option value="9">9</option>
									<option value="10">10</option>
									<option value="11">11</option>
									<option value="12">12</option>
									<option value="13">13</option>
									<option value="14">14</option>
									<option value="15">15</option>
									<option value="16">16</option>
									<option value="17">17</option>
									<option value="18">18</option>
									<option value="19">19</option>
									<option value="20">20</option>
									<option value="21">21</option>
									<option value="22">22</option>
									<option value="23">23</option>
									<option value="24">24</option>
									<option value="25">25</option>
									<option value="26">26</option>
									<option value="27">27</option>
									<option value="28">28</option>
									<option value="29">29</option>
									<option value="30">30</option>
								</select>
							</div>
						</div>
						<!-- Akhir Waktu -->

						<!-- Tombol -->
						<div class="form-group">
							<div class="col-sm-offset-2 col-sm-10">
								<button type="submit" class="btn btn-sm btn-warning">Tambah</button>
								<button type="submit" class="btn btn-sm btn-warning">Kosongkan</button>
							</div>
						</div><!-- Akhir Tombol -->
					</form><!-- akhir form_data time slot -->
				</div> <!-- panel body -->
			</div> <!-- akhir col-md-4 buat form dengan panel-->

			<div class="col-md-8 panel panel-default" > <!-- awal col-md-8 buat table-->
				<div class="panel-heading"> <!-- panel heading -->
					<h3 class="panel-title">
						Data Kelas
					</h3>
				</div> <!-- panel heading -->
				<div class="panel-body"> <!-- panel body -->
					<div class="container-fluid table-scrollable table-reponsive table-bordered" style="overflow-x:auto;" > <!-- awal div container table -->
						<div style="display:block; height:40px; width:450px;"> <!-- awal untuk head table -->
							<table class="table table-hover"> 
								<thead> <!-- nama colom table -->
									<tr>
										<th width="50px">Id</th>
										<th width="200px">Kelas</th>
										<th width="200px">Jumlah Mahasiswa</th>
									</tr>
								</thead><!-- nama colom table -->
							</table>
						</div> <!-- akhir untuk head table -->

						<div style="display:block; height:310px; width:450px; overflow-y:visible; overflow-x:hidden;"> <!-- awal untuk body table -->
							<table class="table table-striped table-hover">
								<tbody> <!-- isi Table -->
									<tr ng-repeat="dk in datakelas | filter:search">
										<td width="50px"><p style="word-wrap:break-word; ">@{{dk.id}}</p></td>
										<td width="200px"><p style="word-wrap:break-word;">@{{dk.kelas}}</p></td>
										<td width="200px"><p style="word-wrap:break-word;">@{{dk.jumlah_mahasiswa}}</p></td>
									</tr>
								</tbody> <!-- isi Table -->
							</table>
						</div> <!-- awal untuk body table -->
					</div>  <!-- awal div container table -->
					<br>
					<div class="form-group">
						<div>
							<button type="submit" class="btn btn-warning">Hapus</button>
							<button type="submit" class="btn btn-warning">Ubah</button>
						</div>
					</div><!-- Akhir Tombol Submit -->
						
				</div> <!-- panel body -->
			</div> <!-- akhir col-md-8 buat table-->
		</div> <!-- akhir div row -->
	</div>
	<!-- Akhir Dashboard konten -->
	
@stop

@section('modal_dialog')

@stop


@section('support_script')

	{{HTML::script('js/controllers/DataKelasController.js')}}

@stop