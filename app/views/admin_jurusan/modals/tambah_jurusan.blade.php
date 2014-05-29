<div class="modal fade bs-example-modal-lg" id="tambahJurusan" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <form class="form-horizontal" id="form_tambah_mahasiswa" role="form" method="get" action=" {{ route('admin_jurusan_tambah_jurusan') }} ">
  <div class="modal-dialog">
  <div class="modal-content"> <!-- awal modal content -->
    <div class="modal-header"> <!-- awal modal header -->
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title" id="myModalLabel">Tambah Jurusan</h4>
      </div>    
    <div class="modal-body"> <!-- awal modal body -->
      <div class="row"> <!---------- awal class row atas ------------>      
        <div class="col-md-12">
          <table>
            <tbody>             
              <tr>
                <td width="120px" height="50px"> Nama Jurusan </td>
                <td width="30px" height="50px"> : </td>
                <td width="250px" height="50px"> <input type="text" class="form-control" name="nama_jurusan" value=""> </td>
              </tr>             
              <tr>
                <td width="120px" height="50px"> Kepala Jurusan </td>
                <td width="30px" height="50px"> : </td>
                <td width="250px" height="50px"> <input type="text" class="form-control" name="kepala_jurusan" value=""> </td>
              </tr>              
              <tr>
                <td width="120px" height="50px"> Jumlah Prodi </td>
                <td width="30px" height="50px"> : </td>
                <td width="50px" height="50px"> <input type="text" class="form-control" name="jumlah_prodi" value=""> </td>
              </tr>
              <tr>
                <td width="120px" height="50px"> Akreditasi </td>
                <td width="30px" height="50px"> : </td>
                <td width="50px" height="50px"> <input type="text" class="form-control" name ="akreditasi" value=""> </td>
              </tr>              
              <tr>
                <td width="120px" height="50px"> Keterangan </td>
                <td width="30px" height="50px"> : </td>
                <td width="250px" height="50px"> <textarea class="form-control" name="keterangan" value="" row="3"> </textarea></td>
              </tr>
            </tbody>
          </table>
        </div>        
      </div> <!---------- akhir class row atas ------------>

    </div> <!-- akhir modal body -->
    <div class="modal-footer"> <!-- awal modal footer -->
      <input type="submit" value="Simpan">
    </div> <!-- akhir modal footer -->
  </div> <!-- akhir modal content -->
  </div>
</form>
</div>