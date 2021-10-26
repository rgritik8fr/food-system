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
                
                $fetchfood = "SELECT * FROM `dish`";
                $fetchsql =mysqli_query($con , $fetchfood);
                if(mysqli_num_rows($fetchsql)>0){
                    while($row = mysqli_fetch_assoc($fetchsql)){

                     ?>   <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 mar_bottom my-3">
                        <a href="single_blog.php?blogname=<?php echo $row['dishname']?>">
                        <div class="blog_box">
                          <div class="blog_img_box">
                            <figure><img src="<?php echo $row['dish_image']?>" style ="height:200px; alt="#"/>
                             <span>02 FEB 2019</span>
                            </figure>
                          </div>
                          <h3><?php echo $row['dishname']?> </h3>
                <p>
                <?php echo $row['dish_desc']?>
                </p>        </div>
                        </a>
                      </div><?php
                    }
                }
                       ?>
      
     
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