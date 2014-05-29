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
		<h1> Nilai <small> Mahasiswa </small> </h1>
		<br>
</div><!--/broccoli-rowKepala-->

	<!-- Awal Dashboard konten -->
	<div class="container" ng-controller="DosenTransaksiNilaiController"><!--Awal Containter-->
		<div class="row"> <!--Row Combo Box-->
			<div class="col-md-6 panel panel-default"> <!-- awal div panel-->
				<div class="panel-body"> <!-- awal div panel-body-->

					<form class="form-horizontal" role="form" ng-submit="submitDataKelas()" >
								
								<!-- Awal Jurusan -->
								<div class="form-group">
									<label for="jurusan" class="col-md-4 control-table">Jurusan</label>
									<div class="col-md-8">
										<select class="form-control" name="jurusan" id="input_jurusan" ng-model="">
											<option value="1">Teknik Elektro (Contoh)</option>
											<option value="">Teknik Sipil</option>									
										</select>
									</div>
								</div>
								<!-- Akhir Jurusan -->

								<!-- Awal Prodi -->
								<div class="form-group">
									<label for="prodi" class="col-md-4 control-table">Prodi</label>
									<div class="col-md-8">
										<select class="form-control" name="prodi" id="input_prodi" ng-model="">
											<option value="1">Teknik Informatika (Contoh)</option>	
											<option value="">Teknik Listrik</option>								
										</select>
									</div>
								</div>
								<!-- Akhir Prodi -->

								<!-- Awal Kelas -->
								<div class="form-group">
									<label for="kelas" class="col-md-4 control-table">Kelas</label>
									<div class="col-md-8">
										<select class="form-control" name="kelas" id="input_kelas" ng-model="">
											<option value="1">IT-6A (Contoh)</option>
											<option value="">IT-6B</option>									
										</select>
									</div>
								</div>
								<!-- Akhir Kelas -->

								<!-- Awal Mata Kuliah -->
								<div class="form-group">
									<label for="matkul" class="col-md-4 control-table">Mata Kuliah</label>
									<div class="col-md-8">
										<select class="form-control" name="matkul" id="input_matkul" ng-model="">
											<option value="1">Multimedia (Contoh)</option>
											<option value="1">Digital Forensics (Contoh)</option>									
										</select>
									</div>
								</div>
								<!-- Akhir Mata Kuliah -->

								
							</form><!-- akhir form_data time slot -->
				</div> <!-- akhir div panel-body-->
			</div> <!-- akhir div panel-->
		</div> <!--AKhir Row Combo Box-->
	</div>

<div ng-controller="DosenTransaksiNilaiController" id="div-controller">
	<div class="row broccoli-rowIsi">
		<div class="col-md-12 broccoli-rowHtable">
			<table id="tbl_h" class="table table-striped table-bordered table-hover pull-downs" style="table-layout:fixed;">
				<tr>
					<th class="text-center" width="5%" style="border-bottom:2px solid #000;">No </th>
					<th class="text-center" width="20%" style="border-bottom:2px solid #000;" ng-click="">Nama &nbsp; <i class="fa fa-sort"></i> </th>
					<th class="text-center" width="15%" style="border-bottom:2px solid #000;" ng-click="">NIM &nbsp; <i class="fa fa-sort"></i> </th>
					<th class="text-center" width="10%" style="border-bottom:2px solid #000;" ng-click="">TGS &nbsp; <i class="fa fa-sort"></i>  </th>
					<th class="text-center" width="10%" style="border-bottom:2px solid #000;" ng-click="">UTS &nbsp; <i class="fa fa-sort"></i>  </th>
					<th class="text-center" width="10%" style="border-bottom:2px solid #000;" ng-click="">UAS &nbsp; <i class="fa fa-sort"></i> </th>
					<th class="text-center" width="10%" style="border-bottom:2px solid #000;" ng-click="">Nilai &nbsp; <i class="fa fa-sort"></i> </th>
					<th class="text-center" width="15%" style="border-bottom:2px solid #000;" ng-click="">Keterangan &nbsp; <i class="fa fa-sort"></i> </th>
					<th class="text-center" width="5%" style="border-bottom:2px solid #000;"> ... </th>
				</tr>
			</table>
		</div><!--broccoli-rowHtable-->

		<div class="col-md-12 broccoli-rowItable">
			<table class="table table-striped table-bordered table-hover" style="table-layout:fixed;">
				<tr ng-repeat="t in transaksinilai | filter:query | orderBy:predicate:reverse">
					<td class="text-center" width="5%">@{{ $index+1 }}</td>
					<td class="text-center" width="20%">@{{}}</td>
					<td class="text-center" width="15%">@{{}}</td>
					<td class="text-center" width="10%">@{{}}</td>
					<td class="text-center" width="10%">@{{}}</td>
					<td class="text-center" width="10%">@{{}}</td>
					<td class="text-center" width="10%">@{{}}</td>
					<td class="text-center" width="15%">@{{}}</td>
					<td class="text-center" width="5%"> <button class="btn btn-success btn-md" ng-click="dosen_modal_ubah_transaksi_nilai_perkuliahan(t.id_transaksi_nilai_perkuliahan)"> <span class="glyphicon glyphicon-edit"></span></button> </td>
					</tr>
			</table>
		</div><!--/broccoli-rowItable-->
	</div><!--/broccoli-rowIsi-->
</div><!--/div-controller-->