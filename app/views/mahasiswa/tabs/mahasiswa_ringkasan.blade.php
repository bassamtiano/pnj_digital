

{{HTML::script('js/jquery.min.js')}}
{{HTML::script('js/angular.min.js')}}



{{HTML::script('js/controllers/mahasiswa/MahasiswaRingkasController.js')}}

<style>

	.bio_index {
		width:130px;
	}


	.bio_value {
		width: 100px;
	}

</style>

<div class="row" ng-controller="MahasiswaRingkasController">

	<div  class="col-md-3">
		<img src="../img/logo-pnj.png" class="img-responsive" alt="Responsive image">
	</div>

	<div class="col-md-9">

		<ul ng-repeat="mr in mahasiswa_ringkas">
			<li>
				<label class="bio_index">NIM</label>
				<label class="bio_value">@{{mr.nim}}</label>
			</li>
			<li>
				<label class="bio_index">Nama</label>
				<label class="bio_value">@{{mr.nama}}</label>
			</li>
			<li>
				<label class="bio_index">Jenis Kelamin</label>
				<label class="bio_value">@{{mr.jenis_kelamin}}</label>
			</li>
			<li>
				<label class="bio_index">Status Akademis</label>
				<label class="bio_value">@{{mr.status}}</label>
			</li>
		</ul>

	</div>

</div>
