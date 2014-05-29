<div class="modal-dialog modal-lg">

	<div class="modal-content">
		<form method="get" action="{{ route('karyawan_tambah_permohonan') }}" role="form" class="form-horizontal" >
			<div class="modal-header">

				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id="myModalLabel">Tambah Permohonan</h4>

			</div>

			<div class="modal-body">

				<input type="hidden" name="id_karyawan" value="{{ $id_karyawan }}">

				<div class="form-group">
					<label for="name" class="col-sm-2 control-label">Jenis Permohonan</label>
					<div class="col-sm-10">
						<select name="id_permohonan" class="form-control">

							@foreach($permohonan as $p)

								<option value="{{ $p->id_permohonan }}">{{$p->permohonan}}</option>

							@endforeach

						</select>
					</div>
				</div>

				


				<div class="form-group">
					<label for="keterangan" class="col-sm-2 control-label">Keterangan</label>
					<div class="col-sm-10">
						<textarea name="keterangan" class="form-control" id="keterangan" rows="3" placeholder="Keterangan"></textarea>
					</div>
				</div>

			</div>

			<div class="modal-footer">
				<button type="button" class="btn btn-danger btn-sm" data-dismiss="modal" aria-hidden='true'>Close</button>
				<input type="submit" class="btn btn-success btn-sm" value='Tambah'/>
			</div>
		</form>
	</div>

</div>