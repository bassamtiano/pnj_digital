@extends('layouts.dashboard')



@section('head')
<title>MAHASISWA ASDF</title>
@stop



@section('user_type')
	<img src ="img/PNJ.jpg" style="height:0px;"> MAHASISWA ASD
@stop



@section('sidebar')
	@parent

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
		<li><a href="#"><span> ? </span>Bantuan</a></li>
	</ul> <!-- akhir side bar -->
	
@stop



@section('content')
<!-- ===================================AWAL FORM MATAKULIAH======================================-->
<div class="col-md-5">		
		<form class="form-horizontal" role="form" ng-submit="submitMahasiswa()">
		<fieldset>
			<legend>Tambah Matakuliah</legend>
				<div class="form-group">
					<label for="input_idmatakuliah" class="col-sm-5 control-label">ID Matakuliah</label>
					<div class="col-sm-7">
						<input type="text" class="form-control" id="input_idmatakuliah" name="idmatakuliah" ng-model="mahasiswaData.idmatakuliah" placeholder="ID Matakuliah...">
					</div>
				</div>


				<div class="form-group">
					<label for="input_namamatakuliah" class="col-sm-5 control-label">Nama Matakuliah</label>
					<div class="col-sm-7">
						<input type="text" class="form-control" id="input_namamatakuliah" name="namamatakuliah" ng-model="mahasiswaData.namamatakuliah" placeholder="Nama Matakuliah...">
					</div>
				</div>

			
				<div class="form-group">
					<label for="input_jumlahsks" class="col-sm-5 control-label">Jumlah SKS</label>
					<div class="col-sm-7">
						<select class="form-control" name="jumlahsks" ng-model="mahasiswaData.jumlahsks">
							<option value="2">2 SKS</option>
							<option value="3">3 SKS</option>						
						</select>
					</div>
				</div>


				<div class="form-group">
					<label for="input_semester" class="col-sm-5 control-label">Semester</label>
					<div class="col-sm-7">
						<select class="form-control" name="semester" ng-model="mahasiswaData.semester">
							<option value="1">Semester 1</option>
							<option value="2">Semester 2</option>
							<option value="3">Semester 3</option>						
							<option value="4">Semester 4</option>
							<option value="5">Semester 5</option>						
							<option value="6">Semester 6</option>
							<option value="7">Semester 7</option>				
							<option value="8">Semester 8</option>		
						</select>
					</div>
				</div>


				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<button type="submit" class="btn btn-default">Tambah</button>
						<button type="submit" class="btn btn-default">Kosongkan</button>
					</div><!--col-sm-offset-2 col-sm-10-->
				</div><!--form-group-->			
			</fieldset><!--fieldset-->
		</form> <!-- AkhirForm Mahasiswa -->	
	</div><!-- "col-md-5"-->
<!-- ===================================AKHIR FORM MATAKULIAH======================================-->





<!-- ===================================AWAL TABEL MATAKULIAH======================================-->

<div class="col-md-7">	
	<form class="navbar-form navbar-right" role="search">
        <div class="form-group">
          	<input type="text" class="form-control" placeholder="Search">
        </div>
        	<button type="submit" class="btn btn-default">Submit</button>
    </form>

    <h3>Data Mata Kuliah</h3>
						<div class="container-fluid table-scrollable" style="overflow-x:auto;" ng-controller="matakuliahController"> <!-- Buka div container table -->				
							<div style="display:block; height:60px; width:500px;"> <!-- Buka Div Head -->
								<table class="table table-hover">
									<thead>
										<tr>
											<th width="100px"> ID </th>
											<th width="200px"> Nama Matakuliah </th>
											<th width="100px"> SKS  </th>
											<th width="100px"> Semester </th>
										</tr>
									</thead>
								</table>
							</div> <!-- Tutup Div Head -->

							<div style="display:block; height:500px; width:500px; overflow-y:visible; overflow-x:hidden;"> <!-- Buka Div Body -->
								<table class="table table-striped table-hover">
									<tbody>
										<tr ng-repeat="mk in matakuliahs">
											<td width="100px"> <p style="word-wrap:break-word; width:80px;">@{{mk.id_matakuliah}}</p> </td>
											<td width="200px"> <p style="word-wrap:break-word; width:180px;">@{{mk.nama_matakuliah}} </p>  </td>
											<td width="100px"> <p style="word-wrap:break-word; width:80px;">@{{mk.sks}} </p>  </td>
											<td width="100px"> <p style="word-wrap:break-word; width:80px;">@{{mk.semester}} </p>  </td>
										</tr>
									</tbody>
								</table>
							</div> <!-- Tutup Div Body --> 	
						</div> <!-- Tutup div Container table-->
</div><!--"col-md-7"-->
<!-- ===================================AKHIR TABEL MATAKULIAH======================================-->


{{HTML::script('js/controllers/matakuliahController.js')}}
@stop