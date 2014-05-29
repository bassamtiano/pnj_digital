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

<div ng-controller="DosenBacaMahasiswaController" id="div-controller">
	<div class="row broccoli-rowKepala">
		<h1> Data Mahasiswa <small></small> </h1>
		<br>
	</div><!--/broccoli-rowKepala-->

	<div class="row broccoli-rowNavigasi broccoli-hilangPadding-semua">
		
		<div class="col-md-3">
			<select ng-model="model_pilihan_cari" class="form-control">
	            <option value="nim"> NIM </option>
	            <option value="nama">NAME</option>
	            <option value="nama_kelas">KELAS</option>
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
					<th class="text-center" width="15%" style="border-bottom:2px solid #000;" ng-click="">NIM &nbsp; <i class="fa fa-sort"></i> </th>
					<th class="text-center" width="35%" style="border-bottom:2px solid #000;" ng-click="">Nama &nbsp; <i class="fa fa-sort"></i> </th>
					<th class="text-center" width="10%" style="border-bottom:2px solid #000;" ng-click="">Kelas &nbsp; <i class="fa fa-sort"></i>  </th>
					<th class="text-center" width="15%" style="border-bottom:2px solid #000;" ng-click="">Konsentrasi &nbsp; <i class="fa fa-sort"></i>  </th>
					<th class="text-center" width="10%" style="border-bottom:2px solid #000;" ng-click="">Status &nbsp; <i class="fa fa-sort"></i> </th>
					<th class="text-center" width="10%" style="border-bottom:2px solid #000;"> ... </th>
				</tr>
			</table>
		</div><!--broccoli-rowHtable-->

		<div class="col-md-12 broccoli-rowItable">
			<table class="table table-striped table-bordered table-hover" style="table-layout:fixed;">
				<tr ng-repeat="dm in data_mahasiswa | filter:query | orderBy:predicate:reverse">
					<td class="text-center" width="5%">@{{ $index+1 }}</td>
					<td class="text-center" width="15%">@{{ dm.nim }}</td>
					<td class="text-left" width="35%">@{{ dm.nama }}</td>
					<td class="text-left" width="10%">@{{ dm.nama_kelas }}</td>
					<td class="text-left" width="15%">@{{ dm.konsentrasi_prodi }}</td>
					<td class="text-center" width="10%">@{{ dm.status }}</td>
					<td class="text-center" width="10%"> <button class="btn btn-primarry btn-md" ng-click="dosen_modal_detail_mahasiswa(dm.nim)"> <span class="glyphicon glyphicon-eye-open"></span></button> </td>
				</tr>
			</table>
		</div><!--/broccoli-rowItable-->
	</div><!--/broccoli-rowIsi-->
</div><!--/div-controller-->