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

<div ng-controller="KeuanganController" id="div-controller">
	<div class="row broccoli-rowKepala">
		<h1> Data Tunjangan Jabatan <small> Data-data Tunjangan Jabatan PNJ </small> </h1>
		<br>
	</div> <!-- broccoli-rowKepala-->
	
	<div class="row broccoli-rowNavigasi broccoli-hilangPadding-semua">
		<div class="col-md-10 broccoli-mojok-kiri">

		</div> <!-- Tutup col-md-10 -->

		<div class="col-md-2 broccoli-mojok-kanan">
			<button type="submit" class="btn btn-success form-control" ng-click="modal_tambah_data_tunjangan()"> <span class="glyphicon glyphicon-plus-sign"></span> Tambah</button>
		</div> <!-- Tutup col-md-7 -->

	</div> <!-- broccoli-rowNavigasi -->

	<div class="row broccoli-rowIsi">
		<div class="col-md-12 broccoli-rowHtable">
			<table id="tbl_h" class="table table-striped table-bordered table-hover pull-downs" style="table-layout:fixed;">
				<tr>
					<th class="text-center" width="5%" style="border-bottom:2px solid #000;"> No </th>
					<th class="text-center" width="20%" style="border-bottom:2px solid #000;" ng-click="predicate='nim'; reverse=!reverse">Kode Tunjangan &nbsp; <i class="fa fa-sort"></i> </th>
					<th class="text-center" width="25%" style="border-bottom:2px solid #000;" ng-click="predicate='nama'; reverse=!reverse">Jabatan &nbsp; <i class="fa fa-sort"></i> </th>
					<th class="text-center" width="30%" style="border-bottom:2px solid #000;" ng-click="predicate='nama_kelas'; reverse=!reverse">Tunjangan Jabatan &nbsp; <i class="fa fa-sort"></i>  </th>
					<th class="text-center" width="10%" style="border-bottom:2px solid #000;"> ... </th>
					<th class="text-center" width="10%" style="border-bottom:2px solid #000;"> ... </th>
				</tr>
			</table>
		</div><!--broccoli-rowHtable-->

		<div class="col-md-12 broccoli-rowItable">
			<table class="table table-striped table-bordered table-hover" style="table-layout:fixed;">
				<tr ng-repeat="dm in data_mahasiswa | filter:query | orderBy:predicate:reverse">
					<td class="text-center" width="5%"> @{{ $index+1 }}</td>
					<td class="text-center" width="20%"> @{{ dm.nim }}</td>
					<td class="text-left" width="25%"> @{{ dm.nama }}</td>
					<td class="text-left" width="30%"> @{{ dm.nama_kelas }}</td>
					<td class="text-center" width="10%"> <button class="btn btn-success btn-md" ng-click="modal_ubah_mahasiswa(dm.id_mahasiswa)"> <span class="glyphicon glyphicon-edit"></span></button> </td>
					<td class="text-center" width="10%"> <button class="btn btn-danger btn-md" ng-click="modal_hapus_mahasiswa(dm.id_mahasiswa, dm.nama)"> <span class="glyphicon glyphicon-trash"></span></button> </td>
				</tr>
			</table>
		</div><!--/broccoli-rowItable-->
	</div> <!-- Tutup row Isi -->

</div> <!-- Tutup div controller -->
