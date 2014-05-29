<script type="text/javascript">
	function tambah_pengabdian(){
		var dataF = $("#form_tambah_pengabdian").serialize();

		$.ajax({
		 	url:"/public/dosen/tambah/pengabdian",
		 	data: dataF,
		 	success:function(result){	     		
	   		}
	   	});
		dashboard_menu_active('.menu_dosen_group', '#dosen_content_dashboard', '#' + 'menu_dosen_kegiatan_pengabdian');
	}
</script>


<div class="modal-dialog modal-lg" ng-controller="DosenBacaPengabdianController">	
	<!-- Modified Abdul Fachmi 5/14/2014 3:22PM -->
	<div class="modal-content"> <!-- awal modal content -->

		<form class="form-horizontal" id="form_tambah_pengabdian" role="form" method="get" action=" {{ route('dosen_tambah_pengabdian') }} ">

			<div class="modal-header"> <!-- awal modal header -->
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	        	<h4 class="modal-title" id="myModalLabel">Tambah Pengabdian</h4>
	    	</div>

			<div class="modal-body"> <!-- awal modal body -->

				<!-- <div class="form-group">
					<label for="nik" class="col-sm-2 control-label">NIK</label>
					<div class="col-sm-10">
						<input name="nik" type="text" class="form-control" id="nik" placeholder="Nomor Induk Karyawan">
					</div>
				</div> -->
				<div class="form-group">
					<label for="id_dosen" class="col-sm-2 control-label">ID Dosen</label>
					<div class="col-sm-10">
						<input name="id_dosen" type="text" class="form-control" id="id_dosen" placeholder="ID Dosen">
					</div>
				</div>
				<div class="form-group">
					<label for="nama_pengabdian" class="col-sm-2 control-label">Nama Pengabdian</label>
					<div class="col-sm-10">
						<input name="nama_pengabdian" type="text" class="form-control" id="nama_pengabdian" placeholder="Nama Pengabdian">
					</div>
				</div>			
				<div class="form-group">
					<label for="tgl_mulai" class="col-sm-2 control-label">Tanggal Mulai</label>
					<div class="col-sm-10">
						<input name="tgl_mulai" type="date" class="form-control" id="tgl_mulai" placeholder="Tanggal Mulai">
					</div>
				</div>
				<div class="form-group">
					<label for="tgl_selesai" class="col-sm-2 control-label">Tanggal Selesai</label>
					<div class="col-sm-10">
						<input name="tgl_selesai" type="date" class="form-control" id="tgl_selesai" placeholder="Tanggal Selesai">
					</div>
				</div>
				<div class="form-group">
					<label for="tempat" class="col-sm-2 control-label">Tempat</label>
					<div class="col-sm-10">
						<input name="tempat" type="text" class="form-control" id="tempat" placeholder="Tempat Pengabdian">
					</div>
				</div>
				<div class="form-group">
					<label for="keterangan" class="col-sm-2 control-label">Keterangan</label>
					<div class="col-sm-10">
						<input name="keterangan" type="text" class="form-control" id="keterangan" placeholder="Keterangan">
					</div>
				</div>
				<div class="form-group">
					<label for="nilai" class="col-sm-2 control-label">Nilai</label>
					<label class="radio-inline">
						<input type="radio" name="nilai" id="nilaiRadios1" value="A" checked> A
					</label>  										
					<label class="radio-inline">
	    				<input type="radio" name="nilai" id="nilaiRadios2" value="B"> B
					</label>
					<label class="radio-inline">
						<input type="radio" name="nilai" id="nilaiRadios3" value="C"> C
					</label>																	
				</div>		
			</div> <!-- akhir modal body -->
			<div class="modal-footer"> <!-- awal modal footer -->
				<button type="button" class="btn btn-danger btn-md" data-dismiss="modal" aria-hidden='true'>Close</button>
				<button type="submit" class="btn btn-primary btn-md" data-dismiss="modal" onclick="tambah_pengabdian()">Submit</button>
			</div> <!-- akhir modal footer -->
		</form>
	</div> <!-- akhir modal content -->		
</div>