<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>

  <?php include 'include/head.php';
  
  			
  			function truncateString($str, $chars, $to_space, $replacement="...") {
   if($chars > strlen($str)) return $str;

   $str = substr($str, 0, $chars);
   $space_pos = strrpos($str, " ");
   if($to_space && $space_pos >= 0) 
       $str = substr($str, 0, strrpos($str, " "));

   return($str . $replacement);
}
?>
  <title>Products - <?php echo $sitename ?> </title>


  <?php if(!empty( $_GET['page_name'])) $link = $_GET['page_name'] ?>
  <?php if(!empty( $_GET['product_name'])) $page = $_GET['product_name'] ?>
  <?php if(empty( $_GET['page_name'])) $link = Null ?>
  <?php if(empty( $_GET['product_name'])) $page = Null ?>

</head>

<body class="body-wrapper">
    

  <div class="main_wrapper" style="background-color: #d4d4d4">
  <?php include 'include/header.php'; ?>

  <?php if(!empty( $_GET['product_name'])){ ?>
 
  <div class="row" style="width: 98%">


          <div class="col-md-4">

            <div class="sidebar">

              <span style="font-size: 20px; color: #fff; padding-bottom: 10px;" class="bb"> Spaces: </span>
              <div style="padding: 20px;">
                 <?php 
       $rows =mysqli_query($con,"SELECT * FROM productcat ORDER BY ordr" ) or die(mysqli_error($con));
    $n=0;

    while($row=mysqli_fetch_array($rows)){

      $name = $row['name'];
      $slug = $row['slug'];?>
      <a class="sidelink" href="products-<?php echo $slug ?>"> <?php echo $name ?></a> <br>
    <?php } ?>
  </div>

  <br><br>
              <span style="font-size: 20px; color: #fff; padding-bottom: 10px;" class="bb"> Groups: </span>
              <div style="padding: 20px;">
                 <?php 
       $rows =mysqli_query($con,"SELECT * FROM brands ORDER BY ordr" ) or die(mysqli_error($con));
    $n=0;

    while($row=mysqli_fetch_array($rows)){

      $name = $row['name'];
      $id = $row['id'];?>
      <a class="sidelink" href="sproducts-<?php echo $id ?>"> <?php echo $name ?></a> <br>
    <?php } ?>
  </div>






            </div>

          </div>
          <div class="col-md-8">

    <div class="pscroll">

    <div class="latest-products child">
        
    <div class="clearfix">&nbsp;</div>
      <div class="row">

     
        <?php 
       $rows =mysqli_query($con,"SELECT * FROM product where pslug='$page'  ORDER BY ordr" ) or die(mysqli_error($con));
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
                        <div class="item-inner" style="background-color: #fff">
                            <div class="project-item">
                                <div class="img" style="min-height:200px;"> <img style="width: 100%" src="images/products/<?php echo $img ?>"></div>
                                <div class="info-mask" style="padding: 20px 10px; background: #fff; border-top: 1px solid grey">
                                    <div class="mask-inner">
                                        <h4 class="title" style=""><?php echo $name ?>
                                          
                                          <i class="plus"></i>

                                        </h4>
                                        

                                        
                                        
                                    </div><!--//mask-inner-->
                                </div><!--//info-mask-->
                            </div>


                          <!--//project-item-->
                        </div><!--//item-inner-->
                                           <br>

                    </div><!--//item-->

                                           </a>
               <?php } ?>



          </div>


      </div>
    </div>  <!-- PScroll -->
    </div>
  </div>
<?php } ?>





  <?php if(empty($_GET['product_name'])){ ?>
 
  <div class="row" style="width: 98%">


          <div class="col-md-4">

            <div class="sidebar">

              <span style="font-size: 20px; color: #fff; padding-bottom: 10px;" class="bb"> Spaces: </span>
              <div style="padding: 20px;">
                 <?php 
       $rows =mysqli_query($con,"SELECT * FROM productcat ORDER BY ordr" ) or die(mysqli_error($con));
    $n=0;

    while($row=mysqli_fetch_array($rows)){

      $name = $row['name'];
      $slug = $row['slug'];?>
      <a class="sidelink" href="products-<?php echo $slug ?>"> <?php echo $name ?></a> <br>
    <?php } ?>
  </div>

  <br><br>
              <span style="font-size: 20px; color: #fff; padding-bottom: 10px;" class="bb"> Groups: </span>
              <div style="padding: 20px;">
                 <?php 
       $rows =mysqli_query($con,"SELECT * FROM brands ORDER BY ordr" ) or die(mysqli_error($con));
    $n=0;

    while($row=mysqli_fetch_array($rows)){

      $name = $row['name'];
      $id = $row['id'];?>
      <a class="sidelink" href="sproducts-<?php echo $id ?>"> <?php echo $name ?></a> <br>
    <?php } ?>
  </div>






            </div>

          </div>
          <div class="col-md-8">

    <div class="pscroll">

    <div class="latest-products child">
        
    <div class="clearfix">&nbsp;</div>
      <div class="row">


     
        <?php 
       $rows =mysqli_query($con,"SELECT * FROM product ORDER BY ordr" ) or die(mysqli_error($con));
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
                        <div class="item-inner" style="background-color: #fff">
                            <div class="project-item">
                                <div class="img" style="min-height:200px;"> <img style="width: 100%" src="images/products/<?php echo $img ?>"></div>
                                <div class="info-mask" style="padding: 20px 10px; background: #fff; border-top: 1px solid grey">
                                    <div class="mask-inner">
                                        <h4 class="title" style=""><?php echo $name ?>
                                          
                                          <i class="plus"></i>

                                        </h4>
                                        

                                        
                                        
                                    </div><!--//mask-inner-->
                                </div><!--//info-mask-->
                            </div>


                          <!--//project-item-->
                        </div><!--//item-inner-->
                                           <br>

                    </div><!--//item-->

                                           </a>
               <?php } ?>



          </div>

    <!--
	                	<div class="col-md-12 ">
		                	<div class="posts-list">
<?php $rows =mysqli_query($con,"SELECT * FROM productcat ORDER BY ordr" ) or die(mysqli_error($con));
                $n=0;

                while($row=mysqli_fetch_array($rows)){

                    $name = $row['name'];
                     $slug = $row['slug'];
                     $id = $row['id'];
                     $img = $row['img'];
            
                  ?>
              <div class="col-md-4">
                <div class="partnersLogo clearfix">
                  <a href="products-<?php echo $slug ?>"><img src="images/products/<?php echo $img ?>"></a>
                  <p style="color:black;"><?php echo $name ?></p>
                </div>
              </div>
              
              <?php } ?>
              
              </div>
          </div>

        -->
      </div>
    </div>  <!-- PScroll -->
    </div>
  </div>

<?php } ?>





    <?php include 'include/footer.php'; ?>

</div>
</body>

</html>

