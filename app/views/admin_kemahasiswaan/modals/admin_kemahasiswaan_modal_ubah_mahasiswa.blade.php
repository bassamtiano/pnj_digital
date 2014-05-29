

<script type="text/javascript">
	function ubah_mahasiswa(){
		var dataF = $("#formUbah").serialize();

		$.ajax({
		 	url:"/public/admin_kemahasiswaan/ubah/mahasiswa",
		 	data: dataF,
		 	success:function(result){
	     		
	   		}
	   	});

		dashboard_menu_active('.menu_admin_kemahasiswaan_group', '#admin_kemahasiswaan_content_dashboard', '#' + 'menu_admin_kemahasiswaan_data_mahasiswa');
	}
</script>

@foreach($mahasiswa as $m)

<div class="modal-dialog modal-lg" ng-controller="coba_controller()">
	<div class="modal-content">

		<form id="formUbah">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			<h4 class="modal-title" id="myModalLabel">Ubah Data Mahasiswa</h4>
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
									<input name="id_mahasiswa" type="hidden" value="{{ $m->id_mahasiswa }}">
									<input name="nim" type="text" class="form-control" id="nim" placeholder="Nomor Induk Mahasiswa" value="{{ $m->nim }}">
								</div>
							</div>

							<div class="form-group">
								<label for="name" class="col-sm-2 control-label">Nama</label>
								<div class="col-sm-10">
									<input name="nama" type="text" class="form-control" id="nama" placeholder="Nama" value="{{ $m->nama }}">
								</div>
							</div>

							<div class="form-group">
								<label for="nim" class="col-sm-2 control-label">Jenis Kelamin</label>
								<div class="col-sm-10">

									@if ($m->jenis_kelamin == "l") checked @endif

									<div class="radio">
										<label>
											<input type="radio" name="jenis_kelamin" id="jenis_kelamin" value="l" @if ($m->jenis_kelamin == "l") checked @endif >
											Laki-laki
										</label>
									</div>
									<div class="radio">
										<label>
											<input type="radio" name="jenis_kelamin" id="jenis_kelamin" value="p" @if ($m->jenis_kelamin == "p") checked @endif >
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
											<option value="{{ $kp->id_konsentrasi_prodi }}" @if ($kp->id_konsentrasi_prodi == $m->id_konsentrasi_prodi) selected = "selected" @endif >{{$kp->konsentrasi_prodi}}</option>
										@endforeach
									</select>
								</div>
							</div>

							<div class="form-group">
								<label for="name" class="col-sm-2 control-label">Kelas</label>
								<div class="col-sm-10">

									<select name="id_kelas" class="form-control">

										@foreach($kelas as $kl)
										<option value="{{ $kl->id_kelas }}" @if ($kl->id_kelas == $m->id_kelas) selected = "selected" @endif > {{ $kl->nama_kelas }} </option>
										@endforeach

									</select>
								</div>
							</div>

						    <div class="form-group">
								<label for="nim" class="col-sm-2 control-label">Status Akademis</label>
								<div class="col-sm-10">
									<div class="radio">
										<label>
											<input type="radio" name="status" id="jenis_kelamin" value="a" @if ($m->status == "a") checked @endif >
											Aktif
										</label>
									</div>
									<div class="radio">
										<label>
											<input type="radio" name="status" id="jenis_kelamin" value="p" @if ($m->status == "p") checked @endif >
											Pasif
										</label>
									</div>
								</div>
							</div>

							<div class="form-group">
								<label for="nim" class="col-sm-2 control-label">Tempat Lahir</label>
								<div class="col-sm-10">
									<input name="tempat_lahir" type="text" class="form-control" id="tempat_lahir" placeholder="Tempat Lahir" value=" {{ $m->tempat_lahir }} ">
								</div>
							</div>

							<div class="form-group">
								<label for="nim" class="col-sm-2 control-label">Tanggal Lahir</label>
								<div class="col-sm-10">
									<input name="tanggal_lahir" type="text" class="form-control" id="tanggal_lahir" placeholder="Tanggal Lahir" value=" {{ $m->tanggal_lahir }} ">
								</div>
							</div>

							<div class="form-group">
								<label for="nim" class="col-sm-2 control-label">Tahun Masuk</label>
								<div class="col-sm-10">
									<input name="tahun_masuk" type="text" class="form-control" id="tahun_masuk" placeholder="Tahun Masuk" value=" {{ $m->tahun_masuk }} ">
								</div>
							</div>

							<div class="form-group">
								<label for="nim" class="col-sm-2 control-label">Tahun Lulus</label>
								<div class="col-sm-10">
									<input name="tahun_lulus" type="text" class="form-control" id="tahun_lulus" placeholder="Tahun Lulus" value=" {{ $m->tahun_lulus }} ">
								</div>
							</div>

							<div class="form-group">
								<label for="alamat" class="col-sm-2 control-label">Alamat</label>
								<div class="col-sm-10">
									<textarea name="alamat" class="form-control" id="alamat" rows="3" placeholder="Alamat">
											{{ $m->alamat }}

									</textarea>
								</div>
							</div>

									<div class="form-group">
										<label for="nim" class="col-sm-2 control-label">Nomor Telepon</label>
										<div class="col-sm-10">
											<input name="nomor_telepon" type="text" class="form-control" id="nim" placeholder="Nomor Telepon" value="{{ $m->nomor_telepon }}">
										</div>
									</div>

									<div class="form-group">
										<label for="nim" class="col-sm-2 control-label">Email</label>
										<div class="col-sm-10">
											<input name="email" type="text" class="form-control" id="nim" placeholder="Email" value="{{ $m->email }}">
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
											<input name="nama_ayah" type="text" class="form-control" id="nama_ayah" placeholder="Nama Ayah" value="{{ $m->nama_ayah }}">
										</div>
									</div>

									<div class="form-group">
										<label for="nim" class="col-sm-2 control-label">Tanggal Lahir Ayah</label>
										<div class="col-sm-10">
											<input name="tanggal_lahir_ayah" type="text" class="form-control" id="tanggal_lahir_ayah" placeholder="Tanggal Lahir Ayah" value="{{ $m->tanggal_lahir_ayah }}">
										</div>
									</div>

									<div class="form-group">
										<label for="name" class="col-sm-2 control-label">Pekerjaan Ayah</label>
										<div class="col-sm-10">
											<input name="pekerjaan_ayah" type="text" class="form-control" id="pekerjaan_ayah" placeholder="Pekerjaan Ayah" value="{{ $m->pekerjaan_ayah }}">
										</div>
									</div>


									<div class="form-group">
										<label class="col-sm-4 control-label"><h3>Data Ibu</h3></label>
									</div>

									<div class="form-group">
										<label for="nim" class="col-sm-2 control-label">Nama</label>
										<div class="col-sm-10">
											<input name="nama_ibu" type="text" class="form-control" id="nama_ibu" placeholder="Nama Ibu" value="{{ $m->nama_ibu }}">
										</div>
									</div>

									<div class="form-group">
										<label for="nim" class="col-sm-2 control-label">Tanggal Lahir Ibu</label>
										<div class="col-sm-10">
											<input name="tanggal_lahir_ibu" type="text" class="form-control" id="tanggal_lahir_ibu" placeholder="Tanggal Lahir Ibu" value="{{ $m->tanggal_lahir_ibu }}">
										</div>
									</div>

									<div class="form-group">
										<label for="name" class="col-sm-2 control-label">Pekerjaan Ibu</label>
										<div class="col-sm-10">
											<input name="pekerjaan_ibu" type="text" class="form-control" id="pekerjaan_ibu" placeholder="Pekerjaan Ibu" value="{{ $m->pekerjaan_ibu }}">
										</div>
									</div>

									<div class="form-group">
										<label class="col-sm-4 control-label"><h3>Data Wali</h3></label>
									</div>

									<div class="form-group">
										<label for="nim" class="col-sm-2 control-label">Nama</label>
										<div class="col-sm-10">
											<input name="nama_wali" type="text" class="form-control" id="nama_wali" placeholder="Nama Wali" value="{{ $m->nama_wali }}">
										</div>
									</div>

									<div class="form-group">
										<label for="name" class="col-sm-2 control-label">Pekerjaan Wali</label>
										<div class="col-sm-10">
											<input name="pekerjaan_wali" type="text" class="form-control" id="pekerjaan_wali" placeholder="Pekerjaan Wali" value="{{ $m->pekerjaan_wali }}">
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

													<option value="{{ $jm->id_jalur_masuk }}" @if ($jm->id_jalur_masuk == $m->id_jalur_masuk) selected = "selected" @endif >{{$jm->jalur_masuk}}</option>

												@endforeach

											</select>

										</div>
									</div>

									<div class="form-group">
										<label for="name" class="col-sm-2 control-label">Status Pembayaran</label>
										<div class="col-sm-10">
											<div class="radio">
												<label>
													<input type="radio" name="status_pembayaran" id="jenis_kelamin" value="1" @if ($m->status_pembayaran == "1") checked @endif >
													Lunas
												</label>
											</div>
											<div class="radio">
												<label>
													<input type="radio" name="status_pembayaran" id="jenis_kelamin" value="0" @if ($m->status_pembayaran == "0") checked @endif>
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
				<button type="button" class="btn btn-success btn-md" data-dismiss="modal" onclick="ubah_mahasiswa()"> Ubah </button>
			</div>


		</form>

	</div><!--/modal-content-->
</div><!--/modal-dialog-->


@endforeach