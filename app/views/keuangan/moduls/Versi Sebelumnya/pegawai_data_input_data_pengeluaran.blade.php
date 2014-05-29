
<!-- ALMERPS -->


<h1 align="center"><b>Data Pemasukan</b></h1>
<div class="row"><!-- Buka div row navbar atas -->
	<div class="col-md-9"><!-- Buka div kolom navbar atas filter -->
	 <form> <!-- form navigator -->
        	<table>

        <td>
        	<label for="filter"> Filter </label> <!-- Untuk Filter -->
        </td>

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

		<td>
			<button type="button" class="btn btn-default"> Tampilkan </button>
		</td>
        	</table>
		
	      	</form><!-- tutup form navigator -->
	</div>
	<div class="col-md-3"><!-- Buka button sebelah kanan -->
		<button type="button" class="btn btn-default"> +Add Data </button>
	</div><!-- Tutup button sebelah kanan -->		
</div><!-- Tutup div row navbar atas -->

<div class="row"><!-- Buka div row table -->
	<div class="col-md-12"><!-- Buka kolom table -->
	<div class="container-fluid table scrollable" style="overflow-x: hidden"><!--Buka div container table -->
	<div style="display:block; height:40px; width:1000px;"> <!--Buka Div Head -->
		<table class="table table-bordered table-hover">
			<thead>
				<tr>
					<th width="200px">ID Pengeluaran</th>
					<th width="200px">Tanggal Keluar</th>
					<th width="150px">Jumlah</th>
					<th width="150px">Departemen</th>
					<th width="200px">Keterangan</th>
					<th width="50px">Ubah</th>
					<th width="50px">Hapus</th>
				</tr>
			</thead>
		</table>
	</div> <!--Tutup Div Head -->
	<div style="display:block; height:150px; width:1000px; overflow-y:visible; overflow-x:hidden;"><!--Buka Div Body-->
		<table class="table table-striped table-hover table-bordered">
			<tbody>
				<tr>
					<td width="200px">123</td>
					<td width="200px">12-03-2014</td>
					<td width="150px">50000000</td>
					<td width="150px">Mesin</td>
					<td width="200px">PKM Mahasiswa</td>
					<td width="50px"><a href="#"> Ubah </a></td>
					<td width="50px"><a href="#"> Hapus </a></td>
				</tr>
				<tr>
					<td width="200px">124</td>
					<td width="200px">13-03-2014</td>
					<td width="150px">100000</td>
					<td width="150px">BEM PNJ</td>
					<td width="200px">Photo Copy</td>
					<td width="50px"><a href="#"> Ubah </a></td>
					<td width="50px"><a href="#"> Hapus </a></td>
				</tr>
			</tbody>
		</table>
	</div>
</div>
</div><!-- tutup kolom table -->
</div><!-- Tutup div row table -->
