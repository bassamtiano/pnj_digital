<style>
	td {
		padding: 20px;
	}
</style>


<div class="modal-dialog modal-md">
	<div class="modal-content">

			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id="myModalLabel">Detail Data Penelitian Dosen</h4>
			</div>

			<div class="modal-body">
				@foreach($detail_penelitian_dosen as $dpd)

				<div class="row">
					<div class="col-md-12">
						<table cellpadding="20">
							<tr>
								<td> ID Dosen Penelitian</td>
								<td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp;&nbsp;&nbsp;</td>
								<td> {{ $dpd->id_dosen_penelitian }} </td>
							</tr>
							<tr>
								<td> ID Dosen </td>
								<td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp;&nbsp;&nbsp;</td>
								<td> {{ $dpd->id_dosen }} </td>
							</tr>
							<tr>
								<td> Judul Penelitian </td>
								<td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp;&nbsp;&nbsp;</td>
								<td> {{ $dpd->judul_penelitian }} </td>
							</tr>
							<tr>
								<td> Tanggal Penelitian </td>
								<td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp;&nbsp;&nbsp;</td>
								<td> {{ $dpd->tanggal_penelitian }} </td>
							</tr>
							<tr>
								<td> Attachment </td>
								<td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp;&nbsp;&nbsp;</td>
								<td> {{ $dpd->attachment }} </td>
							</tr>
							<tr>
								<td> Share Status </td>
								<td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp;&nbsp;&nbsp;</td>
								<td> {{ $dpd->status_share }} </td>
							</tr>
						</table>
					</div><!--/col-md-12-->
				</div><!--/rowOnModal-->
				@endforeach
			</div>

	</div>
</div>

