{{HTML::script('js/jquery.min.js')}}
{{HTML::script('js/angular.min.js')}}
{{HTML::script('js/bootstrap.min.js')}}

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

<div ng-controller="DosenMatakuliahController" id="div-controller">
	
	<div class="row broccoli-rowKepala">
		<h1> Slip Gaji</h1>
		<br>
	</div><!--/broccoli-rowKepala-->

	<div class="row broccoli-rowNavigasi broccoli-hilangPadding-semua">
		
		<div class="col-md-3">
			<select ng-model="model_pilihan_cari" class="form-control">
	            <option value=""> Matakuliah</option>
	            <option value="">Hari</option>
	            <option value="">Kelas</option>
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
					<th class="text-center" width="10%" style="border-bottom:2px solid #000;" ng-click="">Hari&nbsp; <i class="fa fa-sort"></i> </th>
					<th class="text-center" width="10%" style="border-bottom:2px solid #000;" ng-click="">Waktu&nbsp; <i class="fa fa-sort"></i> </th>
					<th class="text-center" width="35%" style="border-bottom:2px solid #000;" ng-click="">Matakuliah &nbsp; <i class="fa fa-sort"></i>  </th>
					<th class="text-center" width="10%" style="border-bottom:2px solid #000;" ng-click="">SKS &nbsp; <i class="fa fa-sort"></i>  </th>
					<th class="text-center" width="10%" style="border-bottom:2px solid #000;" ng-click="">Kelas &nbsp; <i class="fa fa-sort"></i> </th>
					<th class="text-center" width="10%" style="border-bottom:2px solid #000;" ng-click="">Ruang &nbsp; <i class="fa fa-sort"></i> </th>
					<th class="text-center" width="10%" style="border-bottom:2px solid #000;"> ... </th>
				</tr>
			</table>
		</div><!--broccoli-rowHtable-->

		<div class="col-md-12 broccoli-rowItable">
			<table class="table table-striped table-bordered table-hover" style="table-layout:fixed;">
				<tr ng-repeat="">
					<td class="text-center" width="5%">@{{ $index+1 }}</td>
					<td class="text-center" width="10%">@{{}}</td>
					<td class="text-left" width="10%">@{{}</td>
					<td class="text-left" width="35%"><button class="btn btn-primarry btn-md" ng-click=""><i class="glyphicon glyphicon-edit"></i></button>@{{}}</td>
					<td class="text-left" width="10%">@{{}}</td>
					<td class="text-center" width="10%">@{{}}</td>
					<td class="text-center" width="10%">@{{}}</td>
					<td class="text-center" width="10%"><button class="btn btn-primarry btn-md" ng-click=""><span class="glyphicon glyphicon-edit"></span></button></td>
				</tr>
			</table>
		</div><!--/broccoli-rowItable-->

	</div><!--/broccoli-rowIsi-->

</div><!--/div-controller-->




<!-- Edited:almerps 240414 -->
<!-- Kazelord -->




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
		<div class="col-md-offset-4 col-md-4">
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
		<div class="col-md-6">
			<div class="container-fluid table-scrollable table-responsive table-bordered" style="overflow-x:auto;" > <!-- awal div container table -->
				<div style="display:block; height:40px; width:455px;"> <!-- awal untuk head table -->
					<table class="table table-bordered table-hover"> 
						<thead> <!-- nama colom table -->
							<tr>
								<th width="30px">No</th>									
								<th width="270px">Mata Kuliah</th>
								<th width="90px">Jam Absen</th>
							</tr>
						</thead><!-- nama colom table -->
					</table>
				</div> <!-- akhir untuk head table -->
				<div style="display:block; height:110px; width:455px; overflow-y:visible; overflow-x:hidden;"> <!-- awal untuk body table -->
					<table class="table  table-bordered table-hover">
						<tbody> <!-- isi Table -->
							<tr>  <!--ng-repeat="ds in dataslots"-->
								<td width="30px">1</td>
								<td width="270px">Mata Kuliah</td>
								<td width="90px">Jam Absen</td>
							</tr>
						</tbody> <!-- isi Table -->
					</table>						
				</div> <!-- awal untuk body table -->
			</div>  <!-- awal div container table -->
			<br>
			<div class="container-fluid table-scrollable table-responsive table-bordered" style="overflow-x:auto;" > <!-- awal div container table -->
				<div style="display:block; height:40px; width:455px;"> <!-- awal untuk head table -->
					<table class="table table-bordered table-hover"> 
						<thead> <!-- nama colom table -->
							<tr>
								<th width="30px">No</th>
								<th width="250px">Kegiatan Tambahan</th>
								<th width="100px">Honor</th>
							</tr>
						</thead><!-- nama colom table -->
					</table>
				</div> <!-- akhir untuk head table -->
				<div style="display:block; height:110px; width:455px; overflow-y:visible; overflow-x:hidden;"> <!-- awal untuk body table -->
					<table class="table  table-bordered table-hover">
						<tbody> <!-- isi Table -->
							<tr>  <!--ng-repeat="ds in dataslots"-->
								<td width="30px">No</td>
								<td width="250px">Kegiatan Tambahan</td>
								<td width="100px">Honor</td>
							</tr>
						</tbody> <!-- isi Table -->
					</table>						
				</div> <!-- awal untuk body table -->
			</div>  <!-- awal div container table -->
		<br>
		<br>
		<br>
		</div>	
		<div class="col-md-6">
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
