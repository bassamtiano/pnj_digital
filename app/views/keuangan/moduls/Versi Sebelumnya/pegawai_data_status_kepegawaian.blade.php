
<!-- Almer P.Suryadi -->


<div class="col-md-12"> <!-- Buka kolom isi halaman -->
		<h1 align="center"><b>Data Status Kepegawaian</b></h1>
	<div class="panel-body"> <!-- Buka panel body -->
		<div class="container"> <!-- Buka container halaman-->
			<div class="row"> <!-- Buka row -->

				<div class="col-md-7"> <!-- Buka col-md-5 -->

					<div class="form-group"> <!-- Buka form-group -->
						<label for="input_kode_kepegawaian" class="col-sm-5 control-label">Kode Kepegawaian</label>
						<div class="col-sm-5">
							<input type="text" class="form-control" id="pegawai_input_kode_kepegawaian" name="kodekepegawaian" placeholder="KP03">
						</div>						
					</div> <!-- Tutup form-group -->
					<br />
					<div class="form-group"> <!-- Buka form-group -->
						<label for="input_status_kepegawaian" class="col-sm-5 control-label">Status Kepegawaian</label>
						<div class="col-sm-5">
							<input type="text" class="form-control" id="pegawai_input_status_kepegawaian" name="statuskepegawaian">
						</div>
					</div> <!-- Tutup form-group -->
					<br />
					<div class="form-group"> <!-- Buka form-group -->
						<label for="input_gaji_status_kepegawaian" class="col-sm-5 control-label">Gaji Status Kepegawaian</label>
						<div class="col-sm-5">
							<input type="text" class="form-control" id="input_gaji_status_kepegawaian" name="gajistatuskepegawaian">
						</div>
					</div> <!-- Tutup form-group -->
					<br />
					<br />
					<div class="form-group"> <!-- Buka form-group button -->
						<div class="col-sm-offset-5 col-sm-7"> <!-- Buka col-sm-offset-5 col-sm-7 -->
							<button type="submit" class="btn btn-default">Simpan</button>
							<button type="submit" class="btn btn-default">Reset</button>
						</div> <!-- Tutup col-sm-offset-5 col-sm-7 -->
					</div> <!-- tutup form-group -->								


				</div> <!-- Tutup col-md-5 -->

			</div> <!-- Tutup row -->

			<div class="row" style="margin-top:20px;"> <!-- Buka row table -->
				<div class="col-md-9"> <!-- Buka col-md-9 -->
					<div class="table-reponsive"> <!-- buka div table-->
						<table class="table table-bordered table-striped"> <!-- Buka table -->
							<thead>
								<tr class="active">
									<th>Kode Status Kepegawaian</th>
									<th>Status Pegawai</th>
									<th>Gaji Status Kepegawaian</th>
									<th>Ubah</th>
									<th>Hapus</th>														
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>KP01</td>
									<td>PNS</td>
									<td>5000000</td>
									<td><a href="#">ubah</a></td>
									<td><a href="#">hapus</a></td>
								</tr>
								<tr>
									<td>KP02</td>
									<td>NON PNS</td>
									<td></td>
									<td><a href="#">ubah</a></td>
									<td><a href="#">hapus</a></td>
								</tr> 				
						
							</tbody>
						</table> <!-- Tutup table -->
					</div> <!-- Tutup div table -->				
				</div> <!-- Tutup col-md-9 -->
			</div> <!-- Tutup row table -->

		</div> <!-- Tutup container halaman-->
	</div> <!-- Tutup panel body -->
</div> <!-- Tutup kolom isi halaman -->
