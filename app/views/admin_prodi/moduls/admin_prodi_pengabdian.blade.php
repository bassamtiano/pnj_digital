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

<div ng-controller="AdminProdiBacaPengabdianDosen" div="div-controller">
	<div class="row broccoli-rowKepala" >
		<h1> Data Pengabdian Dosen <small> Akses dan Modifikasi data-data Pengabdian Dosen PNJ </small> </h1>
		<br>
	</div><!--/broccoli-rowKepala-->

	<div class="row broccoli-rowNavigasi broccoli-hilangPadding-semua">
			<div class="col-md-2 broccoli-mojok-kiri">
				<button type="submit" class="btn btn-success form-control" ng-click="modal_tambah_pengabdian_dosen()"> <span class="glyphicon glyphicon-plus-sign"></span> Tambah</button>
			</div><!--/navigasiKiri-->
			<div class="col-md-2 broccoli-mojok-kanan">
				<select class="form-control" ng-model='form_pilihan_jurusan.type' required ng-options='option.value as option.name for option in typeOptions_jurusan'></select>
			</div><!--/navgasi jurusan-->

			<div class="col-md-2 text-right">
				
			</div><!--/div for gap-->

			<div class="col-md-3">
				<select ng-model="model_pilihan_cari" class="form-control">
		            <option value="nim"> NIM </option>
		            <option value="nama">NAME</option>
		            <option value="nama_kelas">Kelas</option>
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
					<th class="text-center" width="10%" style="border-bottom:2px solid #000;">NIK </th>
					<th class="text-center" width="15%" style="border-bottom:2px solid #000;" ng-click="predicate='nim'; reverse=!reverse">Nama Dosen &nbsp; <i class="fa fa-sort"></i> </th>
					<th class="text-center" width="18%" style="border-bottom:2px solid #000;" ng-click="predicate='nama'; reverse=!reverse">Nama Pengabdian &nbsp; <i class="fa fa-sort"></i> </th>
					<th class="text-center" width="16%" style="border-bottom:2px solid #000;" ng-click="predicate='nama_kelas'; reverse=!reverse">Tanggal Mulai &nbsp; <i class="fa fa-sort"></i>  </th>
					<th class="text-center" width="16%" style="border-bottom:2px solid #000;" ng-click="predicate='konsentrasi_prodi'; reverse=!reverse">Tanggal Selesai &nbsp; <i class="fa fa-sort"></i>  </th>
					<th class="text-center" width="10%" style="border-bottom:2px solid #000;" ng-click="predicate='status'; reverse=!reverse">Nilai &nbsp; <i class="fa fa-sort"></i> </th>
					<th class="text-center" width="15%" style="border-bottom:2px solid #000;"> ... </th>
				</tr>
			</table>
		</div><!--broccoli-rowHtable-->

		<div class="col-md-12 broccoli-rowItable">
			<table class="table table-striped table-bordered table-hover" style="table-layout:fixed;">
				<tr ng-repeat="dp in data_pengabdian | orderBy:predicate:reverse ">
					<td class="text-center" width="10%"> @{{ dp.nik }} </td>
					<td class="text-center" width="15%"> @{{ dp.nama }} </td>
					<td class="text-left" width="18%" style="word-wrap: break-word;"> @{{ dp.nama_pengabdian }} </td>
					<td class="text-left" width="16%"> @{{ dp.tgl_mulai }} </td>
					<td class="text-left" width="16%"> @{{ dp.tgl_selesai }} </td>
					<td class="text-center" width="10%"> @{{ dp.nilai }} </td>
					<td class="text-center" width="15%"> 
						<div class="btn-group">
							<button class="btn btn-primarry btn-md" ng-click="modal_detail_pengabdian_dosen()"> <span class="glyphicon glyphicon-eye-open"></span></button>
					 		<button class="btn btn-success btn-md" ng-click="modal_ubah_pengabdian_dosen(dp.id_dosen_pengabdian)"> <span class="glyphicon glyphicon-edit"></span></button>
					 		<button class="btn btn-danger btn-md" ng-click="modal_hapus_pengabdian_dosen(dp.id_dosen_pengabdian)"> <span class="glyphicon glyphicon-trash"></span></button> 
						</div>
					</td>
				</tr>
			</table>
		</div><!--/broccoli-rowItable-->
	</div><!--/broccoli-rowIsi-->
</div>