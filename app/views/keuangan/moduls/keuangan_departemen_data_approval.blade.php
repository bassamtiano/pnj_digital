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

<div ng-controller="KeuanganController" id="div-controller">
	<div class="row broccoli-rowKepala">
		<h1> Data Approval Pembayaran Mahasiswa <small>  </small> </h1>
		<br>
	</div> <!-- broccoli-rowKepala-->

	<div class="row broccoli-rowIsi">
		<div class="col-md-12 broccoli-rowHtable">
			<table id="tbl_h" class="table table-striped table-bordered table-hover pull-downs" style="table-layout:fixed;">
				<tr>
					<th class="text-center" width="5%" style="border-bottom:2px solid #000;"> No </th>
					<th class="text-center" width="15%" style="border-bottom:2px solid #000;" ng-click="predicate='tanggalupload'; reverse=!reverse">Tanggal Upload &nbsp; <i class="fa fa-sort"></i> </th>
					<th class="text-center" width="15%" style="border-bottom:2px solid #000;" ng-click="predicate='nim'; reverse=!reverse">NIM &nbsp; <i class="fa fa-sort"></i> </th>
					<th class="text-center" width="16%" style="border-bottom:2px solid #000;" ng-click="predicate='nama'; reverse=!reverse">Nama &nbsp; <i class="fa fa-sort"></i>  </th>
					<th class="text-center" width="14%" style="border-bottom:2px solid #000;" ng-click="predicate='jalur'; reverse=!reverse">Jalur &nbsp; <i class="fa fa-sort"></i>  </th>
					<th class="text-center" width="18%" style="border-bottom:2px solid #000;" ng-click="predicate='tanggalpembayaran'; reverse=!reverse">Tanggal Pembayaran &nbsp; <i class="fa fa-sort"></i>  </th>
					<th class="text-center" width="8%" style="border-bottom:2px solid #000;"> ... </th>
					<th class="text-center" width="14%" style="border-bottom:2px solid #000;" ng-click="predicate='status'; reverse=!reverse">Status &nbsp; <i class="fa fa-sort"></i>  </th>
				</tr>
			</table>
		</div><!--broccoli-rowHtable-->

		<div class="col-md-12 broccoli-rowItable">
			<table class="table table-striped table-bordered table-hover" style="table-layout:fixed;">
				<tr ng-repeat="pm in pemasukkan | filter:query | orderBy:predicate:reverse">
					<td class="text-center" width="5%"> @{{ $index+1 }}</td>
					<td class="text-center" width="15%"> @{{ pm.nim }}</td>
					<td class="text-left" width="15%"> @{{ pm.nama }}</td>
					<td class="text-left" width="16%"> @{{ pm.nama_kelas }}</td>
					<td class="text-center" width="14%"> @{{ pm.nama_kelas }} </td>
					<td class="text-center" width="18%">  @{{ pm.nama_kelas }} </td>
					<td class="text-center" width="8%"> <button class="btn btn-primarry btn-md" ng-click="modal_detail_data_approval(dm.id_mahasiswa)"> <span class="glyphicon glyphicon-eye-open"></span></button> </td>
					<td class="text-center" width="14%"> @{{ pm.nama_kelas }} </td>
				</tr>
			</table>
		</div><!--/broccoli-rowItable-->
	</div> <!-- Tutup row Isi -->


</div> <!-- Tutup div controller -->