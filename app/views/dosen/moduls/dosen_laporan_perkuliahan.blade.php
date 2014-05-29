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

<div ng-controller="DosenLaporanPerkuliahanController" id="div-controller">
	<div class="row broccoli-rowKepala">
		<h1> Jadwal Mata Kuliah <small> Akses jadwal mata kuliah </small> </h1>
		<br>
	</div><!--/broccoli-rowKepala-->

	<div class="row broccoli-rowNavigasi broccoli-hilangPadding-semua">
		<div class="col-md-2 broccoli-mojok-kiri">
			<p>Dosen :</p>
		</div><!--/navigasiKiri-->
		<div class="col-md-2 broccoli-mojok-kanan">

		</div><!--/navgasi jurusan-->

		<div class="col-md-2 text-right">
			
		</div><!--/div for gap-->

		<div class="col-md-3">
			
		</div><!--/navigasiCombo-->
		<div class="col-md-3 broccoli-mojok-kanan">
			<p>Tahun Ajaran:</p>
			<p>Semester :</p>
		</div><!--/navigasiKanan-->
	</div>

	<div class="row broccoli-rowIsi">
		<div class="col-md-12 broccoli-rowHtable">
			<table id="tbl_h" class="table table-striped table-bordered table-hover pull-downs" style="table-layout:fixed;">
				<tr>
					<th class="text-center" width="10%" style="border-bottom:2px solid #000;">Jam</th>
					<th class="text-center" width="18%" style="border-bottom:2px solid #000;">Senin</th>
					<th class="text-center" width="18%" style="border-bottom:2px solid #000;">Selasa</th>
					<th class="text-center" width="18%" style="border-bottom:2px solid #000;">Rabu</th>
					<th class="text-center" width="18%" style="border-bottom:2px solid #000;">Kamis</th>
					<th class="text-center" width="18%" style="border-bottom:2px solid #000;">Jum'at</th>
					<!--<th class="text-center" width="9%" style="border-bottom:2px solid #000;"> ... </th>
					<th class="text-center" width="9%" style="border-bottom:2px solid #000;"> ... </th>
					<th class="text-center" width="9%" style="border-bottom:2px solid #000;"> ... </th> -->
				</tr>
			</table>
		</div><!--broccoli-rowHtable-->

		<div class="col-md-12 broccoli-rowItable">
			<table class="table table-striped table-bordered table-hover" style="table-layout:fixed;">
				<tr ng-repeat="jm in jadwal_matakuliah">
					<td class="text-center" width="10%">@{{ jm.jam }}</td>
					<td class="text-center" width="18%">@{{ jm.senin }}</td>
					<td class="text-center" width="18%">@{{ jm.selasa }}</td>
					<td class="text-center" width="18%">@{{ jm.rabu }}</td>
					<td class="text-center" width="18%">@{{ jm.kamis }}</td>
					<td class="text-center" width="18%">@{{ jm.jum'at }}</td>
					<!-- <td class="text-center" width="9%"> <button class="btn btn-primarry btn-md" ng-click="modal_detail_mahasiswa(dm.id_mahasiswa)"> <span class="glyphicon glyphicon-eye-open"></span></button> </td>
					<td class="text-center" width="9%"> <button class="btn btn-success btn-md" ng-click="modal_ubah_mahasiswa(dm.id_mahasiswa)"> <span class="glyphicon glyphicon-edit"></span></button> </td>
					<td class="text-center" width="9%"> <button class="btn btn-danger btn-md" ng-click="modal_hapus_mahasiswa(dm.id_mahasiswa, dm.nama)"> <span class="glyphicon glyphicon-trash"></span></button> </td> -->
				</tr>
			</table>
		</div><!--/broccoli-rowItable-->
	</div><!--/broccoli-rowIsi-->
</div><!--/div-controller-->