<div class="modal fade bs-example-modal-lg" id="absenModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
<!-- Abdul Fachmi -->
  <div class="modal-dialog modal-lg">
	<div class="modal-content"> <!-- awal modal content -->
		<div class="modal-header"> <!-- awal modal header -->
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        	<h4 class="modal-title" id="myModalLabel">Absen</h4>
    	</div>    
		<div class="modal-body"> <!-- awal modal body -->
			<p>Kelas: IT6A</p> <br />
			<p>Matakuliah: Digital Forensik</p> <br />
			<p>Ruangan: AA304</p><br />
			<div class="table-reponsive"> <!-- ========================= AWAL TABLE =================== -->
				<table class="table table-bordered"> <!-- table table-bordered -->
					<thead> <!-- nama colom table -->
						<tr class="warning">
							<th>Nama</th>
							<th>Absen</th>
							<th>Kompensasi</th>					
						</tr>
					</thead><!-- nama colom table -->
					<tbody> <!-- Isi Table -->
						<tr class="primary"> <!-- class primary -->
							<td>Abdul Fachmi</td>
							<td><input type="checkbox"></td>
							<td>
								<div class="form-group">														
									<select class="form-control" name="semester">
										<option value="0">0</option>
										<option value="1">1</option>
										<option value="2">2</option>						
										<option value="5">5</option>										
									</select>
								</div>					
							</td>
						</tr> <!-- akhir class primary -->
						<tr class="succes"> <!-- class succes --> 
							<td>Adi Guna</td>
							<td><input type="checkbox"></td>
							<td>
								<div class="form-group">														
									<select class="form-control" name="semester">
										<option value="0">0</option>
										<option value="1">1</option>
										<option value="2">2</option>						
										<option value="5">5</option>										
									</select>
								</div>					
							</td>
						</tr> <!-- akhir class primary -->
						<tr class="primary"> <!-- class primary -->
							<td>Hendra Saputra</td>
							<td><input type="checkbox"></td>
							<td>
								<div class="form-group">														
									<select class="form-control" name="semester">
										<option value="0">0</option>
										<option value="1">1</option>
										<option value="2">2</option>						
										<option value="5">5</option>										
									</select>
								</div>				
							</td>
						</tr> <!-- akhir class primary -->					
					</tbody> <!-- Isi Table -->
				</table> <!-- akhir table table-bordered -->
			</div> <!-- ================== AKHIR TABLE ========================= -->	
			<div class="form-group">														
				<label for="acaraperkuliahan">Acara Perkuliahan</label>
				<textarea class="form-control" rows="3"></textarea>
			</div>
		</div> <!-- akhir modal body -->
		<div class="modal-footer"> <!-- awal modal footer -->
			<button type="button" class="btn btn-primary">Simpan</button>
		</div> <!-- akhir modal footer -->
		</div> <!-- akhir modal content -->
	</div>
</div>