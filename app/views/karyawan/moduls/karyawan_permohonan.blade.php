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

<div class="row broccoli-rowKepala">
	<h1> Permohonan<small> Akses Permohonan Pegawai PNJ </small> </h1>
	<br>
</div><!--/broccoli-rowKepala-->

<div class="row broccoli-rowNavigasi broccoli-hilangPadding-semua">
	<div class="col-md-6" style="padding-left:0px;">
		<button type="submit" class="btn btn-success" onclick="KaryawanTambahPermohonan(1)"> <span class="glyphicon glyphicon-plus-sign"></span>Tambah</button>
	</div><!--/navigasiKiri-->
	<div class="col-md-3">
		<select class="form-control">
			<option value="resign"> Resign </option>
			<option value="cuti"> Cuti </option>
			<option value="kas_bon"> Kas Bon </option>
			<option value="lainnya"> Lainnya </option>
		</select>
	</div><!--/navigasiCombo-->
	<div class="col-md-3" style="padding-right:0px;">
		<input type="text" class="form-control input-xs" placeholder="Cari">
	</div><!--/navigasiKanan-->
</div>

<div class="row broccoli-rowIsi" ng-controller="KaryawanBacaPermohonanController">

	<div class="col-md-12 broccoli-rowHtable">
		<table id="tbl_h" class="table table-striped table-bordered table-hover pull-downs" style="table-layout:fixed;">
			<tr>
				<th class="text-center" width="5%" style="border-bottom:2px solid #000;">No </th>
				<th class="text-center" width="25%" style="border-bottom:2px solid #000;">Permohonan</th>
				<th class="text-center" width="15%" style="border-bottom:2px solid #000;">Tanggal Pengajuan</th>
				<th class="text-center" width="45%" style="border-bottom:2px solid #000;">Keterangan</th>
				<th class="text-center" width="10%" style="border-bottom:2px solid #000;">Status</th>
			</tr>
		</table>
	</div>

	<div class="col-md-12 broccoli-rowItable">
		<table class="table table-striped table-bordered table-hover" style="table-layout:fixed;">
			<tr ng-repeat="pk in permohonan">
				<td class="text-center" width="5%">@{{ $index+1 }}</td>
				<td class="text-center" width="25%">@{{ pk.permohonan }}</td>
				<td class="text-center" width="15%">@{{ pk.tanggal_permohonan }}</td>
				<td class="text-center" width="45%">@{{ pk.keterangan }}</td>
				<td class="text-center" width="10%">@{{ pk.status }}</td>
			</tr>
		</table>
	</div>

</div>