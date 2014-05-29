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

<div class="row broccoli-rowKepala">
	<h1> Download <small> Download data-data karyawan PNJ </small> </h1>
	<br>
</div><!-- Akhir broccoli-rowKepala -->


<div class="row broccoli-rowIsi" ng-controller="KaryawanBacaController">
	<div class="col-md-12 broccoli-rowHtable">
		<table id="tbl_h" class="table table-striped table-bordered table-hover pull-downs" style="table-layout:fixed;">
			<tr>
				<th class="text-center" width="10%" style="border-bottom:2px solid #000;"> No </th>
				<th class="text-center" width="70%" style="border-bottom:2px solid #000;" ng-click="predicate='nama'; reverse=!reverse">Nama Dokumen &nbsp; <i class="fa fa-sort"></i> </th>
				<th class="text-center" width="20%" style="border-bottom:2px solid #000;" ng-click="predicate='nama'; reverse=!reverse">Tanggal Kirim &nbsp; <i class="fa fa-sort"></i> </th>
			</tr>
		</table>
	</div><!-- Akhir broccoli-rowHtable -->

	<div class="col-md-12 broccoli-rowItable">
		<table class="table table-striped table-bordered table-hover" style="table-layout:fixed;">
			<tr ng-repeat="dk in download_karyawan | orderBy:predicate:reverse ">
				<td class="text-center" width="10%">@{{ $index+1 }}</td>
				<td class="text-center" width="70%"><a href="#">Pedoman Buku Peraturan Politeknik</a></td>
				<td class="text-center" width="20%">24-03-2014</td>
			</tr>
		</table>
	</div><!-- Akhir broccoli-rowItable -->
</div> <!-- Akhir broccoli-rowIsi -->