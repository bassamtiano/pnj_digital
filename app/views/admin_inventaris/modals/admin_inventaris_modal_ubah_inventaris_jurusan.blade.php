<script type="text/javascript">
  function ubah_inventaris_jurusan(){
    var dataF = $("#form_ubah_inventaris_jurusan").serialize();

    $.ajax({
      url:"/public/admin_inventaris/ubah/inventaris_jurusan",
      data: dataF,
      success:function(result){
          
        }
      });

    dashboard_menu_active('.menu_admin_inventaris_group', '#admin_inventaris_content_dashboard', '#' + 'menu_admin_inventaris_data_inventaris_jurusan');
  }
</script>

<div class="modal-dialog modal-md" ng-controller="AdminInventarisJurusanController">
  <div class="modal-content"> <!-- awal modal content -->
    <form class="form-horizontal" id="form_ubah_inventaris_jurusan" role="form" method="get" action=" {{ route('admin_inventaris_ubah_inventaris_jurusan') }} ">
      <div class="modal-header"> <!-- awal modal header -->
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">Ubah Inventaris jurusan</h4>
      </div> 
      <div class="modal-body"> <!-- awal modal body -->
        <div class="panel-group">
          <div class="panel panel-default">
              <div class="panel-heading">
                <h4 class="panel-title">
                    Data Inventaris
                </h4>
              </div>
              <div class="panel-body">
                  <div class="form-group">
                    <label for="kode_inventaris" class="col-sm-4 control-label">Kode Inventaris</label>
                    <div class="col-sm-8">
                      <input name="kode_inventaris" type="text" class="form-control" id="kode_inventaris" placeholder="Kode Inventaris">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="nama_inventaris" class="col-sm-4 control-label">Nama Inventaris</label>
                    <div class="col-sm-8">
                      <input name="nama_inventaris" type="text" class="form-control" id="nama_inventaris" placeholder="Nama Inventaris">
                    </div>
                  </div>                  
                  <div class="form-group">
                    <label for="kondisi_inventaris" class="col-sm-4 control-label">Kondisi Inventaris</label>
                    <div class="col-sm-8">
                      <input name="kondisi_inventaris" type="text" class="form-control" id="kondisi_inventaris" placeholder="Kondisi Inventaris">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="tahun_anggaran" class="col-sm-4 control-label">Tahun Anggaran</label>
                    <div class="col-sm-8">
                      <input name="tahun_anggaran" type="text" class="form-control" id="tahun_anggaran" placeholder="Tanggal Anggaran">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="pemilik_inventaris" class="col-sm-4 control-label">Pemilik Inventaris</label>
                    <div class="col-sm-8">
                      <input name="pemilik_inventaris" type="text" class="form-control" id="pemilik_inventaris" placeholder="Pemilik Inventaris">
                    </div>
                  </div>
              </div>
          </div>
        </div>
      </div> <!-- akhir modal body -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger btn-md" data-dismiss="modal" aria-hidden='true'>Close</button>
        <button type="button" class="btn btn-primary btn-md" data-dismiss="modal" onclick="ubah_inventaris_jurusan()">Submit</button>
      </div>
    </form>
  </div> <!-- akhir modal content -->
</div>