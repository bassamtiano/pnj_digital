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

@section('content')

	<h3> Tambah Kegiatan </h3></br>

	<div class="panel panel-default col-md-7">
  		<div class="panel-heading">
    		<h3 class="panel-title">Tambah Kegitan - Select for Spesific Name</h3>
  		</div>
  
  		<div class="panel-body">
    		

    <form class="form-horizontal" role="form">

      <div class="form-group col-md-12">
        <div class="col-md-2">
          <label for="inputFilter" class="col-sm-1 control-label">Spesifik</label>
        </div>

        <div class="col-md-4">
          <select class="form-control ">
                  <option>KARYAWAN</option>
                  <option>MAHASISWA</option>
          </select>
        </div>

        <div class="col-md-6">
        
              <input type="text" class="form-control" placeholder="Search" ng-model="search">
              <!--<button type="submit" class="btn btn-default">Submit</button>-->
        
        </div>
      </div>
  		
          <div class="container-fluid table-scrollable table-responsive col-md-12" style="overflow-x:auto;">
            
            <div style="display:block; height:50px; width:600;"> <!-- Buka div Head -->

              <table class="table table-hover"> 
                <thead><tr>
                  <th width="150px">  ID        </th>
                  <th width="150px">  Jurusan   </th>
                  <th width="150px">  Nama      </th>
                  <th width="150px">  Select    </th>
                </tr></thead>
              </table>

            </div> <!-- Tutup div Head -->

            <div style="display:block; height:250px; width:600; overflow-y:visible; overflow-x:hidden;"> <!-- Buka div Body -->

              <table class="table table-striped table-hover">
                <tbody>
                  <tr>
                    <td width="150px"> 313213                   </td>
                    <td width="150px"> Teknik Elektro           </td>
                    <td width="150px"> abdullah                 </td>
                    <td width="150px"> <input type="checkbox">  </td>
                  </tr>
                  
                  <tr>
                    <td width="150px"> 312362                   </td>
                    <td width="150px"> Teknik Elektro           </td>
                    <td width="150px"> rinoto                   </td>
                    <td width="150px"> <input type="checkbox">  </td>
                  </tr>

                  <tr>
                    <td width="150px"> 312326                   </td>
                    <td width="150px"> Teknik Elektro           </td>
                    <td width="150px"> hendra                   </td>
                    <td width="150px"> <input type="checkbox">  </td>
                  </tr>
                 
                </tbody>

              </table>

            </div> <!-- Tutup div Body -->

          </div>


    	<div class="form-group">
    		<div class="col-sm-offset-10 col-sm-10">
      			<button type="submit" class="btn btn-default">Done</button>
             
    		</div>
  		</div>

       
	</form>




  		</div>
	</div>
	
@stop


{{HTML::script('js/controller/DataDosenController.js')}}