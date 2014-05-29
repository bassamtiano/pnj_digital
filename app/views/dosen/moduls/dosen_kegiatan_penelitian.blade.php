{{HTML::script('js/jquery.min.js')}}
{{HTML::script('js/angular.min.js')}}
{{HTML::script('js/bootstrap.min.js')}}

<style type="text/css">
	#tbl_h {
		cursor: pointer;
	}
	.w {
		word-wrap:break-word;
	}
</style>

<script type="text/javascript">
	$(document).ready(function(){
		$(".pull-downs").each(function(){
			$(this).css('margin-top', $(this).parent().height() - $(this).height());
		});
	});
</script>

<div ng-controller="DosenPenelitianController" id="div-controller">
	<div class="row broccoli-rowKepala">
		<h1> Penelitian</h1>
		<br>
	</div><!--/broccoli-rowKepala-->

	<div class="row broccoli-rowNavigasi broccoli-hilangPadding-semua">
		<div class="col-md-2 broccoli-mojok-kiri">
			<button type="submit" class="btn btn-success form-control" ng-click="dosen_modal_tambah_penelitian()"> <span class="glyphicon glyphicon-plus-sign"></span> Tambah</button>
		</div><!--/navigasiKiri-->
		<div class="col-md-2 broccoli-mojok-kanan">
		</div><!--/navgasi jurusan-->

		<div class="col-md-2 text-right">
			
		</div><!--/div for gap-->

		<div class="col-md-3">
			<select ng-model="model_pilihan_cari" class="form-control">
	            <option value=""> Judul Penelitian </option>
	            <option value=""> Tanggal Rilis</option>
	            
	        </select>
		</div><!--/navigasiCombo-->
		<div class="col-md-3 broccoli-mojok-kanan">
			<input class="form-control" ng-model="query[model_pilihan_cari]" placeholder="Cari . . . ."/>
		</div><!--/navigasiKanan-->
	</div>

	<div class="row broccoli-rowIsi">
		<div class="col-md-12 broccoli-rowHtable">
			<table id="tbl_h" class="table table-striped table-bordered table-hover pull-downs" style="table-layout:fixed;">
				<tr>
					<th class="text-center" width="5%" style="border-bottom:2px solid #000;">No </th>
					<th class="text-center" width="30%" style="border-bottom:2px solid #000;" ng-click="">Judul Penelitian &nbsp; <i class="fa fa-sort"></i> </th>
					<th class="text-center" width="25%" style="border-bottom:2px solid #000;" ng-click="">Tanggal Rilis &nbsp; <i class="fa fa-sort"></i> </th>
					<th class="text-center" width="15%" style="border-bottom:2px solid #000;" ng-click="">Publikasi &nbsp; <i class="fa fa-sort"></i>  </th>
					<th class="text-center" width="15%" style="border-bottom:2px solid #000;" ng-click="">Download &nbsp; <i class="fa fa-sort"></i>  </th>
					<th class="text-center" width="10%" style="border-bottom:2px solid #000;"> ... </th>
				</tr>
			</table>
		</div><!--broccoli-rowHtable-->

		<div class="col-md-12 broccoli-rowItable">
			<table class="table table-striped table-bordered table-hover" style="table-layout:fixed;">
				<tr ng-repeat="p in penelitian | filter:query | orderBy:predicate:reverse">
					<td class="text-center w" width="5%">@{{ $index+1 }} </td>
					<td class="text-left w" width="30%">@{{p.judul_penelitian}}</td>
					<td class="text-center w" width="25%">@{{p.tanggal_penelitian}}</td>
					<td class="text-left w" width="15%">@{{p.attachment}}</td>
					<td class="text-center w" width="15%"><button class="btn btn-success btn-md" ng-click=""> <span class="glyphicon glyphicon-save "></span></button></td>
					<td class="text-center w" width="10%"> 
					<div class="btn-group">
						<button class="btn btn-success btn-md" ng-click="dosen_modal_ubah_penelitian(p.id_dosen_penelitian)"> <span class="glyphicon glyphicon-edit"></span></button>
				 		<button class="btn btn-danger btn-md" ng-click="dosen_modal_hapus_penelitian(p.id_dosen_penelitian)"> <span class="glyphicon glyphicon-trash"></span></button>
					</div>
				</td></tr>
			</table>
		</div><!--/broccoli-rowItable-->
	</div><!--/broccoli-rowIsi-->
</div><!--/div-controller-->