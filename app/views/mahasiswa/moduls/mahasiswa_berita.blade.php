<div ng-controller="AdminKemahasiswaanBacaMahasiswaController" id="div-controller">

	<div class="row broccoli-rowKepala">
		<h1> Berita Perkuliahan <small> Akses dan Modifikasi data-data mahasiswa PNJ </small> </h1>
		<br>
	</div>

	<div class="row broccoli-rowNavigasi broccoli-hilangPadding-semua">

	</div>

	<div class="row broccoli-rowIsi">

		<div class="col-md-12 broccoli-rowHtable">
			<table id="tbl_h" class="table table-striped table-bordered table-hover pull-downs" style="table-layout:fixed;">
				<tr>
					<th class="text-center" width="5%" style="border-bottom:2px solid #000;">No </th>
					<th class="text-center" width="13%" style="border-bottom:2px solid #000;" ng-click="predicate='nim'; reverse=!reverse">Hari &nbsp; <i class="fa fa-sort"></i> </th>
					<th class="text-center" width="25%" style="border-bottom:2px solid #000;" ng-click="predicate='nama'; reverse=!reverse">Tanggal &nbsp; <i class="fa fa-sort"></i> </th>
					<th class="text-center" width="10%" style="border-bottom:2px solid #000;" ng-click="predicate='nama_kelas'; reverse=!reverse">Waktu &nbsp; <i class="fa fa-sort"></i>  </th>
					<th class="text-center" width="15%" style="border-bottom:2px solid #000;" ng-click="predicate='konsentrasi_prodi'; reverse=!reverse">Mata Kuliah &nbsp; <i class="fa fa-sort"></i>  </th>
					<th class="text-center" width="10%" style="border-bottom:2px solid #000;" ng-click="predicate='status'; reverse=!reverse">Dosen &nbsp; <i class="fa fa-sort"></i> </th>
					<th class="text-center" width="10%" style="border-bottom:2px solid #000;" ng-click="predicate='status'; reverse=!reverse">Ruang &nbsp; <i class="fa fa-sort"></i> </th>
					<th class="text-center" width="10%" style="border-bottom:2px solid #000;" ng-click="predicate='status'; reverse=!reverse">Acara Perkuliahan &nbsp; <i class="fa fa-sort"></i> </th>
					<th class="text-center" width="9%" style="border-bottom:2px solid #000;"> ... </th>
				</tr>
			</table>
		</div>

		<div class="col-md-12 broccoli-rowItable">
			<table class="table table-striped table-bordered table-hover" style="table-layout:fixed;">
				<tr ng-repeat="dm in data_mahasiswa | filter:query | orderBy:predicate:reverse">
					<td class="text-center" width="5%">@{{ $index+1 }}</td>
					<td class="text-center" width="13%">@{{ dm.nim }}</td>
					<td class="text-left" width="25%">@{{ dm.nama }}</td>
					<td class="text-left" width="10%">@{{ dm.nama_kelas }}</td>
					<td class="text-left" width="15%">@{{ dm.konsentrasi_prodi }}</td>
					<td class="text-center" width="10%">@{{ dm.status }}</td>
					<td class="text-center" width="10%">@{{ dm.status }}</td>
					<td class="text-center" width="10%">@{{ dm.status }}</td>
					<td class="text-center" width="9%"> <button class="btn btn-primarry btn-md" ng-click="modal_detail_mahasiswa(dm.id_mahasiswa)"> <span class="glyphicon glyphicon-eye-open"></span></button> </td>
				</tr>
			</table>
		</div>

	</div>	

</div>

<!-- edited almerps -->
<div class="row"><!-- Awal div header -->
<h1 align="center">Berita Perkuliahan</h1><br />
</div><!-- Akhir div header -->

<div class="row moduls-main-content"><!-- Awal div moduls content -->
	<div class="col-md-12"><!-- Awal div kolom-12 isi -->
		<div class="container-fluid table-scrollable table-reponsive table-bordered" style="overflow-x:auto;" > <!-- awal div container table -->
			<div style="display:block; height:40px; width:1100px;"> <!-- awal untuk head table -->
				<table class="table table-hover table-bordered" style="table-layout:fixed"> 
					<thead> <!-- nama colom table -->
						<tr>
							<th width="100px">Hari</th>
							<th width="150px">Tanggal</th>
							<th width="150px">Waktu</th>
							<th width="200px">Mata Kuliah</th>
							<th width="200px">Dosen</th>
							<th width="100px">Ruang</th>
							<th width="200px">Acara Perkuliahan</th>
							
						</tr>
					</thead><!-- nama colom table -->
				</table>
			</div> <!-- akhir untuk head table -->

			<div style="display:block; height:150px; width:1100px; overflow-y:visible; overflow-x:hidden;"> <!-- awal untuk body table -->
				<table class="table table-striped table-hover table-bordered" style="table-layout:fixed">
					<tbody> <!-- isi Table -->
						<tr>
							<td width="100px"><p style="word-wrap:break-word; ">Hari</p></td>
							<td width="150px"><p style="word-wrap:break-word; ">Tanggal</p></td>
							<td width="150px"><p style="word-wrap:break-word; ">Waktu</p></td>
							<td width="200px"><p style="word-wrap:break-word; ">Mata Kuliah</p></td>
							<td width="200px"><p style="word-wrap:break-word; ">Dosen</p></td>
							<td width="100px"><p style="word-wrap:break-word; ">Ruang</p></td>
							<td width="200px"><p style="word-wrap:break-word; ">Acara Perkuliahan</p></td>
						</tr>
						<tr>
							<td width="100px"><p style="word-wrap:break-word; ">Hari</p></td>
							<td width="150px"><p style="word-wrap:break-word; ">Tanggal</p></td>
							<td width="150px"><p style="word-wrap:break-word; ">Waktu</p></td>
							<td width="200px"><p style="word-wrap:break-word; ">Mata Kuliah</p></td>
							<td width="200px"><p style="word-wrap:break-word; ">Dosen</p></td>
							<td width="100px"><p style="word-wrap:break-word; ">Ruang</p></td>
							<td width="200px"><p style="word-wrap:break-word; ">Acara Perkuliahan</p></td>
						</tr>
						<tr>
							<td width="100px"><p style="word-wrap:break-word; ">Hari</p></td>
							<td width="150px"><p style="word-wrap:break-word; ">Tanggal</p></td>
							<td width="150px"><p style="word-wrap:break-word; ">Waktu</p></td>
							<td width="200px"><p style="word-wrap:break-word; ">Mata Kuliah</p></td>
							<td width="200px"><p style="word-wrap:break-word; ">Dosen</p></td>
							<td width="100px"><p style="word-wrap:break-word; ">Ruang</p></td>
							<td width="200px"><p style="word-wrap:break-word; ">Acara Perkuliahan</p></td>
						</tr>
					</tbody> <!-- isi Table -->
				</table>
			</div> <!-- awal untuk body table -->
		</div>  <!-- awal div container table -->
</div><!-- Akhir div moduls content -->
	</div><!-- Akhir div kolom-12 isi -->
		