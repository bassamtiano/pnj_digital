@extends('layouts.dashboard') 

@section('head')
	<title> Halaman Karyawan </title>
@stop

@section('content')

	<div class="row" style="margin-top:30px;">
		<div class="col-md-2"> <!-=--------- Buka Col 3 -----=-------->
			<a href="#dosen" >
				<img src="img/user.gif" height="180px" width="160px" alt="...">
			</a>
		</div>  <!-=--------- Tutup Col 3 -----=-------->

		<div class="col-md-10">  <!-=--------- Buka Col 9 -----=-------->

			<table style="width:600px;">
				<tbody>
					<tr>
						<td width="200px"><p> ID Karyawan </p></td>
						<td width="30px"><p> : </p></td>
						<td width="370px"><p> 43110010088 </p></td>
					</tr>
					<tr>
						<td width="200px"><p> Nama Karyawan </p></td>
						<td width="30px"><p> : </p></td>
						<td width="370px"><p> Tara Budiman </p></td>
					</tr>
					<tr>
						<td width="200px"><p> ALamat </p></td>
						<td width="30px"><p> : </p></td>
						<td width="370px"><p> Jalan Hasanudin Suryawati </p></td>
					</tr>
					<tr>
						<td width="200px"><p> Tempat, Tanggal Lahir </p></td>
						<td width="30px"><p> : </p></td>
						<td width="370px"><p> Bogor, 35 September 1993 </p></td>
					</tr>
					<tr>
						<td width="200px"><p> Agama </p></td>
						<td width="30px"><p> : </p></td>
						<td width="370px"><p> Islam </p></td>
					</tr>
					<tr>
						<td width="200px"><p> Jenis Kelamin </p></td>
						<td width="30px"><p> : </p></td>
						<td width="370px"><p> Laki-laki </p></td>
					</tr>
					<tr>
						<td width="200px"><p> Kontak yang dapat dihubungi </p></td>
						<td width="30px"><p> : </p></td>
						<td width="370px"><p> 08562358789 </p></td>
					</tr>
					<tr>
						<td width="200px"><p> Email </p></td>
						<td width="30px"><p> : </p></td>
						<td width="370px"><p> tara.budiman@plasa.com </p></td>
					</tr>
					<tr>
						<td width="200px"><p> Pendidikan Terakhir </p></td>
						<td width="30px"><p> : </p></td>
						<td width="370px"><p> S2 Mana Gitu </p></td>
					</tr>
					<tr>
						<td width="200px"><p> Status Nikah </p></td>
						<td width="30px"><p> : </p></td>
						<td width="370px"><p> Belum Nikah </p></td>
					</tr>
					<tr>
						<td width="200px"><p> Status Kepegawaian </p></td>
						<td width="30px"><p> : </p></td>
						<td width="370px"><p> Tetap </p></td>
					</tr>
					<tr>
						<td width="200px"><p> Jabatan </p></td>
						<td width="30px"><p> : </p></td>
						<td width="370px"><p> Dosen </p></td>
					</tr>
					<tr>
						<td width="200px"><p> Tanggal Mulai Kerja </p></td>
						<td width="30px"><p> : </p></td>
						<td width="370px"><p> 12 Februari 1996 </p></td>
					</tr>
				</tbody>
			</table>

		</div>  <!-=--------- Tutup Col 9 -----=-------->
	</div>

	<div class="row" style="margin-top:35px;">
		<div class="form-group">
		    <div class="col-sm-offset-5 col-sm-6">
		        <button type="submit" class="btn btn-primary"> Ubah </button>

		        <button type="submit" class="btn btn-primary"> Unduh </button>
		    </div>
		</div>
	</div>

@stop