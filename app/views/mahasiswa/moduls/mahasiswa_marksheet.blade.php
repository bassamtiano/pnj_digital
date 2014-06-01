<div ng-controller="AdminKemahasiswaanBacaMahasiswaController" id="div-controller">

	<div class="row broccoli-rowKepala">
		<h1> Data Mahasiswa <small> Akses dan Modifikasi data-data mahasiswa PNJ </small> </h1>
		<br>
	</div><!--/broccoli-rowKepala-->

	<div class="row broccoli-rowNavigasi broccoli-hilangPadding-semua">

	</div>

	<div class="row broccoli-rowIsi">

		<div class="col-md-12 broccoli-rowHtable">
			<table id="tbl_h" class="table table-striped table-bordered table-hover pull-downs" style="table-layout:fixed;">
				<tr>
					<th class="text-center" width="5%" style="border-bottom:2px solid #000;">No </th>
					<th class="text-center" width="13%" style="border-bottom:2px solid #000;" ng-click="predicate='nim'; reverse=!reverse">Mata Kuliah &nbsp; <i class="fa fa-sort"></i> </th>
					<th class="text-center" width="25%" style="border-bottom:2px solid #000;" ng-click="predicate='nama'; reverse=!reverse">SKS &nbsp; <i class="fa fa-sort"></i> </th>
					<th class="text-center" width="10%" style="border-bottom:2px solid #000;" ng-click="predicate='nama_kelas'; reverse=!reverse">Nilai Huruf &nbsp; <i class="fa fa-sort"></i>  </th>
					<th class="text-center" width="15%" style="border-bottom:2px solid #000;" ng-click="predicate='konsentrasi_prodi'; reverse=!reverse">Nilai Angka &nbsp; <i class="fa fa-sort"></i>  </th>
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
				</tr>
			</table>
		</div>

	</div>

</div>


	<!-- EDITED almerps -->
	<div class="row">
		<h1>Data Marksheet</h1><br />
	</div>

	<div class="row moduls-main-content"><!-- Awal div row sub menu -->
		<div class="col-md-12">

			<div class="form-group"> <!-- ======= Awal form-group =======-->
				<label for="input_semester" class="col-sm-5 control-label">Tampilkan</label>
				<div class="col-sm-7">
					<select class="form-control" name="semester" id="input_semester">
						<option value="1">Semester 1</option>
						<option value="2">Semester 2</option>
						<option value="3">Semester 3</option>
						<option value="4">Semester 4</option>
						<option value="5">Semester 5</option>
						<option value="6">Semester 6</option>
						<option value="7">Semester 7</option>
						<option value="8">Semester 8</option>
					</select><br />
				</div>
			</div> <!-- ======= Akhir form-group =======-->
		</div>

	</div><!-- Akhir div row sub menu -->




	<div class="row moduls-main-content">
		<div class="col-md-12">
			<div class="container-fluid table-scrollable table-reponsive table-bordered" style="overflow-x:auto;" > <!-- awal div container table -->
				<div style="display:block; height:40px; width:1100px;"> <!-- awal untuk head table -->
					<table class="table table-hover table-bordered" style="table-layout:fixed;"> 
						<thead> <!-- nama colom table -->
							<tr>
								<th width="500px">Mata Kuliah</th>
								<th width="300px">SKS</th>
								<th width="150px">Nilai Huruf</th>
								<th width="150px">Nilai Angka</th>
							</tr>
						</thead><!-- nama colom table -->
					</table>
				</div> <!-- akhir untuk head table -->

				<div style="display:block; height:100px; width:1100px; overflow-y:visible; overflow-x:hidden;"> <!-- awal untuk body table -->
					<table class="table table-striped table-hover table-bordered" style="table-layout:fixed;">
						<tbody> <!-- isi Table -->
							<tr>
								<td width="500px"><p style="word-wrap:break-word; ">AKSOKAODKOSAKODASKDOASKODKOSAODK</p></td>
								<td width="300px"><p style="word-wrap:break-word;">Liat samping deh,kok gak rata sama bungkus yah?Bawahnya juga gitu,bingung ga?</p></td>
								<td width="150px"><p style="word-wrap:break-word;">A+</p></td>
								<td width="150px"><p style="word-wrap:break-word;">999</p></td>
							</tr>
							<tr>
								<td width="500px"><p style="word-wrap:break-word; ">okokokokokokokokk</p></td>
								<td width="300px"><p style="word-wrap:break-word;">Liat samping deh,kok gak rata sama bungkus yah?Bawahnya juga gitu,bingung ga?</p></td>
								<td width="150px"><p style="word-wrap:break-word;">A++</p></td>
								<td width="150px"><p style="word-wrap:break-word;">tANYA REFIRMAJHJN</p></td>
							</tr>
							<tr>
								<td width="500px"><p style="word-wrap:break-word; ">1asdkasdkosakdosakodksad</p></td>
								<td width="300px"><p style="word-wrap:break-word;">Liat samping deh,kok gak rata sama bungkus yah?Bawahnya juga gitu,bingung ga?</p></td>
								<td width="150px"><p style="word-wrap:break-word;">E</p></td>
								<td width="150px"><p style="word-wrap:break-word;">D.O</p></td>
							</tr>
						</tbody> <!-- isi Table -->
					</table>
				</div> <!-- awal untuk body table -->
			</div>  <!-- awal div container table -->
		</div>
	</div>

	<div class="row"><!-- Awal div row menu bawah -->
		<div class="col-md-12">

			<div class="form-group col-md-4 col-md-offset-8"> <!-- ======= Awal Form Group IP =======-->
				<br /> 
				<label for="output_ip" class="col-sm-2 control-label">IP</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="ioutput_ip" name="ip" placeholder="3.80" value="3.80">
				</div>
			</div> <!-- ======= Akhir Form Group IP =======-->



		</div>
	</div><!-- Akhir div row menu bawah -->