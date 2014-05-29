
<div class="row"><!--awal row -->
	<div class="col-md-12"> <!-- awal col-md-12 -->
		<h2>Data Honor</h2>
		<label class="col-sm-1 control-table">Filter</label>
		<div class="form-group"> <!-- awal form  group -->
			<div class="col-sm-2">
				<select class="form-control" name="bulan">
					<option value="Januari">Januari</option>
					<option value="Februari">Februari</option>
					<option value="Maret">Maret</option>
					<option value="April">April</option>
					<option value="Mei">Mei</option>
					<option value="Juni">Juni</option>
					<option value="Juli">Juli</option>
					<option value="Agustus">Agustus</option>
					<option value="September">September</option>
					<option value="Oktober">Oktober</option>
					<option value="November">November</option>
					<option value="Desember">Desember</option>
				</select>
			</div>
		</div> <!-- akhir form group -->
		<div class="form-group"> <!-- awal form  group -->
			<div class="col-sm-2">
				<select class="form-control" name="tahun">
					<option value="2014">2014</option>
					<option value="2013">2013</option>
					<option value="2012">2012</option>
					<option value="2011">2011</option>
				</select>
			</div>
		</div> <!-- akhir form group -->
		<div class="form-group">
			<div class="col-sm-2">
				<button type="submit" class="btn btn-danger">Tampilkan</button>
			</div>
		</div>		
	</div> <!-- akhir col-md-12 -->
</div> <!-- akhir row -->
<br>
<div class="row">
	<div class="col-md-12" > <!-- awal col-md-12 buat table-->
		<div class="container-fluid table-scrollable table-reponsive table-bordered" style="overflow-x:auto;" > <!-- awal div container table -->
			<div style="display:block; height:50px; width:1900px;"> <!-- awal untuk head table -->
				<table class="table table-bordered table-hover"> 
					<thead> <!-- nama colom table -->
						<tr>
							<th width="100px">Tanggal</th>
							<th width="100px">NIK</th>
							<th width="150px">Nama</th>
							<th width="150px">Departemen</th>
							<th width="250px">Golongan Jabatan</th>
							<th width="150px">Event</th>
							<th width="250px">Jabatan Event</th>
							<th width="250px">Keterangan</th>
							<th width="150px">Jumlah Honor</th>
							<th width="100px"></th>
							<th width="100px"></th>
							
						</tr>
					</thead><!-- nama colom table -->
				</table>
			</div> <!-- akhir untuk head table -->

			<div style="display:block; height:310px; width:1900px; overflow-y:visible; overflow-x:hidden;"> <!-- awal untuk body table -->
				<table class="table table-striped table-bordered table-hover">
					<tbody> <!-- isi Table -->
						<tr>  <!--ng-repeat="ds in dataslots"-->
							<td width="100px">Tanggal</td>
							<td width="100px">NIK</td>
							<td width="150px">Nama</td>
							<td width="150px">Departemen</td>
							<td width="250px">Golongan Jabatan</td>
							<td width="150px">Event</td>
							<td width="250px">Jabatan Event</td>
							<td width="250px">Keterangan</td>
							<td width="150px">Jumlah Honor</td>
							<td width="100px"><a href="">Ubah</a></td>
							<td width="100px"><a href="">Hapus</a></td>
							
						</tr>
					</tbody> <!-- isi Table -->
				</table>
			</div> <!-- awal untuk body table -->
		</div>  <!-- awal div container table -->
	</div> <!-- akhir col-md-12 buat table-->
</div>
