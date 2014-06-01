<script type="text/javascript">
    function ubah_inventaris_civitas(){
        var dataUbahInventaris = $("#form_ubah_inventaris").serialize();

        $.ajax({
            url:"/public/admin_inventaris/ubah/inventaris",
            data: dataUbahInventaris,
            success:function(result){
            }
        });

        dashboard_menu_active('.menu_admin_inventaris_group', '#admin_inventaris_content_dashboard', '#' + 'menu_admin_inventaris_data_inventaris');
    }
</script>

@foreach($data_inventaris as $di)

<div class="modal-dialog modal-md">

    <div class="modal-content"> <!-- awal modal content -->

        <div class="modal-header"> <!-- awal modal header -->
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">Ubah Inventaris Civitas</h4>
        </div>

        <form class="form-horizontal" id="form_ubah_inventaris" role="form" method="get" action=" {{ route('admin_inventaris_ubah_inventaris') }} ">
        
            <div class="modal-body"> <!-- awal modal body -->

                <input name="id_inventaris" type="hidden" value="{{ $di->id_inventaris }}">
                
                <div class="form-group">
                    <label for="kode_inventaris" class="col-sm-4 control-label">Kode Inventaris</label>
                    <div class="col-sm-8">
                        <input name="kode_inventaris" type="text" class="form-control" id="kode_inventaris" value="{{ $di->kode_inventaris }}" placeholder="Kode Inventaris">
                    </div>
                </div>

                <div class="form-group">
                    <label for="nama_inventaris" class="col-sm-4 control-label">Nama Inventaris</label>
                    <div class="col-sm-8">
                        <input name="nama_inventaris" type="text" class="form-control" id="nama_inventaris" value="{{ $di->nama_inventaris }}" placeholder="Nama Inventaris">
                    </div>
                </div>

                <div class="form-group">
                    <label for="kondisi_inventaris" class="col-sm-4 control-label">Kondisi Inventaris</label>
                    <div class="col-sm-8">
                        <input name="kondisi_inventaris" type="text" class="form-control" id="kondisi_inventaris" value="{{ $di->kondisi_inventaris }}" placeholder="Kondisi Inventaris">
                    </div>
                </div>

                <div class="form-group">
                    <label for="tahun_anggaran" class="col-sm-4 control-label">Tahun Anggaran</label>
                    <div class="col-sm-8">
                        <input name="tahun_anggaran_inventaris" type="text" class="form-control" id="tahun_anggaran" value="{{ $di->tahun_anggaran_inventaris }}" placeholder="Tanggal Anggaran">
                    </div>
                </div>

                <div class="form-group">
                    <label for="pemilik_inventaris" class="col-sm-4 control-label">Pemilik Inventaris</label>
                    <div class="col-sm-8">

                        <select name="id_inventaris_pemilik" class="form-control">
                            @foreach($data_inventaris_pemilik as $dip)

                                <option value="{{ $dip->id_inventaris_pemilik }}" @if ($di->id_inventaris_pemilik == $dip->id_inventaris_pemilik) selected = "selected" @endif >{{$dip->pemilik}}</option>

                            @endforeach
                        </select>

                    </div>
                </div>
                
            </div> <!-- akhir modal body -->

            <div class="modal-footer">
                <button type="button" class="btn btn-danger btn-md" data-dismiss="modal" aria-hidden='true'>Close</button>
                <button type="button" class="btn btn-primary btn-md" data-dismiss="modal" onclick="ubah_inventaris_civitas()">Submit</button>
            </div>

        </form>

    </div> <!-- akhir modal content -->

</div>

@endforeach