<!-- <?php
include './top.php';


?> -->
<!-- body -->

<body class="main-layout">
    <!-- loader  -->
    <div class="loader_bg">
        <div class="loader"><img src="images/loading.gif" alt="" /></div>
    </div>

    <div class="wrapper">
    <!-- end loader -->

     <?php include './nav.php' ?>
    <!-- end header -->
    <!-- start slider section -->
    <div class="slider_section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="full">
                        <div id="main_slider" class="carousel vert slide" data-ride="carousel" data-interval="5000">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="slider_cont">
                                                <h3>Discover Restaurants<br>That deliver near You</h3>
                                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                                                <a class="main_bt_border" href="#">Order Now</a>
                                            </div>
                                        </div>
                                        <div class="col-md-7">
                                            <div class="slider_image full text_align_center">
                                                <img class="img-responsive" src="images/burger_slide.png" alt="#" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="slider_cont">
                                                <h3>Discover Restaurants<br>That deliver near You</h3>
                                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                                                <a class="main_bt_border" href="#">Order Now</a>
                                            </div>
                                        </div>
                                        <div class="col-md-7 full text_align_center">
                                            <div class="slider_image">
                                                <img class="img-responsive" src="images/burger_slide.png" alt="#" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
                                <i class="fa fa-angle-up"></i>
                            </a>
                            <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
                                <i class="fa fa-angle-down"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end slider section -->






 






    <!-- section -->
    <section class="resip_section">
        <div class="container">
            <div class="row">
         <div class="col-md-12">
       <div class="ourheading">
    <h2>Our Recipes</h2>
  </div>
</div>    
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="owl-carousel owl-theme">
                <?php
                $fetchfood = "SELECT * FROM `dish` limit 8 ";
                $fetchsql =mysqli_query($con , $fetchfood);

                if(mysqli_num_rows($fetchsql)>0){
                    while($row = mysqli_fetch_assoc($fetchsql)){
                    ?>  <div class="item">
                      
                        <a href="single_product.php?name=<?php echo $row['dishname']?>">
                        <div class="parent-product">
                        <div class="product_blog_img">
                             <img src="<?php echo $row['dish_image']?>" style ="height:200px; border-radius:50%;" alt="#" />
                         </div>
                         <div class="product_blog_cont">
                             <h3><?php echo $row['dishname']?></h3>
                             <h4><span class="theme_color">$</span><?php echo $row['OURPRICE']?></h4>
                         </div>
     
                    </a>
                         <!-- <div class="icon bg-whilte text-white d-flex justify-content-around">
     
                         <i class="fas fa-cart-plus fs-4"></i>
                         <i class="fas fa-bookmark fs-4"></i>
                             
                         </div> -->
                        </div>
                        </a>
                     </div>;<?php
                    }
                }

                ?>

              
                

            </div>
        </div>
    </div>
</div>
</div>
</div>
</section>
<div class="bg_bg">
<!-- about -->
<div class="about">
    <div class="container">
      <div class="row">
         <div class="col-md-12">
             <div class="title">
                <i><img src="images/title.png" alt="#"/></i>
                <h2>About Our Food & Restaurant</h2>
                <span>It is a long established fact that a reader will be distracted by the readable content of a
                   <br> page when looking at its layout. The point of using Lorem
                </span>
             </div>
          </div>
       </div>
       <div class="row">
         <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
             <div class="about_box">
                 <h3>Best Food</h3>
                 <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscureContrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard </p>
                 <a href="#">Read More <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
             </div>
         </div>
          <div class="col-xl-5 col-lg-5 col-md-10 col-sm-12 about_img_boxpdnt">
             <div class="about_img">
                 <figure><img src="images/about-img.jpg" alt="#/"></figure>
             </div>
         </div>      
       </div> 
    </div>
</div>
<!-- end about -->

<!-- blog -->
<div class="blog">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="title">
          <i><img src="images/title.png" alt="#"/></i>
          <h2>Our Blog</h2>
          <span>when looking at its layout. The point of using Lorem</span>
        </div>
      </div>
    </div>
    <div class="row">

    <?php
                
                $fetchfood = "SELECT * FROM `dish` limit 3; ";
                $fetchsql =mysqli_query($con , $fetchfood);
                if(mysqli_num_rows($fetchsql)>0){
                    while($row = mysqli_fetch_assoc($fetchsql)){
                       ?> <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 mar_bottom">
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
<!-- end blog -->

<!-- Our Client -->
<div class="Client">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="title">
          <i><img src="images/title.png" alt="#"/></i>
          <h2>Our Client</h2>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 offset-md-3">
         <div class="Client_box">
           <img src="images/client.jpg" alt="#"/>
           <h3>Roock Due</h3>
           <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don’t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn’t anything embarrassing hidden in the middle of text.</p>
           <i><img src="images/client_icon.png" alt="#"/></i>
         </div>
      </div>
    </div>
  </div>
</div>  
<!-- end Our Client -->
</div>
    <!-- footer -->
    <?php include 'footer.php' ?>
</body>

</html>