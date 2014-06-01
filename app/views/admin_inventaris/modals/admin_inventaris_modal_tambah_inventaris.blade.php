<script type="text/javascript">
    function tambah_inventaris(){
        var dataF = $("#form_tambah_inventaris").serialize();
        $.ajax({
            url:"/public/admin_inventaris/tambah/inventaris",
            data: dataF,
            success:function(result){
            }
        });
        dashboard_menu_active('.menu_admin_inventaris_group', '#admin_inventaris_content_dashboard', '#' + 'menu_admin_inventaris_data_inventaris');
    }
</script>

<div class="modal-dialog modal-md">

    <div class="modal-content"> <!-- awal modal content -->

        <div class="modal-header"> <!-- awal modal header -->
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">Tambah Inventaris</h4>
        </div> 
        
        <form class="form-horizontal" id="form_tambah_inventaris" role="form" method="get" action=" {{ route('admin_inventaris_tambah_inventaris') }} ">

            <div class="modal-body"> <!-- awal modal body -->    
                
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
                        <input name="tahun_anggaran_inventaris" type="text" class="form-control" id="tahun_anggaran_inventaris" placeholder="Tanggal Anggaran">
                    </div>
                </div>

                <div class="form-group">
                    <label for="pemilik_inventaris" class="col-sm-4 control-label">Pemilik Inventaris</label>
                    <div class="col-sm-8">
                        <select name="id_inventaris_pemilik" class="form-control">
                            @foreach($data_inventaris_pemilik as $dip)

                                <option value="{{ $dip->id_inventaris_pemilik }}">{{$dip->pemilik}}</option>

                            @endforeach
                        </select>
                    </div>
                </div>

            </div> <!-- akhir modal body -->

            <div class="modal-footer">
                <button type="button" class="btn btn-danger btn-md" data-dismiss="modal" aria-hidden='true'>Close</button>
                <button type="button" class="btn btn-primary btn-md" data-dismiss="modal" onclick="tambah_inventaris()">Submit</button>
            </div>

        </form>

    </div> <!-- akhir modal content -->

</div>