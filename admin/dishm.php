<?php include('./top.php');




$msg ="";	 


if(isset($_POST['submit'])){
    $Dname = mysqli_real_escape_string($con, $_POST["Dname"]);
    $fd = mysqli_real_escape_string($con, $_POST["fd"]);
   
  
    $fdisc = mysqli_real_escape_string($con, $_POST["disc"]);
    $regularp = mysqli_real_escape_string($con, $_POST["regularp"]);

    $ourp = mysqli_real_escape_string($con, $_POST["ourp"]);
    $cat1 = mysqli_real_escape_string($con, $_POST["cat1"]);
    $dishimg = $_FILES['dishimage'];
    $filename = $dishimg['name'];
    $filenametemp = $dishimg['tmp_name'];
    $error= $dishimg['error'];
    

        $valdation = array('jpg',"svg","png",'jpeg','mp4');
        

;
    $valcahck = explode('.',$filename);
    $checkstr = strtolower(end($valcahck));
    
$check =in_array($checkstr,$valdation);




if($check){
     
    $fiedest = '../images/' .$filename;
    // echo $filenametemp;
    // echo $fiedest;

    $fiedestss = 'images/' .$filename;
    move_uploaded_file($filenametemp,$fiedest);
    
    $selct ="SELECT * FROM `dish` WHERE dishname = '$Dname'";
    $selctquery = mysqli_query($con,$selct);
    if(mysqli_num_rows($selctquery)>0){
      $msg ="dish already exist";
    }
    else{

$sqls = "INSERT INTO `dish`(`dishname`, `dis_cat`, `dish_desc`, `dish_image`,`REGULARPRICE`, `OURPRICE`) VALUES ('$Dname','$cat1','$fd','$fiedestss','$regularp','$ourp')";

$sqlquerys = mysqli_query($con,$sqls);

if($sqlquerys){
  $msg ="dish added";
}

}

    
}

else {
  echo "<script>alert('not valid')</script>";
}
}   
       
//        else{
//         // if(in_array($valdation,$valcahck)){
//         //     $fiedest = '../spicyo/images'.$filename;
//         //     move_uploaded_file($filenametemp,$fiedest);
// //             echo "<pre>";
// //             print_r($valcahck);
// //             echo '<pre>';
// // ;
       
//        }


// } 

       
       

?>
<div class="row">
			<h1 class="grid_title ml10 ml15">Dish manegment</h1>
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">

                  <form class="forms-sample" method="post" action ="<?php echo $_SERVER["PHP_SELF"]?>"" enctype="multipart/form-data">
                    <div class="form-group">
                      <label for="exampleInputName1">Dish name</label>
                      <input type="text" class="form-control" placeholder="Dish name" name="Dname" required value="">
					  <div class="error mt8"><?php echo $msg ?></div>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail3" required>Food details</label>
                      <input type="textbox" class="form-control" placeholder="Food details" name="fd"  value="">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputEmail3" required>Food categories</label>
                      <select  name ="cat1" id="" class="form-control">Selected
                      <?php
                       $catsql = "SELECT * FROM `categorries` ";
                       $catsql_fetch = mysqli_query($con,$catsql);
                       if(mysqli_num_rows($catsql_fetch)>0){
                           while($row =mysqli_fetch_assoc($catsql_fetch)){
                             ?>
                             <option value="<?php echo $row['cat']?>" ><?php echo $row['cat']?></option>
                             <?php
                             

                           }
                       }
                      ?>
                      </select>
                      
                    </div>

                    <div class="form-group">
                      <label for="exampleInputEmail3" required>Food dec</label>
                      <input type="textbox" class="form-control" placeholder="Food details" name="disc"  value="">
                    </div>

                    
                    <div class="form-group">
                      <label for="exampleInputEmail3" required>Regular price</label>
                      <input type="textbox" class="form-control" placeholder="Food details" name="regularp"  value="">
                    </div>


                    
                    <div class="form-group">
                      <label for="exampleInputEmail3" required>our price</label>
                      <input type="textbox" class="form-control" placeholder="Food details" name="ourp"  value="">
                    </div>
                      <div class="form-group">
                      <label for="exampleInputEmail3" required>Food details</label>
                      <input type="file" class="form-control" placeholder="Order Number" name="dishimage"">
                    </div>
                    <button type="submit" class="btn btn-primary mr-2" name="submit">Submit</button>
                  </form>
                </div>
              </div>
            </div>
            
		 </div>
        
<?php include('footer.php');?>