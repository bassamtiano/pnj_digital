<script type="text/javascript">
//   function tambah_penelitian_dosen(){
//     

     
//   }

function tambah_penelitian_dosen() {


  var dataPen = $("#form_tambah_penelitian_dosen").serialize();
  alert(dataPen);
    $.ajax({
       url:"admin_prodi/admin_prodi_tambah_penelitian_dosen",
       data: dataPen,
       success:function(result){
        dashboard_menu_active('.menu_admin_prodi_group', '#admin_prodi_content_dashboard', '#' + 'menu_dosen_kegiatan_penelitian');
         }
       });
}
</script>

<div class="modal-dialog modal-lg" ng-controller="AdminProdiBacaPenelitianDosen">
  <div class="modal-content">

    <form class="form-horizontal" id="form_tambah_penelitian_dosen" role="form" method="get" action=" {{ route('admin_prodi_tambah_penelitian_dosen') }} ">

      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Tambah Penelitian Dosen</h4>
      </div>

      <div class="modal-body">

          <div class="panel-group" id="accordion">

            <div class="panel panel-default">
              <div class="panel-heading">
                <h4 class="panel-title">
                  <a data-toggle="collapse" data-parent="#accordion" href="#group_data_diri">
                    Data Penelitian
                  </a>
                </h4>
              </div>

              <div id="group_data_diri" class="panel-collapse collapse in">
                <div class="panel-body">


                  <!-- <div class="form-group">
                    <label for="nim" class="col-sm-2 control-label">NIK</label>
                    <div class="col-sm-10">
                      <input name="nik" type="text" class="form-control" id="nik" placeholder="Nomor Induk Karyawan">
                    </div>
                  </div> -->

                  <div class="form-group">
                    <label for="id_dosen" class="col-sm-2 control-label">Nama</label>
                    <div class="col-sm-10">
                      <!--  <input name="id_dosen" type="text" class="form-control" id="id_dosen"> -->
                     <select name="id_dosen" class="form-control" ng-repeat="dn in tbl_dosen | filter:query | orderBy:predicate:reverse">
                      @foreach($dosen as $d)

                          <option value="{{ $d->id_dosen }}">{{$d->nama}}</option>

                        @endforeach
                     </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="judul_penelitian" class="col-sm-2 control-label">Judul Penelitian</label>
                    <div class="col-sm-10">
                      <input name="judul_penelitian" type="text" class="form-control" id="judul_penelitian" placeholder="Judul Penelitian">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="tanggal_rilis" class="col-sm-2 control-label">Tanggal Rilis</label>
                    <div class="col-sm-10">
                      <input type="date" name="tanggal_penelitian" class="form-control" id="tanggal_penelitian">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="attachment" class="col-sm-2 control-label">Attachment</label>
                      <div class="col-sm-10">
                        <input type="file" id="attachment" name="attachment">
                      </div>
                  </div>

                  <div class="form-group">
                    <label for="nim" class="col-sm-2 control-label">Status Share</label>
                    <div class="col-sm-10">
                      <div class="radio">
                        <label>
                          <input type="radio" name="status_share" id="status_share" value="Public" checked>
                          Public
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="status_share" id="status_share" value="Private">
                          Private
                        </label>
                      </div>
                    </div>
                  </div>

          </div>

        
      </div>


      <div class="modal-footer">
        <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal" aria-hidden='true'>Close</button>
        <button type="button" class="btn btn-success btn-sm" onclick="tambah_penelitian_dosen()">Submit</button>
        <input type="submit" class="btn btn-success btn-sm" value="tambah" onclick="tambah_penelitian_dosen()">

      </div>


    </form>

  </div>
</div>
