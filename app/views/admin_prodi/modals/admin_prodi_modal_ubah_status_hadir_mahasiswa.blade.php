<script type="text/javascript">
  function status_hadir(){
    var dataStatusHadir = $("#form_ubah_hadir_mahasiswa").serialize();

    $.ajax({
      url:"{{ route('admin_prodi_ubah_hadir_mahasiswa') }}",
      data: dataStatusHadir,


      success:function(result){
          
        }
      });

     dashboard_menu_active('.menu_admin_prodi_group', '#admin_prodi_content_dashboard', '#' + 'menu_admin_prodi_absen_mahasiswa');
  }
</script>

<div class="modal-dialog modal-sm">
	<div class="modal-content">

		<form class="form" id="form_ubah_hadir_mahasiswa" role="form" method="get" >
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id="myModalLabel">{{ $nama }}</h4>
			</div>

			<div class="modal-body">

				<input type="hidden" name="id_mahasiswa_absen" value="{{ $id_mahasiswa_absen }}" />

				<div class="form-group">
					<label for="jam_mulai">Jam Mulai</label>
					<select name="jam_mulai" class="form-control" id="jam_mulai">
						@foreach($timeslot as $ts)
							<option value="{{ $ts->id_timeslot }}">{{$ts->waktu}}</option>
						@endforeach
					</select>
				</div>
				
				<div class="form-group">
					<label for="jam_akhir">Jam Akhir</label>
					<select name="jam_akhir" class="form-control" id="jam_akhir">
						@foreach($timeslot as $ts)
							<option value="{{ $ts->id_timeslot }}">{{$ts->waktu}}</option>
						@endforeach
					</select>	
				</div>
				
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-sm btn-primary" data-dismiss="modal" aria-hidden='true'>Batal</button>
				<input type="submit" class="btn btn-sm btn-success" data-dismiss="modal" onclick="status_hadir()" value="Tambah">
			</div>
		</form>

	</div>
</div>