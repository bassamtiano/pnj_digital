
<script type="text/javascript">

	function hapus_mahasiswa(){
		var id = $("#id_mahasiswa").val();

		$.ajax({
		 	url:"/public/admin_kemahasiswaan/hapus/mahasiswa",
		 	data: { id_mahasiswa : id },
		 	success:function(result){
	     		// horeeee....	
	   		}
	   	});

		dashboard_menu_active('.menu_admin_kemahasiswaan_group', '#admin_kemahasiswaan_content_dashboard', '#' + 'menu_admin_kemahasiswaan_data_mahasiswa');
	}
</script>

<div class="modal-dialog modal-lg">
	<div class="modal-content">

		<!--<form method="get" action="{{ route('admin_kemahasiswaan_hapus_mahasiswa') }}">-->
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id="myModalLabel">Hapus {{ $nama }}</h4>
			</div>

			<div class="modal-body">
				
				Apakah ingin menghapus {{ $nama }}

				<input type="hidden" id="id_mahasiswa" name="id_mahasiswa" value="{{ $id_mahasiswa }}">
				
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-md btn-primary" data-dismiss="modal" aria-hidden='true'>Batal</button>
				<button type="button" class="btn btn-danger btn-md" data-dismiss="modal" onclick="hapus_mahasiswa()"> Hapus </button>
			</div>
		</form>

	</div>
</div>

