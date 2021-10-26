<?php include './top.php' ?>
  <div class="card">
            <div class="card-body">
              <h1 class="grid_title">Dish</h1>
			  <a href="dishm.php" class="add_link">Add Dish</a>
              <div class="row grid_box">
				
                <div class="col-12">
                  <div class="table-responsive">
                    <table id="order-listing" class="table">
                      <thead>
                        <tr>
                            <th width="10%">S.No #</th>
                            <th width="10%">Dishname</th>
                            <th width="10%">Dish cat</th>
                            <th width="15%">Dish Description</th>
                            <th width="10% " class="text-center">Dish Image</th>
                            <th width="10% " class="text-center">Regular price</th>
                            <th width="10% " class="text-center">Our price</th>
                            <th width="20%">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
$sql = "SELECT * FROM `dish`";
$Sqlquery =mysqli_query($con,$sql);
$i =1;
if(mysqli_num_rows($Sqlquery)>=0){
	while($fetchrow = mysqli_fetch_assoc($Sqlquery)){
		?>
		<tr>
		<td><?php echo $i?></td>
		<td><?php echo $fetchrow['dishname']?></td>
		<td><?php echo $fetchrow['dis_cat']?></td>
        <td><?php echo $fetchrow['dish_desc']?></td>
        <td class="text-center"><img src="<?php echo $fetchrow['dish_image']?>" alt=""></td>
        <td class="text-center">$<?php echo $fetchrow['REGULARPRICE']?></td>
        <td class="text-center">$<?php echo $fetchrow['OURPRICE']?></td>
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