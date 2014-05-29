<!-- created by kazelord --> <!-- Edited by Kazelord 250414-->
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

<!-- Awal title -->
<div class="row broccoli-rowKepala">
	<h1> Data Dosen <small>[sesuai jurusan]</small> </h1>
	<br>
</div><!--/broccoli-rowKepala-->
<!-- akhir title -->
<!-- awal navigasi -->
<div class="row broccoli-rowNavigasi broccoli-hilangPadding-semua">
	<div class="col-md-1" style="padding-left:0px;">
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
<!-- akhir navigasi -->
<!-- awal content -->	
<div class="row broccoli-rowIsi" ng-controller="">
	<div class="col-md-12 broccoli-rowHtable">
		<table id="tbl_h" class="table table-striped table-bordered table-hover pull-downs" style="table-layout:fixed;">
			<tr>
				<th class="text-center" width="5%" style="border-bottom:2px solid #000;">No </th>
				<th class="text-center" width="18%" style="border-bottom:2px solid #000;" ng-click="predicate=''; reverse=!reverse">NIK &nbsp; <i class="fa fa-sort"></i> </th>
				<th class="text-center" width="20%" style="border-bottom:2px solid #000;" ng-click="predicate=''; reverse=!reverse">Nama &nbsp; <i class="fa fa-sort"></i> </th>
				<th class="text-center" width="12%" style="border-bottom:2px solid #000;" ng-click="predicate=''; reverse=!reverse">Prodi &nbsp; <i class="fa fa-sort"></i>  </th>
				<th class="text-center" width="15%" style="border-bottom:2px solid #000;" ng-click="predicate=''; reverse=!reverse">Email &nbsp; <i class="fa fa-sort"></i>  </th>
				<th class="text-center" width="15%" style="border-bottom:2px solid #000;" ng-click="predicate=''; reverse=!reverse">No-Telp &nbsp; <i class="fa fa-sort"></i> </th>
				<th class="text-center" width="15%" style="border-bottom:2px solid #000;"> ... </th>
			</tr>
		</table>
	</div><!--broccoli-rowHtable-->

	<div class="col-md-12 broccoli-rowItable">
		<table class="table table-striped table-bordered table-hover" style="table-layout:fixed;">
			<tr><!--  ng-repeat=" | orderBy:predicate:reverse " -->
				<td class="text-center" width="5%">1</td>
				<td class="text-center" width="18%">@{{ nik }}</td>
				<td class="text-left" width="20%">@{{ nama }}</td>
				<td class="text-left" width="12%">@{{ Prodi }}</td>
				<td class="text-left" width="15%">@{{ Email }}</td>
				<td class="text-center" width="15%">@{{ No_Telp }}</td>
				<td class="text-center" width="15%"> 
					<div class="btn-group">
						<button class="btn btn-primarry btn-md" ng-click="modal_detail_mahasiswa(dm.id_mahasiswa)"> <span class="glyphicon glyphicon-eye-open"></span></button>
				 		<button class="btn btn-success btn-md" ng-click="modal_ubah_mahasiswa(dm.id_mahasiswa)"> <span class="glyphicon glyphicon-edit"></span></button>
				 		<button class="btn btn-danger btn-md" ng-click="modal_hapus_mahasiswa(dm.id_mahasiswa, dm.nama)"> <span class="glyphicon glyphicon-trash"></span></button> 
					</div>
				</td>
			</tr>
		</table>
	</div><!--/broccoli-rowItable-->
</div><!--/broccoli-rowIsi-->
<!-- akhir content -->


<!-- <th width="200px">NIK</th>
<th width="250px">Nama</th>
<th width="250px">Alamat</th>
<th width="150px">Status</th>
<th width="150px">Tgl Mulai</th>
<th width="150px">Jabatan</th>
<th width="150px">Prodi</th>
<th width="150px">Jabatan Lainnya</th>
<th width="200px">E-mail</th>
<th width="150px">Status Karyawan</th>	 -->