<script type="text/javascript">
  function hapus_penelitian(){
    var dataPen = $("#form_hapus_penelitian").serialize();

    $.ajax({
      url:"/public/dosen/hapus/penelitian",
      data: dataPen,


      success:function(result){
          
        }
      });

    dashboard_menu_active('.menu_dosen_group', '#dosen_content_dashboard', '#' + 'menu_dosen_kegiatan_penelitian');
  }
</script>

<div class="modal-dialog modal-sm">
	<div class="modal-content">

		<form class="form-horizontal" id="form_hapus_penelitian" role="form" method="get" action="{{ route('dosen_hapus_penelitian') }}">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id="myModalLabel">Hapus</h4>
			</div>

			<div class="modal-body">
				
				Apakah ingin menghapus ?

				<input type="hidden" name="id_dosen_penelitian" value="{{ $id_dosen_penelitian }}">
				
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-sm btn-primary" data-dismiss="modal" aria-hidden='true'>Batal</button>
				<input type="submit" class="btn btn-sm btn-danger" data-dismiss="modal" onclick="hapus_penelitian()" value="Hapus">
			</div>
		</form>

	</div>
</div>