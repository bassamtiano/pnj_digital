@extends('layouts.dashboard')

@section('head')
<title> Pegawai </title>
@stop

@section('content')
<div class="modal-dialog" style="width:550px; display:block;"> <!----------- Awal Dialog Modal -------------->
	<div class="modal-content"> <!------- awal modal content -------->
		<div class="modal-header"> <!--------- awal modal header ---------->
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        	<h4 class="modal-title" id="myModalLabel">Ubah Data Pengeluaran</h4>
    	</div> <!----------- Akhir modal header -------------->
		<div class="modal-body"> <!-------- awal modal body ------------>
			
			<h3 align="center"> Ubah Data Pengeluaran </h3>
			<br><br>

			<form class="form-horizontal" role="form" style="margin-bottom:-25px;">

				<div class="form-group">
					<label for="input_id" class="col-sm-4 control-label">ID Pengeluaran</label>
					<div class="col-sm-6">
						<input type="text" class="form-control" id="input_id" name="id" placeholder="ID Pengeluaran . . .">
					</div>
				</div>

				<div class="form-group">
					<label for="input_tanggal" class="col-sm-4 control-label">Tanggal Masuk</label>
					<div class="col-sm-6">
							<input type="date" class="form-control" id="input_namaruangan" name="tanggal" placeholder="Tanggal Masuk . . .">
					</div>
				</div>

				<div class="form-group">
					<label for="input_jumlah" class="col-sm-4 control-label">Jumlah (Rupiah)</label>
					<!-- <div class="col-sm-1"> <p style="padding-top:5px; padding-left:10px; font-size:12.5pt;">Rp</p> </div> -->
					<div class="col-sm-6">
						<input type="text" class="form-control" id="input_jumlah" name="jumlah" placeholder="Jumlah . . .">
					</div>
				</div>

				<div class="form-group">
					<label for="input_departemen" class="col-sm-4 control-label">Departemen</label>
					<div class="col-sm-6">
						<select class="form-control" name="departemen" id="input_jenisruangan">
							<option value="Elektro"> Elektro </option>
							<option value="Sipil"> Sipil </option>
							<option value="Akuntansi"> Akuntansi </option>
							<option value="Adm. Niaga"> Adm. Niaga </option>
							<option value="Ruang Musholla"> Mesin </option>
							<option value="Ruang Karyawan"> Gedung Q </option>
						</select>	
					</div>
				</div>

				<div class="form-group">
					<label for="input_keterangan" class="col-sm-4 control-label">Keterangan</label>
					<div class="col-sm-6">
						<textarea class="form-control" rows="3" name="keterangan" placeholder="Keterangan . . ."></textarea>
					</div>
				</div>

				<div class="form-group">
		            <div class="col-sm-offset-6 col-sm-6">
		                <button type="submit" class="btn btn-primary"> Submit </button>

		                <button type="reset" class="btn btn-primary"> Reset </button>
		        	</div>
		        </div>

			</form> <!-- ========================== Akhir Form Tambah Ruang ========================== -->
			
			
		</div> <!-- akhir modal body -->

		<div class="modal-footer"> <!-- awal modal footer -->
			
		</div> <!-- akhir modal footer -->

	</div> <!-- akhir modal content -->
</div> <!----------- Akhir Dialog Modal -------------->

@stop