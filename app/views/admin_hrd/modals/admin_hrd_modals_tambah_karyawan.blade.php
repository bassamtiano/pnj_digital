<script type="text/javascript">
  function tambah_karyawan(){
    var dataF = $("#form_tambah_karyawan").serialize();

    $.ajax({
      url:"/public/admin_hrd/tambah/karyawan",
      data: dataF,
      success:function(result){
          
        }
      });

    dashboard_menu_active('.menu_admin_hrd_group', '#admin_hrd_content_dashboard', '#' + 'menu_admin_hrd_data_karyawan');
  }
</script>


<div class="modal-dialog modal-lg" ng-controller="AdminHRDBacaDataKaryawan">

<form class="form-horizontal" id="form_tambah_karyawan" role="form" method="get" action=" {{ route('admin_hrd_tambah_karyawan') }} ">
	<div class="modal-content">

		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			<h4 class="modal-title" id="myModalLabel">Tambah Karyawan</h4>
		</div>

    <div class="modal-body"> <!-- awal modal body -->

        <div class="form-group">
          <label for="nik" class="col-sm-2 control-label">NIK</label>
          <div class="col-sm-10">
            <input name="nik" type="text" class="form-control" id="nik" placeholder="Nomor Induk Karyawan">
          </div>
        </div> 

        <div class="form-group">
          <label for="nama" class="col-sm-2 control-label">Nama Karyawan</label>
          <div class="col-sm-10">
            <input name="nama" type="text" class="form-control" id="nama" placeholder="Nama Karyawan">
          </div>
        </div>

        <div class="form-group">
          <label for="alamat" class="col-sm-2 control-label">Alamat</label>
          <div class="col-sm-10">
            <input name="alamat" type="text" class="form-control" id="alamat" placeholder="Alamat">
        </div>
        </div>

        <div class="form-group">
          <label for="tempat_lahir" class="col-sm-2 control-label">Tempat Lahir</label>
          <div class="col-sm-10">
            <input name="tempat_lahir" type="text" class="form-control" id="tempat_lahir" placeholder="Tempat Lahir">
        </div>
        </div>  

        <div class="form-group">
          <label for="tanggal_lahir" class="col-sm-2 control-label">Tanggal Lahir</label>
          <div class="col-sm-10">
            <input name="tanggal_lahir" type="date" class="form-control" id="tanggal_lahir" placeholder="Tanggal Lahir">
          </div>
        </div>

        <div class="form-group">
          <label for="agama" class="col-sm-2 control-label">Agama</label>
          <div class="col-sm-10">
            <input name="agama" type="text" class="form-control" id="agama" placeholder="Agama">
        </div>
        </div>

        <div class="form-group">
          <label for="jenis_kelamin" class="col-sm-2 control-label">Jenis Kelamin</label>
          <label class="radio-inline">
            <input type="radio" name="jenis_kelamin" id="nilaiRadios1" value="L" checked> L
          </label>                      
          <label class="radio-inline">
              <input type="radio" name="jenis_kelamin" id="nilaiRadios2" value="P"> P
          </label>                                  
        </div> 

        <div class="form-group">
          <label for="tanggal_mulai_kerja" class="col-sm-2 control-label">Tanggal Mulai Kerja</label>
          <div class="col-sm-10">
            <input name="tanggal_mulai_kerja" type="date" class="form-control" id="tanggal_mulai_kerja" placeholder="Tanggal Mulai Kerja">
          </div>
        </div>

        <div class="form-group">
          <label for="id_golongan" class="col-sm-2 control-label">ID Golongan</label>
          <div class="col-sm-10">
            <input name="id_golongan" type="text" class="form-control" id="id_golongan" placeholder="ID Golongan">
          </div>
        </div>

        <div class="form-group">
          <label for="id_jabatan" class="col-sm-2 control-label">ID Jabatan</label>
          <div class="col-sm-10">
            <input name="id_jabatan" type="text" class="form-control" id="id_jabatan" placeholder="ID Jabatan">
          </div>
        </div>

        <div class="form-group">
          <label for="id_jurusan" class="col-sm-2 control-label">ID Jurusan</label>
          <div class="col-sm-10">
            <input name="id_jurusan" type="text" class="form-control" id="id_jurusan" placeholder="ID Jurusan">
          </div>
        </div>

        <div class="form-group">
          <label for="no_telepon" class="col-sm-2 control-label">No. Telepon</label>
          <div class="col-sm-10">
            <input name="no_telepon" type="text" class="form-control" id="no_telepon" placeholder="No Telepon">
        </div>
        </div>

        <div class="form-group">
          <label for="email" class="col-sm-2 control-label">Email</label>
          <div class="col-sm-10">
            <input name="email" type="text" class="form-control" id="email" placeholder="Email">
        </div>
        </div>

        <div class="form-group">
          <label for="pendidikan" class="col-sm-2 control-label">Pendidikan</label>
          <div class="col-sm-10">
            <input name="pendidikan" type="text" class="form-control" id="pendidikan" placeholder="Pendidikan">
        </div>
        </div>

        <div class="form-group">
          <label for="status_nikah" class="col-sm-2 control-label">Status Nikah</label>
          <div class="col-sm-10">
            <input name="status_nikah" type="text" class="form-control" id="status_nikah" placeholder="Status Nikah">
        </div>
        </div>

        <div class="form-group">
          <label for="foto" class="col-sm-2 control-label">Foto</label>
          <div class="col-sm-10">
            <input name="foto" type="text" class="form-control" id="foto" placeholder="Foto">
        </div>
        </div>

        <div class="form-group">
          <label for="status" class="col-sm-2 control-label">Status</label>
          <div class="col-sm-10">
            <input name="status" type="text" class="form-control" id="status" placeholder="Status">
        </div>
        </div>

        <div class="form-group">
          <label for="status" class="col-sm-2 control-label">ID Status Karyawan</label>
          <div class="col-sm-10">
            <input name="id_status_karyawan" type="text" class="form-control" id="id_status_karyawan" placeholder="Status Karyawan">
        </div>
        </div>
    
            
    </div> <!-- akhir modal body -->
      
      <div class="modal-footer"> <!-- awal modal footer -->
        <button type="submit" class="btn btn-primary btn-md" data-dismiss="modal" onclick="tambah_karyawan()"><span class="glyphicon glyphicon-plus-sign"></span> Tambah</button>
        <button type="button" class="btn btn-danger btn-md" data-dismiss="modal" aria-hidden='true'>Close</button>
      </div> <!-- akhir modal footer -->
  </div> <!-- akhir modal content -->

</form>
  </div>
	

