<!-- Hendra Saputra-->
<div class="modal fade" id="smallModal" tabindex="-1" role="dialog" aria-labelledby="smallModal" aria-hidden="true">
	<div class="modal-dialog modal-sm">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id="myModalLabel">Select for Specific Name</h4>
			</div>
			<div class="modal-body">
				<form class="form-horizontal" role="form">
					<div class="form-group col-md-12">
                        <div class="col-md-2">
                         <label for="inputFilter" class="col-sm-1 control-label">Search By</label>
                     </div>
                     <div class="col-md-4">
                       <select class="form-control ">
                        <option>PEGAWAI</option>
                        <option>MAHASISWA</option>
                    </select>
                </div>
                <div class="col-md-6">
                   <input type="text" class="form-control" placeholder="Search" ng-model="search">
               </div>
           </div>
           <div class="container-fluid table-scrollable table-responsive col-md-12" style="overflow-x:auto;">
             <div style="display:block; height:50px; width:600;"> <!-- Buka div Head -->
                <table class="table table-hover"> 
                    <thead>
                       <tr>
                          <th width="150px">  ID        </th>
                          <th width="150px">  Jurusan   </th>
                          <th width="150px">  Nama      </th>
                          <th width="150px">  Select    </th>
                      </tr>
                  </thead>
              </table>
          </div> <!-- Tutup div Head -->
          <div style="display:block; height:250px; width:600; overflow-y:visible; overflow-x:hidden;"> <!-- Buka div Body -->
            <table class="table table-striped table-hover">
                <tbody>
                   <tr>
                       <td width="150px"> 313213                   </td>
                       <td width="150px"> Teknik Elektro           </td>
                       <td width="150px"> abdullah                 </td>
                       <td width="150px"> <input type="checkbox">  </td>
                   </tr>
                   <tr>
                       <td width="150px"> 312362                   </td>
                       <td width="150px"> Teknik Elektro           </td>
                       <td width="150px"> rinoto                   </td>
                       <td width="150px"> <input type="checkbox">  </td>
                   </tr>
                   <tr>
                       <td width="150px"> 312326                   </td>
                       <td width="150px"> Teknik Elektro           </td>
                       <td width="150px"> hendra                   </td>
                       <td width="150px"> <input type="checkbox">  </td>
                   </tr>
               </tbody>
           </table>
       </div> <!-- Tutup div Body -->
   </div>
</form>
<div class="modal-footer">
    <button type="button" class="btn btn-primary">Done</button>
</div>
</div>
</div>
</div>