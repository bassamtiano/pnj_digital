<div class="modal fade" id="formpengabdian" tabindex="-1" role="dialog" aria-labelledby="smallModal" aria-hidden="true">
	
	<div class="modal-dialog" style="display:block;">
		<div class="modal-content">
			
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        		<h4 class="modal-title" id="myModalLabel">Tambah / Ubah Data Pengabdian</h4>
			</div>

			<div class="modal-body">
				
				<h3 style="margin-top:-5px;">Form Pengabdian</h3>
				<br>

				<form class="form-horizontal" role="form">

					<div class="form-group">
						<label for="nik" class="col-sm-4 control-label">NIK</label>
						<div class="col-sm-6">
							<input type="text" class="form-control" id="input_nik" name="nik" placeholder="NIK . . .">
						</div>
					</div>

					<div class="form-group">
						<label for="nama" class="col-sm-4 control-label">Nama Dosen</label>
						<div class="col-sm-6">
							<input type="text" class="form-control" id="input_nama" name="nama" placeholder="Nama Dosen . . .">
						</div>
					</div>

					<div class="form-group">
						<label for="nama" class="col-sm-4 control-label">Nama Pengabdian</label>
						<div class="col-sm-6">
							<input type="text" class="form-control" id="input_namapengabdian" name="nama" placeholder="Nama Pengabdian . . .">
						</div>
					</div>

					<div class="form-group">
						<label for="input_tanggal" class="col-sm-4 control-label">Tanggal Mulai</label>
						<div class="col-sm-6">
								<input type="date" class="form-control" id="input_tglmulai" name="tanggal" placeholder="Tanggal Mulai . . .">
						</div>
					</div>

					<div class="form-group">
						<label for="input_tanggal" class="col-sm-4 control-label">Tanggal Selesai</label>
						<div class="col-sm-6">
								<input type="date" class="form-control" id="input_tglselesai" name="tanggal" placeholder="Tanggal Selesai . . .">
						</div>
					</div>

					<div class="form-group">
						<label for="tempat" class="col-sm-4 control-label">Tempat</label>
						<div class="col-sm-6">
							<input type="text" class="form-control" id="input_tempat" name="nama" placeholder="Tempat . . .">
						</div>
					</div>

					<div class="form-group">
						<label for="keterangan" class="col-sm-4 control-label">Keterangan</label>
						<div class="col-sm-6">
							<input type="text" class="form-control" id="input_keterangan" name="nama" placeholder="Keterangan . . .">
						</div>
					</div>

					<div class="form-group">
						<label for="nilai" class="col-sm-4 control-label">Nilai</label>
						<div class="col-sm-6">
							<div class="radio col-sm-3">
							  	<label>
							    	<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1">
							    	A
							  	</label>
							</div>
							<div class="radio col-sm-3">
							  	<label>
							    	<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
							    	B
							  	</label>
							</div>
							<div class="radio col-sm-3">
							  	<label>
							    	<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
							    	C
							  	</label>
							</div>
						</div>
					</div>
					
				</form> <!-- ========================== Akhir Form ========================== -->

			</div>

			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary">Save </button>
			</div>

		</div>
	</div>

</div>