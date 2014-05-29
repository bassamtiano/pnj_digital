

<div class="modal-dialog modal-lg">
	<div class="modal-content">

		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			<h4 class="modal-title" id="myModalLabel">Nama Dosen</h4>
		</div>

		<div class="modal-body">
			<ul class="nav nav-tabs" id="DosenDetailTab">
				<li class="active">
					<a href="#tab_biodata" data-toggle="tab">Biodata</a>
				</li>
				<li>
					<a href="#tab_penelitian" data-toggle="tab">Penelitian</a>
				</li>
				<li>
					<a href="#tab_pengabdian" data-toggle="tab">Pengabdian</a>
				</li>
			</ul>

			<div class="tab-content">

				<div class="tab-pane active" id="tab_biodata">
					<div class="container-fluid">
						@include('mahasiswa.tabs.mahasiswa_modal_dosen_biodata')
					</div>
				</div>

				<div class="tab-pane" id="tab_penelitian">
					<div class="container-fluid">
						@include('mahasiswa.tabs.mahasiswa_modal_dosen_penelitian')
					</div>
				</div>

				<div class="tab-pane" id="tab_pengabdian">
					<div class="container-fluid">
						@include('mahasiswa.tabs.mahasiswa_modal_dosen_pengabdian')
					</div>
				</div>

			</div>

		</div>
		<div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal" aria-hidden='true'>Close</button>
		</div>


	</div>
</div>