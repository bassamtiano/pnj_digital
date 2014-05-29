<script type="text/javascript">
	function tambah_permohonan(){
		var dataF = $("#form_ubah_permohonan").serialize();

		$.ajax({
		 	url:"/public/admin_kemahasiswaan/ubah/permohonan",
		 	data: dataF,
		 	success:function(result){
	     		
	   		}
	   	});

		dashboard_menu_active('.menu_admin_kemahasiswaan_group', '#admin_kemahasiswaan_content_dashboard', '#' + 'menu_admin_kemahasiswaan_permohonan');
	}
</script>

@foreach($permohonan_mahasiswa as $pm)

<div class="modal-dialog modal-lg">

	<form class="form-horizontal" id="form_ubah_permohonan" role="form" method="get">

	<div class="modal-content">

		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			<h4 class="modal-title" id="myModalLabel">Ubah Permohonan</h4>
		</div>

		<div class="modal-body">
			
			<div class="form-group">
				<label for="nim" class="col-sm-2 control-label">ID Pemohon</label>
				<div class="col-sm-10">
					<input name="id_mahasiswa_permohonan" type="hidden" value=" {{ $pm->id_mahasiswa_permohonan }} ">
					<input name="id_mahasiswa" type="text" class="form-control" id="id_mahasiswa" placeholder="ID Mahasiswa" value="{{ $pm->id_mahasiswa }}">
				</div>
			</div>
			<div class="form-group">
				<label for="nim" class="col-sm-2 control-label">Jenis Permohonan</label>
				<div class="col-sm-10">
					
					<select name="id_permohonan" class="form-control">		
						@foreach($jenis_permohonan as $jp)
							<option value="{{ $pm->id_permohonan }}" @if ($jp->id_permohonan == $pm->id_permohonan) selected = "selected" @endif >{{$jp->permohonan}}</option>
						@endforeach
					</select>

				</div>
			</div>

			<div class="form-group">
				<label for="nim" class="col-sm-2 control-label">Tanggal Pengajuan</label>
				<div class="col-sm-10">
					<input name="tanggal_pengajuan" type="text" class="form-control" id="tanggal_pengajuan" placeholder="Tanggal Pengajuan" value="{{ $pm->tanggal_pengajuan }}">
				</div>
			</div>

			<div class="form-group">
				<label for="keterangan" class="col-sm-2 control-label">Keterangan Permohonan</label>
				<div class="col-sm-10">
					<textarea name="keterangan" class="form-control" id="keterangan" rows="3" placeholder="Keterangan Permohonan"> {{ $pm->keterangan }} </textarea>
				</div>
			</div>

			<div class="form-group">
				<label for="name" class="col-sm-2 control-label">Status Permohonan</label>
				<div class="col-sm-10">
					<div class="radio">
						<label>
							<input type="radio" name="status" id="status" value="y" @if ($pm->status == "y") checked @endif >
							Disetujui
						</label>
					</div>
					<div class="radio">
						<label>
							<input type="radio" name="status" id="status" value="n" @if ($pm->status == "n") checked @endif>
							Belum Disetujui
						</label>
					</div>
				</div>
			</div>


		</div>
		<div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal" aria-hidden='true'>Close</button>
			<button type="button" class="btn btn-primarry" data-dismiss="modal" aria-hidden='true' onclick="tambah_permohonan()">Update</button>
		</div>


	</div>

	</form>

</div>

@endforeach