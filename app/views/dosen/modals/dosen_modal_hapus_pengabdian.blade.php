<script type="text/javascript">
  function hapus_pengabdian(){
    var dataPeng = $("#form_hapus_pengabdian").serialize();

    $.ajax({
      url:"/public/dosen/hapus/pengabdian",
      data: dataPeng,


      success:function(result){
          
        }
      });

    dashboard_menu_active('.menu_dosen_group', '#dosen_content_dashboard', '#' + 'menu_dosen_kegiatan_pengabdian');
  }
</script>

<div class="modal-dialog modal-sm">
	<div class="modal-content">

		<form class="form-horizontal" id="form_hapus_pengabdian" role="form" method="get" action="{{ route('dosen_hapus_pengabdian') }}">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id="myModalLabel">Hapus</h4>
			</div>

			<div class="modal-body">
				
				Apakah ingin menghapus ?

				<input type="hidden" name="id_dosen_pengabdian" value="{{ $id_dosen_pengabdian }}">
				
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-sm btn-primary" data-dismiss="modal" aria-hidden='true'>Batal</button>
				<input type="submit" class="btn btn-sm btn-danger" data-dismiss="modal" onclick="hapus_pengabdian()" value="Hapus">
			</div>
		</form>

	</div>
</div>