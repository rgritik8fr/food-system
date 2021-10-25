<?php include './top.php' ?>
  <div class="card">
            <div class="card-body">
              <h1 class="grid_title">Category Master</h1>
			  <a href="manage_category.php" class="add_link">Add Category</a>
              <div class="row grid_box">
				
                <div class="col-12">
                  <div class="table-responsive">
                    <table id="order-listing" class="table">
                      <thead>
                        <tr>
                            <th width="10%">S.No #</th>
                            <th width="50%">name</th>
                            <th width="15%">user name</th>
                            <th width="25%">Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                        
						<tr>
                            <td>22</td>
                            <td></td>
							<td></td>
							<td>
								<a href="manage_category.php?id="><label class="badge badge-success">Edit</label></a>&nbsp;
								
								<a href="?id="><label class="badge badge-danger">Active</label></a>
								
								<a href="?id=&type=active"><label class="badge badge-info">Deactive</label></a>
								
							
								<a href="?id=<label class="badge badge-danger delete_red">Delete</label></a>
							</td>
                           
                        </tr>
                      
						<tr>
							<td colspan="5">No data found</td>
						</tr>
						
                      </tbody>
                    </table>
                  </div>
				</div>
              </div>
            </div>
          </div>
        
<?php include('footer.php');?>