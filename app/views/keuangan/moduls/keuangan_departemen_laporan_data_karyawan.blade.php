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

<div ng-controller="KeuanganBacaKaryawan" id="div-controller">
	<div class="row broccoli-rowKepala">
		<h1> Laporan Data Karyawan <small>  </small> </h1>
		<br>
	</div> <!-- broccoli-rowKepala-->

	<div class="row broccoli-rowIsi">
		<div class="col-md-12 broccoli-rowHtable">
			<table id="tbl_h" class="table table-striped table-bordered table-hover pull-downs" style="table-layout:fixed;">
				<tr>
					<th class="text-center" width="4%" style="border-bottom:2px solid #000;"> No</th>
					<th class="text-center" width="11%" style="border-bottom:2px solid #000;"> ID Karyawan </th>
					<th class="text-center" width="23%" style="border-bottom:2px solid #000;" ng-click="predicate='nama'; reverse=!reverse">Nama &nbsp; <i class="fa fa-sort"></i> </th>
					<th class="text-center" width="16%" style="border-bottom:2px solid #000;" ng-click="predicate='statuspegawai'; reverse=!reverse">Status Pegawai &nbsp; <i class="fa fa-sort"></i> </th>
					<th class="text-center" width="18%" style="border-bottom:2px solid #000;" ng-click="predicate='jabatan'; reverse=!reverse">Jabatan &nbsp; <i class="fa fa-sort"></i>  </th>
					<th class="text-center" width="18%" style="border-bottom:2px solid #000;" ng-click="predicate='email'; reverse=!reverse">Email &nbsp; <i class="fa fa-sort"></i>  </th>
					<th class="text-center" width="10%" style="border-bottom:2px solid #000;"> ... </th>
				</tr>
			</table>
		</div><!--broccoli-rowHtable-->

		<div class="col-md-12 broccoli-rowItable">
			<table class="table table-striped table-bordered table-hover" style="table-layout:fixed;">
				<tr ng-repeat="dk in data_karyawan | filter:query | orderBy:predicate:reverse">
					<td class="text-center" width="4%"> @{{ $index+1 }}</td>
					<td class="text-center" width="11%"> @{{ dk.id_karyawan }}</td>
					<td class="text-left" width="23%"> @{{ dk.nama }}</td>
					<td class="text-left" width="16%"> </td>
					<td class="text-left" width="18%"> @{{ dk.jabatan }}</td>
					<td class="text-left" width="18%"> @{{ dk.email }} </td>
					<td class="text-center" width="10%"> <button class="btn btn-primarry btn-md" ng-click="modal_detail_laporan_data_karyawan()"> <span class="glyphicon glyphicon-eye-open"></span></button> </td>
				</tr>
			</table>
		</div><!--/broccoli-rowItable-->
	</div> <!-- Tutup row Isi -->


</div> <!-- Tutup div controller -->