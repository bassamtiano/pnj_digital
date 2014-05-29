
<!-- Abdul Fachmi -->

	
	<!-- Skeleton -->
		<ul class="nav nav-sidebar"> <!-- awal side bar -->
			<li><a href="/"><span class="glyphicon glyphicon-home"></span>Home</a></li>			
			<li>
			<a href="#" class="sub-navbar-key"><span class="glyphicon glyphicon-file"></span>Departemen<i style="float:right" class="glyphicon glyphicon-chevron-down"></i></a>
			<ul class="nav navbar-sidebar sub-navbar">
				<li><a href="#" ><span class="glyphicon glyphicon-folder-close"></span>Data Approval</a></li>
				<li><a href="#" ><span class="glyphicon glyphicon-folder-close"></span>Data Penggajian</a></li>				
				<li class="active"><a href="#" ><span class="glyphicon glyphicon-folder-close"></span>Laporan Data Karyawan</a></li>
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

	<div class="panel panel-default"> <!-- awal judul panel-->
		 <div class="panel-heading"><!-- panel heading -->
		 	<h1 class="panel-title"><b>Laporan Data Karyawan</b></h1>
		 </div><!-- akhir panel heading -->

		 <div class="panel-body">

<!-- ====================== TABLE =============== -->

			<div class="table-reponsive"> <!-- ========================= AWAL TABLE =================== -->
				<table class="table table-bordered"> <!-- table table-bordered -->
					<thead> <!-- nama colom table -->
						<tr class="warning">
							<th>NIK</th>
							<th>Nama</th>
							<th>Alamat</th>
							<th>Status Pegawai</th>
							<th>Tanggal Mulai Kerja</th>
							<th>Jabatan</th>
							<th>Jabatan Lainnya</th>
							<th>Email</th>
							<th>Status Karyawan</th>
						</tr>
					</thead><!-- nama colom table -->
					<tbody> <!-- Isi Table -->
						<tr class="primary"> <!-- class primary -->
							<td>43311001</td>
							<td>Budi</td>
							<td>Bogor</td>
							<td>PNS</td>
							<td>1 Maret 2007</td>
							<td>Kepala Keuangan</td>
							<td>-</td>
							<td>budi@email.com</td>
							<td>aktif</td>
						</tr> <!-- akhir class primary -->
						<tr class="success"> <!-- class success --> 
							<td>43311002</td>
							<td>Nano</td>
							<td>Depok</td>
							<td>Honorer</td>
							<td>20 Agustus 2013</td>
							<td>Rumah Tangga</td>
							<td>-</td>
							<td>nano@email.com</td>
							<td>aktif</td>
						</tr> <!-- akhir class success -->					
						<tr class="primary"> <!-- class primary -->
							<td>43311003</td>
							<td>Anddi</td>
							<td>Depok</td>
							<td>PNS</td>
							<td>1 Juni 2006</td>
							<td>Dosen Regular</td>
							<td>Pembantu Direktur 3</td>
							<td>andi@email.com</td>
							<td>aktif</td>
						</tr> <!-- akhir class primary -->
					</tbody> <!-- Isi Table -->
				</table> <!-- akhir table table-bordered -->
			</div> <!-- ================== AKHIR TABLE ========================= -->	
		 </div>
	</div> <!-- awal judul panel-->

