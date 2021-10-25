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
                            <th width="25%">Name</th>
                            <th width="15%">Agent id</th>
                            <th width="25%">Date of joining</th>
                            <th width="25%">Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
$sql = "SELECT * FROM `dilivary agent`";
$Sqlquery =mysqli_query($con,$sql);
$i =1;
if(mysqli_num_rows($Sqlquery)>=0){
	while($fetchrow = mysqli_fetch_assoc($Sqlquery)){
		?>
		<tr>
		<td><?php echo $i?></td>
		<td><?php echo $fetchrow['name']?></td>
		<td><?php echo $fetchrow['agent id']?></td>
        <td><?php echo $fetchrow['doj']?></td>
		<td>
			<a href="manage_category.php?categories=<?php echo $fetchrow['cat']?>"><label class="badge badge-success">Edit</label></a>&nbsp;
			
			<a href="?id="><label class="badge badge-danger">Active</label></a>
			
			<a href="?id=&type=active"><label class="badge badge-info">Deactive</label></a>
			
		
			<a href="?id=<label class="badge badge-danger delete_red">Delete</label></a>
		</td>
	   
	</tr>
	
	<!-- <tr>
		<td colspan="5">No data found</td>
	</tr> -->

	<?php
	$i++;
	}



}
						?>
					
						
                      </tbody>
                    </table>
                  </div>
				</div>
              </div>
            </div>
          </div>
        
<?php include('footer.php');?>