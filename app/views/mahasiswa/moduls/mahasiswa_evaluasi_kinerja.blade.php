<div class="row">
	<h1>Evaluasi Dosen</h1>
</div>

<div class="row moduls-main-content" ng-controller="">
	

	<!-- Panel Untuk Pilihan Dosen -->


	<div class="panel panel-default" >
		<div class="panel-heading"> <!-- panel heading -->
			<h3 class="panel-title">
				Dosen
			</h3>
		</div> <!-- panel heading -->



		<div class="panel-body"> <!-- panel body -->
			<form class="form-horizontal" role="form">
				<fieldset>
					<div class="form-group">
						<label for="" class="col-sm-2 control-label">Nama Dosen</label>
						<div class="col-sm-8">
							<select class="form-control" name="" ng-model="" id="">
								<option> </option>
							</select>
							
						</div><!--col-sm-8-->
					</div><!--"form-group" -->



					<div class="form-group">
						<label for="" class="col-sm-2 control-label">Matakuliah</label>
						<div class="col-sm-8">
							<select class="form-control" name="" ng-model="" id="">
								<option> </option>
							</select>
						</div><!--col-sm-8-->
					</div><!--"form-group" -->



					<div class="form-group">
						<label for="" class="col-sm-2 control-label">Semester</label>
						<div class="col-sm-5">
							<select class="form-control" name="" ng-model="" id="">
								<option> </option>
								<option value="1">Semester 1</option>
								<option value="2">Semester 2</option>
								<option value="3">Semester 3</option>						
								<option value="4">Semester 4</option>
								<option value="5">Semester 5</option>						
								<option value="6">Semester 6</option>
								<option value="7">Semester 7</option>				
								<option value="8">Semester 8</option>
							</select>
						</div>
					</div><!--"form-group" -->
				</fieldset>	
			</form> <!-- Akhir -->
		</div><!--panel-body-->
	</div><!--col-md-5 panel panel-default-->



	<div class="panel panel-default" >
		<div class="panel-heading"> <!-- panel heading -->
			<h3 class="panel-title">Pertanyaan</h3>
		</div> <!-- panel heading -->

		<div class="panel-body">

			<form role="form" ng-submit="" >

				<div class="form-group">
					<label for="" class="col-sm-5 control-label">1. Ketepatan Waktu Hadir di Kelas :
					</label>
					<div class="col-sm-10">
						<div class="radio-inline">
							<label>
								<input type="radio" name="ketepatan_waktu" id="buruk" ng-model="" value="1">Buruk
							</label>
						</div><br>

						<div class="radio-inline">
							<label>
								<input type="radio" name="ketepatan_waktu" id="cukup_baik" ng-model="" value="2">Cukup Baik
							</label>
						</div><br>

						<div class="radio-inline">
							<label>
								<input type="radio" name="ketepatan_waktu" id="baik" ng-model="" value="3">Baik
							</label>
						</div><br>

						<div class="radio-inline">
							<label>
								<input type="radio" name="ketepatan_waktu" id="sangat_baik" ng-model="" value="4">Sangat Baik
							</label>
						</div><br>
					</div>
				</div>

				<div class="form-group">
					<label for="" class="col-sm-5 control-label">2. Penyampaian Materi Perkuliahan :
					</label>
					<div class="col-sm-10">
						<div class="radio-inline">
							<label>
								<input type="radio" name="penyampaian_materi" id="buruk" ng-model="" value="1">Buruk
							</label>
						</div><br>

						<div class="radio-inline">
							<label>
								<input type="radio" name="penyampaian_materi" id="cukup_baik" ng-model="" value="2">Cukup Baik
							</label>
						</div><br>

						<div class="radio-inline">
							<label>
								<input type="radio" name="penyampaian_materi" id="baik" ng-model="" value="3">Baik
							</label>
						</div><br>

						<div class="radio-inline">
							<label>
								<input type="radio" name="penyampaian_materi" id="sangat_baik" ng-model="" value="4">Sangat Baik
							</label>
						</div><br>
					</div>
				</div>

				<div class="form-group">
					<div class="col-md-offset-10 col-md-10">
						<button type="submit" class="btn btn-success">Send
						</button>

					</div>
				</div>

			</form>

		</div>

	</div>

</div>