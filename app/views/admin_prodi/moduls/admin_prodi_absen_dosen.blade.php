{{HTML::script('js/jquery.min.js')}}
{{HTML::script('js/angular.min.js')}}
{{HTML::script('js/bootstrap.min.js')}}


<div ng-controller="AdminProdiAbsenDosenController" id="div-controller">
	<div class="row broccoli-rowKepala">
		<h1> Absensi Dosen <small> Akses dan Modifikasi data-data mahasiswa PNJ </small> </h1>
		<br>
	</div><!--/broccoli-rowKepala-->

	<div class="row broccoli-rowNavigasi broccoli-hilangPadding-semua">
		<div class="col-md-2 broccoli-mojok-kiri">
			<button ng-if="status_tambah_absen_dosen.status == 1" class="btn btn-success btn-md" ng-click="modal_tambah_absen_dosen()"> <span class="glyphicon glyphicon-plus"></span> Tambah Absen </button>
		</div><!--/navigasiKiri-->
		<div class="col-md-2 broccoli-mojok-kanan">
			<select class="form-control" ng-model='form_pilihan_jurusan.type' required ng-options='option.value as option.name for option in typeOptions_jurusan'></select>
		</div><!--/navgasi jurusan-->

		<div class="col-md-2 text-right">
			
		</div><!--/div for gap-->

		<div class="col-md-3">
			<select ng-model="model_pilihan_permohonan_cari" class="form-control">
	            <option value="nama"> NAMA </option>
	            <option value="permohonan">PERMOHONAN</option>
	            <option value="keterangan">KETERANGAN</option>
	            <option value="status">STATUS</option>
	        </select>
		</div><!--/navigasiCombo-->
		<div class="col-md-3 broccoli-mojok-kanan">
			<input type="text" class="form-control" ng-model="query_permohonan[model_pilihan_permohonan_cari]" placeholder="Cari . . . ."/>
		</div><!--/navigasiKanan-->
	</div>

	<div class="row broccoli-rowIsi">
		<div class="col-md-12 broccoli-rowHtable">
			<table id="tbl_h" class="table table-striped table-bordered table-hover pull-downs" style="table-layout:fixed;">
				<tr>
					<th class="text-center" width="5%" style="border-bottom:2px solid #000;">No </th>
					<th class="text-center" width="20%" style="border-bottom:2px solid #000;" ng-click="predicate='nama'; reverse=!reverse">NIP &nbsp; <i class="fa fa-sort"></i> </th>
					<th class="text-center" width="15%" style="border-bottom:2px solid #000;" ng-click="predicate='jabatan'; reverse=!reverse">Nama &nbsp; <i class="fa fa-sort"></i> </th>
					<th class="text-center" width="50%" style="border-bottom:2px solid #000;" ng-click="predicate='keterangan'; reverse=!reverse">Keterangan &nbsp; <i class="fa fa-sort"></i>  </th>
					<th class="text-center" width="10%" style="border-bottom:2px solid #000;" ng-click="predicate='status'; reverse=!reverse">Status &nbsp; <i class="fa fa-sort"></i>  </th>
				</tr>
			</table>
		</div><!--broccoli-rowHtable-->

		<div class="col-md-12 broccoli-rowItable">
			<table class="table table-striped table-bordered table-hover" style="table-layout:fixed;">

				<tr ng-repeat="dad in data_absen_dosen | filter:query_absensi | orderBy:predicate:reverse">
					<td class="text-center" width="5%">@{{ $index+1 }}</td>
					<td class="text-center" width="20%">@{{ dad.nip }}</td>
					<td class="text-left" width="15%">@{{ dad.nama }}</td>
					<td class="text-left" width="50%">@{{ dad.keterangan }}</td>
					<td class="text-center" width="10%">
						<div class="btn-group">
					 		<button ng-if="dad.status == 1" class="btn btn-success btn-md" ng-click="ubah_status_absen(dad.id_dosen_absen)"> <span class="glyphicon glyphicon-ok"></span></button>
					 		<button ng-if="dad.status == 0" class="btn btn-danger btn-md" ng-click="ubah_status_hadir(dad.id_dosen_absen)"> <span class="glyphicon glyphicon-remove"></span></button>
						</div>
					</td>
				</tr>

			</table>
		</div><!--/broccoli-rowItable-->
	</div><!--/broccoli-rowIsi-->
</div><!--/div-controller-->
