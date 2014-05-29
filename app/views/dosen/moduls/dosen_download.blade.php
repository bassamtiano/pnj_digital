{{HTML::script('js/jquery.min.js')}}
{{HTML::script('js/angular.min.js')}}
{{HTML::script('js/bootstrap.min.js')}}

<style type="text/css">
	#tbl_h {
		cursor: pointer;
	}

	.w {
		word-wrap:break-word;
	}

</style>

<script type="text/javascript">
	$(document).ready(function(){
		$(".pull-downs").each(function(){
			$(this).css('margin-top', $(this).parent().height() - $(this).height());
		});
	});
</script>

<div ng-controller="DosenDownloadController" id="div-controller">
	<div class="row broccoli-rowKepala">
		<h1>Download</h1>
		<br>
	</div><!--/broccoli-rowKepala-->

	<div class="row broccoli-rowNavigasi broccoli-hilangPadding-semua">
		<div class="col-md-3">
			<select ng-model="model_pilihan_cari" class="form-control">
	            <option value="">Nama Dokumen</option>
	            <option value="">Tanggal Kirim</option>
	        </select>
		</div><!--/navigasiCombo-->
		<div class="col-md-3 broccoli-mojok-kanan">
			<input class="form-control" ng-model="query[model_pilihan_cari]" placeholder="Cari . . . ."/>
		</div><!--/navigasiKanan-->
	</div>

	<div class="row broccoli-rowIsi">
		<div class="col-md-12 broccoli-rowHtable">
			<table id="tbl_h" class="table table-striped table-bordered table-hover pull-downs" style="table-layout:fixed;">
				<tr>
					<th class="text-center" width="5%" style="border-bottom:2px solid #000;">No </th>
					<th class="text-center" width="50%" style="border-bottom:2px solid #000;" ng-click="predicate='judul'; reverse=!reverse">Nama Dokumen &nbsp; <i class="fa fa-sort"></i> </th>
					<th class="text-center" width="30%" style="border-bottom:2px solid #000;" ng-click="predicate='tanggal_upload'; reverse=!reverse">Tanggal Kirim &nbsp; <i class="fa fa-sort"></i> </th>
					<th class="text-center" width="15%" style="border-bottom:2px solid #000;"> ... </th>
				</tr>
			</table>
		</div><!--broccoli-rowHtable-->

		<div class="col-md-12 broccoli-rowItable">
			<table class="table table-striped table-bordered table-hover" style="table-layout:fixed;">
				<tr ng-repeat="d in download | filter:query | orderBy:predicate:reverse">
					<td class="text-center" width="5%">@{{ $index+1 }}</td>
					<td class="text-center" width="50%">@{{ d.judul }}</td>
					<td class="text-center" width="30%">@{{ d.tanggal_upload }}</td>
					<td class="text-center" width="15%"> <button class="btn btn-primarry btn-md" ng-click=""> <span class="glyphicon glyphicon-save"></span></button> </td>
				
				</tr>
			</table>
		</div><!--/broccoli-rowItable-->
	</div><!--/broccoli-rowIsi-->
</div><!--/div-controller-->