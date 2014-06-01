{{HTML::script('js/jquery.min.js')}}
{{HTML::script('js/angular.min.js')}}
{{HTML::script('js/bootstrap.min.js')}}

<style type="text/css">
	#tbl_h {
		cursor: pointer;
	}
</style>

<script type="text/javascript">
	$(document).ready(function(){
		$(".pull-downs").each(function(){
			$(this).css('margin-top', $(this).parent().height() - $(this).height());
		});
	});
</script>

<div ng-controller="AdminJurusanBacaDosenController" id="div-controller">
	<!-- Awal title -->
	<div class="row broccoli-rowKepala">
		<h1> Data Dosen <small>[sesuai jurusan]</small> </h1>
		<br>
	</div><!--/broccoli-rowKepala-->
	<!-- akhir title -->
	<!-- awal navigasi -->
	<div class="row broccoli-rowNavigasi broccoli-hilangPadding-semua">
		<div class="col-md-1" style="padding-left:0px;">
		</div><!--/navigasiKiri-->
		<div class="col-md-2">
		</div><!--/navgasi jurusan-->
		<div class="col-md-2">
		</div><!--/div for gap-->
		<div class="col-md-3">
		</div><!--/navigasiCombo-->
		<div class="col-md-3" style="padding-right:0px;">
			<input type="text" class="form-control input-xs" placeholder="Cari">
		</div><!--/navigasiKanan-->
	</div>
	<!-- akhir navigasi -->
	<!-- awal content -->	
	<div class="row broccoli-rowIsi" >
		<div class="col-md-12 broccoli-rowHtable">
			<table id="tbl_h" class="table table-striped table-bordered table-hover pull-downs" style="table-layout:fixed;">
				<tr>
					<th class="text-center" width="5%" style="border-bottom:2px solid #000;">No </th>
					<th class="text-center" width="18%" style="border-bottom:2px solid #000;" ng-click="predicate=''; reverse=!reverse">NIK &nbsp; <i class="fa fa-sort"></i> </th>
					<th class="text-center" width="20%" style="border-bottom:2px solid #000;" ng-click="predicate=''; reverse=!reverse">Nama &nbsp; <i class="fa fa-sort"></i> </th>
					<th class="text-center" width="12%" style="border-bottom:2px solid #000;" ng-click="predicate=''; reverse=!reverse">Prodi &nbsp; <i class="fa fa-sort"></i>  </th>
					<th class="text-center" width="15%" style="border-bottom:2px solid #000;" ng-click="predicate=''; reverse=!reverse">Email &nbsp; <i class="fa fa-sort"></i>  </th>
					<th class="text-center" width="15%" style="border-bottom:2px solid #000;" ng-click="predicate=''; reverse=!reverse">No-Telp &nbsp; <i class="fa fa-sort"></i> </th>
					<th class="text-center" width="15%" style="border-bottom:2px solid #000;"> ... </th>
				</tr>
			</table>
		</div><!--broccoli-rowHtable-->

		<div class="col-md-12 broccoli-rowItable">
			<table class="table table-striped table-bordered table-hover" style="table-layout:fixed;">
				<tr ng-repeat="dd in data_dosen | orderBy:predicate:reverse" >
					<td class="text-center" width="5%">@{{ $index+1 }}</td>
					<td class="text-center" width="18%">@{{ dd.nik }}</td>
					<td class="text-left" width="20%">@{{ dd.nama }}</td>
					<td class="text-left" width="12%">@{{ dd.jurusan }}</td>
					<td class="text-left" width="15%">@{{ dd.email }}</td>
					<td class="text-center" width="15%">@{{ dd.no_telepon }}</td>
					<td class="text-center" width="15%"> 
						<div class="btn-group">
							<button class="btn btn-primarry btn-md" ng-click="modal_detail_dosen(dd.id_dosen)"> <span class="glyphicon glyphicon-eye-open"></span></button>
					 		<button class="btn btn-success btn-md" ng-click="modal_ubah_dosen(dd.id_dosen)"> <span class="glyphicon glyphicon-edit"></span></button>
					 		<button class="btn btn-danger btn-md" ng-click="modal_hapus_dosen(dd.id_dosen, dd.nama)"> <span class="glyphicon glyphicon-trash"></span></button> 
						</div>
					</td>
				</tr>
			</table>
		</div><!--/broccoli-rowItable-->
	</div><!--/broccoli-rowIsi-->
	<!-- akhir content -->

</div>