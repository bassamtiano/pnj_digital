


<div class="container" style="padding-top:10px;" ng-controller="KaryawanController">

	

	<button class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg"></button>

	<div class="row" style="height:200px;" >




		<div class="col-md-3" >

			

			<p class="text-center"><input type="text" placeholder="Cari" ng-model="search"></p>

			<div class="container-fluid" style="overflow-x:auto;" class="table-scrollable">
				<div style="display:block; height:40px; width:1700px;" class="table-head-scrollable">
					<table class="table table-hover">
						<thead>
							<tr>
								<th width="100">NIK</th>
								<th width="700">Nama</th>
								<th width="300">Jenis Kelamin</th>
								<th width="300">Alamat</th>
								<th width="300">No Telephone</th>
							</tr>
						</thead>
					</table>
				</div>

				<div style="display:block; height:150px; overflow-y:visible; overflow-x:hidden; width:1700px;" class="table-body-scrollable">
					<table class="table table-striped table-hover">
						<tbody>
							<tr ng-repeat="k in karyawans | filter:search">
								<td width="100"><p style="word-wrap:break-word;"> @{{ k.nik }} </p></td>
								<td width="700"><p style="word-wrap:break-word;"> @{{ k.nama_lengkap }} </p></td>
								<td width="300"><p style="word-wrap:break-word;"> @{{ k.jenis_kelamin }} </p></td>
								<td width="300"><p style="word-wrap:break-word; width:300px;"> @{{ k.alamat }} </p></td>
								<td width="300"><p style="word-wrap:break-word;"> @{{ k.no_telp }} </p></td>
							</tr>
						</tbody>
					</table>
				</div>

			</div>
			
		</div>

		<div class="col-md-6" style="height:200px; overflow-y:auto;">

			<div class="table-responsive">
				<table class="table table-hover">
					
					<thead>
						<tr>
							<th>NIP</th>
							<th>Nama</th>
						</tr>
					</thead>

					<tbody>
						<tr>
							<td>12345</td>
							<td>Bassam</td>
						</tr>
						<tr>
							<td>12345</td>
							<td>Bassam</td>
						</tr>
						<tr>
							<td>12345</td>
							<td>Bassam</td>
						</tr>
						<tr>
							<td>12345</td>
							<td>Bassam</td>
						</tr>
						<tr>
							<td>12345</td>
							<td>Bassam</td>
						</tr>
						<tr>
							<td>12345</td>
							<td>Bassam</td>
						</tr>
						<tr>
							<td>12345</td>
							<td>Bassam</td>
						</tr>
						<tr>
							<td>12345</td>
							<td>Bassam</td>
						</tr>
						<tr>
							<td>12345</td>
							<td>Bassam</td>
						</tr>
						<tr>
							<td>12345</td>
							<td>Bassam</td>
						</tr>

					</tbody>

				</table>
			</div>

		</div>

		<div class="col-md-3" >

			<div class="table-responsive">

				<table class="table table-hover" style="height:200px; overflow-y:auto;">
					
					<thead>
						<tr>
							<th>NIP</th>
							<th>Nama</th>
						</tr>
					</thead>

					<tbody>
						<tr>
							<td>ID</td>
							<td>Kelas</td>
						</tr>
					</tbody>
				</table>
			</div>

		</div>

	</div>

	<div class="row"> <!-- Awal  -->

		<div class="table-responsive">

			<table class="table table-hover">
					
				<thead>
					<tr>
						<th>ID Relasi</th>
						<th>Mata Kuliah</th>
						<th>Dosen</th>
						<th>Kelas</th>
						<th>Ubah</th>
						<th>Hapus</th>
					</tr>
				</thead>

				<tbody>
					<tr>
						<td>ID</td>
						<td>Kelas</td>
						<td>Kelas</td>
						<td>Kelas</td>
						<td>Kelas</td>
						<td>Kelas</td>
					</tr>
					<tr>
						<td>ID</td>
						<td>Kelas</td>
						<td>Kelas</td>
						<td>Kelas</td>
					</tr>
					<tr>
						<td>ID</td>
						<td>Kelas</td>
						<td>Kelas</td>
						<td>Kelas</td>
					</tr>
					<tr>
						<td>ID</td>
						<td>Kelas</td>
						<td>Kelas</td>
						<td>Kelas</td>
					</tr>
					<tr>
						<td>ID</td>
						<td>Kelas</td>
						<td>Kelas</td>
						<td>Kelas</td>
					</tr>
					<tr>
						<td>ID</td>
						<td>Kelas</td>
						<td>Kelas</td>
						<td>Kelas</td>
					</tr>

				</tbody>

			</table>

		</div>

	</div>


</div>

<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
			<h4 class="modal-title" id="myModalLabel">Modal title</h4>
		</div>
    </div>
  </div>
</div>

{{HTML::script('js/controller/karyawan-controller.js')}}
