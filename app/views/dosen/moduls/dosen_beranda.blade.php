<!-- Edited:almerps 240414 --> <!-- Edited by Kazelord 240414 : 7.27 PM-->
<!-- Created By Kazelord-->

<style>
	#photo_dosen {
		width: 100%;
		height: 100%;
	}

	#tbl_profile_dosen {
		line-height: 30px;
	}
</style>

<!-- Awal Title -->
<div class="row">
	<div class="col-md-12">
		<h1 >Profil Dosen</h1>
		<div class="col-md-offset-1">
			<div class="form-group"> <!-- Awal Tombol Edit -->
				<a href="#" class="btn btn-success"><span class="glyphicon glyphicon-pencil"></span> Edit</a>
			</div>
		</div><!-- Akhir Tombol Edit -->
	</div>
</div>
<!-- Akhir Title -->

<!-- Awal body -->
<div class="row moduls-main-content"><!-- Awal div class row in content modul -->
	<div class="col-md-2" style="height:150px;">
		<a id="thumbnail_dosen">
			{{HTML::image('img/unknown.png', 'Foto Dosen', array('id' => 'photo_dosen'));}}
		</a>
	</div>
	<div class="col-md-10" style="padding-left:10px;">
		 <!--<div style="display:block; height:250px; width:800px; overflow-y:visible; overflow-x:hidden;"> awal untuk body table -->
		<!-- Nav tabs -->
		<ul class="nav nav-tabs">
		  <li class="active"><a href="#data_pribadi" data-toggle="tab">Data Diri</a></li>
		  <li><a href="#data_kependidikan" data-toggle="tab">Data Kependidikan</a></li>
		</ul>

		<!-- Tab panes -->
		<div class="tab-content">
		  <div class="tab-pane active" id="data_pribadi">
		  	<table style="table-layout:fixed;" id="tbl_profile_dosen" cellspacing="10" cellpadding="20">
				<tbody> <!-- isi Profil -->
					<tr>  
						<td>NIK</td>
						<td> &nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;</td>
						<td>&nbsp;&nbsp;&nbsp; 123</td>
					</tr>
					<tr>  
						<td>NIP</td>
						<td> &nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;</td>
						<td>&nbsp;&nbsp;&nbsp; 123 123 123</td>
					</tr>
					<tr>  
						<td>Nama</td>
						<td> &nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;</td>
						<td>&nbsp;&nbsp;&nbsp; Budi M.Kom</td>
					</tr>
					<tr>  
						<td>Alamat</td>
						<td> &nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;</td>
						<td>&nbsp;&nbsp;&nbsp; Jl. Kukusan N0.29, Beji, Depok</td>
					</tr>
					<tr>  
						<td>Program Studi</td>
						<td> &nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;</td>
						<td>&nbsp;&nbsp;&nbsp; Teknik Informatika</td>
					</tr>

					<tr>  
						<td>Jabatan</td>
						<td> &nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;</td>
						<td>&nbsp;&nbsp;&nbsp; Dosen AEU</td>
					</tr>
					<tr>  
						<td>Jabatan lain</td>
						<td> &nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;</td>
						<td>&nbsp;&nbsp;&nbsp; Kepala Lab aa</td>
					</tr>
					<tr>  
						<td>Tempat Lahir</td>
						<td> &nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;</td>
						<td>&nbsp;&nbsp;&nbsp; Ujung Pandang</td>
					</tr>
					<tr>  
						<td>Tanggal Lahir</td>
						<td> &nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;</td>
						<td>&nbsp;&nbsp;&nbsp; 17-08-1970</td>
					</tr>
				</tbody> <!-- isi Table -->
			</table>
		  </div><!--/data_pribadi_pane-->
		  <div class="tab-pane" id="data_kependidikan">
		  	<table style="table-layout:fixed;" id="tbl_profile_dosen" cellspacing="10" cellpadding="20">
				<tbody> <!-- isi Table -->
						<tr>  <!--ng-repeat="ds in dataslots"-->
							<td>Pendidikan S1</td>
							<td> &nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;</td>
							<td>&nbsp;&nbsp;&nbsp; Komputer Sains UI</td>
						</tr>
					<tr>  <!--ng-repeat="ds in dataslots"-->
							<td>Pendidikan S2</td>
							<td> &nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;</td>
							<td>&nbsp;&nbsp;&nbsp; Teknik Informatika Binus</td>
						</tr>
						<tr>  <!--ng-repeat="ds in dataslots"-->
							<td>Pendidikan S3</td>
							<td> &nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;</td>
							<td>&nbsp;&nbsp;&nbsp; -</td>
						</tr>							
						<tr>  <!--ng-repeat="ds in dataslots"-->
							<td>No.Telp/HP</td>
							<td> &nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;</td>
							<td>&nbsp;&nbsp;&nbsp; 089637614626</td>
						</tr>
						<tr>  <!--ng-repeat="ds in dataslots"-->
							<td>E-Mail</td>
							<td> &nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;</td>
							<td>&nbsp;&nbsp;&nbsp; budi.ganteng@gmail.com</td>
						</tr>
						<tr>  <!--ng-repeat="ds in dataslots"-->
							<td>Golongan</td>
							<td> &nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;</td>
							<td>&nbsp;&nbsp;&nbsp; PNS</td>
						</tr>
					</tbody> <!-- isi Table -->
			</table>
		  </div><!--/data_kependidikan_pane-->
		</div>
	</div>
</div><!-- Akhir div class row in content modul -->
<!-- Akhir Body -->