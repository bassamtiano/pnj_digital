<div class="row" style="padding-top:20px;">

	<div class="col-md-2">
		<img src="upload/img/turkish.jpg" width="100%">

	</div>

	@foreach($dosen as $data)
		<div class="col-md-10" style="border-left:solid #DDDDDD 1px;">

			<table class="table table-striped">
				<tbody>
					<tr>
						<td style="width:10px;">NIK</td>
						<td>{{ $data->nik }}</td>
					</tr>

					<tr>
						<td>NIP</td>
						<td>{{ $data->nip }}</td>
					</tr>

					<tr>
						<td>Nama</td>
						<td>{{ $data->nama }}</td>
					</tr>

					<tr>
						<td>Alamat</td>
						<td>{{ $data->alamat }}</td>
					</tr>

					<tr>
						<td>Jurusan</td>
						<td>{{ $data->jurusan }}</td>
					</tr>


					<tr>
						<td>Status</td>
						<td>{{ $data->status }}</td>
					</tr>

					<tr>
						<td>No Telepon</td>
						<td>{{ $data->no_telepon }}</td>
					</tr>

					<tr>
						<td>Email</td>
						<td>{{ $data->email }}</td>
					</tr>
				</tbody>
			</table>

		</div>
	@endforeach

</div>