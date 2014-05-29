<script type="text/javascript">
  function tambah_penelitian(){
    var dataPen = $("#form_tambah_penelitian").serialize();

    alert(dataPen);

    $.ajax({
      url:"/public/dosen/tambah/penelitian",
      data: dataPen,


      success:function(result){
          
        }
      });

    dashboard_menu_active('.menu_dosen_group', '#dosen_content_dashboard', '#' + 'menu_dosen_kegiatan_penelitian');
  }
</script>

<div class="modal-dialog modal-lg" ng-controller="DosenPenelitianController"> 
  <!-- Modified Devi Irawan 5/15/2014 -->
  <div class="modal-content"> <!-- awal modal content -->

    <form class="form-horizontal" id="form_tambah_penelitian" role="form" method="get" action=" {{ route('dosen_tambah_penelitian') }} ">

      <div class="modal-header"> <!-- awal modal header -->
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">Tambah Penelitian</h4>
        </div>

      <div class="modal-body"> <!-- awal modal body -->

        <!-- <div class="form-group">
          <label for="nik" class="col-sm-2 control-label">NIK</label>
          <div class="col-sm-10">
            <input name="nik" type="text" class="form-control" id="nik" placeholder="Nomor Induk Karyawan">
          </div>
        </div> -->
        <div class="form-group">
          <label for="judul_penelitian" class="col-sm-2 control-label">Judul Penelitian</label>
          <div class="col-sm-10">
            <input name="judul_penelitian" type="text" class="form-control" id="judul_penelitian" placeholder="Judul Penelitian">
          </div>
        </div>      
        <div class="form-group">
          <label for="id_dosen" class="col-sm-2 control-label">ID Dosen</label>
          <div class="col-sm-10">
            <input name="id_dosen" type="text" class="form-control" id="id_dosen" placeholder="ID Dosen">
          </div>
        </div>        
        <div class="form-group">
          <label for="tanggal_penelitian" class="col-sm-2 control-label">Tanggal Rilis</label>
          <div class="col-sm-10">
            <input name="tanggal_penelitian" type="date" class="form-control" id="tanggal_penelitian" placeholder="Tanggal Rilis">
          </div>
        </div>        
        <div class="form-group">
          <label for="attachment" class="col-sm-2 control-label">Attachment</label>
          <div class="col-sm-10">
            <input type="file" name="attachment" id="attachment" />
          </div>
        </div>
        <div class="form-group">
          <label for="keterangan" class="col-sm-2 control-label">Status Share</label>
          <div class="col-sm-10">
            <label class="radio-inline">
              <input type="radio" name="status_share" id="status_share1" value="Publi" checked> Public
            </label>                      
            <label class="radio-inline">
              <input type="radio" name="status_share" id="status_share2" value="Priva"> Private
            </label>                    
          </div>
        </div>        
      </div> <!-- akhir modal body -->
      <div class="modal-footer"> <!-- awal modal footer -->
        <button type="button" class="btn btn-danger btn-md" data-dismiss="modal" aria-hidden='true'>Close</button>
          <button type="submit" class="btn btn-primary btn-md" data-dismiss="modal" onclick="tambah_penelitian()">Submit</button>
          

           <!-- <input type="submit" class="btn btn-primary btn-md" value="Submit"> -->
      </div> <!-- akhir modal footer -->
    </form>
  </div> <!-- akhir modal content -->   
</div>