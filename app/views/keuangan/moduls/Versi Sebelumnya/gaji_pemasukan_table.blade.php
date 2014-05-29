
<div class="panel-heading"> <!--Panel Heading -->
	<h3 class="panel-title"> Data Pemasukan </h3>
</div><!--Panel Heading-->

<div class="panel-body"><!--panel body -->
	<label for="filter" class="col-sm-2"> Filter </label> <!-- Untuk Filter -->
	<div class="col-sm-8">
		<table>
				<tr>
					<td>
				<select class = "form-control">
				<option>Januari</option> 
				<option>Februari</option> 
				<option>Maret</option> 
				<option>April</option> 
				<option>Mei</option> 
				<option>Juni</option> 
				<option>Juli</option> 
				<option>Agustus</option> 
				<option>September</option> 
				<option>Oktober</option> 
				<option>November</option> 
				<option>Desember</option> 
			</select>
		</td>
		<td>
				<select class = "form-control">
				<option>2010</option> 
				<option>2011</option> 
				<option>2012</option> 
				<option>2013</option> 
				<option>2014</option> 
			</select>
		</td>

		</tr>
		</table>
	</div>
	<div class="col-sm-2">
		<button type="button" class="btn btn-default btn-lg"> Add Data </button>

	</div>

		
<div class="container-fluid table scrollable" style="overflow-x: auto"><!--Buka div container table -->
	<div style="display:block: height:40px; width:800px;"> <!--Buka Div Head -->
		<table class="table table-hover">
			<thead>
				<tr>
					<th width="100px">ID Pemasukan</th>
					<th width="100px">Tanggal Masuk</th>
					<th width="150px">Jumlah</th>
					<th width="150px">Sumber</th>
					<th width="200px">Keterangan</th>
					<th width="50px"></th>
					<th width="50px"></th>
				</tr>
			</thead>
		</table>
	</div> <!--Tutup Div Head -->
	<div style="display:block; height:400px; width:800px; overflow-y:visible; overflow-x:hidden;"><!--Buka Div Body-->
		<table class="table table-striped table-hover">
			<tbody>
				<tr>
					<td width="100px">122</td>
					<td width="100px">12-03-2014</td>
					<td width="150px">300000000</td>
					<td width="150px">Kota Depok</td>
					<td width="200px">Sumbangan Pemerintah</td>
					<td width="50px"><a href="#"> Ubah </a></td>
					<td width="50px"><a href="#"> Hapus </a></td>
				</tr>
				<tr>
					<td width="100px">123</td>
					<td width="100px">12-03-2014</td>
					<td width="150px">500000000</td>
					<td width="150px">Australia</td>
					<td width="200px">Sumbangan Pendidikan</td>
					<td width="50px"><a href="#"> Ubah </a></td>
					<td width="50px"><a href="#"> Hapus </a></td>
				</tr>
			</tbody>
		</table>
	</div>
</div>
</div>

