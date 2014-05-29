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
	<h1> Data Kuisioner <small> Akses dan Modifikasi data-data Kuisioner PNJ </small> </h1>
	<br>
</div><!--/broccoli-rowKepala-->

<div class="row broccoli-rowNavigasi broccoli-hilangPadding-semua">
	<div class="col-md-6" style="padding-left:0px;">
		<button type="submit" class="btn btn-success" data-toggle="modal" data-target="#kuisonerModal">Soal Kuisoner</button>
								@include('admin_prodi.modals.modal_kuisoner')
	</div><!--/navigasiKiri-->
	<div class="col-md-3">
		<select class="form-control">
			<option value="nim"> NIM </option>
			<option value="nama"> Nama </option>
			<option value="kelas"> Kelas </option>
		</select>
	</div><!--/navigasiCombo-->
	<div class="col-md-3" style="padding-right:0px;">
		<input type="text" class="form-control input-xs" placeholder="Cari">
	</div><!--/navigasiKanan-->
</div>

<div class="row broccoli-rowIsi" ng-controller="AdminKemahasiswaanBacaMahasiswaController">
	<div class="col-md-12 broccoli-rowHtable">
		<table id="tbl_h" class="table table-striped table-bordered table-hover pull-downs" style="table-layout:fixed;">
			<tr>
				<th class="text-center" width="5%" style="border-bottom:2px solid #000;">No </th>
				<th class="text-center" width="15%" style="border-bottom:2px solid #000;" ng-click="predicate='nim'; reverse=!reverse">Dosen &nbsp; <i class="fa fa-sort"></i> </th>
				<th class="text-center" width="24%" style="border-bottom:2px solid #000;" ng-click="predicate='nama'; reverse=!reverse">Matkul &nbsp; <i class="fa fa-sort"></i> </th>
				<th class="text-center" width="19%" style="border-bottom:2px solid #000;" ng-click="predicate='nama_kelas'; reverse=!reverse">Rata-rata Nilai &nbsp; <i class="fa fa-sort"></i>  </th>
				<th class="text-center" width="15%" style="border-bottom:2px solid #000;" ng-click="predicate='konsentrasi_prodi'; reverse=!reverse">Nilai Huruf &nbsp; <i class="fa fa-sort"></i>  </th>
				<th class="text-center" width="9%" style="border-bottom:2px solid #000;"> ... </th>
				<th class="text-center" width="9%" style="border-bottom:2px solid #000;"> ... </th>
				<th class="text-center" width="9%" style="border-bottom:2px solid #000;"> ... </th>
			</tr>
		</table>
	</div><!--broccoli-rowHtable-->

	<div class="col-md-12 broccoli-rowItable">
		<table class="table table-striped table-bordered table-hover" style="table-layout:fixed;">
			<tr ng-repeat="dm in data_mahasiswa | orderBy:predicate:reverse ">
				<td class="text-center" width="5%">@{{ $index+1 }}</td>
				<td class="text-center" width="15%">@{{ dm.dosen }}</td>
				<td class="text-left" width="24%">@{{ dm.matkul }}</td>
				<td class="text-left" width="19%">@{{ dm.rata-rata }}</td>
				<td class="text-left" width="15%">@{{ dm.nilai_huruf }}</td>
				<td class="text-center" width="9%"> <button class="btn btn-primarry btn-md" ng-click="modal_detail_mahasiswa(dm.id_mahasiswa)"> <span class="glyphicon glyphicon-eye-open"></span></button> </td>
				<td class="text-center" width="9%"> <button class="btn btn-success btn-md" ng-click="modal_ubah_mahasiswa(dm.id_mahasiswa)"> <span class="glyphicon glyphicon-edit"></span></button> </td>
				<td class="text-center" width="9%"> <button class="btn btn-danger btn-md" ng-click="modal_hapus_mahasiswa(dm.id_mahasiswa, dm.nama)"> <span class="glyphicon glyphicon-trash"></span></button> </td>
			</tr>
		</table>
	</div><!--/broccoli-rowItable-->
</div><!--/broccoli-rowIsi-->
						
						
