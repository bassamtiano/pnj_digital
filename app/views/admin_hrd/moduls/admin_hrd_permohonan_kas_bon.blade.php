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

<div id="div-controller" ng-controller="AdminHRDBacaDataKaryawan">
	<div class="row broccoli-rowKepala">
		<h1> Permohonan <small> KAS BON </small> </h1>
		<br>
	</div><!--/broccoli-rowKepala-->

	<div class="row broccoli-rowNavigasi broccoli-hilangPadding-semua">
		<div class="col-md-2 broccoli-mojok-kiri">
			<button type="submit" class="btn btn-success form-control" ng-click="admin_hrd_modals_tambah_karyawan()"> <span class="glyphicon glyphicon-plus-sign"></span> Tambah</button>
		</div><!--/navigasiKiri-->
		<div class="col-md-2 broccoli-mojok-kanan">
			<select class="form-control" ng-model='form_pilihan_jurusan.type' required ng-options='option.value as option.name for option in typeOptions_jurusan'></select>
		</div><!--/navgasi jurusan-->

		<div class="col-md-2 text-right">
			
		</div><!--/div for gap-->

		<div class="col-md-3">
			<select ng-model="model_pilihan_cari" class="form-control">
	            <option value="nim"> ID </option>
	            <option value="nama">Nama</option>
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
					<th class="text-center" width="5%" style="border-bottom:2px solid #000;">No </th>
					<th class="text-center" width="15%" style="border-bottom:2px solid #000;" ng-click="predicate='id'; reverse=!reverse">Nama &nbsp; <i class="fa fa-sort"></i> </th>
					<th class="text-center" width="20%" style="border-bottom:2px solid #000;" ng-click="predicate='nama'; reverse=!reverse">ID Karyawan &nbsp; <i class="fa fa-sort"></i> </th>
					<th class="text-center" width="19%" style="border-bottom:2px solid #000;" ng-click="predicate='alamat'; reverse=!reverse">Jabatan &nbsp; <i class="fa fa-sort"></i>  </th>
					<th class="text-center" width="18%" style="border-bottom:2px solid #000;" ng-click="predicate='status_pegawai'; reverse=!reverse">Detail &nbsp; <i class="fa fa-sort"></i>  </th>
					<th class="text-center" width="12%" style="border-bottom:2px solid #000;" ng-click="predicate='jabatan'; reverse=!reverse">Verifikasi &nbsp; <i class="fa fa-sort"></i> </th>
					<th class="text-center" width="16%" style="border-bottom:2px solid #000;" ng-click="predicate=''"> Proses </th>
				</tr>
			</table>
		</div><!--broccoli-rowHtable-->

		<div class="col-md-12 broccoli-rowItable">
			<table class="table table-striped table-bordered table-hover" style="table-layout:fixed;">
				<tr ng-repeat="dk in data_karyawan | filter:query | orderBy:predicate:reverse">
					<td class="text-center" width="5%">@{{ $index+1 }}</td>
					<td class="text-center" width="15%">@{{ dk.nik }}</td>
					<td class="text-left" width="20%">@{{ dk.nama }}</td>
					<td class="text-left" width="19%">@{{ dk.alamat }}</td>
					<td class="text-left" width="18%">@{{ dk.status }} <a href="#"> lihat </a></td>
					<td class="text-center" width="12%">@{{ dk.status }} <input type="checkbox"> </input></td>
					<td class="text-center" width="16%"> <button class="btn btn-success btn-md" ng-click="modals_ubah_data_karyawan()"> <span class="glyphicon glyphicon-edit"></span></button> </td>
				</tr>
			</table>
		</div><!--/broccoli-rowItable-->

	</div><!--/broccoli-rowIsi-->
</div><!--/div-controller-->