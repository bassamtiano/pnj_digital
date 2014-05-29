
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


<!-- awal title -->
<div ng-controller="AdminJurusanBacaJurusanController" id="div-controller">

	<div class="row broccoli-rowKepala">
		<h1> Data Jurusan</h1>
	</div><!--/broccoli-rowKepala-->

	<!-- akhir title -->
	<!-- awal tombol tambah -->
	<div class="row broccoli-rowNavigasi broccoli-hilangPadding-semua">

		<div class="col-md-2" style="padding-left:0px;">
			<button type="submit" class="btn btn-success form-control" ng-click="modal_tambah_jurusan()"> <span class="glyphicon glyphicon-plus-sign"></span> Tambah</button>
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

	<div class="row broccoli-rowIsi">
		<div class="col-md-12 broccoli-rowHtable">
			<table id="tbl_h" class="table table-striped table-bordered table-hover pull-downs" style="table-layout:fixed;">
				<tr>
					<th class="text-center" width="5%" style="border-bottom:2px solid #000;">No </th>
					<th class="text-center" width="15%" style="border-bottom:2px solid #000;" ng-click="predicate='nama_jurusan'; reverse=!reverse">Nama Jurusan &nbsp; <i class="fa fa-sort"></i> </th>
					<th class="text-center" width="15%" style="border-bottom:2px solid #000;" ng-click="predicate='kepala_jurusan'; reverse=!reverse">Kepala Jurusan &nbsp; <i class="fa fa-sort"></i> </th>
					<th class="text-center" width="15%" style="border-bottom:2px solid #000;" ng-click="predicate='jumlah_prodi'; reverse=!reverse">Jumlah Prodi &nbsp; <i class="fa fa-sort"></i>  </th>
					<th class="text-center" width="15%" style="border-bottom:2px solid #000;" ng-click="predicate='akreditasi'; reverse=!reverse">Akreditasi &nbsp; <i class="fa fa-sort"></i>  </th>
					<th class="text-center" width="15%" style="border-bottom:2px solid #000;" ng-click="predicate='keterangan'; reverse=!reverse">Keterangan &nbsp; <i class="fa fa-sort"></i> </th>
					<th class="text-center" width="15%" style="border-bottom:2px solid #000;"> ... </th>
					
				</tr>
			</table>
		</div><!---rowHtable-->

		<div class="col-md-12 broccoli-rowItable">
			<table class="table table-striped table-bordered table-hover" style="table-layout:fixed;">
				<tr ng-repeat="dj in data_jurusan">
					<td class="text-center" width="5%">1</td>
					<td class="text-center" width="15%">@{{ dj.nama_jurusan }}</td>
					<td class="text-left" width="15%">@{{ dj.kepala_jurusan }}</td>
					<td class="text-left" width="15%">@{{ dj.jumlah_prodi }}</td>
					<td class="text-left" width="15%">@{{ dj.akreditas }}</td>
					<td class="text-center" width="15%">@{{ dj.keterangan }}</td>
					<td class="text-center" width="15%"> 
						<div class="btn-group">
					 		<button class="btn btn-success btn-md" ng-click="modal_ubah_mahasiswa(dm.id_mahasiswa)"> <span class="glyphicon glyphicon-edit"></span></button>
					 		<button class="btn btn-danger btn-md" ng-click="modal_hapus_mahasiswa(dm.id_mahasiswa, dm.nama)"> <span class="glyphicon glyphicon-trash"></span></button> 
						</div>
					</td>
				</tr>
			</table>
		</div><!--/broccoli-rowItable-->
	</div><!--/broccoli-rowIsi-->
	<!-- akhir content -->
</div>