<div class="col-md-12 panel panel-default"> <!-- awal col-md-12-->
	<!-- Abdul Fachmi -->
	<div class="panel-heading"> <!-- panel heading -->
		<h3 class="panel-title">
			<b>Absensi Dosen</b>
		</h3>
	</div> <!-- panel heading -->
	<div class="panel-body"> <!-- panel body -->
		<div class="container-fluid"> <!-- awal container fluid -->
			<div class="row"> <!-- awal row -->

				<div class="col-md-12"> <!-- awal col-md-12 -->
					
					<div class="well">
			  			<div class="input-append date" id="dp3" data-date="12-02-2012" data-date-format="dd-mm-yyyy">
							<input class="span2" size="16" type="text" value="12-02-2012" readonly>
							<span class="add-on"><i class="icon-calendar"></i></span>
			  			</div>
          			</div>					
					


				</div> <!-- akhir col-md-12 -->

			</div> <!-- akhir row -->

			<div class="row" style="margin-top:20px;"> <!-- row -->

				<div class="col-md-12"> <!-- awal col-md-12 -->

					<center>

					<div class="container-fluid table scrollable table-bordered table-responsive" style="overflow-x:auto;width:900px;padding-left:0; "><!-- Buka div container table -->
						<div style="display:block; height: 40px; width: 880px;"><!-- Buka div head(table) -->
							<table class="table table-striped table-bordered table-hover" style="table-layout:fixed;">
								<thead>
									<tr>									
										<th width="150px">Nama</th>
										<th width="150px">Jabatan</th>
										<th width="150px">Kehadiran</th>										
									</tr>
								</thead>
							</table>
						</div> <!-- Akhir Div Head -->

					<div style="display:block; height:200px; overflow-y:visible; overflow-x:visible; width:880px; padding-left:0;" class="table-body-scrollable table-responsive"><!-- div isi table -->
						<table class="table table-bordered table-striped" style="table-layout:fixed;">
								<tbody>									
									<tr>								
										<td width="150px"><p style="word-wrap:break-word;">Rahmat</p></td>
										<td width="150px"><p style="word-wrap:break-word;">dosen</p></td>
										<td width="150px"><input type="checkbox"></td>										
									</tr>
									<tr>								
										<td width="150px"><p style="word-wrap:break-word;">Ucok</p></td>
										<td width="150px"><p style="word-wrap:break-word;">dosen</p></td>
										<td width="150px"><input type="checkbox"></td>										
									</tr>
									<tr>								
										<td width="150px"><p style="word-wrap:break-word;">Sobirin</p></td>
										<td width="150px"><p style="word-wrap:break-word;">dosen</p></td>
										<td width="150px"><input type="checkbox"></td>										
									</tr>
									<tr>								
										<td width="150px"><p style="word-wrap:break-word;">Udin</p></td>
										<td width="150px"><p style="word-wrap:break-word;">dosen</p></td>
										<td width="150px"><input type="checkbox"></td>										
									</tr>
									<tr>								
										<td width="150px"><p style="word-wrap:break-word;">Wira</p></td>
										<td width="150px"><p style="word-wrap:break-word;">dosen</p></td>
										<td width="150px"><input type="checkbox"></td>										
									</tr>
								</tbody>
							</table>
						</div> <!-- Akhir Div Body --> 							
					</div> <!-- Akhir Div Container table-->


					</center>

				</div> <!-- akhir col-md-12-->

			</div> <!-- akhir row -->
		</div> <!-- akhir container fluid -->
	</div> <!-- akhir panel body -->
</div>	<!-- akhir col-md-12 -->
<script type="text/javascript">
	$(function(){
		window.prettyPrint && prettyPrint();
		$('#dp3').datepicker({
		format: 'mm-dd-yyyy'
		});			
	}
</script>