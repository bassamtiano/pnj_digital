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

<div ng-controller="MahasiswaBacaDosenController" id="div-controller">
	<div class="row broccoli-rowKepala">
		<h1> Data Dosen <small> Akses dan Modifikasi data-data mahasiswa PNJ </small> </h1>
		<br>
	</div><!--/broccoli-rowKepala-->

	<div class="row broccoli-rowNavigasi broccoli-hilangPadding-semua">
		<div class="col-md-3">
			<select ng-model="model_pilihan_cari_dosen" class="form-control">
	            <option value="nik"> NIK </option>
	            <option value="nip"> NIP </option>
	            <option value="nama">NAME</option>
	            <option value="email">EMAIL</option>
	            <option value="jurusan">JURUSAN</option>
	        </select>
		</div><!--/navigasiCombo-->
		<div class="col-md-3 broccoli-mojok-kanan">
			<input class="form-control" ng-model="query_dosen[model_pilihan_cari_dosen]" placeholder="Cari . . . ."/>
		</div><!--/navigasiKanan-->
	</div>

	<div class="row broccoli-rowIsi">
		<div class="col-md-12 broccoli-rowHtable">
			<table id="tbl_h" class="table table-striped table-bordered table-hover pull-downs" style="table-layout:fixed;">
				<tr>
					<th class="text-center" width="5%" style="border-bottom:2px solid #000;">No </th>
					<th class="text-center" width="13%" style="border-bottom:2px solid #000;" ng-click="predicate='nik'; reverse=!reverse">NIK &nbsp; <i class="fa fa-sort"></i> </th>
					<th class="text-center" width="13%" style="border-bottom:2px solid #000;" ng-click="predicate='nip'; reverse=!reverse">NIP &nbsp; <i class="fa fa-sort"></i> </th>
					<th class="text-center" width="25%" style="border-bottom:2px solid #000;" ng-click="predicate='nama'; reverse=!reverse">Nama &nbsp; <i class="fa fa-sort"></i> </th>
					<th class="text-center" width="25%" style="border-bottom:2px solid #000;" ng-click="predicate='email'; reverse=!reverse">Email &nbsp; <i class="fa fa-sort"></i>  </th>
					<th class="text-center" width="18%" style="border-bottom:2px solid #000;" ng-click="predicate='jurusan'; reverse=!reverse">Jurusan &nbsp; <i class="fa fa-sort"></i> </th>
					<th class="text-center" width="10%" style="border-bottom:2px solid #000;"> ... </th>
				</tr>
			</table>
		</div><!--broccoli-rowHtable-->

		<div class="col-md-12 broccoli-rowItable">
			<table class="table table-striped table-bordered table-hover" style="table-layout:fixed;">
				<tr ng-repeat="d in dosen | filter:query_dosen | orderBy:predicate:reverse">
					<td class="text-center" width="5%">@{{ $index+1 }}</td>
					<td class="text-center" width="13%">@{{ d.nik }}</td>
					<td class="text-left" width="13%">@{{ d.nip }}</td>
					<td class="text-left" width="25%">@{{ d.nama }}</td>
					<td class="text-center" width="25%">@{{ d.email }}</td>
					<td class="text-center" width="18%">@{{ d.jurusan }}</td>
					<td class="text-center" width="10%"> 
						<div class="btn-group">
					 		<button class="btn btn-primarry btn-md" ng-click="modal_baca_dosen_detail(d.id_dosen)"> <span class="glyphicon glyphicon-eye-open"></span></button>
						</div>
					</td>
				</tr>
			</table>
		</div><!--/broccoli-rowItable-->
	</div><!--/broccoli-rowIsi-->
</div><!--/div-controller-->