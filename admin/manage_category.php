<?php include('./top.php');


$msg ="";	 


if(isset($_POST['submit'])){
    $category = mysqli_real_escape_string($con, $_POST["category"]);
    $order_number = mysqli_real_escape_string($con, $_POST["order_number"]);
	
  


       
        $catcheck = "SELECT * FROM `categorries` WHERE cat = '$category'";
        $qcatcheck = mysqli_query($con,$catcheck);
        if(mysqli_num_rows($qcatcheck)>0){
            $msg = 'category already exist';

		}else{
            $insertcat = "INSERT INTO `categorries`(`cat`, `order`) VALUES ('$category','$order_number')";
			$qinsertcat = mysqli_query($con,$insertcat);
			if($qinsertcat){
				$msg ="your category been added";
			} 

			}
		}  
  

?>
<div class="row">
			<h1 class="grid_title ml10 ml15">Manage Category</h1>
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">

                  <form class="forms-sample" method="post" action ="<?php echo $_SERVER["PHP_SELF"]?>"">
                    <div class="form-group">
                      <label for="exampleInputName1">Category</label>
                      <input type="text" class="form-control" placeholder="Category" name="category" required value="<?php if(isset($_GET['categories'])){ echo $sqlufetchs['cat'];} ?>">
					  <div class="error mt8"><?php echo $msg ?></div>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail3" required>Order Number</label>
                      <input type="textbox" class="form-control" placeholder="Order Number" name="order_number"  value="<?php if(isset($_GET['categories'])){echo $sqlufetch['order'];} ?>">
                    </div>
                    
                    <button type="submit" class="btn btn-primary mr-2" name="submit">Submit</button>
                  </form>
                </div>
              </div>
            </div>
            
		 </div>
        
<?php include('footer.php');?>