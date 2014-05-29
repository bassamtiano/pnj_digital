<div class="modal-dialog modal-lg" ng-controller="AdminProdiBacaKaryawan">
	<div class="modal-content">

		<form class="form-horizontal" id="form_ubah_karyawan" role="form" method="get">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			<h4 class="modal-title" id="myModalLabel">Ubah Data Karyawan</h4>
		</div>

		<div class="modal-body">

			<div class="panel-group" id="accordion">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4 class="panel-title">
							<a data-toggle="collapse" data-parent="#accordion" href="#group_data_diri">
								Data Diri
							</a>
						</h4>
					</div>

						<div id="group_data_diri" class="panel-collapse collapse in">
							<div class="panel-body">
								<div class="form-group">
                    				<label for="nim" class="col-sm-2 control-label">NIK</label>
                    					<div class="col-sm-10">
                      						<input name="nik" type="text" class="form-control" id="nik" placeholder="Nomor Induk Karyawan">
                    					</div>
                  				</div>

                  			<div class="form-group">
                    			<label for="name" class="col-sm-2 control-label">Nama</label>
                    				<div class="col-sm-10">
                      					<input name="nama" type="text" class="form-control" id="nama" placeholder="Nama">
                    				</div>
                  			</div>

							<div class="form-group">
                    			<label for="alamat" class="col-sm-2 control-label">Alamat</label>
                    				<div class="col-sm-10">
                      					<textarea name="alamat" class="form-control" id="alamat" rows="3" placeholder="Alamat"></textarea>
                    				</div>
                  			</div>

                  			<div class="form-group">
                    			<label for="nim" class="col-sm-2 control-label">Status Pegawai</label>
                    				<div class="col-sm-10">
                      					<div class="radio">
                        					<label>
                          						<input type="radio" name="status_pegawai" id="status_pegawai" value="PNS" checked>
                          						PNS
                        					</label>
                      					</div>
                      					<div class="radio">
                        					<label>
                          						<input type="radio" name="status_pegawai" id="status_pegawai" value="Honorer">
                          						Honorer
                        					</label>
                      					</div>
                    				</div>
                  			</div>

							<div class="form-group">
                    			<label for="tanggal_mulai_kerja" class="col-sm-2 control-label">Tanggal Mulai Kerja</label>
                    				<div class="col-sm-10">
                      					<input name="tanggal_mulai_kerja" type="date" class="form-control" id="tanggal_mulai kerja">
                    				</div>
                  			</div>

							<div class="form-group">
                    			<label for="nim" class="col-sm-2 control-label">Jabatan</label>
                    				<div class="col-sm-10">
                      					<div class="radio">
                        					<label>
                          						<input type="radio" name="jabatan" id="jabatan" value="Dosen AeU" checked>
                          						Dosen AeU
                        					</label>
                      					</div>
                      					<div class="radio">
                        					<label>
                          						<input type="radio" name="jabatan" id="jabatan" value="Dosen Reguler">
                          						Dosen Reguler
                        					</label>
                      					</div>
                    				</div>
                  			</div>

		                   	<div class="form-group">
		                    	<label for="name" class="col-sm-2 control-label">Kelas</label>
		                    		<div class="col-sm-10">

		                      			<select name="id_kelas" class="form-control">

				                          <option value="-"> - </option>
				                          <option value="Kaprodi"> Kaprodi </option>
				                          <option value="Pudir 3"> Pudir 3 </option>

				                      	</select>
		                    		</div>
		                  	</div>

		                  	<div class="form-group">
		                    	<label for="email" class="col-sm-2 control-label">Email</label>
		                    		<div class="col-sm-10">
		                      			<input name="email" type="email" class="form-control" id="email" placeholder="Email">
		                    		</div>
		                  	</div>

		                   	<div class="form-group">
		                    	<label for="nim" class="col-sm-2 control-label">Status Karyawan</label>
		                    		<div class="col-sm-10">
		                      			<div class="radio">
		                        			<label>
		                          				<input type="radio" name="status_karyawan" id="status_karyawan" value="Aktif" checked>
		                          				Aktif
		                        			</label>
		                      			</div>
		                      			<div class="radio">
		                        			<label>
		                          				<input type="radio" name="status_karyawan" id="status_karyawan" value="Tidak Aktif">
		                          				Tidak Aktif
		                        			</label>
		                      			</div>
		                    		</div>
		                  	</div>

							</div>
						</div>
							
					</div>

					</div>	
			</div>

			<div class="modal-footer">
				<button type="button" class="btn btn-danger btn-md" data-dismiss="modal" aria-hidden='true'>Close</button>
				<button type="button" class="btn btn-success btn-md" data-dismiss="modal" onclick="ubah_mahasiswa()"> Ubah </button>
			</div>


		</form>

	</div><!--/modal-content-->
</div><!--/modal-dialog-->

