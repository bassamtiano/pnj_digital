<div class="row">
	<div class="table-scrollable table-reponsive table-bordered" style="overflow-x:auto;" > <!-- awal div container table -->
		<div style="display:block; height:40px; width:auto;"> <!-- awal untuk head table -->
			<table class="table table-bordered table-hover"> 
				<thead> <!-- nama colom table -->
					<tr>
						<th width="250px">Nama Penelitian</th>
						<th width="100px">Tanggal</th>
					</tr>
				</thead><!-- nama colom table -->
			</table>
		</div> <!-- akhir untuk head table -->

		@foreach($penelitian as $dosen_penelitian)

		<div style="display:block; height:110px; width:auto; overflow-y:visible; overflow-x:hidden;"> <!-- awal untuk body table -->
			<table class="table  table-bordered table-hover">
				<tbody> <!-- isi Table -->
					<tr>  <!--ng-repeat="ds in dataslots"-->
						<td width="250px">{{ $dosen_penelitian->judul_penelitian }}</td>
						<td width="100px">{{ $dosen_penelitian->tanggal_penelitian }}</td>
					</tr>
				</tbody> <!-- isi Table -->
			</table>
		</div> <!-- awal untuk body table -->

		@endforeach

	</div>  <!-- awal div container table -->
</div>