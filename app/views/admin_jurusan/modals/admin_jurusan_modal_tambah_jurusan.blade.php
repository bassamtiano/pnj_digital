<script type="text/javascript">
    function tambah_jurusan(){
        var dataTambahJurusan = $("#form_tambah_jurusan").serialize();
        $.ajax({
            url:"/public/admin_jurusan/tambah/jurusan",
            data: dataTambahJurusan,
            success:function(result){
            }
        });
        dashboard_menu_active('.menu_admin_jurusan_group', '#admin_jurusan_content_dashboard', '#' + 'menu_admin_jurusan_data_jurusan');
    }
</script>

<div class="modal-dialog">

    <div class="modal-content"> <!-- awal modal content -->

        <div class="modal-header"> <!-- awal modal header -->
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">Tambah Jurusan</h4>
        </div>

        <form class="form-horizontal" id="form_tambah_jurusan" role="form" method="get" action=" {{ route('admin_jurusan_tambah_jurusan') }} ">

            <div class="modal-body"> <!-- awal modal body -->

                <div class="form-group">
                    <label for="jurusan" class="col-sm-4 control-label">Jurusan</label>
                    <div class="col-sm-8">
                        <input name="jurusan" type="text" class="form-control" id="jurusan" placeholder="Nama Jurusan">
                    </div>
                </div>

                <div class="form-group">
                    <label for="kepala_jurusan" class="col-sm-4 control-label">Kepala Jurusan</label>
                    <div class="col-sm-8">
                        <input name="id_kepala_jurusan" type="text" class="form-control" id="id_kepala_jurusan" placeholder="Kepala Jurusan (ID)">
                    </div>
                </div>

                <div class="form-group">
                    <label for="akreditasi" class="col-sm-4 control-label">Akreditasi</label>
                    <div class="col-sm-8">
                        <input name="akreditasi" type="text" class="form-control" id="akreditasi" placeholder="Akreditasi">
                    </div>
                </div>

            </div> <!-- akhir modal body -->

            <div class="modal-footer"> <!-- awal modal footer -->
                <button type="button" class="btn btn-danger btn-md" data-dismiss="modal" aria-hidden='true'>Close</button>
                <button type="button" class="btn btn-primary btn-md" data-dismiss="modal" onclick="tambah_jurusan()">Submit</button>
            </div> <!-- akhir modal footer -->

        </form>

    </div> <!-- akhir modal content -->

    

</div>

