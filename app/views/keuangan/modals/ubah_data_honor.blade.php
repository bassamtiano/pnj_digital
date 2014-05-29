@extends('layouts.dashboard')

@section('head')
		<title>Data Penggajian</title>
@stop

@section('user-type')
	PNJ Digital
@stop

@section('sidebar')

@stop

@section('content')
<a href="" data-toggle="modal" data-target="#myModal">Ubah</a>


<!--Test Modal-->
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
			      	
			      	<div class="modal-header">
			        	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			        	<h4 class="modal-title">UBAH HONOR</h4>
			      	</div>


			      	<div class="modal-body">			        
			        

				        <form class="form-horizontal" role="form" ng-submit="" >
							<!--=======================================================================-->
							<div class="form-group">
								<label for="input_tugas" class="col-md-4 control-table">ID Honor</label>
								<div class="col-md-8">
									<input type="text" class="form-control" id="input_id" name="id" placeholder="ID Honor" ng-model="">
								</div>
							</div> 
							<!--=======================================================================-->							
							
							{{HTML::script('js/DatepickerDemoCtrl.js')}}

							<div class="form-group" ng-controller="DatepickerDemoCtrl">
								<label for="input_uts" class="col-md-4 control-table">Tanggal</label>
								<div class="col-md-8">
									<p class="input-group">
						              <input type="text" class="form-control" datepicker-popup="@{{format}}" ng-model="dt" is-open="opened" min="minDate" max="'2015-06-22'" datepicker-options="dateOptions" date-disabled="disabled(date, mode)" ng-required="true" close-text="Close" />
						              <span class="input-group-btn">
						                <button class="btn btn-default" ng-click="open($event)"><i class="glyphicon glyphicon-calendar"></i></button>
						              </span>
						            </p>
								</div>
							</div> 
							<!--=======================================================================-->
							<div class="form-group">
								<label for="input_uas" class="col-md-4 control-table">NIK</label>
								<div class="col-md-8">
									<input type="text" class="form-control" id="input_nik" name="nik" placeholder="NIK" ng-model="">
								</div>
							</div>
							<!--=======================================================================-->
							<div class="form-group">
								<label for="input_event" class="col-md-4 control-table">Event</label>
								<div class="col-md-8">
									<input type="text" class="form-control" id="input_event" name="event" placeholder="Event" ng-model="">
								</div>
							</div>
							<!--=======================================================================-->
							<div class="form-group">
								<label for="input_event" class="col-md-4 control-table">Jabatan Event</label>
								<div class="col-md-8">
									<input type="text" class="form-control" id="input_jabatan_event" name="jabatan_event" placeholder="Jabatan Event" ng-model="">
								</div>
							</div>
							<!--=======================================================================-->
							<div class="form-group">
								<label for="input_event" class="col-md-4 control-table">Keterangan</label>
								<div class="col-md-8">
									<textarea rows="4" cols="55" ></textarea>
									<!--class="form-control" id="input_jabatan_event" name="jabatan_event" placeholder="Jabatan Event" ng-model=""-->
								</div>
							</div>
							<!--=======================================================================-->
							<div class="form-group">
								<label for="input_tugas" class="col-md-4 control-table">Jumlah Honor</label>
								<div class="col-md-8">
									<input type="text" class="form-control" id="input_jumlah" name="jumlah" placeholder="Jumlah Honor" ng-model="">
								</div>
							</div> 

						</form>

			      	</div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-default" data-dismiss="modal">Keluar</button>
			        <button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Simpan</button>
			      </div>
			   	</div><!-- /.modal-content -->
			</div><!-- /.modal-dialog -->
		</div><!-- /.modal -->
		<!--Test Modal-->
	
	{{HTML::script('js/ui-bootstrap-tpls-0.10.0.min.js')}}
	
@stop