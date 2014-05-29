<div class="row"> <!-- Awal Row -->
	<h1>Berita / Event Kemahasiswaan</h1>
</div> <!-- Akhir Row -->

<div class="row moduls-main-content">
	
	<div class="row col-md-12">
		<div class="container-fluid table-scrollable table-bordered table-responsive" style="overflow-x:auto; padding-left:0;"> 				
			
			<div style="display:block; height:40px; width:1250px;">
				<table class="table table-striped table-bordered table-hover" style="table-layout:fixed;">
					<thead>
						<tr>
							<th width="325px"> Nama Event </th>
							<th width="375px"> Tujuan </th>
							<th width="300px"> Waktu </th>
							<th width="100px"> Hapus </th>
						</tr>
					</thead>
				</table>
			</div>

			<div class="table-body-scrollable table-responsive" style="display:block; height:400px; width:1250px; overflow-y:visible; overflow-x:visible;">
				<table class="table table-bordered table-striped" style="table-layout:fixed;">
					<tr>
						<td width="325px"> <a href="#"> Rapat Staff </a></td>
						<td width="375px"> Staff Jurusan </td>
						<td width="300px"> 13-03-2014 </td>
						<td width="100px"> <a class="btn btn-default" ng-click="deleteDataRuang(dr.nama_ruang)"> X </a> </td>
					</tr>
					<tr>
						<td width="325px"> <a href="#"> Rapat Admin </a></td>
						<td width="375px"> Admin Jurusan </td>
						<td width="300px"> 15-04-2014 </td>
						<td width="100px"> <a class="btn btn-default" ng-click="deleteDataRuang(dr.nama_ruang)"> X </a> </td>
					</tr>
					<tr>
						<td width="325px"> <a href="#"> Rapat Mahasiswa </a></td>
						<td width="375px"> Mahasiswa Jurusan </td>
						<td width="300px"> 05-06-2014 </td>
						<td width="100px"> <a class="btn btn-default" ng-click="deleteDataRuang(dr.nama_ruang)"> X </a> </td>
					</tr>
				</table>
			</div>

		</div>
	</div>

	<div class="row col-md-12" style="padding-right:0px">
		<div class="col-sm-offset-11" style="margin-top:10px;">
			<a href="#" class="btn btn-lg btn-default" data-toggle="modal" data-target="#kegiatantambah" style="font-size:10pt;">Tambah</a>
			@include('admin_kemahasiswaan.modals.admin_kemahasiswaan_modals_download')
		</div>
	</div>

</div>
