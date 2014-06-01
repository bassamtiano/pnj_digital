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


<div ng-controller="MahasiswaBacaKalenderAkademisController" id="div-controller">


	<div class="row broccoli-rowKepala">
		<h1> Data Mahasiswa <small> Akses dan Modifikasi data-data mahasiswa PNJ </small> </h1>
		<br>
	</div>

	<div class="row broccoli-rowNavigasi broccoli-hilangPadding-semua">
		<div class="col-md-2 broccoli-mojok-kiri">
			<button type="submit" class="btn btn-success form-control" ng-click="modal_tambah_mahasiswa()"> <span class="glyphicon glyphicon-plus-sign"></span> Tambah</button>
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
					<th class="text-center" width="5%" style="border-bottom:2px solid #000;">No </th>
					<th class="text-center" width="15%" style="border-bottom:2px solid #000;" ng-click="predicate='nim'; reverse=!reverse">Tanggal &nbsp; <i class="fa fa-sort"></i> </th>
					<th class="text-center" width="10%" style="border-bottom:2px solid #000;" ng-click="predicate='nama'; reverse=!reverse">Durasi &nbsp; <i class="fa fa-sort"></i> </th>
					<th class="text-center" width="25%" style="border-bottom:2px solid #000;" ng-click="predicate='nama_kelas'; reverse=!reverse">Nama Kegiatan &nbsp; <i class="fa fa-sort"></i>  </th>
					<th class="text-center" width="35%" style="border-bottom:2px solid #000;" ng-click="predicate='nama_kelas'; reverse=!reverse">Keterangan &nbsp; <i class="fa fa-sort"></i>  </th>
					<th class="text-center" width="10%" style="border-bottom:2px solid #000;"> ... </th>
				</tr>
			</table>
		</div><!--broccoli-rowHtable-->

		<div class="col-md-12 broccoli-rowItable">
			<table class="table table-striped table-bordered table-hover" style="table-layout:fixed;">
				<tr ng-repeat="dm in data_mahasiswa | filter:query | orderBy:predicate:reverse">
					<td class="text-center" width="5%">@{{ $index+1 }}</td>
					<td class="text-center" width="15%">@{{ $index+1 }} </td>
					<td class="text-center" width="10%">@{{ $index+1 }} </td>
					<td class="text-center" width="25%">@{{ $index+1 }} </td>
					<td class="text-center" width="35%">@{{ $index+1 }} </td>
					<td class="text-center" width="10%"> ... </td>

					

					<!-- <td class="text-center" width="5%">@{{ $index+1 }}</td>
					<td class="text-center" width="13%">@{{ dm.nim }}</td>
					<td class="text-left" width="25%">@{{ dm.nama }}</td>
					<td class="text-center" width="9%"> <button class="btn btn-primarry btn-md" ng-click="modal_detail_mahasiswa(dm.id_mahasiswa)"> <span class="glyphicon glyphicon-eye-open"></span></button> </td>
					<td class="text-center" width="9%"> <button class="btn btn-success btn-md" ng-click="modal_ubah_mahasiswa(dm.id_mahasiswa)"> <span class="glyphicon glyphicon-edit"></span></button> </td>
					<td class="text-center" width="9%"> <button class="btn btn-danger btn-md" ng-click="modal_hapus_mahasiswa(dm.id_mahasiswa, dm.nama)"> <span class="glyphicon glyphicon-trash"></span></button> </td> -->
				</tr>
			</table>
		</div><!--/broccoli-rowItable-->
	

	</div>

</div>
