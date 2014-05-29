
<!-- Hendra Saputra -->


	
	<!-- Skeleton -->
		<ul class="nav nav-sidebar"> <!-- awal side bar -->
			<li><a href="/"><span class="glyphicon glyphicon-home"></span>Home</a></li>			
			<li>
			<a href="#" class="sub-navbar-key"><span class="glyphicon glyphicon-file"></span>Departemen<i style="float:right" class="glyphicon glyphicon-chevron-down"></i></a>
			<ul class="nav navbar-sidebar sub-navbar">
				<li class="active"><a href="#" ><span class="glyphicon glyphicon-folder-close"></span>Data Approval</a></li>
				<li><a href="#" ><span class="glyphicon glyphicon-folder-close"></span>Data Penggajian</a></li>				
				<li><a href="#" ><span class="glyphicon glyphicon-folder-close"></span>Laporan Data Karyawan</a></li>
				<li><a href="#" ><span class="glyphicon glyphicon-folder-close"></span>Laporan Data Absensi</a></li>				
				<li><a href="#" ><span class="glyphicon glyphicon-folder-close"></span>Laporan Data Pengajar</a></li>				
			</ul>
			</li>
			<li><a href="#"><span class="glyphicon glyphicon-list-alt"></span>Departemen Sipil</a></li>
			<li><a href="#"><span class="glyphicon glyphicon-list-alt"></span>Departemen Akuntansi</a></li>
			<li><a href="#"><span class="glyphicon glyphicon-list-alt"></span>Departemen Adm. Niaga</a></li>
			<li><a href="#"><span class="glyphicon glyphicon-list-alt"></span>Departemen Mesin</a></li>
			<li><a href="#"><span class="glyphicon glyphicon-list-alt"></span>Departemen Gedung Q</a></li>
			<li>			
			<a href="#" class="sub-navbar-key"><span class="glyphicon glyphicon-file"></span>Data Input<i style="float:right" class="glyphicon glyphicon-chevron-down"></i></a>
			<ul class="nav navbar-sidebar sub-navbar">
				<li><a href="#" ><span class="glyphicon glyphicon-folder-close"></span>Data Pemasukan</a></li>
				<li><a href="#" ><span class="glyphicon glyphicon-folder-close"></span>Data Pengeluaran</a></li>
				<li><a href="#" ><span class="glyphicon glyphicon-folder-close"></span>Data Golongan Jabatan</a></li>
				<li><a href="#" ><span class="glyphicon glyphicon-folder-close"></span>Data Status</a></li>
				<li><a href="#" ><span class="glyphicon glyphicon-folder-close"></span>Data Departemen</a></li>
				<li><a href="#" ><span class="glyphicon glyphicon-folder-close"></span>Data Tunjangan Jabatan</a></li>
				<li><a href="#" ><span class="glyphicon glyphicon-folder-close"></span>Data Honor</a></li>
			</ul>
			</li>
			<li>			
			<a href="#" class="sub-navbar-key"><span class="glyphicon glyphicon-file"></span>Laporan<i style="float:right" class="glyphicon glyphicon-chevron-down"></i></a>
			<ul class="nav navbar-sidebar sub-navbar">
				<li><a href="#" ><span class="glyphicon glyphicon-folder-close"></span>Laporan Pemasukan</a></li>
				<li><a href="#" ><span class="glyphicon glyphicon-folder-close"></span>Laporan Pengeluaran</a></li>
				<li><a href="#"><span class="glyphicon glyphicon-download-alt"></span>Download</a></li>				
			</ul>
			</li>			>			
		</ul> <!-- akhir side bar -->
	<!--Akhir Skeleton-->

@stop

@section('content')

<div class="col-md-12 panel panel-default" ng-controller="marksheetController" > <!-- awal col-md-12 -->
	<div class="panel-heading"> <!-- awal panel heading -->
		<h1 class="panel-title">
			<b>Data Approval Pembayaran Mahasiswa</b>
		</h1>
	</div> <!-- akhir panel heading -->
	<div class="panel-body"> <!-- awal panel body -->
		<div class="container"> <!-- awal container -->

			<div class="row" style="margin-top:20px;"> <!-- awal row -->
				<div class="col-md-8"> <!-- awal col-md-12 -->
					<div class="table-reponsive"> <!-- ========================= AWAL TABLE =================== -->
						<table class="table table-bordered"> <!-- table table-bordered -->
							<thead> <!-- nama colom table -->
								<tr class="warning">
									<th>No</th>
									<th>Tanggal Upload</th>
									<th>NIM</th>
									<th>Nama</th>
									<th>Jurusan</th>	
									<th>Kelas</th>
									<th>Jalur</th>
									<th>No Bidik Misi</th>
									<th>Tanggal Pembayaran</th>
									<th>Keterangan Pembayaran</th>
									<th>Hasil Scan</th>
									<th>Status</th>													
								</tr>
							</thead><!-- nama colom table -->
							<tbody> <!-- Isi Table -->
								<tr class="primary"> <!-- class primary -->
									<td>1</td>
									<td>30-10-2014</td>
									<td>4311010027</td>
									<td>Dora</td>
									<td>Teknik Elektro</td>
									<td>IT-6A</td>
									<td>Bidik Misi</td>
									<td>430</td>
									<td> - </td>
									<td> - </td>
									<td></td>
									<td><input type="checkbox">Approved</td>
								</tr> <!-- akhir class primary -->
								<tr class="success"> <!-- class success --> 
									<td>1</td>
									<td>30-10-2014</td>
									<td>4311010014</td>
									<td>Ciko</td>
									<td>Teknik Elektro</td>
									<td>IT-6A</td>
									<td>Reguler</td>
									<td> - </td>
									<td>28-10-2014</td>
									<td>Pembayaran semester 5</td>
									<td></td>
									<td><input type="checkbox">Approved</td>
								</tr> <!-- akhir class success -->									
							</tbody> <!-- Isi Table -->
						</table> <!-- akhir table table-bordered -->
					</div> <!-- ================== AKHIR TABLE ========================= -->				
				</div> <!-- akhir col-md-12 -->
			</div> <!-- akhir row -->

		</div> <!-- akhir container -->
	</div> <!-- akhir panel body -->
</div> <!-- akhir col-md-12 -->

