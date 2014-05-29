 <!-- Edited by Kazelord 250414-->
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

<div ng-controller="TambahKegiatanJurusanController" id="div-controller">
	 <!-- awal title -->
	<div class="row broccoli-rowKepala">
		<h1>Info Kegiatan / Berita</h1>
		<br>
	</div><!--/broccoli-rowKepala-->
	<!-- akhir title -->
	<!-- awal tombol tambah -->
	<div class="row broccoli-rowNavigasi broccoli-hilangPadding-semua">
		<div class="col-md-1" style="padding-left:0px;">
			<button type="submit" class="btn btn-success form-control" ng-click="modal_tambah_kegiatan_jurusan()"> <span class="glyphicon glyphicon-plus-sign"></span> Tambah</button>
		</div><!--/navigasiKiri-->
		<div class="col-md-2">
		</div><!--/navgasi jurusan-->
		<div class="col-md-2">
		</div><!--/div for gap-->
		<div class="col-md-3">
		</div><!--/navigasiCombo-->
		<div class="col-md-3" style="padding-right:0px;">
			<input type="text" class="form-control input-xs" placeholder="Cari">
		</div><!--/navigasiKanan-->
	</div>
	<!-- akhir tombol tambah -->
	<!-- awal content -->
	<div class="row broccoli-rowIsi" ng-controller="">
		<div class="col-md-12 broccoli-rowHtable">
			<table id="tbl_h" class="table table-striped table-bordered table-hover pull-downs" style="table-layout:fixed;">
				<tr>
					<th class="text-center" width="5%" style="border-bottom:2px solid #000;">No </th>
					<th class="text-center" width="20%" style="border-bottom:2px solid #000;" ng-click="predicate=''; reverse=!reverse">Nama Event &nbsp; <i class="fa fa-sort"></i> </th>
					<th class="text-center" width="22%" style="border-bottom:2px solid #000;" ng-click="predicate=''; reverse=!reverse">Tujuan &nbsp; <i class="fa fa-sort"></i> </th>
					<th class="text-center" width="13%" style="border-bottom:2px solid #000;" ng-click="predicate=''; reverse=!reverse">Waktu &nbsp; <i class="fa fa-sort"></i>  </th>
					<th class="text-center" width="15%" style="border-bottom:2px solid #000;"> ... </th>
					
				</tr>
			</table>
		</div><!--broccoli-rowHtable-->

		<div class="col-md-12 broccoli-rowItable">
			<table class="table table-striped table-bordered table-hover" style="table-layout:fixed;">
				<tr> <!-- ng-repeat="dj in data_jurusan | orderBy:predicate:reverse " -->
					<td class="text-center" width="5%">1</td>
					<td class="text-center" width="20%">@{{ dj.nama_event }}</td>
					<td class="text-left" width="22%">@{{ dj.Tujuan }}</td>
					<td class="text-left" width="13%">@{{ dj.Waktu }}</td>
					<td class="text-center" width="15%"> <button class="btn btn-danger btn-md" ng-click="modal_hapus_mahasiswa(dm.id_mahasiswa, dm.nama)"> <span class="glyphicon glyphicon-trash"></span></button> </td>
				</tr>
			</table>
		</div><!--/broccoli-rowItable-->
	</div><!--/broccoli-rowIsi-->
	<!-- akhir content -->

</div>