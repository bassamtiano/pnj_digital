@extends('layouts.dashboard')

@section('head')
<title> PNJ Digital - Dosen </title>


!-- ============= Bagian Bootstrap JS ================= -->
{{HTML::script('js/jquery-2.1.0.min.js')}}
{{HTML::script('js/bootstrap.min.js')}}
{{HTML::script('js/bootstrap.js')}}


<!-- ============ Bagian Angular JS ==================== -->
{{HTML::script('js/angular.min.js')}}


<!-- ============= Bagian Bootstrap CSS ================ -->
{{HTML::style('css/bootstrap-theme.min.css')}}
{{HTML::style('css/bootstrap.min.css')}}


@stop

@section('user_type')
	BrocoliWare
@stop

@section('sidebar')
	

<ul class="nav nav-sidebar"> <!-- awal side bar -->
	<li>
		<a href="#"><span class="glyphicon glyphicon-home"></span>Home</a>
	</li>
	<li class="active"><a href="#"><span class="glyphicon glyphicon-list-alt"></span>Data Jurusan</a></li>
	<li><a href="#"><span class="glyphicon glyphicon-list-alt"></span>Absen Staff</a></li>
	<li><a href="#"><span class="glyphicon glyphicon-list-alt"></span>Data Dosen</a></li>
	<li><a href="#"><span class="glyphicon glyphicon-pushpin"></span>Download</a></li>
</ul> <!-- akhir side bar -->

@stop

@section('content')

	<h3> Form Penelitian </h3></br>

	<div class="panel panel-default col-md-7">
  		
  <div class="panel-body">
    	
    <form class="form-horizontal" role="form">
      <div class="form-group">
        <label for="inputNIK" class="col-sm-2 control-label">NIK</label>
      
        <div class="col-sm-5">
            <input type="text" class="form-control" id="inputNIK" placeholder="NIK">
        </div>
      </div>

  		<div class="form-group">
    		<label for="inputJudul" class="col-sm-2 control-label">Judul</label>
    	
    		<div class="col-sm-5">
      			<input type="text" class="form-control" id="inputJudul" placeholder="Judul">
    		</div>
  		</div>

  		<div class="form-group">
    		<label for="inputTanggalRilis" class="col-sm-2 control-label">Tanggal Rilis</label>
    		
    		<div class="col-sm-4">
      			<input type="date" class="form-control" id="inputTanggalRilis" placeholder="Tanggal Rilis">
    		</div>
  		</div>

  <div class="form-group">
    <label for="inputFiles" class="col-sm-2 control-label">Attachment</label>
     
      <div class="col-sm-4">
        
       <input type="file" id="inputFiles">
      </div>
  </div>

<div class="form-group">
	<label for="inputJenisPublikasi" class="col-sm-2 control-label">Jenis Publikasi</label>
  		
  		<div class="radio col-sm-2">
  			<label>
    			<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
    				public
		</div>

		<div class="radio col-sm-2">
  			<label>
    			<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
    				Private
  			</label>
		</div>
</div>



    	<div class="form-group">
    		<div class="col-sm-offset-2 col-sm-10">
      			<button type="submit" class="btn btn-default">Simpan</button>
             <button type="submit" class="btn btn-default">Batal</button>
    		</div>
  		</div>

       
	</form>




  		</div>
	</div>
	
@stop


{{HTML::script('js/controller/DataDosenController.js')}}