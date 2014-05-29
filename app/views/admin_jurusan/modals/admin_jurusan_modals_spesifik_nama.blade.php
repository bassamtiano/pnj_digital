<div class="modal-dialog" style="width:850px; display:block;"> <!----------- Awal Dialog Modal -------------->
	<div class="modal-content"> <!------- awal modal content -------->

		<div class="modal-header"> <!--------- awal modal header ---------->
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        	<h4 class="modal-title" id="myModalLabel">Select for Spesific Name</h4>
    	</div> <!----------- Akhir modal header -------------->

		<div class="modal-body"> <!-------- awal modal body ------------>
			
			<div class="row"> 

				<div class="col-md-5">
					<form class="form-horizontal" role="form" style="padding-top:9px;">
						<div class="form-group">
							<label for="input_searchby" class="col-sm-4 control-label">Search By</label>
							<div class="col-sm-5">
								<select class="form-control" name="searchby" id="search_by">
									<option value="Ruang Kelas"> Pegawai </option>
									<option value="Ruang Lab"> Mahasiswa </option>
								</select>	
							</div>
						</div>
					</form>
				</div>

				<div class="col-md-7" style="padding-right:40px;">
					<form class="navbar-form navbar-right" role="search">
	                    <div class="form-group">
	                        <input type="text" class="form-control" placeholder="Search . . ." ng-model="search">
	                    </div>
						<button type="submit" class="btn btn-default"> 
							<span class="glyphicon glyphicon-search"></span> Search 
						</button>
	                </form>
				</div>

			</div>

			<div class="row">
				<div class="container-fluid table-scrollable" style="overflow-x:auto;"> 
						
					<div style="display:block; height:40px; width:800px;"> 
						<table class="table table-hover table-bordered">
							<thead>
								<tr>
									<th width="150px"> <p> ID </p> </th>
									<th width="300px"> <p> Jurusan </p> </th>
									<th width="200px"> <p> Nama </p> </th>
									<th width="150px"> <p> Select </p> </th>
								</tr>
							</thead>
						</table>
					</div> <!-- ====================== Tutup Div Head ===================== -->

					<div style="display:block; height:140px; width:800px; overflow-y:visible; overflow-x:hidden;">
						<table class="table table-striped table-hover table-bordered">
							<tbody>
								<tr>
									<td width="150px"> 313213 </td>
									<td width="300px"> Teknik Elektro </td>
									<td width="200px"> Toto </td>
									<td width="150px"> <input type="checkbox"> </td>
								</tr>

								<tr>
									<td width="150px"> 312362 </td>
									<td width="300px"> Teknik Elektro </td>
									<td width="200px"> Roro </td>
									<td width="150px"> <input type="checkbox"> </td>
								</tr>

								<tr>
									<td width="150px"> 312326 </td>
									<td width="300px"> Teknik Elektro </td>
									<td width="200px"> Lele </td>
									<td width="150px"> <input type="checkbox"> </td>
								</tr>
							</tbody>
						</table>
					</div> <!-- ========================= Tutup Div Body ===================== --> 	
				</div> <!-- =========================== Tutup div Container table =============================== -->

				<div class="form-group" style="margin-right:50px; padding-top:20px;">
			        <div class="col-sm-offset-11 col-sm-12">
			            <button type="submit" class="btn btn-grey"> Done </button>
			        </div>
			    </div>
			</div> <!-- ========================= Tutup Div Row ===================== --> 	
			
		</div> <!-- akhir modal body -->

		<div class="modal-footer"> <!-- awal modal footer -->
			
		</div> <!-- akhir modal footer -->

	</div> <!-- akhir modal content -->
</div> <!----------- Akhir Dialog Modal -------------->
