
<!-- Abdul Fachmi -->


<div class="col-md-12 panel panel-default" ng-controller="marksheetController" > <!-- awal col-md-12 -->
	<div class="panel-heading"> <!-- awal panel heading -->
		<h1 class="panel-title">
			<b>Data Golongan Jabatan</b>
		</h1>
	</div> <!-- akhir panel heading -->
	<div class="panel-body"> <!-- awal panel body -->
		<div class="container"> <!-- awal container -->
			<div class="row"> <!-- awal row -->

				<div class="col-md-5"> <!-- awal col-md-5 -->

					<div class="form-group"> <!-- awal form-group -->
						<label for="input_kodegolongan" class="col-sm-5 control-label">Kode Golongan</label>
						<div class="col-sm-7">
							<input type="text" class="form-control" id="input_kodegolongan" name="kodegolongan" placeholder="GJ05">
						</div>						
					</div> <!-- akhir form-group -->
					<br />
					<div class="form-group"> <!-- awal form-group -->
						<label for="input_golonganjabatan" class="col-sm-5 control-label">Golongan Jabatan</label>
						<div class="col-sm-7">
							<input type="text" class="form-control" id="input_golonganjabatan" name="golonganjabatan">
						</div>
					</div> <!-- akhir form-group -->
					<br />
					<div class="form-group"> <!-- awal form-group -->
						<label for="input_gajigolonganjabatan" class="col-sm-5 control-label">Gaji Golongan Jabatan</label>
						<div class="col-sm-7">
							<input type="text" class="form-control" id="input_gajigolonganjabatan" name="gajigolonganjabatan">
						</div>
					</div> <!-- akhir form-group -->
					<br />
					<br />
					<div class="form-group"> <!-- awal form-group -->
						<div class="col-sm-offset-5 col-sm-10"> <!-- awal col-sm-offset-2 col-sm-10 -->
							<button type="submit" class="btn tbn-success">Simpan</button>
							<button type="submit" class="btn tbn-success">Reset</button>
						</div> <!-- akhir col-sm-offset-2 col-sm-10-->
					</div> <!-- akhir form-group -->								


				</div> <!-- akhir col-md-5 -->

			</div> <!-- akhir row -->

			<div class="row" style="margin-top:20px;"> <!-- awal row -->
				<div class="col-md-8"> <!-- awal col-md-12 -->
					<div class="table-reponsive"> <!-- ========================= AWAL TABLE =================== -->
						<table class="table table-bordered"> <!-- table table-bordered -->
							<thead> <!-- nama colom table -->
								<tr class="warning">
									<th>Kode Golongan</th>
									<th>Golongan Jabatan</th>
									<th>Gaji Golongan Jabatan Per Jam</th>
									<th></th>
									<th></th>														
								</tr>
							</thead><!-- nama colom table -->
							<tbody> <!-- Isi Table -->
								<tr class="primary"> <!-- class primary -->
									<td>GJ01</td>
									<td>Dosen AeU</td>
									<td>100000</td>
									<td><a href="#">ubah</a></td>
									<td><a href="#">hapus</a></td>
								</tr> <!-- akhir class primary -->
								<tr class="success"> <!-- class success --> 
									<td>GJ02</td>
									<td>Dosen Reguler</td>
									<td>50000</td>
									<td><a href="#">ubah</a></td>
									<td><a href="#">hapus</a></td>
								</tr> <!-- akhir class success -->					
								<tr class="primary"> <!-- class primary -->
									<td>GJ03</td>
									<td>Dosen Mice</td>
									<td>80000</td>
									<td><a href="#">ubah</a></td>
									<td><a href="#">hapus</a></td>
								</tr> <!-- akhir class primary -->
								<tr class="success"> <!-- class success --> 
									<td>GJ04</td>
									<td>Karyawan</td>
									<td>50000</td>
									<td><a href="#">ubah</a></td>
									<td><a href="#">hapus</a></td>
								</tr> <!-- akhir class success -->					
							</tbody> <!-- Isi Table -->
						</table> <!-- akhir table table-bordered -->
					</div> <!-- ================== AKHIR TABLE ========================= -->				
				</div> <!-- akhir col-md-12 -->
			</div> <!-- akhir row -->

		</div> <!-- akhir container -->
	</div> <!-- akhir panel body -->
</div> <!-- akhir col-md-12 -->

