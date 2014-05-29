<script type="text/javascript">
  function tambah_mata_kuliah(){
    var dataPen = $("#form_tambah_mata_kuliah").serialize();

    alert(dataPen);

    $.ajax({
      url:"/public/dosen/tambah/mata_kuliah",
      data: dataPen,


      success:function(result){
          
        }
      });

    dashboard_menu_active('.menu_dosen_group', '#dosen_content_dashboard', '#' + 'menu_dosen_mata_kuliah');
  }
</script>


<div class="modal fade bs-example-modal-lg" id="mata_kuliah_modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
<!-- Abdul Fachmi -->
  <div class="modal-dialog modal-lg">
	<div class="modal-content"> <!-- awal modal content -->
		<form class="form-horizontal" id="form_tambah_mata_kuliah" role="form" method="get" action=" {{ route('dosen_tambah_mata_kuliah') }} ">
			<div class="modal-header"> <!-- awal modal header -->
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	        	<h4 class="modal-title" id="myModalLabel">Mata Kuliah</h4>
	    	</div>  
					<div class="modal-body"> <!-- awal modal body -->
					        <div class="form-group">
					          <label for="mata_kuliah" class="col-sm-2 control-label">Nama Matakuliah</label>
					          <div class="col-sm-10">
					            <input name="mata_kuliah" type="text" class="form-control" id="mata_kuliah" placeholder="mata kuliah">
					          </div>
					        </div>

					        <div class="form-group">
					          <label for="dosen_pengajar" class="col-sm-2 control-label">Dosen Pengajar</label>
					          <div class="col-sm-10">
					            <input name="dosen_pengajar" type="text" class="form-control" id="dosen_pengajar" placeholder="dosen_pengajar">
					          </div>
					        </div>

					 		<div class="form-group">
					          <label for="nilai_kontrak" class="col-sm-2 control-label">Nilai Kontrak</label>
					          <div class="col-sm-10">
					            <input name="uts" type="text" class="form-control" id="uts" placeholder="uts">
					          </div>
					          <div class="col-sm-10">
					            <input name="uas" type="text" class="form-control" id="uas" placeholder="uas">
					          </div>
					          <div class="col-sm-10">
					            <input name="tugas" type="text" class="form-control" id="tugas" placeholder="tugas">
					          </div>
					        </div>

					        <div class="form-group">
					          <label for="silabus" class="col-sm-2 control-label">Silabus</label>
					          <div class="col-sm-10">
					            <input name="silabus" type="text" class="form-control" id="silabus" placeholder="silabus">
					          </div>
					        </div>
					</div> 

		<div class="modal-footer"> <!-- awal modal footer -->
        	<button type="button" class="btn btn-danger btn-md" data-dismiss="modal" aria-hidden='true'>Close</button>
          	<button type="submit" class="btn btn-primary btn-md" data-dismiss="modal" onclick="tambah_mata_kuliah()">Submit</button>
          

           <!-- <input type="submit" class="btn btn-primary btn-md" value="Submit"> -->
      </div> <!-- akhir modal footer -->
    </form>
	</div><!-- akhir modal content -->
</div>