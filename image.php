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

  <title>Gallery Images  </title>


  <?php if(!empty( $_GET['page_name'])) $link = $_GET['page_name'] ?>
  <?php if(!empty( $_GET['image_name'])) $page = $_GET['image_name'] ?>
  <?php if(empty( $_GET['page_name'])) $link = Null ?>
  <?php if(empty( $_GET['image_name'])) $page = Null ?>

</head>

<body class="body-wrapper">
    

  <div class="main_wrapper">
  <?php include 'include/header.php'; ?>

  <?php if(!empty( $_GET['image_name'])){ ?>
 
  <div class="container">

    
    <div class="latest-images text-center">
    
    <h2>images</h2>
    
    <div class="clearfix">&nbsp;</div>
    
    

	                	<div class="row ">


    <?php

    $rows =mysqli_query($con,"SELECT * FROM images where catslug='$page'  ORDER BY ordr" ) or die(mysqli_error($con));
    $n=0;

    while($row=mysqli_fetch_array($rows)){

      $name = $row['name'];
      $img = $row['img'];
      $url = $row['url'];


      ?>

                   <div class="item col-md-4">
                       <div class="item-inner">
                                     <br>



                             <div class="img">
                                <center>

                               <figure id="fig1">
                                <a href="<?php echo $url ?>">
                                 <img  class="simg" src="images/images/<?php echo $img ?>" alt="" id="img1" />
                               </a>
                               </figure>
                             </center>

                             </div>
                             
                                     <h4 class="heading1"><?php echo $name ?></h4>
                             <br>

                               
                               
                       </div>
                       </div>
                                  
                    <?php $n++; $img='Null'; } ?>
                    
            </div>
            </div>
                      
        </div><!--//images-->
    </div><!--//containers-->
<?php } ?>


    <br>
    <br>




  <?php if(empty($_GET['image_name'])){ ?>
 
  <div class="container">

    
    <div class="latest-images text-center">
    
    <h2>image Categories</h2>
    
    <div class="clearfix">&nbsp;</div>
    
    

	                	<div class="col-md-12 ">
		                	<div class="posts-list">
<?php $rows =mysqli_query($con,"SELECT * FROM imagescat ORDER BY ordr" ) or die(mysqli_error($con));
                $n=0;

                while($row=mysqli_fetch_array($rows)){

                    $name = $row['name'];
                     $slug = $row['slug'];
                     $id = $row['id'];
                     $img = $row['img'];
            
                  ?>
              <div class="col-md-4">
                <div class="partnersLogo clearfix">
                  <a href="images-<?php echo $slug ?>"><img src="images/images/<?php echo $img ?>"></a>
                  <p style="color:black;"><?php echo $name ?></p>
                </div>
              </div>
              
              <?php } ?>
              
              </div>
          </div>
      </div>
  </div>

<?php } ?>


    <br>
    <br>
    <br>
    
    
    <div class="brandSection clearfix">
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <div class="owl-carousel partnersLogoSlider">
              
            	<?php $rows =mysqli_query($con,"SELECT * FROM images ORDER BY ordr" ) or die(mysqli_error($con));
                $n=0;

                while($row=mysqli_fetch_array($rows)){

                    $name = $row['name'];
                     $url = $row['url'];
                     $img = $row['img'];
                     $id = $row['id'];
     

                     

                  ?>
              <div class="slide">
                <div class="partnersLogo clearfix">
                  <a href="<?php echo $url ?>"><img src="images/images/<?php echo $img ?>"></a>
                  <p style="color:black;"><?php echo $name ?></p>
                </div>
              </div>
              
              <?php } ?>
              
            </div>
          </div>
        </div>
      </div>
    </div><!-- Brand-section -->
    
    <style>
    .partnersLogoSlider .slide .partnersLogo img {
    width: 150px !important;
    height: 120px;
}
.brandSection {
    padding: 30px 0 5px;
    
}
    </style>





    <?php include 'include/footer.php'; ?>

</div>
</body>

</html>

