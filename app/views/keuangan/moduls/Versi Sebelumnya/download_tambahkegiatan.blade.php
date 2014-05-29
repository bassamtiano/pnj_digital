
<div class=" col-md-11 panel panel-default">
<div class="panel-heading"> <!--Panel Heading -->
	<h3 class ="panel-title">
	 Tambah Kegiatan
	</h3>
</div><!--Panel Heading-->

<div class="panel-body"><!--panel body -->
	<form class="form-horizontal" role="form"> <!-- Form -->
							<div class="form-group">
								<label for="namaevent" class="col-sm-2 control-label"> Nama Event </label>
								<div class="col-sm-6">
									<input type="text" class="form-control" id="namaevent" >
								</div>
							</div>
							<div class="form-group">
								<label for="tujuan" class="col-sm-2 control-label"> Tujuan </label>
								<div class="col-sm-3">
									<div class = "checkbox">
										<label><input type="checkbox" value=""> All</label>
									</div>
									<div class="checkbox">
										<label><input type="checkbox" value=""> Dosen / Staf Pengajar </label>
									</div>
									<div class = "checkbox">
										<label><input type="checkbox" value=""> Staf Prodi </label>
									</div>
									<div class = "checkbox">
										<label><input type="checkbox" value=""> Staf Jurusan </label>
									</div>
								</div>
								<div class="col-sm-3">
									<div class = "checkbox">
										<label><input type="checkbox" value=""> All Pegawai </label>
									</div>
									<div class = "checkbox">
										<label><input type="checkbox" value=""> Staf Pimpinan </label>
									</div>
									<div class = "checkbox">
										<label><input type="checkbox" value=""> Staf HRD </label>
									</div>
									<div class = "checkbox">
										<label><input type="checkbox" value=""> Staf Keuangan </label>
									</div>
								</div>
								<div class="col-sm-4">
									<div class = "checkbox">
										<label><input type="checkbox" value=""> Staf Kemahasiswaan </label>
									</div>
									<div class = "checkbox">
										<label><input type="checkbox" value=""> Staf Inventoris </label>
									</div>
									<div class = "checkbox">
										<label><input type="checkbox" value=""> Mahasiswa </label>
									</div>
								<table>
									<tr>
										<td>
											<input type="text" class="form-control" id="spesific">
										</td>
										<td>
											<button type="submit" class="btn btn-default"> Specific </button>
										</td>
									</tr>
								</table>
								</div>
							</div>
								<div class="form-group">
									<label for="attachment" class="col-sm-2 control-label"> File Attachment </label>
								<div class="col-sm-6">
									<table>
											<tr>
												<td>
													<input type="file" id="inputfile">
												</td>
												<td>
													<button type="submit" class="btn btn-default"> Upload </button>
												</td>
											</tr>
									</table>
								</div>
							</div>
							<div class="col-sm-3"></div>
							<div class="col-sm-3"></div>
							<div class="col-sm-3"></div>
							<div class="col-sm-3"> <button type="submit" class="btn btn-default"> Save </button>  </div>
								


	</form> <!--form -->
</div>
</div>
