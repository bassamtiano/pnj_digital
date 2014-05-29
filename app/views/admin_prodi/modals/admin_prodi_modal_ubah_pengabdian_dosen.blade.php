<script type="text/javascript">
  function ubah_pengabdian_dosen(){
    var dataF = $("#form_ubah_pengabdian_dosen").serialize();

    $.ajax({
      url:"/public/admin_prodi/ubah/pengabdian_dosen",
      data: dataF,
      success:function(result){    
        dashboard_menu_active('.menu_admin_prodi_group', '#admin_prodi_content_dashboard', '#' + 'menu_admin_prodi_pengabdian');     
        }
      });
  
  }
</script>

<div class="modal-dialog modal-lg" ng-controller="AdminProdiBacaPengabdianDosen">
  <div class="modal-content">

    <form class="form-horizontal" id="form_ubah_pengabdian_dosen" role="form" method="get" action="{{ route('admin_prodi_ubah_pengabdian_dosen') }}">

      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Ubah Pengabdian Dosen</h4>
      </div>

      <div class="modal-body">

          <div class="panel-group" id="accordion">

            <div class="panel panel-default">
              <div class="panel-heading">
                <h4 class="panel-title">
                  <a data-toggle="collapse" data-parent="#accordion" href="#group_data_diri">
                    Data Pengabdian
                  </a>
                </h4>
              </div>

              <div id="group_data_diri" class="panel-collapse collapse in">
                <div class="panel-body">

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
                  @foreach($id_dosen_pengabdian as $r)
                  <div class="form-group">
                    <label for="nama_pengabdian" class="col-sm-2 control-label">Nama Pengabdian</label>
                    <div class="col-sm-10">
                      <input type="text" name="nama_pengabdian" class="form-control" id="nama_pengabdian" value="{{$r->nama_pengabdian}}">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="tanggal_mulai_pengabdian" class="col-sm-2 control-label">Tanggal Mulai Pengabdian</label>
                    <div class="col-sm-10">
                      <input name="tgl_mulai" type="date" class="form-control" id="tgl_mulai">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="tanggal_selesai_pengabdian" class="col-sm-2 control-label">Tanggal Selesai Pengabdian</label>
                    <div class="col-sm-10">
                      <input name="tgl_selesai" type="date" class="form-control" id="tgl_selesai">
                    </div>
                  </div>

                   <div class="form-group">
                    <label for="tempat" class="col-sm-2 control-label">Tempat</label>
                    <div class="col-sm-10">
                      <input type="text" name="tempat" class="form-control" id="tempat">
                    </div>
                  </div>

                   <div class="form-group">
                    <label for="keterangan" class="col-sm-2 control-label">Keterangan</label>
                    <div class="col-sm-10">
                      <input type="text" name="keterangan" class="form-control" id="keterangan">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="nilai" class="col-sm-2 control-label">Nilai</label>
                    <div class="col-sm-10">
                      <div class="radio">
                        <label>
                          <input type="radio" name="nilai" id="nilai" value="A" checked>
                          A
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="nilai" id="nilai" value="B">
                          B
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="nilai" id="nilai" value="C">
                          C
                        </label>
                      </div>
                    </div>
                  </div>

          </div>

        
      </div>


      <div class="modal-footer">
        <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal" aria-hidden='true'>Close</button>
        <button type="button" class="btn btn-success btn-sm" data-dismiss="modal" onclick="ubah_pengabdian_dosen()">Submit</button>

      </div>


    </form>
  </div>
</div>
