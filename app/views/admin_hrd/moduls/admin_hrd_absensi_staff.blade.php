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

<h1 align="center"><b>Absensi Staff</b></h1><br />
<!-- Almerps -->
<center>

<div ng-controller="AdminHRDBacaAbsenStaffController" id="div-controller">
	<div class="row" style="margin-top:20px;"><!-- Buka div row untuk table -->
		<div class="col-md-9"> <!-- Buka col-md-9 -->
			<div class="table-reponsive"> <!-- buka div table-->
				<table class="table table-bordered table-striped"> <!-- Buka table -->
					<thead>
						<tr class="active">
							<th>Bagian</th>
							<th>Absen</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Staff Pimpinan</td>
							<td>
								<button type="submit" class="btn btn-success form-control" ng-click="modals_absen_pimpinan()"> <span class="glyphicon glyphicon-plus-sign"></span> Absen</button>
							</td>
			
						</tr>
							<td>Staff Keuangan</td>
							<td>
								<button type="submit" class="btn btn-success form-control" ng-click="modals_absen_keuangan()"> <span class="glyphicon glyphicon-plus-sign"></span> Absen</button>
							</td>

						</tr>
							<td>Staff HRD</td>
							<td>
								<button type="submit" class="btn btn-success form-control" ng-click="modals_absen_hrd()"> <span class="glyphicon glyphicon-plus-sign"></span> Absen</button>
							</td>
							

						</tr>
							<td>Staff Kemahasiswaan</td>
							<td>
								<button type="submit" class="btn btn-success form-control" ng-click="modals_absen_kemahasiswaan()"> <span class="glyphicon glyphicon-plus-sign"></span> Absen</button>
							</td>
							

						</tr>
							<td>Staff Inventaris</td>
							<td>
								<button type="submit" class="btn btn-success form-control" ng-click="modals_absen_inventaris()"> <span class="glyphicon glyphicon-plus-sign"></span> Absen</button>
							</td>
						</tr>								
					</tbody>
				</table> <!-- Tutup table -->
			</div> <!-- Tutup div table -->				
		</div> <!-- Tutup col-md-9 -->
	</div><!-- Tutup div row untuk table -->
</div>

</center>

