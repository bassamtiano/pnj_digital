<script type="text/javascript">
	function hapus_pnelitian_dosen(){
		var dataF = $("#form_admin_prodi_hapus_penelitian_dosen").serialize();

		$.ajax({
		 	url:"/public/admin_prodi/hapus/penelitian_dosen",
		 	data: dataF,
		 	success:function(result){
	     		dashboard_menu_active('.menu_admin_prodi_group',  '#admin_prodi_content_dashboard' ,'#' + "menu_admin_prodi_penelitian");
	   		}
	   	});
	}
</script>

<div class="modal-dialog modal-sm">
	<div class="modal-content">

		<form class="form-horizontal" id="form_admin_prodi_hapus_penelitian_dosen" role="form" method="get" action="{{ route('admin_prodi_hapus_penelitian_dosen') }}">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id="myModalLabel">Hapus</h4>
			</div>

			<div class="modal-body">
				
				Apakah ingin menghapus data ini?

				<input type="hidden" name="id_dosen_penelitian" value="{{ $id_dosen_penelitian }}">
				
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-sm btn-primary" data-dismiss="modal" aria-hidden='true'>Batal</button>
				<input type="submit" class="btn btn-sm btn-danger" value="Hapus">
			</div>
		</form>

	</div>
</div>