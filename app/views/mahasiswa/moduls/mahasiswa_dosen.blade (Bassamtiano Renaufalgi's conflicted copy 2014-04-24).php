

<div class="row">
	<h1>Data Dosen</h1>
</div>

	{{HTML::script('js/jquery.min.js')}}
	{{HTML::script('js/angular.min.js')}}



	{{HTML::script('js/controllers/mahasiswa/DosenController.js')}}

<div class="row moduls-main-content" ng-controller="DosenController">

	<div class="container-fluid table-scrollable table-reponsive" style="overflow-x:auto;"> <!-- Awal div container table -->

		<div style="display:block; height:auto; margin-bottom:-21px; width:1500px;" > <!-- Awal Div Head -->

			<table class="table table-hover table-bordered" style="table-layout:fixed;" >
				<thead>
					<tr>									
						<th width="70"><p style="word-wrap:break-word; width:70px;">NIK</p></th>
						<th width="150"><p style="word-wrap:break-word; width:150px;">Nama</p></th>
						<th width="300"><p style="word-wrap:break-word; width:300px;">Alamat</p></th>
						<th width="170"><p style="word-wrap:break-word; width:170px;">Jabatan</p></th>
						<th width="170"><p style="word-wrap:break-word; width:170px;">Konsentrasi Prodi</p></th>
						<th width="170"><p style="word-wrap:break-word; width:100px;">No Telepon</p></th>
						<th width="170"><p style="word-wrap:break-word; width:170px;">Email</p></th>
						<th width="170"><p style="word-wrap:break-word; width:170px;">Status Karyawan</p></th>
						<th width="140"><p style="word-wrap:break-word; width:140px;">Detail</p></th>
					</tr>
				</thead>
			</table>

		</div> <!-- Akhir Div Head -->
		
		<div style="display:block; height:400px; overflow-y:visible; overflow-x:hidden; width:1500px;"> <!-- Awal Div Body -->
			<table class="table table-striped table-bordered table-hover" style="table-layout:fixed;">
				<tbody>
					<tr ng-repeat="d in data_dosen">								
						<td width="70"><p style="word-wrap:break-word; width:70px;">@{{d.nik}}</p></td>
						<td width="150"><p style="word-wrap:break-word; width:150px;">@{{d.nama}}</p></td>
						<td width="300"><p style="word-wrap:break-word; width:300px;">@{{d.alamat}}</p></td>
						<td width="170"><p style="word-wrap:break-word; width:170px;">@{{d.golongan}}</p></td>
						<td width="170"><p style="word-wrap:break-word; width:170px;">@{{d.konsentrasi_prodi}}</p></td>
						<td width="170"><p style="word-wrap:break-word; width:170px;">@{{d.no_telepon}}</p></td>
						<td width="170"><p style="word-wrap:break-word; width:170px;">@{{d.email}}</p></td>
						<td width="170"><p style="word-wrap:break-word; width:170px;">@{{d.status}}</p></td>
						<td width="140"><p style="word-wrap:break-word; width:140px;"><a href="#" class="btn btn-lg btn-danger" data-toggle="modal" data-target="#smallModal">Detail</a></p></td>
					</tr>
					
				</tbody>
			</table>
		</div> <!-- Akhir Div Body --> 

		</div> <!-- Akhir Div Container table-->

</div>

@include('mahasiswa.modals.modal_test')
