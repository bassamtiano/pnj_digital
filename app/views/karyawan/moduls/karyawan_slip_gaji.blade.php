<div ng-controller="MahasiswaBacaDosenController" id="div-controller">

	<div class="row broccoli-rowKepala">
		<h1> Data Dosen <small> Akses dan Modifikasi data-data mahasiswa PNJ </small> </h1>
		<br>
	</div><!--/broccoli-rowKepala-->

	<div class="row broccoli-rowNavigasi broccoli-hilangPadding-semua">

	</div>


	<div class="row broccoli-rowIsi">
		<div class="col-md-12 broccoli-rowHtable">
			<table id="tbl_h" class="table table-striped table-bordered table-hover pull-downs" style="table-layout:fixed;">
				<tr>
					<th class="text-center" width="5%" style="border-bottom:2px solid #000;">No </th>
					<th class="text-center" width="13%" style="border-bottom:2px solid #000;" ng-click="predicate='nik'; reverse=!reverse">Tanggal&nbsp; <i class="fa fa-sort"></i> </th>
					<th class="text-center" width="13%" style="border-bottom:2px solid #000;" ng-click="predicate='nip'; reverse=!reverse">NIP &nbsp; <i class="fa fa-sort"></i> </th>
					<th class="text-center" width="25%" style="border-bottom:2px solid #000;" ng-click="predicate='nama'; reverse=!reverse">Nama &nbsp; <i class="fa fa-sort"></i> </th>
					<th class="text-center" width="25%" style="border-bottom:2px solid #000;" ng-click="predicate='email'; reverse=!reverse">Email &nbsp; <i class="fa fa-sort"></i>  </th>
					<th class="text-center" width="18%" style="border-bottom:2px solid #000;" ng-click="predicate='jurusan'; reverse=!reverse">Jurusan &nbsp; <i class="fa fa-sort"></i> </th>
					<th class="text-center" width="10%" style="border-bottom:2px solid #000;"> ... </th>
				</tr>
			</table>
		</div>

		<div class="col-md-12 broccoli-rowItable">
			<table class="table table-striped table-bordered table-hover" style="table-layout:fixed;">
				<tr>
					<td class="text-center" width="5%">@{{ $index+1 }}</td>
					<td class="text-center" width="13%">@{{ d.nik }}</td>
					<td class="text-left" width="13%">@{{ d.nip }}</td>
					<td class="text-left" width="25%">@{{ d.nama }}</td>
					<td class="text-center" width="25%">@{{ d.email }}</td>
					<td class="text-center" width="18%">@{{ d.jurusan }}</td>
					<td class="text-center" width="10%"> 
						<div class="btn-group">
					 		<button class="btn btn-primarry btn-md" ng-click="modal_baca_dosen_detail(d.id_dosen)"> <span class="glyphicon glyphicon-eye-open"></span></button>
						</div>
					</td>
				</tr>
			</table>
		</div>

	</div>


</div>

<div class="row">
	<div class="col-md-12">
		<div class="col-md-4" align="center"> <!-- awal col-md-4 -->
		      <img data-src="C:\xampp\htdocs\pnj_digital\public\img\logo-pnj.png" alt="[logo pnj]">
		      <div class="caption">
		        <h5>Politeknik Negeri Jakarta</h5>
		      </div>
		</div> <!-- akhir col-md-4 -->
		<div class="col-md-4"> <!-- awal col-md-4 -->
			<h2>Slip Penggajian</h2>
		</div> <!-- akhir col-md-4 -->
		<div class="col-md-4"> <!-- awal col-md-4 -->
			<table>
				<tbody>
					<tr>
						<td height="30px">Tanggal</td>
						<td width="30px" align="center">:</td>
						<td>Sesuai tanggal hari ini</td>
					</tr>
					<tr>
						<td height="30px">No.Slip Gaji</td>
						<td width="30px" align="center">:</td>
						<td>Sesuai ketentuan</td>
					</tr>
				</tbody>
			</table>
		</div> <!-- akhir col-md-4 -->						
	</div> <!-- akhir col-md-12 -->						
