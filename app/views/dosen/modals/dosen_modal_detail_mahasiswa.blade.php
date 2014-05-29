<style>
	td {
		padding: 20px;
	}
</style>

@foreach($mahasiswa as $dm)

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
								<td> {{ $dm->nama }} </td>
							</tr>
							<tr>
								<td> NIM </td>
								<td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp;&nbsp;&nbsp;</td>
								<td> {{ $dm->nim }} </td>
							</tr>
							<tr>
								<td> Kelas </td>
								<td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp;&nbsp;&nbsp;</td>
								<td> {{ $dm->id_kelas }} </td>
							</tr>
							<tr>
								<td> Konsentrasi </td>
								<td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp;&nbsp;&nbsp;</td>
								<td> {{ $dm->id_konsentrasi_prodi }} </td>
							</tr>
							<tr>
								<td> Status </td>
								<td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp;&nbsp;&nbsp;</td>
								<td> {{ $dm->status }} </td>
							</tr>
							<tr>
								<td> Jenis Kelamin </td>
								<td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp;&nbsp;&nbsp;</td>
								<td> {{ $dm->jenis_kelamin }} </td>
							</tr>
							<tr>
								<td> Alamat </td>
								<td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp;&nbsp;&nbsp;</td>
								<td> {{ $dm->alamat }} </td>
							</tr>
							<tr>
								<td> No Telepon </td>
								<td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp;&nbsp;&nbsp;</td>
								<td> {{ $dm->nomor_telepon }} </td>
							</tr>
							<tr>
								<td> Email </td>
								<td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp;&nbsp;&nbsp;</td>
								<td> {{ $dm->email }} </td>
							</tr>
							<tr>
								<td> Tempat Lahir </td>
								<td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp;&nbsp;&nbsp;</td>
								<td> {{ $dm->tempat_lahir }} </td>
							</tr>
							<tr>
								<td> Tanggal Lahir </td>
								<td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp;&nbsp;&nbsp;</td>
								<td> {{ $dm->tanggal_lahir }} </td>
							</tr>
							<tr>
								<td> Tahun Masuk </td>
								<td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp;&nbsp;&nbsp;</td>
								<td> {{ $dm->tahun_masuk }} </td>
							</tr>
						</table>
					</div><!--/col-md-12-->
				</div><!--/rowOnModal-->
			</div>

	</div>
</div>

@endforeach