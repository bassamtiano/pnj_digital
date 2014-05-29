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
		<h1> Download <small> Data-data Kepegawaian PNJ </small> </h1>
		<br>
	</div> <!-- broccoli-rowKepala-->

	<div class="row broccoli-rowNavigasi broccoli-hilangPadding-semua">
		<div class="col-md-10 broccoli-mojok-kiri"></div><!--col-md-10-->

		<div class="col-md-2 broccoli-mojok-kanan">
			<button type="submit" class="btn btn-success form-control" ng-click="modal_tambah_pemasukkan()"> <span class="glyphicon glyphicon-plus-sign"></span> Upload File</button>
		</div><!--/navigasiKanan-->
	</div> <!-- Tutup div broccoli-rowNavigasi -->

	<div class="row broccoli-rowIsi">
		<div class="col-md-12 broccoli-rowHtable">
			<table id="tbl_h" class="table table-striped table-bordered table-hover pull-downs" style="table-layout:fixed;">
				<tr>
					<th class="text-center" width="10%" style="border-bottom:2px solid #000;"> No </th>
					<th class="text-center" width="70%" style="border-bottom:2px solid #000;" ng-click="predicate='tanggal'; reverse=!reverse">Nama Dokumen &nbsp; <i class="fa fa-sort"></i> </th>
					<th class="text-center" width="20%" style="border-bottom:2px solid #000;" ng-click="predicate='jumlah'; reverse=!reverse">Tanggal Kirim &nbsp; <i class="fa fa-sort"></i> </th>
				</tr>
			</table>
		</div><!--broccoli-rowHtable-->

		<div class="col-md-12 broccoli-rowItable">
			<table class="table table-striped table-bordered table-hover" style="table-layout:fixed;">
				<tr ng-repeat="pm in pemasukkan | filter:query | orderBy:predicate:reverse">
					<td class="text-center" width="10%"> @{{ $index+1 }}</td>
					<td class="text-center" width="70%"> <a href="#"> @{{ pm.nim }} </a></td>
					<td class="text-left" width="20%"> @{{ pm.nama }}</td>
				</tr>
			</table>
		</div><!--/broccoli-rowItable-->
	</div> <!-- Tutup row Isi -->

</div> <!-- Tutup div controller -->
