<!-- Edited by Kazelord 250414-->
{{HTML::script('js/jquery.min.js')}}
{{HTML::script('js/angular.min.js')}}
{{HTML::script('js/bootstrap.min.js')}}

<style type="text/css">
	#tbl_h {
		cursor: pointer;
	}
</style>

<script type="text/javascript">
	$(document).ready(function(){
		$(".pull-downs").each(function(){
			$(this).css('margin-top', $(this).parent().height() - $(this).height());
		});
	});
</script>

 <!-- awal title -->
<div class="row broccoli-rowKepala">
	<h1> Absen Staff Jurusan <small>[sesuai jurusan]</small> </h1>
	<br>
</div><!--/broccoli-rowKepala-->
<!-- akhir title -->
<!-- awal tombol update -->
<div class="row broccoli-rowNavigasi broccoli-hilangPadding-semua">
	<div class="col-md-1" style="padding-left:0px;">
		<button type="submit" class="btn btn-success" ng-click=""> <span class="glyphicon glyphicon-plus-sign"></span> Update</button>
	</div><!--/navigasiKiri-->
	<div class="col-md-2">
	</div><!--/navgasi jurusan-->
	<div class="col-md-2">
	</div><!--/div for gap-->
	<div class="col-md-3">
	</div><!--/navigasiCombo-->
	<div class="col-md-3" style="padding-right:0px;">
	</div><!--/navigasiKanan-->
</div>
<!-- akhir tombol update -->
<!-- awal content -->
<div class="row broccoli-rowIsi" ng-controller="">
	<div class="col-md-12 broccoli-rowHtable">
		<table id="tbl_h" class="table table-striped table-bordered table-hover pull-downs" style="table-layout:fixed;">
			<tr>
				<th class="text-center" width="5%" style="border-bottom:2px solid #000;">No </th>
				<th class="text-center" width="15%" style="border-bottom:2px solid #000;" ng-click="predicate='nama_jurusan'; reverse=!reverse">Nama&nbsp; <i class="fa fa-sort"></i> </th>
				<th class="text-center" width="15%" style="border-bottom:2px solid #000;" ng-click="predicate='kepala_jurusan'; reverse=!reverse">Jabatan&nbsp; <i class="fa fa-sort"></i> </th>
				<th class="text-center" width="10%" style="border-bottom:2px solid #000;" ng-click="predicate='jumlah_prodi'; reverse=!reverse">Kehadiran&nbsp; <i class="fa fa-sort"></i>  </th>
			</tr>
		</table>
	</div><!--broccoli-rowHtable-->

	<div class="col-md-12 broccoli-rowItable">
		<table class="table table-striped table-bordered table-hover" style="table-layout:fixed;">
			<tr> <!-- ng-repeat="dj in data_jurusan | orderBy:predicate:reverse " -->
				<td class="text-center" width="5%">@{{ $index+1 }}</td>
				<td class="text-center" width="15%">@{{ dj.nama}}</td>
				<td class="text-left" width="15%">@{{ dj.jabatan }}</td>
				<td class="text-center" width="10%"><input type="checkbox"></td>
			</tr>
		</table>
	</div><!--/broccoli-rowItable-->
</div><!--/broccoli-rowIsi-->
<!-- akhir content