</div><!-- akhir row -->
<hr>
<div class="row">
	<div class="col-md-12">
		<div class="col-md-4">
			<table>
				<tbody>
					<tr>
						<td height="30px">NIK</td>
						<td width="30px" align="center">:</td>
						<td>Sesuai dengan dosen</td>
					</tr>
					<tr>
						<td height="30px">Nama</td>
						<td width="30px" align="center">:</td>
						<td>Sesuai ketentuan</td>
					</tr>
					<tr>
						<td height="30px">Departemen</td>
						<td width="30px" align="center">:</td>
						<td>Sesuai ketentuan</td>
					</tr>

				</tbody>
			</table>				
		</div>
		<div class="col-md-4"></div>
		<div class="col-md-4">
			<table>
				<tbody>
					<tr>
						<td height="30px">Status Kepegawaian</td>
						<td width="30px" align="center">:</td>
						<td>Sesuai ketentuan</td>
					</tr>
					<tr>
						<td height="30px">Golongan Jabatan</td>
						<td width="30px" align="center">:</td>
						<td>Sesuai ketentuan</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div> 
</div><!-- akhir row -->
<hr>
<hr>
<div class="row">
	<div class="col-md-12">
		<div class="col-md-offset-6 col-md-6">
			<table>
				<tbody> <!-- isi Table -->
					<tr>  <!--ng-repeat="ds in dataslots"-->
						<td width="300px" height="30px">Gaji Pokok</td>
						<td width="100px"></td>
						<td width="150px">[gaji pokok]</td>
					</tr>
					<tr>  <!--ng-repeat="ds in dataslots"-->
						<td width="300px" height="30px" align="center">Jumlah Absensi</td>
						<td width="100px"></td>
						<td width="150px" >[Total]</td>
					</tr>						
					<tr>  <!--ng-repeat="ds in dataslots"-->
						<td width="300px" height="30px">Tunjangan Pemerintah</td>
						<td width="100px"></td>
						<td width="150px">[tunjangan pemerintah]</td>
					</tr>
					<tr>  <!--ng-repeat="ds in dataslots"-->
						<td width="300px" height="30px">Tunjangan Jabatan</td>
						
					</tr>
					<tr>  <!--ng-repeat="ds in dataslots"-->
						<td width="300px" height="30px" align="center">[Jabatan baru]</td>
						<td width="100px"></td>
						<td width="130px">[tunjangan jabatan]</td>
					</tr>
					<tr>  <!--ng-repeat="ds in dataslots"-->
						<td width="300px" height="30px">Honor</td>
						<td width="100px"></td>
						<td></td>
					</tr>
					<tr>  <!--ng-repeat="ds in dataslots"-->
						<td width="300px" height="30px" align="center">[Honor kerja sampingan]</td>
						<td width="100px"></td>
						<td width="150px">[Honor]</td>
					</tr>																																									
				</tbody> <!-- isi Table -->
			</table>
			<hr>
			<table>
				<tbody>
					<tr>  <!--ng-repeat="ds in dataslots"-->
						<td width="300px">Jumlah Gaji Bersih</td>
						<td width="100px"></td>
						<td width="150px">[jumlah gaji]</td>
					</tr>
					<tr>  <!--ng-repeat="ds in dataslots"-->
						<td width="300px" height="20px" align="center">Terbilang</td>
						<td width="100px"></td>
						<td width="150px">[sesuai jumlah gaji]</td>
					</tr>							
				</tbody>
			</table>
		</div>
	</div>
</div>
<br>
<br>
<br>
<div class="row">
	<div class="col-md-12">
		<div class="col-md-2 col-md-offset-2">
			<p>(Admin Keuangan)</p>
		</div>
		<div class="col-md-offset-3 col-md-1">
			<a href="#" class="btn btn-default">Print</a>
		</div>	
		<div class="col-md-offset-1">	
			<a href="#" class="btn btn-default">Submit</a> 	 	
		</div>		
	</div>
</div>

<!-- Kazelord -->