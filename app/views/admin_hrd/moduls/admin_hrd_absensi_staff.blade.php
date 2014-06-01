

{{HTML::script('js/jquery.min.js')}}
{{HTML::script('js/bootstrap.min.js')}}
{{HTML::script('js/angular.min.js')}}



<div ng-controller="AdminHRDBacaKaryawanAbsensi" id="div-controller">
	<div class="row broccoli-rowKepala">
		<h1> Permohonan <small> Akses dan Modifikasi data-data mahasiswa PNJ </small> </h1>
		<br>
	</div><!--/broccoli-rowKepala-->

	<div class="row broccoli-rowNavigasi broccoli-hilangPadding-semua">
		<div class="col-md-2 broccoli-mojok-kiri">
			
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
					<th class="text-center" width="20%" style="border-bottom:2px solid #000;" ng-click="predicate='nama'; reverse=!reverse">Nama &nbsp; <i class="fa fa-sort"></i> </th>
					<th class="text-center" width="15%" style="border-bottom:2px solid #000;" ng-click="predicate='jabatan'; reverse=!reverse">Jabatan &nbsp; <i class="fa fa-sort"></i> </th>
					<th class="text-center" width="50%" style="border-bottom:2px solid #000;" ng-click="predicate='keterangan'; reverse=!reverse">Keterangan &nbsp; <i class="fa fa-sort"></i>  </th>
					<th class="text-center" width="10%" style="border-bottom:2px solid #000;" ng-click="predicate='status'; reverse=!reverse">Status &nbsp; <i class="fa fa-sort"></i>  </th>
				</tr>
			</table>
		</div><!--broccoli-rowHtable-->

		<div class="col-md-12 broccoli-rowItable">
			<table class="table table-striped table-bordered table-hover" style="table-layout:fixed;">

				<tr ng-repeat="ka in karyawan_absensi | filter:query_absensi | orderBy:predicate:reverse">
					<td class="text-center" width="5%">@{{ $index+1 }}</td>
					<td class="text-center" width="20%">@{{ ka.nama }}</td>
					<td class="text-left" width="15%">@{{ ka.jabatan }}</td>
					<td class="text-left" width="50%">@{{ ka.keterangan }}</td>
					<td class="text-center" width="10%">
						<div class="btn-group">
					 		<button ng-if="ka.status == 1" class="btn btn-success btn-md" ng-click="ubah_status_absen(ka.id_karyawan_absensi)"> <span class="glyphicon glyphicon-ok"></span></button>
					 		<button ng-if="ka.status == 0" class="btn btn-danger btn-md" ng-click="ubah_status_hadir(ka.id_karyawan_absensi)"> <span class="glyphicon glyphicon-remove"></span></button>
						</div>
					</td>
				</tr>

			</table>
		</div><!--/broccoli-rowItable-->
	</div><!--/broccoli-rowIsi-->
</div><!--/div-controller-->





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

<h1 align="center"><b>Absensi Staff</b></h1><br />
<!-- Almerps -->
<center>

<div ng-controller="AdminHRDBacaAbsenStaffController" id="div-controller">
	<div class="row" style="margin-top:20px;"><!-- Buka div row untuk table -->
		<div class="col-md-9"> <!-- Buka col-md-9 -->
			<div class="table-reponsive"> <!-- buka div table-->
				<table class="table table-bordered table-striped"> <!-- Buka table -->
					<thead>
						<tr class="active">
							<th>Bagian</th>
							<th>Absen</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Staff Pimpinan</td>
							<td>
								<button type="submit" class="btn btn-success form-control" ng-click="modals_absen_pimpinan()"> <span class="glyphicon glyphicon-plus-sign"></span> Absen</button>
							</td>
			
						</tr>
							<td>Staff Keuangan</td>
							<td>
								<button type="submit" class="btn btn-success form-control" ng-click="modals_absen_keuangan()"> <span class="glyphicon glyphicon-plus-sign"></span> Absen</button>
							</td>

						</tr>
							<td>Staff HRD</td>
							<td>
								<button type="submit" class="btn btn-success form-control" ng-click="modals_absen_hrd()"> <span class="glyphicon glyphicon-plus-sign"></span> Absen</button>
							</td>
							

						</tr>
							<td>Staff Kemahasiswaan</td>
							<td>
								<button type="submit" class="btn btn-success form-control" ng-click="modals_absen_kemahasiswaan()"> <span class="glyphicon glyphicon-plus-sign"></span> Absen</button>
							</td>
							

						</tr>
							<td>Staff Inventaris</td>
							<td>
								<button type="submit" class="btn btn-success form-control" ng-click="modals_absen_inventaris()"> <span class="glyphicon glyphicon-plus-sign"></span> Absen</button>
							</td>
						</tr>								
					</tbody>
				</table> <!-- Tutup table -->
			</div> <!-- Tutup div table -->				
		</div> <!-- Tutup col-md-9 -->
	</div><!-- Tutup div row untuk table -->
</div>

</center>

