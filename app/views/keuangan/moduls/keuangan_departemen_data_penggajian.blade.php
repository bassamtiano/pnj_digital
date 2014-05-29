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

<div ng-controller="KeuanganBacaPenggajian" id="div-controller">
	<div class="row broccoli-rowKepala">
		<h1> Data Penggajian <small>  </small> </h1>
		<br>
	</div> <!-- broccoli-rowKepala-->

	<div class="row broccoli-rowNavigasi broccoli-hilangPadding-semua">
		<div class="col-md-2 broccoli-mojok-kiri">
			<select class="form-control">
				<option>Januari</option>
				<option>Februari</option>
				<option>Maret</option>
				<option>April</option>
				<option>Mei</option>
				<option>Juni</option>
				<option>Juli</option>
				<option>Agustus</option>
				<option>September</option>
				<option>Oktober</option>
				<option>Novemeber</option>
				<option>Desember</option>
			</select>
		</div><!--/navgasi bulan-->

		<div class="col-md-1 broccoli-mojok-kiri">
			<select class="form-control">
				<option>2010</option>
				<option>2011</option>
				<option>2012</option>
				<option>2013</option>
				<option>2014</option>
				<option>2015</option>
				<option>2016</option>
				<option>2017</option>
				<option>2018</option>
				<option>2019</option>
			</select>
		</div><!--/navgasi tahun-->

		<div class="col-md-2 broccoli-mojok-kiri">
			<button type="submit" class="btn btn-success form-control">Tampilkan </button>
		</div><!--/navigasi tampil-->

		<div class="col-md-5"></div>

		<div class="col-md-2 broccoli-mojok-kanan">
			<button type="submit" class="btn btn-success form-control" ng-click="modal_tambah_data_penggajian()"> <span class="glyphicon glyphicon-plus-sign"></span> Tambah</button>
		</div><!--/navigasiKanan-->

	</div> <!-- Tutup div broccoli-rowNavigasi -->

	<div class="row broccoli-rowIsi">
		<div class="col-md-12 broccoli-rowHtable">
			<table id="tbl_h" class="table table-striped table-bordered table-hover pull-downs" style="table-layout:fixed;">
				<tr>
					<th class="text-center" width="4%" style="border-bottom:2px solid #000;"> No</th>
					<th class="text-center" width="9%" style="border-bottom:2px solid #000;"> No Slip</th>
					<th class="text-center" width="13%" style="border-bottom:2px solid #000;" ng-click="predicate='tanggal'; reverse=!reverse">Tanggal &nbsp; <i class="fa fa-sort"></i> </th>
					<th class="text-center" width="14%" style="border-bottom:2px solid #000;" ng-click="predicate='nik'; reverse=!reverse">NIK &nbsp; <i class="fa fa-sort"></i> </th>
					<th class="text-center" width="18%" style="border-bottom:2px solid #000;" ng-click="predicate='nama'; reverse=!reverse">Nama &nbsp; <i class="fa fa-sort"></i>  </th>
					<th class="text-center" width="16%" style="border-bottom:2px solid #000;" ng-click="predicate='departemen'; reverse=!reverse">Departemen &nbsp; <i class="fa fa-sort"></i>  </th>
					<th class="text-center" width="16%" style="border-bottom:2px solid #000;" ng-click="predicate='gajibersih'; reverse=!reverse">Gaji Bersih &nbsp; <i class="fa fa-sort"></i>  </th>
					<th class="text-center" width="12%" style="border-bottom:2px solid #000;"> ... </th>
				</tr>
			</table>
		</div><!--broccoli-rowHtable-->

		<div class="col-md-12 broccoli-rowItable">
			<table class="table table-striped table-bordered table-hover" style="table-layout:fixed;">
				<tr ng-repeat="dp in data_penggajian | filter:query | orderBy:predicate:reverse">
					<td class="text-center" width="4%"> @{{ $index+1 }}</td>
					<td class="text-left" width="9%"> @{{ dp.no_slip }}</td>
					<td class="text-left" width="13%"> @{{ dp.tanggal_gaji }}</td>
					<td class="text-left" width="14%">  </td>
					<td class="text-left" width="18%">  </td>
					<td class="text-left" width="16%">  </td>
					<td class="text-left" width="16%">  </td>
					<td class="text-center" width="12%"> 
						<div class="btn-group">
							<button class="btn btn-primarry btn-md" ng-click="modal_detail_data_penggajian()"> <span class="glyphicon glyphicon-eye-open"></span></button> 
							<button class="btn btn-success btn-md" ng-click="modal_ubah_data_penggajian(pm.id_mahasiswa)"> <span class="glyphicon glyphicon-edit"></span></button>
							<button class="btn btn-danger btn-md" ng-click="modal_hapus_data_penggajian(pm.id_mahasiswa, dm.nama)"> <span class="glyphicon glyphicon-trash"></span></button>
						</div>
					</td>
				</tr>
			</table>
		</div><!--/broccoli-rowItable-->
	</div> <!-- Tutup row Isi -->


</div> <!-- Tutup div controller -->