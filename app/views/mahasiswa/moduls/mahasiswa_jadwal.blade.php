<!-- Almerps(edited) -->
<div class="row"><!-- Awal div row header page -->
<h1>Jadwal Mata Kuliah</h1>
</div><!-- Akhir div row header page -->

<div class="row moduls-main-content"><!-- Awal div sub header -->
	<h2>IT Reguler - IT6A - Semester VI</h2>
</div><!-- Akhir div sub header -->

{{HTML::script('js/jquery.min.js')}}
{{HTML::script('js/angular.min.js')}}

<!-- ====================== TABLE =============== -->
<div class="row moduls-main-content" ng-controller="JadwalController">
	<div class="col-md-12">
		<div class="container-fluid table-scrollable table-reponsive table-bordered" style="overflow-x:auto; padding-left:0;" > <!-- awal div container table -->
			<div style="display:block; height:40px; width:1100px;"> <!-- awal untuk head table -->
				<table class="table table-hover table-bordered" style="table-layout:fixed;"> 
					<thead> <!-- nama colom table -->
						<tr>
							<th width="100px">Jam</th>
							<th width="200px">Senin</th>
							<th width="200px">Selasa</th>
							<th width="200px">Rabu</th>
							<th width="200px">Kamis</th>
							<th width="200px">Jumat</th>
						</tr>
					</thead><!-- nama colom table -->
				</table>
			</div> <!-- akhir untuk head table -->

			<div style="display:block; height:300px; width:1100px; overflow-y:visible; overflow-x:hidden; padding-left:0;"> <!-- awal untuk body table -->
				<table class="table table-striped table-hover table-bordered" style="table-layout:fixed;">
					<tbody> <!-- isi Table -->
						<tr>
							<td width="100px"><p style="word-wrap:break-word; ">07.30 - 08.15</p></td>
							<td width="200px"><p style="word-wrap:break-word;">Liat samping deh,kok gak rata sama bungkus yah?Bawahnya juga gitu,bingung ga?</p></td>
							<td width="200px"><p style="word-wrap:break-word;">12-April-2014</p></td>
							<td width="200px"><p style="word-wrap:break-word;">12-April-2014</p></td>
							<td width="200px"><p style="word-wrap:break-word;">12-April-2014</p></td>
							<td width="200px"><p style="word-wrap:break-word;">12-April-2014</p></td>
						</tr>
						<tr>
							<td width="100px"><p style="word-wrap:break-word; ">07.30 - 08.15</p></td>
							<td width="200px"><p style="word-wrap:break-word;">Liat samping deh,kok gak rata sama bungkus yah?Bawahnya juga gitu,bingung ga?</p></td>
							<td width="200px"><p style="word-wrap:break-word;">12-April-2014</p></td>
							<td width="200px"><p style="word-wrap:break-word;">12-April-2014</p></td>
							<td width="200px"><p style="word-wrap:break-word;">12-April-2014</p></td>
							<td width="200px"><p style="word-wrap:break-word;">12-April-2014</p></td>
						</tr>
						<tr>
							<td width="100px"><p style="word-wrap:break-word; ">07.30 - 08.15</p></td>
							<td width="200px"><p style="word-wrap:break-word;">Liat samping deh,kok gak rata sama bungkus yah?Bawahnya juga gitu,bingung ga?</p></td>
							<td width="200px"><p style="word-wrap:break-word;">12-April-2014</p></td>
							<td width="200px"><p style="word-wrap:break-word;">12-April-2014</p></td>
							<td width="200px"><p style="word-wrap:break-word;">12-April-2014</p></td>
							<td width="200px"><p style="word-wrap:break-word;">12-April-2014</p></td>
						</tr>
					</tbody> <!-- isi Table -->
				</table>
			</div> <!-- awal untuk body table -->
		</div>  <!-- awal div container table -->
	</div>
</div>