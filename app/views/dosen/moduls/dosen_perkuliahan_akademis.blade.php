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

<div ng-controller="DosenMatakuliahController" id="div-controller">

	<div class="row broccoli-rowKepala">
		<h1> Akademis</h1>
		<br>
	</div><!--/broccoli-rowKepala-->

	<div class="row broccoli-rowNavigasi broccoli-hilangPadding-semua">
		
		<div class="col-md-3">
			<select ng-model="model_pilihan_cari" class="form-control">
	            <option value=""> Matakuliah</option>
	            <option value="">Hari</option>
	            <option value="">Kelas</option>
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
					<th class="text-center" width="10%" style="border-bottom:2px solid #000;" ng-click="">Hari&nbsp; <i class="fa fa-sort"></i> </th>
					<th class="text-center" width="10%" style="border-bottom:2px solid #000;" ng-click="">Waktu&nbsp; <i class="fa fa-sort"></i> </th>
					<th class="text-center" width="35%" style="border-bottom:2px solid #000;" ng-click="">Matakuliah &nbsp; <i class="fa fa-sort"></i>  </th>
					<th class="text-center" width="10%" style="border-bottom:2px solid #000;" ng-click="">SKS &nbsp; <i class="fa fa-sort"></i>  </th>
					<th class="text-center" width="10%" style="border-bottom:2px solid #000;" ng-click="">Kelas &nbsp; <i class="fa fa-sort"></i> </th>
					<th class="text-center" width="10%" style="border-bottom:2px solid #000;" ng-click="">Ruang &nbsp; <i class="fa fa-sort"></i> </th>
					<th class="text-center" width="10%" style="border-bottom:2px solid #000;"> ... </th>
				</tr>
			</table>
		</div><!--broccoli-rowHtable-->

		<div class="col-md-12 broccoli-rowItable">
			<table class="table table-striped table-bordered table-hover" style="table-layout:fixed;">
				<tr ng-repeat="">
					<td class="text-center" width="5%">@{{ $index+1 }}</td>
					<td class="text-center" width="10%">@{{}}</td>
					<td class="text-left" width="10%">@{{}</td>
					<td class="text-left" width="35%"><button class="btn btn-primarry btn-md" ng-click=""><i class="glyphicon glyphicon-edit"></i></button>@{{}}</td>
					<td class="text-left" width="10%">@{{}}</td>
					<td class="text-center" width="10%">@{{}}</td>
					<td class="text-center" width="10%">@{{}}</td>
					<td class="text-center" width="10%"><button class="btn btn-primarry btn-md" ng-click=""><span class="glyphicon glyphicon-edit"></span></button></td>
				</tr>
			</table>
		</div><!--/broccoli-rowItable-->

	</div><!--/broccoli-rowIsi-->

</div><!--/div-controller-->