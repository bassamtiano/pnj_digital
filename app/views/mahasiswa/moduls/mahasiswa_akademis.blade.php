



<style>

	.nav > .nav-tabs > li > a {

		border-top-left-radius: 0;
		background-color: red;

	}

</style> 

<div class="row">
	<h1>Akademis</h1>
</div>

<div class="row moduls-main-content" >

	<div class="col-md-12">
		<!-- Awal Bagian Tab -->
		<ul class="nav nav-tabs" id="mahasiswaTab">
			
			<li class="active">
				<a href="#tab_ringkasan" data-toggle="tab">Ringkasan</a>
			</li>
			<li>
				<a href="#tab_pembayaran" data-toggle="tab">Pembayaran</a>
			</li>
			<li>
				<a href="#tab_status_akademis" data-toggle="tab">Status Akademis</a>
			</li>
		</ul>

		<!-- akhir bagian tab -->
		
		<!-- Awal Tab Status Akademis -->

		<div class="tab-content" style=" background-color:white; padding-top:20px; padding-bottom:20px;">
			
			<div class="tab-pane active" id="tab_ringkasan">
				<div class="container-fluid">
					@include('mahasiswa.tabs.mahasiswa_ringkasan')
				</div>
			</div>

			<div class="tab-pane" id="tab_pembayaran">
				<div class="container-fluid">
					@include('mahasiswa.tabs.mahasiswa_pembayaran')
				</div>
			</div>

			<div class="tab-pane" id="tab_status_akademis">
				<div class="container-fluid">
					@include('mahasiswa.tabs.mahasiswa_status_akademis')
				</div>
			</div>

		</div><!-- Akhir Tab Content Mahasiswa -->

	</div>
</div>
