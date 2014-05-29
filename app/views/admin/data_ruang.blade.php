@extends('layouts.dashboard')
<!-- User = Tubagus Axel Luthfiady -->

@section('head')
<title> Data Ruang </title>
@stop


@section('user_type')
	<h1> <img src="images/BroccoliWare.png" style="width:120px; height:120px;"> B R O C C O L I W A R E </img> </h1>
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
	</ul> <!-- akhir side bar -->

@stop


@section('content')

	<div class="row" style="height:400px;"> 
		<div class="col-md-5"> 

			<form class="form-horizontal" role="form" ng-submit="submitMahasiswa()">
				<fieldset>
					<legend> <strong> Tambah Ruang </strong> </legend>

					<div class="form-group">
						<label for="input_idruangan" class="col-sm-5 control-label">ID Ruangan</label>
						<div class="col-sm-7">
							<input type="text" class="form-control" id="input_idruangan" name="idruangan" ng-model="mahasiswaData.idruangan" placeholder="ID Ruangan . . .">
						</div>
					</div>

					<div class="form-group">
						<label for="input_namaruangan" class="col-sm-5 control-label">Nama Ruangan</label>
						<div class="col-sm-7">
							<input type="text" class="form-control" id="input_namaruangan" name="namaruangan" ng-model="mahasiswaData.namaruangan" placeholder="Nama Ruangan . . .">
						</div>
					</div>

					<div class="form-group">
						<label for="input_jenisruangan" class="col-sm-5 control-label">Jenis Ruangan</label>
						<div class="col-sm-7">
							<select class="form-control" name="jenisruangan" ng-model="mahasiswaData.jenisruangan">
								<option value="Kelas"> Kelas </option>
								<option value="Lab"> Lab </option>
								<option value="Dosen"> Dosen </option>
								<option value="Dapur"> Dapur </option>
								<option value="Musholla"> Musholla </option>
								<option value="Karyawan"> Karyawan </option>
								<option value="Toilet"> Toilet </option>
							</select>
						</div>
					</div>

					<div class="form-group">
		                <div class="col-sm-offset-7 col-sm-6">
		                    <button type="submit" class="btn btn-success"> Submit </button>

		                    <button type="reset" class="btn btn-success"> Reset </button>
		                </div>
		            </div>

				</fieldset>
			</form>

		</div> <!-- ========================== Tutup Col MD 5 ========================== -->


		<div class="col-md-7"> 
			
			<div class="row" style="height:50px;"> 

				<div class="col-md-4">
					<h3> <strong> Data Ruang </strong> </h3>
				</div> <!-- ========================== Tutup Col MD 5 ========================== -->

				<div class="col-md-8" style="padding-top:10px;">
					<form class="navbar-form navbar-right" role="search">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Search">
                        </div>
                            <button type="submit" class="btn btn-default"> <span class="glyphicon glyphicon-search"></span> Search </button>
                    </form>
				</div> <!-- ========================== Tutup Col MD 7 ========================== -->

			</div> <!-- ================== Tutup Row Dalam ====================== -->

			<div class="row">

				<div class="container-fluid table-scrollable"  ng-controller="DataRuangController" style="overflow-x:auto;"> 
					
					<div style="display:block; height:40px; width:650px;"> 
						<table class="table table-hover">
							<thead>
								<tr>
									<!--<th width="50px"> ID </th>-->
									<th width="200px"> Nama Ruang </th>
									<th width="400px"> Jenis Ruang </th>
								</tr>
							</thead>
						</table>
					</div> <!-- ====================== Tutup Div Head ===================== -->

					<div style="display:block; height:300px; width:650px; overflow-y:visible; overflow-x:hidden;">
						<table class="table table-striped table-hover">
							<tbody>
								<tr ng-repeat="dr in dataruang">
									<!--<td width="50px"> <p style="word-wrap:break-word;"> @{{dr.id}} </p> </td>-->
									<td width="200px"> <p style="word-wrap:break-word; width:180px;"> @{{dr.nama_ruang}} </p>  </td>
									<td width="400px"> <p style="word-wrap:break-word; width:380px;"> @{{dr.jenis_ruang}} </p>  </td>
								</tr>
							</tbody>
						</table>
					</div> <!-- ========================= Tutup Div Body ===================== --> 	
					
				</div> <!-- =========================== Tutup div Container table =============================== -->
			</div> <!-- ================== Tutup Row Dalam ====================== -->
			<div class="form-group" style="padding-top:10px;">
		        <div class="col-sm-offset-9 col-sm-6">
		            <button type="delete" class="btn btn-success"> Delete </button>
		            <button type="modify" class="btn btn-success"> Modify </button>
		        </div>
	        </div> <!-- ============================== Tutup Form Groub Button ========================= -->


		</div> <!-- ============================== Tutup Col MD 7 ========================= -->
	</div> <!-- ===================== Tutup Row Utama =========================== -->

{{HTML::script('js/controllers/DataRuangController.js')}}

@stop