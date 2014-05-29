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

<div ng-controller="AdminKemahasiswaanBacaMahasiswaController" id="div-controller">

	<div class="row broccoli-rowKepala">
		<h1> Data Mahasiswa <small> Akses dan Modifikasi data-data mahasiswa PNJ </small> </h1>
		<br>
	</div><!--/broccoli-rowKepala-->

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
					<th class="text-center" width="13%" style="border-bottom:2px solid #000;" ng-click="predicate='nim'; reverse=!reverse">NIM &nbsp; <i class="fa fa-sort"></i> </th>
					<th class="text-center" width="25%" style="border-bottom:2px solid #000;" ng-click="predicate='nama'; reverse=!reverse">Nama &nbsp; <i class="fa fa-sort"></i> </th>
					<th class="text-center" width="10%" style="border-bottom:2px solid #000;" ng-click="predicate='nama_kelas'; reverse=!reverse">Kelas &nbsp; <i class="fa fa-sort"></i>  </th>
					<th class="text-center" width="15%" style="border-bottom:2px solid #000;" ng-click="predicate='konsentrasi_prodi'; reverse=!reverse">Konsentrasi &nbsp; <i class="fa fa-sort"></i>  </th>
					<th class="text-center" width="10%" style="border-bottom:2px solid #000;" ng-click="predicate='status'; reverse=!reverse">Status &nbsp; <i class="fa fa-sort"></i> </th>
					<th class="text-center" width="9%" style="border-bottom:2px solid #000;"> ... </th>
					<th class="text-center" width="9%" style="border-bottom:2px solid #000;"> ... </th>
					<th class="text-center" width="9%" style="border-bottom:2px solid #000;"> ... </th>
				</tr>
			</table>
		</div><!--broccoli-rowHtable-->

		<div class="col-md-12 broccoli-rowItable">
			<table class="table table-striped table-bordered table-hover" style="table-layout:fixed;">
				<tr ng-repeat="dm in data_mahasiswa | filter:query | orderBy:predicate:reverse">
					<td class="text-center" width="5%">@{{ $index+1 }}</td>
					<td class="text-center" width="13%">@{{ dm.nim }}</td>
					<td class="text-left" width="25%">@{{ dm.nama }}</td>
					<td class="text-left" width="10%">@{{ dm.nama_kelas }}</td>
					<td class="text-left" width="15%">@{{ dm.konsentrasi_prodi }}</td>
					<td class="text-center" width="10%">@{{ dm.status }}</td>
					<td class="text-center" width="9%"> <button class="btn btn-primarry btn-md" ng-click="modal_detail_mahasiswa(dm.id_mahasiswa)"> <span class="glyphicon glyphicon-eye-open"></span></button> </td>
					<td class="text-center" width="9%"> <button class="btn btn-success btn-md" ng-click="modal_ubah_mahasiswa(dm.id_mahasiswa)"> <span class="glyphicon glyphicon-edit"></span></button> </td>
					<td class="text-center" width="9%"> <button class="btn btn-danger btn-md" ng-click="modal_hapus_mahasiswa(dm.id_mahasiswa, dm.nama)"> <span class="glyphicon glyphicon-trash"></span></button> </td>
				</tr>
			</table>
		</div><!--/broccoli-rowItable-->
	</div><!--/broccoli-rowIsi-->

</div>

<div class="row">
	<h1>Berita Perkuliahan</h1>
</div>

<div class="row moduls-main-content">
	<div class="col-md-12" > <!-- awal col-md-12 buat table-->
			<div class="container-fluid table-scrollable table-responsive table-bordered" style="overflow-x:auto;" > <!-- awal div container table -->
				<div style="display:block; height:40px; width:1500px;"> <!-- awal untuk head table -->
					<table class="table table-hover modul-table-header" style="table-layout:fixed;"> 
						<thead> <!-- nama colom table -->
							<tr>
								<th width="50px">Hari</th>
								<th width="100px">Tanggal</th>
								<th width="100px">Waktu</th>
								<th width="150px">Mata Kuliah</th>
								<th width="150px">Dosen</th>
								<th width="50px">Ruang</th>
								<th width="250px">Acara Perkuliahan</th>
							</tr>
						</thead><!-- nama colom table -->
					</table>
				</div> <!-- akhir untuk head table -->

				<div style="display:block; height:500px; width:1500px; overflow-y:visible; overflow-x:hidden;"> <!-- awal untuk body table -->
					<table class="table table-striped table-bordered table-hover modul-table-body" style="table-layout:fixed;">
						<tbody> <!-- isi Table -->
							<tr>  <!--ng-repeat="ds in dataslots"-->
								<td width="50">Hari</td>
								<td width="100">Tanggal</td>
								<td width="100">Waktu</td>
								<td width="150">Mata Kuliah</td>
								<td width="150">Dosen</td>
								<td width="50">Ruang</td>
								<td width="250"><p style="width:250px;">AcaraPerkuliahanAcaraPerkuliahan</p></td>
								
							</tr>
						</tbody> <!-- isi Table -->
					</table>
				</div> <!-- awal untuk body table -->
			</div>  <!-- awal div container table -->
	</div> <!-- akhir col-md-12 buat table-->
</div>

