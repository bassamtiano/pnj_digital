
<div class="row">
	<div class="table-scrollable table-reponsive table-bordered" style="overflow-x:auto;" > <!-- awal div container table -->
		<div style="display:block; height:40px; width:auto;"> <!-- awal untuk head table -->
			<table class="table  table-bordered table-hover"> 
				<thead> <!-- nama colom table -->
					<tr>
						<th width="150px">Pengabdian</th>
						<th width="100px">Tempat</th>
						<th width="100px">Tanggal Mulai</th>
						<th width="100px">Tanggal Selesai</th>
					</tr>
				</thead><!-- nama colom table -->
			</table>
		</div> <!-- akhir untuk head table -->

		@foreach($pengabdian as $dosen_pengabdian)

		<div style="display:block; height:110px; width:auto; overflow-y:visible; overflow-x:hidden;"> <!-- awal untuk body table -->
			<table class="table table-bordered table-hover">
				<tbody> <!-- isi Table -->
					<tr ng-repeat="pgd in pengabdian_dosen">  <!--ng-repeat="ds in dataslots"-->
						<td width="150px">{{ $dosen_pengabdian->nama_pengabdian }}</td>
						<td width="100px">{{ $dosen_pengabdian->tempat }}</td>
						<td width="100px">{{ $dosen_pengabdian->tgl_mulai }}</td>
						<td width="100px">{{ $dosen_pengabdian->tgl_selesai }}</td>
					</tr>
				</tbody> <!-- isi Table -->
			</table>
		</div> <!-- awal untuk body table -->

		@endforeach

	</div>  <!-- awal div container table -->

</div>