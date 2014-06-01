<script type="text/javascript">
  function status_absen(){
    var dataStatusAbsen = $("#form_ubah_hadir_mahasiswa").serialize();

    $.ajax({
      url:"{{ route('admin_prodi_ubah_absen_mahasiswa') }}",
      data: dataStatusAbsen,


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

				Apakah {{ $nama }} tidak menghadiri perkuliahan ?

			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-sm btn-primary" data-dismiss="modal" aria-hidden='true'>Batal</button>
				<input type="submit" class="btn btn-sm btn-success" data-dismiss="modal" onclick="status_absen()" value="Tambah">
			</div>
		</form>

	</div>
</div>