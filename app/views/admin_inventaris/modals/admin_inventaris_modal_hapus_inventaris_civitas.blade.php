<script type="text/javascript">
  function hapus_inventaris(){
    var dataPeng = $("#form_hapus_").serialize();

    $.ajax({
      url:"/public/admin_inventaris/hapus/inventaris_civitas",
      data: dataF,


      success:function(result){
          
        }
      });

     dashboard_menu_active('.menu_admin_inventaris_group', '#admin_inventaris_content_dashboard', '#' + 'menu_admin_inventaris_data_inventaris_civitas');
  }
</script>

<div class="modal-dialog modal-sm">
	<div class="modal-content">

		<form class="form-horizontal" id="form_hapus_inventaris" role="form" method="get" action="{{ route('admin_inventaris_hapus_inventaris') }}">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id="myModalLabel">Hapus</h4>
			</div>

			<div class="modal-body">
				
				Apakah ingin menghapus ?

				<input type="hidden" name="id_inventaris" value="{{ $id_inventaris }}">
				
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-sm btn-primary" data-dismiss="modal" aria-hidden='true'>Batal</button>
				<input type="submit" class="btn btn-sm btn-danger" data-dismiss="modal" onclick="hapus_inventaris()" value="Hapus">
			</div>
		</form>

	</div>
</div>