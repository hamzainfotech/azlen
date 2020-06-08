<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>

  <?php include 'include/head.php'; ?>

  <title><?php echo $sitename ?></title>

  <?php if(empty($_GET['page_name'])) $link ='home';  ?>
  
  
  <style>
      
      ul > li > a > p > img{
          display:none;
      }
      
      ul > li > a > img{
          display:none;
      }
      
      
  </style>



</head>

<body class="body-wrapper">

  <div class="main_wrapper">

  <?php include 'include/header.php'; ?>
  

<?php 
$rows =mysqli_query($con,"SELECT * FROM slider  ORDER BY ordr" ) or die(mysqli_error($con));
    $n=0;

    while($row=mysqli_fetch_array($rows)){

      $name = $row['name']; 
      $img = $row['img']; 
      $ordr = $row['ordr']; 
      $id = $row['id']; 
        ?>
<div class="container" style="width: 99.8%">      
<div class="row" >
  <div class="col-md-6" style="padding: 0px; margin: 0px">
    <img src="images/slider/<?php echo $img ; ?>" style="width: 100%">
  </div>
  <div class="col-md-6" style="padding: 0px; margin: 0px; background: #000; padding: 50px;min-height: 470px" >

    <br>
    <br>
    <div class=""><span class="bb" style="color: #fff;font-size: 28px;"><?php echo $sitename; ?></span></div>
    <br>
    <br>
    <h2 style="font-size: 38px;color: #fff"><?php echo $name; ?> </h2>
    <br><br>

    <a href="products" class="borderbox"> View All Products</a>

    <br>
    <br>
    <br>
  </div>
</div>
</div>
<?php } ?>







    <?php

    $rows =mysqli_query($con,"SELECT * FROM home" ) or die(mysqli_error($con));
    $n=0;

    while($row=mysqli_fetch_array($rows)){

      $msg = $row['msg']; 
      $vidimg = $row['vidimg']; 
      $vid = $row['vid']; 
      $vidpost = $row['vidpost']; 

      }
    ?>


      <div class="container">

    <div class="" data-wow-delay="100ms" style="background-image: url(images/<?php echo $vidimg ?>);">


          

        <div class="paralax-text text-center">
         
         <?php echo $vidpost ?>

         <br><br>
         <br><br>

            <div class="row">
              <div class="col-md-4">
                <div> <a href="services" class="borderbox"> INSPIRATIONS </a></div>
         <br><br>

               </div> 
              <div class="col-md-4">
                <div> <a href="products" class="borderbox"> Products </a></div>
         <br><br>


              </div>
              <div class="col-md-4">
                <div> <a href="pages" class="borderbox"> Publications </a></div>
         <br><br>


              </div>
            </div>

         <br><br>
         
         <br><br>
          
        </div><!-- row -->
      </div><!-- container -->
    </div><!-- count -->


    <div class="container">
    <div class="latest-projects text-center">
              

                    
                    <div class="clearfix">&nbsp;</div>
               
                      <?php

       $rows =mysqli_query($con,"SELECT * FROM product WHERE feat=1  ORDER BY ordr" ) or die(mysqli_error($con));
    $n=0;

    while($row=mysqli_fetch_array($rows)){

      $name = $row['name'];
      $slug = $row['slug'];
      $desp = $row['desp'];
      $id = $row['id'];
      
      
      $rows2 =mysqli_query($con,"SELECT * FROM pimgs where feat=1 AND pid='$id'  ORDER BY ordr" ) or die(mysqli_error($con));
      $n=0;

      while($row2=mysqli_fetch_array($rows2)){

        $img = $row2['img'];

      }


      ?>
      
                            <a href="dproducts-<?php echo $slug ?>">
                    <div class="item col-md-3 col-12">
                        <div class="item-inner">
                            <div class="project-item">
                                <div class="img" style="min-height: 300px;"> <img src="images/products/<?php echo $img ?>"></div>
                                <div class="info-mask">
                                    <div class="mask-inner">
                                        <h4 class="title" style=""><?php echo $name ?>
                                          
                                          <i class="plus"></i>

                                        </h4>
                                        

                                        
                                        
                                    </div><!--//mask-inner-->
                                </div><!--//info-mask-->
                            </div>

                          <!--//project-item-->
                        </div><!--//item-inner-->
                    </div><!--//item-->
                                           </a>
               <?php } ?>
                </div> <!--//row-->
            </div><!--//latest-projects-->

 
<br>
<br>
<br>


     <section style="width: 98.8%; background: #505050">
          <?php

          $rows =mysqli_query($con,"SELECT * FROM home" ) or die(mysqli_error($con));
          $n=0;

          while($row=mysqli_fetch_array($rows)){

            $post = $row['post']; 
            $postimg = $row['img']; 


            }
          ?>
          
          <div class="row">

                <div class="col-md-4" style="padding: 0px">

                  <img src="images/<?php echo $postimg ?>" class="img-responsive"> 
                </div>
            
       	  <div class="col-md-6" style="padding: 0px"> 

                  <div style="padding: 60px;">
            <?php echo $post ?> 
          </div>
        

             
            	</div>
           </div>


    </section><!--//section-->

    <br><br>


    <div class="container">


  <div class="container">

    
    <div class="latest-products text-center">
    
    <h2>Publications</h2>
    
    <div class="clearfix">&nbsp;</div>
    
    

                    <div class="col-md-12 ">
                      <div class="posts-list">
<?php 
            $rows =mysqli_query($con,"SELECT * FROM childpages  ORDER BY ordr" ) or die(mysqli_error($con));


                while($row=mysqli_fetch_array($rows)){

                    $name = $row['name'];
                     $slug = $row['slug'];
                     $id = $row['id'];
                     $img = $row['cover'];
            
                  ?>
              <div class="col-md-4">
                <div class="partnersLogo clearfix">
                  <a href="products-<?php echo $slug ?>"><img src="images/covers/<?php echo $img ?>"></a>
                  <p style="color:black;"><?php echo $name ?></p>
                </div>
              </div>
              
              <?php } ?>
              
              </div>
          </div>
      </div>
  </div>


</div>

<div style="margin-bottom: 100px;"></div>





    <?php include 'include/footer.php'; ?>

</div>
</body>

</html>

