<script type="text/javascript">
  function hapus_jurusan(){
    var dataHapusJurusan = $("#form_hapus_jurusan").serialize();

    $.ajax({
      url:"/public/admin_jurusan/hapus/jurusan",
      data: dataHapusJurusan,


      success:function(result){
          
        }
      });

     dashboard_menu_active('.menu_admin_jurusan_group', '#admin_jurusan_content_dashboard', '#' + 'menu_admin_jurusan_data_jurusan');
  }
</script>

<div class="modal-dialog modal-sm">
	<div class="modal-content">

		<form class="form-horizontal" id="form_hapus_jurusan" role="form" method="get" >
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id="myModalLabel">Hapus</h4>
			</div>

			<div class="modal-body">
				
				Apakah ingin menghapus {{ $jurusan }}?

				<input type="hidden" name="id_jurusan" value="{{ $id_jurusan }}">
				
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-sm btn-primary" data-dismiss="modal" aria-hidden='true'>Batal</button>
				<input type="submit" class="btn btn-sm btn-danger" data-dismiss="modal" onclick="hapus_jurusan()" value="Hapus">
			</div>
		</form>

	</div>
</div>