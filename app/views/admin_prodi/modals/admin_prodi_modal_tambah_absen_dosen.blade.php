<script type="text/javascript">
  function hapus_jurusan(){
    var dataHapusJurusan = $("#form_hapus_jurusan").serialize();

    $.ajax({
      url:"{{ route('admin_prodi_tambah_absen_mahasiswa') }}",
      data: dataTambah,


      success:function(result){
          
        }
      });

     dashboard_menu_active('.menu_admin_prodi_group', '#admin_prodi_content_dashboard', '#' + 'menu_admin_prodi_absen_mahasiswa');
  }
</script>

<div class="modal-dialog modal-sm">
	<div class="modal-content">

		<form class="form-horizontal" id="form_hapus_jurusan" role="form" method="get" >
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id="myModalLabel">Tambah Absen Mahasiswa</h4>
			</div>

			<div class="modal-body">
				
				Anda ingin menambahkan absen dosen tertanggal {{ date('d-m-Y') }}?
				
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-sm btn-primary" data-dismiss="modal" aria-hidden='true'>Batal</button>
				<input type="submit" class="btn btn-sm btn-success" data-dismiss="modal" onclick="hapus_jurusan()" value="Tambah">
			</div>
		</form>

	</div>
</div>