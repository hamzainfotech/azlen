<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
<?php include('include/connect.php') ?>
  <?php if(!empty( $_GET['page_name'])) $link = $_GET['page_name'] ?>
  <?php if(!empty( $_GET['dproduct_name'])) $page = $_GET['dproduct_name'] ?>
  <?php if(empty( $_GET['page_name'])) $link = Null ?>
  <?php if(empty( $_GET['dproduct_name'])) $page = Null ?>
  <?php

  $rows =mysqli_query($con,"SELECT * FROM product where slug='$page'  ORDER BY ordr" ) or die(mysqli_error($con));
  $n=0;

  while($row=mysqli_fetch_array($rows)){


    $name = $row['name']; 
    $metak = $row['metak']; 
    $metad = $row['metad']; 

  }?>
<title> <?php echo $name ?> - products </title>
<meta name="keywords" content="<?php echo $metak ?>">
<meta name="description" content="<?php echo $metad ?>">
<?php include 'include/head.php'; ?>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css">

<style>
    
    .nav-tabs>li {
    float: left;
    margin-bottom: -1px;
    height: 80px;
    width: 96px !important;
}

 ul {
    list-style-type: disc;
}

.ekko-lightbox a{
opacity: 1 !important;
}


</style>


</head>

<body class="body-wrapper">

  <div class="main_wrapper">
  <?php include 'include/header.php'; ?>
  <br>

  <?php if(!empty( $_GET['dproduct_name'])){ ?>
  

  <?php

  $rows =mysqli_query($con,"SELECT * FROM product where slug='$page'  ORDER BY ordr" ) or die(mysqli_error($con));
  $n=0;

  while($row=mysqli_fetch_array($rows)){

    $slug = $row['slug']; 
    $name = $row['name']; 
    $metak = $row['metak']; 
    $metad = $row['metad']; 
    $ordr = $row['ordr']; 
    $id = $row['id']; 
    $feat = $row['feat']; 
    $desp = $row['desp']; 
    $pdf = $row['pdf']; 

    ?>
          
    <div class="container" style="background-color: #505050; width: 100%">
    <div class="wrapper row">
            <div class="preview col-md-4" style="background-color: #fff;min-height: 450px">
              

              <div class="container">

  <div class="row">

       <?php 
        $rowsx =mysqli_query($con,"SELECT * FROM pimgs where pslug='$slug' && feat=1  ORDER BY feat desc" ) or die(mysqli_error($con));
                $n=1;

                while($rowx=mysqli_fetch_array($rowsx)){
                  $pimg = $rowx['img']; 
                  $pordr = $rowx['ordr']; 
                  $pid = $rowx['id']; 
                  $pfeat = $rowx['feat']; 
                  
                  ?>

    <a href="images/products/<?php echo $pimg ?>" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
      <img src="images/products/<?php echo $pimg ?>" style="width: 100%">
    </a>

        <?php } ?>


  </div>
  <div class="row">

       <?php 
        $rowsx =mysqli_query($con,"SELECT * FROM pimgs where pslug='$slug'  ORDER BY feat desc" ) or die(mysqli_error($con));
                $n=1;

                while($rowx=mysqli_fetch_array($rowsx)){
                  $pimg = $rowx['img']; 
                  $pordr = $rowx['ordr']; 
                  $pid = $rowx['id']; 
                  $pfeat = $rowx['feat']; 
                  ?>

    <a href="images/products/<?php echo $pimg ?>" data-toggle="lightbox" data-gallery="gallery" class="col-md-1">
      <img src="images/products/<?php echo $pimg ?>" class="img-fluid rounded">
    </a>

        <?php } ?>


  </div>
</div>
        
              


            </div>
            <div class="details col-md-8" style="padding: 2%">
              <h3 class="product-title" style="color: #fff"><?php echo $name ?></h3>
              <br><span style="font-size: 18px;color: #fff">Description:</span>
              <div style="padding-left: 20px;">
              <?php echo $desp ?>
            </div>
            <br>
            <a target="blank" href="pdf/<?php echo $pdf ?>" class="borderbox"> View Documentation </a>
            </div>
          </div>
     </div>



 <div id="lightbox" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
         <div class="modal-dialog">
             <div class="modal-content">
              <button type="button" class="close hidden" data-dismiss="modal" aria-hidden="true">×</button>
                 <div class="modal-body">
                     <img src="" alt="" />
                 </div>
             </div>
         </div>
     </div>


  <?php } } ?>

<div style="background-color: #000; text-align:   ;padding: 20px;">
  <span style="font-size: 25px;color: #fff">Related Products:</span>
</div>

<br><br>

 <div class="container">
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
                                <div class="img" style="min-height:300px;"> <img style="width: 100%" src="images/products/<?php echo $img ?>"></div>
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
<br><br>

    <div class="brandSection clearfix" style="display: none">
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <div class="owl-carousel partnersLogoSlider">
              
            	<?php $rows =mysqli_query($con,"SELECT * FROM product ORDER BY ordr limit 5" ) or die(mysqli_error($con));
                $n=0;

                while($row=mysqli_fetch_array($rows)){

                    $name2 = $row['name'];
                     $slug2 = $row['slug'];
                     $id = $row['id'];
                     
                     
                     
        $rowsx =mysqli_query($con,"SELECT * FROM pimgs where pslug='$slug2' && feat='1'  ORDER BY feat desc" ) or die(mysqli_error($con));
                $n=1;

                while($rowx=mysqli_fetch_array($rowsx)){
                  $pimg = $rowx['img']; 
                  $pordr = $rowx['ordr']; 
                  $pid = $rowx['id']; 
                  $pfeat = $rowx['feat']; 
                }
                
                

                  ?>
              <div class="slide">
                <div class="partnersLogo clearfix">
                  <a href="dproducts-<?php echo $slug2 ?>"><img src="images/products/<?php echo $pimg ?>" ></a>
                  <p style="color:black;"><?php echo $name2 ?></p>
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
    width: 150px  !important;
    height: 120px;
}
.brandSection {
    padding: 30px 0 5px;
    
}
    </style>   






    <?php include 'include/footer.php'; ?>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.min.js"></script>

    <script type="text/javascript">
     
     $(document).on("click", '[data-toggle="lightbox"]', function(event) {
  event.preventDefault();
  $(this).ekkoLightbox();
});
    </script>
</div>
</body>

</html>

