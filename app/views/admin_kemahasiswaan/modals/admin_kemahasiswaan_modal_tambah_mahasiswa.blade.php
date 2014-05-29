<script type="text/javascript">
	function tambah_mahasiswa(){
		var dataF = $("#form_tambah_mahasiswa").serialize();

		$.ajax({
		 	url:"/public/admin_kemahasiswaan/tambah/mahasiswa",
		 	data: dataF,
		 	success:function(result){
	     		
	   		}
	   	});

		dashboard_menu_active('.menu_admin_kemahasiswaan_group', '#admin_kemahasiswaan_content_dashboard', '#' + 'menu_admin_kemahasiswaan_data_mahasiswa');
	}
</script>

<div class="modal-dialog modal-lg" ng-controller="AdminKemahasiswaanBacaMahasiswaController">
	<div class="modal-content">

		<form class="form-horizontal" id="form_tambah_mahasiswa" role="form" method="get" action=" {{ route('admin_kemahasiswaan_tambah_mahasiswa') }} ">

			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id="myModalLabel">Tambah Mahasiswa</h4>
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
										<label for="nim" class="col-sm-2 control-label">NIM</label>
										<div class="col-sm-10">
											<input name="nim" type="text" class="form-control" id="nim" placeholder="Nomor Induk Mahasiswa">
										</div>
									</div>

									<div class="form-group">
										<label for="name" class="col-sm-2 control-label">Nama</label>
										<div class="col-sm-10">
											<input name="nama" type="text" class="form-control" id="nama" placeholder="Nama">
										</div>
									</div>

									<div class="form-group">
										<label for="nim" class="col-sm-2 control-label">Jenis Kelamin</label>
										<div class="col-sm-10">
											<div class="radio">
												<label>
													<input type="radio" name="jenis_kelamin" id="jenis_kelamin" value="l" checked>
													Laki-laki
												</label>
											</div>
											<div class="radio">
												<label>
													<input type="radio" name="jenis_kelamin" id="jenis_kelamin" value="p">
													Perempuan
												</label>
											</div>
										</div>
									</div>

									<div class="form-group">
										<label for="name" class="col-sm-2 control-label">Konsentrasi</label>
										<div class="col-sm-10">
											<select name="id_konsentrasi_prodi" class="form-control">

												@foreach($konsentrasi_prodi as $kp)

													<option value="{{ $kp->id_konsentrasi_prodi }}">{{$kp->konsentrasi_prodi}}</option>

												@endforeach

											</select>
										</div>
									</div>

									<div class="form-group">
										<label for="name" class="col-sm-2 control-label">Kelas</label>
										<div class="col-sm-10">

											<select name="id_kelas" class="form-control">

												@foreach($kelas as $kl)

													<option value="{{ $kl->id_kelas }}"> {{ $kl->nama_kelas }} </option>

												@endforeach

											</select>
										</div>
									</div>

								    <div class="form-group">
										<label for="nim" class="col-sm-2 control-label">Status Akademis</label>
										<div class="col-sm-10">
											<div class="radio">
												<label>
													<input type="radio" name="status" id="jenis_kelamin" value="a" checked>
													Aktif
												</label>
											</div>
											<div class="radio">
												<label>
													<input type="radio" name="status" id="jenis_kelamin" value="p">
													Pasif
												</label>
											</div>
										</div>
									</div>

									<div class="form-group">
										<label for="nim" class="col-sm-2 control-label">Tempat Lahir</label>
										<div class="col-sm-10">
											<input name="tempat_lahir" type="text" class="form-control" id="tempat_lahir" placeholder="Tempat Lahir">
										</div>
									</div>

									<div class="form-group">
										<label for="nim" class="col-sm-2 control-label">Tanggal Lahir</label>
										<div class="col-sm-10">
											<input name="tanggal_lahir" type="text" class="form-control" id="tanggal_lahir" placeholder="Tanggal Lahir">
										</div>
									</div>

									<div class="form-group">
										<label for="nim" class="col-sm-2 control-label">Tahun Masuk</label>
										<div class="col-sm-10">
											<input name="tahun_masuk" type="text" class="form-control" id="tahun_masuk" placeholder="Tahun Masuk">
										</div>
									</div>

									<div class="form-group">
										<label for="nim" class="col-sm-2 control-label">Tahun Lulus</label>
										<div class="col-sm-10">
											<input name="tahun_lulus" type="text" class="form-control" id="tahun_lulus" placeholder="Tahun Lulus">
										</div>
									</div>

									<div class="form-group">
										<label for="alamat" class="col-sm-2 control-label">Alamat</label>
										<div class="col-sm-10">
											<textarea name="alamat" class="form-control" id="alamat" rows="3" placeholder="Alamat"></textarea>
										</div>
									</div>

									<div class="form-group">
										<label for="nim" class="col-sm-2 control-label">Nomor Telepon</label>
										<div class="col-sm-10">
											<input name="nomor_telepon" type="text" class="form-control" id="nim" placeholder="Nomor Telepon">
										</div>
									</div>

									<div class="form-group">
										<label for="nim" class="col-sm-2 control-label">Email</label>
										<div class="col-sm-10">
											<input name="email" type="text" class="form-control" id="nim" placeholder="Email">
										</div>
									</div>

								</div>
							</div>
							
						</div>

						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion" href="#group_orang_tua_wali">
										Orang Tua / Wali
									</a>
								</h4>
							</div>
							<div id="group_orang_tua_wali" class="panel-collapse collapse">
								<div class="panel-body">
								


									<div class="form-group">
										<label class="col-sm-4 control-label"><h3>Data Ayah</h3></label>
									</div>

									<div class="form-group">
										<label for="nim" class="col-sm-2 control-label">Nama</label>
										<div class="col-sm-10">
											<input name="nama_ayah" type="text" class="form-control" id="nama_ayah" placeholder="Nama Ayah">
										</div>
									</div>

									<div class="form-group">
										<label for="nim" class="col-sm-2 control-label">Tanggal Lahir Ayah</label>
										<div class="col-sm-10">
											<input name="tanggal_lahir_ayah" type="text" class="form-control" id="tanggal_lahir_ayah" placeholder="Tanggal Lahir Ayah">
										</div>
									</div>

									<div class="form-group">
										<label for="name" class="col-sm-2 control-label">Pekerjaan Ayah</label>
										<div class="col-sm-10">
											<input name="pekerjaan_ayah" type="text" class="form-control" id="pekerjaan_ayah" placeholder="Pekerjaan Ayah">
										</div>
									</div>


									<div class="form-group">
										<label class="col-sm-4 control-label"><h3>Data Ibu</h3></label>
									</div>

									<div class="form-group">
										<label for="nim" class="col-sm-2 control-label">Nama</label>
										<div class="col-sm-10">
											<input name="nama_ibu" type="text" class="form-control" id="nama_ibu" placeholder="Nama Ibu">
										</div>
									</div>

									<div class="form-group">
										<label for="nim" class="col-sm-2 control-label">Tanggal Lahir Ibu</label>
										<div class="col-sm-10">
											<input name="tanggal_lahir_ibu" type="text" class="form-control" id="tanggal_lahir_ibu" placeholder="Tanggal Lahir Ibu">
										</div>
									</div>

									<div class="form-group">
										<label for="name" class="col-sm-2 control-label">Pekerjaan Ibu</label>
										<div class="col-sm-10">
											<input name="pekerjaan_ibu" type="text" class="form-control" id="pekerjaan_ibu" placeholder="Pekerjaan Ibu">
										</div>
									</div>

									<div class="form-group">
										<label class="col-sm-4 control-label"><h3>Data Wali</h3></label>
									</div>

									<div class="form-group">
										<label for="nim" class="col-sm-2 control-label">Nama</label>
										<div class="col-sm-10">
											<input name="nama_wali" type="text" class="form-control" id="nama_wali" placeholder="Nama Wali">
										</div>
									</div>

									<div class="form-group">
										<label for="name" class="col-sm-2 control-label">Pekerjaan Wali</label>
										<div class="col-sm-10">
											<input name="pekerjaan_wali" type="text" class="form-control" id="pekerjaan_wali" placeholder="Pekerjaan Wali">
										</div>
									</div>

								</div>
							</div>
						</div>

						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion" href="#group_status">
										Status
									</a>
								</h4>
							</div>
							<div id="group_status" class="panel-collapse collapse">
								<div class="panel-body">
								

									<div class="form-group">
										<label for="name" class="col-sm-2 control-label">Jalur Masuk</label>
										<div class="col-sm-10">
											
											<select name="id_jalur_masuk" class="form-control">

												@foreach($jalur_masuk as $jm)

													<option value="{{ $jm->id_jalur_masuk }}">{{$jm->jalur_masuk}}</option>

												@endforeach

											</select>

										</div>
									</div>

									<div class="form-group">
										<label for="name" class="col-sm-2 control-label">Status Pembayaran</label>
										<div class="col-sm-10">
											<div class="radio">
												<label>
													<input type="radio" name="status_pembayaran" id="jenis_kelamin" value="1" checked>
													Lunas
												</label>
											</div>
											<div class="radio">
												<label>
													<input type="radio" name="status_pembayaran" id="jenis_kelamin" value="0">
													Belum Lunas
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
				<button type="button" class="btn btn-primary btn-md" data-dismiss="modal" onclick="tambah_mahasiswa()">Submit</button>

			</div>


		</form>
	</div>
</div>