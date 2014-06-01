<div ng-controller="MahasiswaBacaJadwalController" id="div-controller">

	<div class="row broccoli-rowKepala">
		<h1> Jadwal Perkuliahan <small> Akses dan Modifikasi data-data mahasiswa PNJ </small> </h1>
		<br>
	</div><!--/broccoli-rowKepala-->

	<div class="row broccoli-rowNavigasi broccoli-hilangPadding-semua">

	</div>

	<div class="row broccoli-rowIsi">

		<div class="col-md-12 broccoli-rowHtable">
			<table id="tbl_h" class="table table-striped table-bordered table-hover pull-downs" style="table-layout:fixed;">
				<tr>
					<th class="text-center" width="5%" style="border-bottom:2px solid #000;">No </th>
					<th class="text-center" width="10%" style="border-bottom:2px solid #000;">Jam</th>
					<th class="text-center" width="17%" style="border-bottom:2px solid #000;" ng-click="predicate='nim'; reverse=!reverse">Senin &nbsp; <i class="fa fa-sort"></i> </th>
					<th class="text-center" width="17%" style="border-bottom:2px solid #000;" ng-click="predicate='nama'; reverse=!reverse">Selasa &nbsp; <i class="fa fa-sort"></i> </th>
					<th class="text-center" width="17%" style="border-bottom:2px solid #000;" ng-click="predicate='nama_kelas'; reverse=!reverse">Rabu &nbsp; <i class="fa fa-sort"></i>  </th>
					<th class="text-center" width="17%" style="border-bottom:2px solid #000;" ng-click="predicate='konsentrasi_prodi'; reverse=!reverse">Kamis &nbsp; <i class="fa fa-sort"></i>  </th>
					<th class="text-center" width="17%" style="border-bottom:2px solid #000;" ng-click="predicate='konsentrasi_prodi'; reverse=!reverse">Jumat &nbsp; <i class="fa fa-sort"></i>  </th>
				</tr>
			</table>
		</div>

		<div class="col-md-12 broccoli-rowItable">
			<table class="table table-striped table-bordered table-hover" style="table-layout:fixed;">
				<tr ng-repeat="j in jadwal | filter:query | orderBy:predicate:reverse">
					<td class="text-center" width="5%">@{{ $index+1 }}</td>
					<td class="text-center" width="10%">@{{ j.jam }}</td>
					<td class="text-left" width="17%">@{{ j.senin }}</td>
					<td class="text-left" width="17%">@{{ j.selasa }}</td>
					<td class="text-left" width="17%">@{{ j.rabu }}</td>
					<td class="text-left" width="17%">@{{ j.kamis }}</td>
					<td class="text-left" width="17%">@{{ j.jumat }}</td>
				</tr>
			</table>
		</div>

	</div>

</div>