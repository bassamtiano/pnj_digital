<script type="text/javascript">
  function ubah_transaksinilai(){
    var dataTra = $("#form_ubah_transaksinilai").serialize();
    

    $.ajax({
      url:"/public/dosen/ubah/transaksinilai",
      data: dataTra,


      success:function(result){
          
        }
      });

    dashboard_menu_active('.menu_dosen_group', '#dosen_content_dashboard', '#' + 'menu_dosen_perkuliahan_nilai');
}
</script>

@foreach($transaksinilai as $t)
<div class="modal-dialog modal-lg" ng-controller="DosenTransaksiNilaiController"> 
	<div class="modal-content"> <!-- awal modal content -->
		<form class="form-horizontal" id="form_ubah_transaksinilai" role="form" method="get" action=" {{ route('dosen_ubah_transaksi_nilai_perkuliahan') }} ">
			<div class="modal-header"> <!-- awal modal header -->
        		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            	<h4 class="modal-title" id="myModalLabel">Nilai</h4>
        	</div>
	    <div class="modal-body"> <!-- awal modal body -->
	      	<input type="hidden" name="id_transaksi_nilai_perkuliahan" value=" {{ $t->id_transaksi_nilai_perkuliahan }} ">
	      	<div class="form-group">
          		<label for="nama_mahasiswa" class="col-sm-2 control-label">Nama Mahasiswa</label>
          		<div class="col-sm-10">
          			@foreach($mahasiswa as $m)
	            	<input name="id_mahasiswa" type="text" class="form-control" id="id_mahasiswa" placeholder="Nama Mahasiswa" value="{{ $m->id_mahasiswa }}">{{$m->nama_mahasiswa}}
          		</div>
        	</div>  
	      	<!-- <div class="form-group">
          		<label for="kelas" class="col-sm-2 control-label">Kelas</label>
          		<div class="col-sm-10">
          			@foreach($kelas as $k)
	            	<input name="id_kelas" type="text" class="form-control" id="id_kelas" placeholder="Kelas" value="{{ $k->id_kelas }}">{{$k->nama_kelas}}
          		</div>
        	</div>   -->
	      	<div class="form-group">
          		<label for="nilai_tugas" class="col-sm-2 control-label">Nilai Tugas</label>
          		<div class="col-sm-10">          			
	            	<input name="nilai_tugas" type="text" class="form-control" id="nilai_tugas" placeholder="Nilai Tugas" value=" {{ $t->nilai_tugas }} ">
          		</div>
        	</div>  
        	<div class="form-group">
          		<label for="nilai_uts" class="col-sm-2 control-label">Nilai UTS</label>
          		<div class="col-sm-10">
	            	<input name="nilai_uts" type="text" class="form-control" id="nilai_uts" placeholder="Nilai UTS" value=" {{ $t->nilai_uts }} ">
          		</div>
        	</div>
        	<div class="form-group">
          		<label for="nilai_uas" class="col-sm-2 control-label">Nilai UAS</label>
          		<div class="col-sm-10">
	            	<input name="nilai_uas" type="text" class="form-control" id="nilai_uas" placeholder="Nilai UAS" value=" {{ $t->nilai_uas }} ">
          		</div>
        	</div>
		</div> <!-- akhir modal body -->
    	<div class="modal-footer"> <!-- awal modal footer -->
        	<button type="button" class="btn btn-danger btn-md" data-dismiss="modal" aria-hidden='true'>Close</button>
        	<button type="submit" class="btn btn-primary btn-md" data-dismiss="modal" onclick="ubah_transaksi_nilai_perkuliahan()">Submit</button>         
           	<!-- <input type="submit" class="btn btn-primary btn-md" value="Submit"> -->
		</div> <!-- akhir modal footer -->
	</form>
  </div> <!-- akhir modal content -->   
</div>