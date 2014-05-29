<script type="text/javascript">
  function ubah_penelitian(){
    var dataPen = $("#form_ubah_penelitian").serialize();

    $.ajax({
      url:"/public/dosen/ubah/penelitian",
      data: dataPen,


      success:function(result){
          
        }
      });

    dashboard_menu_active('.menu_dosen_group', '#dosen_content_dashboard', '#' + 'menu_dosen_kegiatan_penelitian');
  }
</script>

@foreach($penelitian_dosen as $p)
<div class="modal-dialog modal-lg" ng-controller="DosenPenelitianController"> 
  <!-- Modified Devi Irawan 5/15/2014 -->
  <div class="modal-content"> <!-- awal modal content -->

    <form class="form-horizontal" id="form_ubah_penelitian" role="form" method="get" action=" {{ route('dosen_ubah_penelitian') }} ">

      <div class="modal-header"> <!-- awal modal header -->
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">Ubah Penelitian</h4>
        </div>

      <div class="modal-body"> <!-- awal modal body -->

        <!-- <div class="form-group">
          <label for="nik" class="col-sm-2 control-label">NIK</label>
          <div class="col-sm-10">
            <input name="nik" type="text" class="form-control" id="nik" placeholder="Nomor Induk Karyawan">
          </div>
        </div> -->

        <input type="hidden" name="id_dosen_penelitian" value=" {{ $p->id_dosen_penelitian }} ">

        <div class="form-group">
          <label for="judul_penelitian" class="col-sm-2 control-label">Judul Penelitian</label>
          <div class="col-sm-10">
            <input name="judul_penelitian" type="text" class="form-control" id="judul_penelitian" placeholder="Judul Penelitian" value="{{ $p->judul_penelitian}}">
          </div>
        </div>      

        <div class="form-group">
          <label for="id_dosen" class="col-sm-2 control-label">ID Dosen</label>
          <div class="col-sm-10">
            <input name="id_dosen" type="text" class="form-control" id="id_dosen" placeholder="ID Dosen" value="{{ $p->id_dosen}}">
          </div>
        </div>        
        <div class="form-group">
          <label for="tanggal_penelitian" class="col-sm-2 control-label">Tanggal Rilis</label>
          <div class="col-sm-10">
            <input name="tanggal_penelitian" type="date" class="form-control" id="tanggal_penelitian" placeholder="Tanggal Rilis" value="{{ $p->tanggal_penelitian}}">
          </div>
        </div>        
        <div class="form-group">
          <label for="attachment" class="col-sm-2 control-label">Attachment</label>
          <div class="col-sm-10">
            <span class="btn btn-file"><input type="file" name="attachment" id="attachment" /></span> 
            <!-- <button type="submit" class="btn btn-default">
              <span class="glyphicon glyphicon-plus"></span>Upload
            </button> -->
          </div>
        </div>
        <div class="form-group">
          <label for="keterangan" class="col-sm-2 control-label">Status Share</label>
          <div class="col-sm-10">
            <label class="radio-inline">
              <input type="radio" name="status_share" id="status_share1" value="Publi" @if ($p-> status_share =="Public") checked @endif> Public
            </label>                      
            <label class="radio-inline">
              <input type="radio" name="status_share" id="status_share2" value="Priva" @if ($p-> status_share =="Private") checked @endif> Private
            </label>                    
          </div>
        </div>        
      </div> <!-- akhir modal body -->
      <div class="modal-footer"> <!-- awal modal footer -->
        <button type="button" class="btn btn-danger btn-md" data-dismiss="modal" aria-hidden='true'>Close</button>
          <button type="submit" class="btn btn-primary btn-md" data-dismiss="modal" onclick="ubah_penelitian()">Submit</button>
          

           <!-- <input type="submit" class="btn btn-primary btn-md" value="Submit"> -->
      </div> <!-- akhir modal footer -->
    </form>
  </div> <!-- akhir modal content -->   
</div>
@endforeach