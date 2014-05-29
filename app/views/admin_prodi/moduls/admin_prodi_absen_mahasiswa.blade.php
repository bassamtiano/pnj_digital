@extends('layout.dashboard')

@section('head')
	<title> Halaman Karyawan </title>
@stop


@section('content')

<ul class="nav nav-tabs" id="TabKelas">
	<li class="active">
		<a href="#TI1A" data-toggle="tab">TI - 1A</a>
	</li>
	<li>
		<a href="#TI1B" data-toggle="tab">TI - 1B</a>
	</li>
	<li>
		<a href="#TI3A" data-toggle="tab">TI - 3A</a>
	</li>
	<li>
		<a href="#TI3B" data-toggle="tab">TI - 3B</a>
	</li>
	<li>
		<a href="#TKJ1A" data-toggle="tab">TKJ - 1A</a>
	</li>
	<li>
		<a href="#TKJ1B" data-toggle="tab">TKJ - 1B</a>
	</li>
	<li>
		<a href="#TMJ1A" data-toggle="tab">TMJ - 1A</a>
	</li>
	<li>
		<a href="#TMJAEU" data-toggle="tab">TMJ - AEU</a>
	</li>
</ul>

<!-- akhir bagian tab -->
	

<div class="tab-content">
	<div class="panel panel-default col-md-12"> <!-- awal col-md-4 buat form dengan panel-->
				<div class="panel-heading"> <!-- panel heading -->
					<h3 class="panel-title">
						Tambah Time Slot
					</h3>
				</div> <!-- panel heading -->
				<div class="panel-body"> <!-- panel body -->
	<div class="row">
		
				<div class="container-fluid table-scrollable table-responsive col-md-12" style="overflow-x:auto;width:1000px;">
						
						<div style="display:block; height:50px; width:1000px;"> <!-- Buka div Head -->

							<table class="table table-hover table-bordered"> 
								<thead><tr>
									<th width="100px">NIM</th>
					<th width="200px">Nama</th>
					<th width="100px">Kelas</th>
					<th width="200px">Konsentrasi</th>
					<th width="50px">Jam 1</th>
					<th width="50px">Jam 2</th>
					<th width="50px">Jam 3</th>
					<th width="50px">Jam 4</th>
					<th width="50px">Jam 5</th>
					<th width="50px">Jam 6</th>
					<th width="50px">Jam 7</th>
					<th width="50px">Jam 8</th>
								</tr></thead>
							</table>

						</div> <!-- Tutup div Head -->

						<div style="display:block; height:300px; width:1000px; overflow-y:visible; overflow-x:hidden;"> <!-- Buka div Body -->

							<table class="table table-striped table-hover table-bordered">
								<tbody>
									<tr>
										<td width="100px">12345</td>
					<td width="200px">Hendra</td>
					<td width="100px">TI - 1B</td>
					<td width="200px">Teknik Informatika</td>
					<td width="50px">
						<label><input type="checkbox" value=""> </label>				
					</td>
					<td width="50px">
						<label><input type="checkbox" value=""> </label>				
					</td>
					<td width="50px">
						<label><input type="checkbox" value=""> </label>				
					</td>
					<td width="50px">
						<label><input type="checkbox" value=""> </label>				
					</td>
					<td width="50px">
						<label><input type="checkbox" value=""> </label>				
					</td>
					<td width="50px">	
						<label><input type="checkbox" value=""> </label>				
					</td>
					<td width="50px">
						<label><input type="checkbox" value=""> </label>				
					</td>
					<td width="50px">
						<label><input type="checkbox" value=""> </label>				
					</td>

									</tr>
									
									
								</tbody>

							</table>

						</div> <!-- Tutup div Body -->
					<div class="col-md-2">
						<button type="button" class="btn btn-primary"> Tambah </button>
					</div>

					</div>
		</div>	
		</div>				
</div><!-- Akhir Tab Content -->
@stop
