<?php
include './top.php';


?>
<!-- body -->

<body class="main-layout blog_page">
    <!-- loader  -->
    <div class="loader_bg">
        <div class="loader"><img src="images/loading.gif" alt="" /></div>
    </div>

    <div class="wrapper">
    <!-- end loader -->

 <?php include 'nav.php' ?>
    <!-- end header -->
<div class="yellow_bg">
   <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="title">
                     <h2>Our Blog</h2>
                    
                  </div>
               </div>
            </div>
          </div>
</div>

<!-- blog -->
<div class="blog">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="title">
          <i><img src="images/title.png" alt="#"/></i>
          
          <span>when looking at its layout. The point of using Lorem</span>
        </div>
      </div>
    </div>
    <div class="row">
    <?php
                
               
                if(isset($_GET['blogname'])){
                  $id =$_GET['blogname'];
                  $fetchfood = "SELECT * FROM `dish` where dishname = '$id'";
                              $fetchsql =mysqli_query($con , $fetchfood);
                              if(mysqli_num_rows($fetchsql)>0){
                                $row = mysqli_fetch_assoc($fetchsql);

                                ?>  <div class="container-fluid my-5">
  
                                <img class="w-100 my-3" style="height:500px; object-fit:contain;" src='<?php echo $row['dish_image']?>' />
                              
                              
                                <h1 class="font-weight-bold text-dark text-center my-3">1.<?php echo $row['dishname']?></h1>
                                
                                <div style="max-width: 700px; top: -80px;" class="mx-auto text-secondary">
                                  <p class="my-2" style="line-height: 2;"><?php echo $row['dish_desc']?></p>
                                  <br>
                              
                                  <h3 class="font-weight-bold text-dark">#1. What is Lorem Ipsum?</h3>
                                  <p class="my-2" style="line-height: 2;"><?php echo $row['dish_desc']?></p>
                                  <br>    
                                  
                                  
                                </div>
                              </div>
                              
                              
                                   
                                  </div>
                                </div>
                              </div><?php
}
                      
                          }?>
              
      
     
    </div>
  </div>
</div>
<!-- end blog -->


    <!-- footer -->
    <?php
include './footer.php';


?>
</body>

</html>