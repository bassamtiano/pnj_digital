<style>
	td {
		padding: 20px;
	}
</style>

@foreach($mahasiswa as $m)

<div class="modal-dialog modal-md">
	<div class="modal-content">

			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id="myModalLabel">Detail Data Mahasiswa</h4>
			</div>

			<div class="modal-body">
				<div class="row">
					<div class="col-md-12">
						<table cellpadding="20">
							<tr>
								<td> Nama Mahasiswa </td>
								<td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp;&nbsp;&nbsp;</td>
								<td> {{ $m->nama }} </td>
							</tr>
							<tr>
								<td> NIM </td>
								<td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp;&nbsp;&nbsp;</td>
								<td> {{ $m->nim }} </td>
							</tr>
							<tr>
								<td> Kelas </td>
								<td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp;&nbsp;&nbsp;</td>
								<td> {{ $m->id_kelas }} </td>
							</tr>
							<tr>
								<td> Konsentrasi </td>
								<td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp;&nbsp;&nbsp;</td>
								<td> {{ $m->id_konsentrasi_prodi }} </td>
							</tr>
							<tr>
								<td> Status </td>
								<td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp;&nbsp;&nbsp;</td>
								<td> {{ $m->status }} </td>
							</tr>
						</table>
					</div><!--/col-md-12-->
				</div><!--/rowOnModal-->
			</div>

	</div>
</div>

@endforeach