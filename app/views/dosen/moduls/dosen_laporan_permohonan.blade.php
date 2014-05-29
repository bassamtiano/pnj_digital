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

<div ng-controller="DosenLaporanPermohonanController" id="div-controller">
	<div class="row broccoli-rowKepala">
		<h1> Permohonan <small> Akses Permohonon </small> </h1>
		<br>
	</div><!--/broccoli-rowKepala-->

	<div class="row broccoli-rowNavigasi broccoli-hilangPadding-semua">
		<div class="col-md-2 broccoli-mojok-kiri">
			<button type="submit" class="btn btn-success form-control" ng-click="modal_tambah_permohonan()"> <span class="glyphicon glyphicon-plus-sign"></span> Tambah</button>
		</div><!--/navigasiKiri-->
		<div class="col-md-2 broccoli-mojok-kanan">
			<select class="form-control" ng-model='form_pilihan_jurusan.type' required ng-options='option.value as option.name for option in typeOptions_jurusan'></select>
		</div><!--/navgasi jurusan-->

		<div class="col-md-2 text-right">
			
		</div><!--/div for gap-->

		<div class="col-md-3">
			<select ng-model="model_pilihan_permohonan_cari" class="form-control">
	            <option value="nama"> NAMA </option>
	            <option value="permohonan">PERMOHONAN</option>
	            <option value="keterangan">KETERANGAN</option>
	            <option value="status">STATUS</option>
	        </select>
		</div><!--/navigasiCombo-->
		<div class="col-md-3 broccoli-mojok-kanan">
			<input type="text" class="form-control" ng-model="query_permohonan[model_pilihan_permohonan_cari]" placeholder="Cari . . . ."/>
		</div><!--/navigasiKanan-->
	</div>

	<div class="row broccoli-rowIsi">
		<div class="col-md-12 broccoli-rowHtable">
			<table id="tbl_h" class="table table-striped table-bordered table-hover pull-downs" style="table-layout:fixed;">
				<tr>
					<th class="text-center" width="5%" style="border-bottom:2px solid #000;">No </th>
					<th class="text-center" width="13%" style="border-bottom:2px solid #000;" ng-click="predicate='nama'; reverse=!reverse">Nama Pemohon &nbsp; <i class="fa fa-sort"></i> </th>
					<th class="text-center" width="25%" style="border-bottom:2px solid #000;" ng-click="predicate='permohonan'; reverse=!reverse">Jenis Permohonan &nbsp; <i class="fa fa-sort"></i> </th>
					<th class="text-center" width="10%" style="border-bottom:2px solid #000;" ng-click="predicate='keterangan'; reverse=!reverse">Keterangan &nbsp; <i class="fa fa-sort"></i>  </th>
					<th class="text-center" width="15%" style="border-bottom:2px solid #000;" ng-click="predicate='status'; reverse=!reverse">Status &nbsp; <i class="fa fa-sort"></i>  </th>
					<th class="text-center" width="9%" style="border-bottom:2px solid #000;"> ... </th>
				</tr>
			</table>
		</div><!--broccoli-rowHtable-->

		<div class="col-md-12 broccoli-rowItable">
			<table class="table table-striped table-bordered table-hover" style="table-layout:fixed;">
				<tr ng-repeat="p in permohonan | filter:query_permohonan | orderBy:predicate:reverse">
					<td class="text-center" width="5%">@{{ $index+1 }}</td>
					<td class="text-center" width="13%">@{{ p.nama }}</td>
					<td class="text-left" width="25%">@{{ p.permohonan }}</td>
					<td class="text-left" width="10%">@{{ p.keterangan }}</td>
					<td class="text-left" width="15%">@{{ p.status }}</td>

					<td class="text-center" width="9%">
						<div class="btn-group">
					 		<button class="btn btn-success btn-md" ng-click="modal_ubah_permohonan(p.id_dosen_permohonan)"> <span class="glyphicon glyphicon-edit"></span></button>
					 		<button class="btn btn-danger btn-md" ng-click="modal_hapus_permohonan(p.id_dosen_permohonan, p.nama)"> <span class="glyphicon glyphicon-trash"></span></button> 
						</div>
					</td>
						
				</tr>
			</table>
		</div><!--/broccoli-rowItable-->
	</div><!--/broccoli-rowIsi-->
</div><!--/div-controller-->