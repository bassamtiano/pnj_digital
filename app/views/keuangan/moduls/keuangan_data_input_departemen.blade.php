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

<div ng-controller="KeuanganBacaDepartemen" id="div-controller">
	<div class="row broccoli-rowKepala">
		<h1> Data Departemen <small> Data-data Departemen PNJ </small> </h1>
		<br>
	</div> <!-- broccoli-rowKepala-->


<div class="row broccoli-rowNavigasi broccoli-hilangPadding-semua">
		<div class="col-md-10 broccoli-mojok-kiri">

		</div> <!-- Tutup col-md-10 -->

		<div class="col-md-2 broccoli-mojok-kanan">
			<button type="submit" class="btn btn-success form-control" ng-click="modal_tambah_data_departemen()"> <span class="glyphicon glyphicon-plus-sign"></span> Tambah</button>
		</div> <!-- Tutup col-md-2 -->

	</div> <!-- broccoli-rowNavigasi -->

	<div class="row broccoli-rowIsi">
		<div class="col-md-12 broccoli-rowHtable">
			<table id="tbl_h" class="table table-striped table-bordered table-hover pull-downs" style="table-layout:fixed;">
				<tr>
					<th class="text-center" width="5%" style="border-bottom:2px solid #000;"> No </th>
					<th class="text-center" width="37%" style="border-bottom:2px solid #000;" ng-click="predicate='kodedepartemen'; reverse=!reverse">Kode Departemen &nbsp; <i class="fa fa-sort"></i> </th>
					<th class="text-center" width="42%" style="border-bottom:2px solid #000;" ng-click="predicate='departemen'; reverse=!reverse">Departemen &nbsp; <i class="fa fa-sort"></i> </th>	
					<th class="text-center" width="15%" style="border-bottom:2px solid #000;"> ... </th>
				</tr>
			</table>
		</div><!--broccoli-rowHtable-->

		<div class="col-md-12 broccoli-rowItable">
			<table class="table table-striped table-bordered table-hover" style="table-layout:fixed;">
				<tr ng-repeat="dd in data_departemen | filter:query | orderBy:predicate:reverse">
					<td class="text-center" width="5%"> @{{ $index+1 }}</td>
					<td class="text-center" width="37%"> @{{ dd.kode_departemen }}</td>
					<td class="text-left" width="42%"> @{{ dd.departemen }}</td>
					<td class="text-center" width="15%">
						<div class="btn-group">
							<button class="btn btn-success btn-dd" ng-click="modal_ubah_data_departemen(pm.kode_departemen)"> <span class="glyphicon glyphicon-edit"></span></button>
							<button class="btn btn-danger btn-dd" ng-click="modal_hapus_data_penggajian(pm.kode_departemen, dm.departemen)"> <span class="glyphicon glyphicon-trash"></span></button>
						</div>
					</td>
				</tr>
			</table>
		</div><!--/broccoli-rowItable-->
	</div> <!-- Tutup row Isi -->
</div> <!-- Tutup div controller -->
