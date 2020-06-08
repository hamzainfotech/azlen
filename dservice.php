<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
<?php include('include/connect.php') ?>
  <?php if(!empty( $_GET['page_name'])) $link = $_GET['page_name'] ?>
  <?php if(!empty( $_GET['dservice_name'])) $page = $_GET['dservice_name'] ?>
  <?php if(empty( $_GET['page_name'])) $link = Null ?>
  <?php if(empty( $_GET['dservice_name'])) $page = Null ?>
  <?php

  $rows =mysqli_query($con,"SELECT * FROM service where slug='$page'  ORDER BY ordr" ) or die(mysqli_error($con));
  $n=0;

  while($row=mysqli_fetch_array($rows)){


    $name = $row['name']; 
    $metak = $row['metak']; 
    $metad = $row['metad']; 

  }?>
<title> <?php echo $name ?> - Services </title>
<meta name="keywords" content="<?php echo $metak ?>">
<meta name="description" content="<?php echo $metad ?>">
<?php include 'include/head.php'; ?>


</head>

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


</style>

<body class="body-wrapper">

  <div class="main_wrapper">
  <?php include 'include/header.php'; ?>
  <br>

  <?php if(!empty( $_GET['dservice_name'])){ ?>
  

  <?php

  $rows =mysqli_query($con,"SELECT * FROM service where slug='$page'  ORDER BY ordr" ) or die(mysqli_error($con));
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

    ?>
          
    <div class="container">
    <div class="wrapper row">
            <div class="preview col-md-6">
              
        
              
              
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
          <?php 
        $rowsx =mysqli_query($con,"SELECT * FROM simgs where pslug='$slug'  ORDER BY feat desc" ) or die(mysqli_error($con));
                $n=1;

                while($rowx=mysqli_fetch_array($rowsx)){
                  $pimg = $rowx['img']; 
                  $pordr = $rowx['ordr']; 
                  $pid = $rowx['id']; 
                  $pfeat = $rowx['feat']; 
                  ?>
      <li data-target="#myCarousel" data-slide-to="<?php echo $n; ?>" class="<?php if($n==1) echo 'active' ?>"></li>
      
                <?php $n++; } ?>
      
      
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        
        <?php 
        $rowsx =mysqli_query($con,"SELECT * FROM simgs where pslug='$slug'  ORDER BY feat desc" ) or die(mysqli_error($con));
                $n=1;

                while($rowx=mysqli_fetch_array($rowsx)){
                  $pimg = $rowx['img']; 
                  $pordr = $rowx['ordr']; 
                  $pid = $rowx['id']; 
                  $pfeat = $rowx['feat']; 
                  ?>
        
      <div class="item <?php if($n==1) echo 'active' ?>">
        <img src="images/services/<?php echo $pimg ?>" alt="Los Angeles" style="width:100%;">
      </div>

                <?php $n++; } ?>
      
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
 </div>
 
          <ul class="preview-thumbnail nav nav-tabs">
                <?php

                $rowsx =mysqli_query($con,"SELECT * FROM simgs where pslug='$slug'  ORDER BY feat desc" ) or die(mysqli_error($con));
                $n=1;

                while($rowx=mysqli_fetch_array($rowsx)){
                  $pimg = $rowx['img']; 
                  $pordr = $rowx['ordr']; 
                  $pid = $rowx['id']; 
                  $pfeat = $rowx['feat']; 
                  ?>

                <li class="<?php if($n==1) echo 'active' ?>"><a href="" data-target="#pic-<?php echo $n ?>" data-toggle="tab"><img src="images/services/<?php echo $pimg ?>" /></a></li>

                <?php $n++; } ?>
              </ul>
              

            </div>
            <div class="details col-md-6">
              <h3 class="product-title"><?php echo $name ?></h3>
              <?php echo $desp ?>
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


<br><br>

    <div class="brandSection clearfix">
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <div class="owl-carousel partnersLogoSlider">
              
            	<?php $rows =mysqli_query($con,"SELECT * FROM service ORDER BY ordr" ) or die(mysqli_error($con));
                $n=0;

                while($row=mysqli_fetch_array($rows)){

                    $name = $row['name'];
                     $slug = $row['slug'];
                     $id = $row['id'];
                     
                     $rowsx =mysqli_query($con,"SELECT * FROM simgs where pslug='$slug'  ORDER BY feat desc" ) or die(mysqli_error($con));
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
                  <a href="dservices-<?php echo $slug ?>"><img src="images/services/<?php echo $pimg ?>"></a>
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
    width: 150px  !important;
    height: 120px;
}
.brandSection {
    padding: 30px 0 5px;
    
}
    </style>
    

  <style type="text/css">
    

  #lightbox .modal-content {
      display: inline-block;
      text-align: center;   
  }


  #lightbox .close {
      opacity: 1;
      color: rgb(255, 255, 255);
      background-color: rgb(25, 25, 25);
      padding: 5px 8px;
      border-radius: 30px;
      border: 2px solid rgb(255, 255, 255);
      position: absolute;
      top: 5px;
      right: 5px;
      
      z-index:11999;
  }


.modal-dialog{
  margin: 0px !important;
}
.model{
  top: -130px;
}


#lightbox .modal-content {
    margin-left: 12px;
    margin-right: 12px;
    margin-top: 30px;
    margin-bottom: 15px;
  }

 

 .thumbnail{
  padding: 3px;
  margin-bottom: 20px;
  line-height: 1.42857143;
  background-color: #fff;
  border: 3px solid #105d05;
 }

  /*****************globals*************/

  img {
    max-width: 100%; }

  .preview {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -webkit-flex-direction: column;
        -ms-flex-direction: column;
            flex-direction: column; }
    @media screen and (max-width: 996px) {
      .preview {
        margin-bottom: 20px; } }

  .preview-pic {
    -webkit-box-flex: 1;
    -webkit-flex-grow: 1;
        -ms-flex-positive: 1;
            flex-grow: 1; }

  .preview-thumbnail.nav-tabs {
    border: none;
    margin-top: 15px; }
    .preview-thumbnail.nav-tabs li {
      width: 18%;
      margin-right: 2.5%; }
      .preview-thumbnail.nav-tabs li img {
        max-width: 100%;
        display: block; }
      .preview-thumbnail.nav-tabs li a {
        padding: 0;
        margin: 0; }
      .preview-thumbnail.nav-tabs li:last-of-type {
        margin-right: 0; }

  .tab-content {
    overflow: hidden; }
    .tab-content img {
      width: 100%;
      -webkit-animation-name: opacity;
              animation-name: opacity;
      -webkit-animation-duration: .3s;
              animation-duration: .3s; }

  .card {
    margin-top: 50px;
    background: #eee;
    padding: 3em;
    line-height: 1.5em; }

  @media screen and (min-width: 997px) {
    .wrapper {
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex; } }

  .details {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -webkit-flex-direction: column;
        -ms-flex-direction: column;
            flex-direction: column; }

  .colors {
    -webkit-box-flex: 1;
    -webkit-flex-grow: 1;
        -ms-flex-positive: 1;
            flex-grow: 1; }

  .product-title, .price, .sizes, .colors {
    text-transform: UPPERCASE;
    font-weight: bold; }

  .checked, .price span {
    color: #ff9f1a; }

  .product-title, .rating, .product-description, .price, .vote, .sizes {
    margin-bottom: 15px; }

  .product-title {
    margin-top: 0; }

  .size {
    margin-right: 10px; }
    .size:first-of-type {
      margin-left: 40px; }

  .color {
    display: inline-block;
    vertical-align: middle;
    margin-right: 10px;
    height: 2em;
    width: 2em;
    border-radius: 2px; }
    .color:first-of-type {
      margin-left: 20px; }

  .add-to-cart, .like {
    background: #ff9f1a;
    padding: 1.2em 1.5em;
    border: none;
    text-transform: UPPERCASE;
    font-weight: bold;
    color: #fff;
    -webkit-transition: background .3s ease;
            transition: background .3s ease; }
    .add-to-cart:hover, .like:hover {
      background: #b36800;
      color: #fff; }

  .not-available {
    text-align: center;
    line-height: 2em; }
    .not-available:before {
      font-family: fontawesome;
      content: "\f00d";
      color: #fff; }

  .orange {
    background: #ff9f1a; }

  .green {
    background: #85ad00; }

  .blue {
    background: #0076ad; }

  .tooltip-inner {
    padding: 1.3em; }

  @-webkit-keyframes opacity {
    0% {
      opacity: 0;
      -webkit-transform: scale(2);
              transform: scale(2); }
    100% {
      opacity: 1;
      -webkit-transform: scale(1);
              transform: scale(1); } }

  @keyframes opacity {
    0% {
      opacity: 0;
      -webkit-transform: scale(2);
              transform: scale(2); }
    100% {
      opacity: 1;
      -webkit-transform: scale(1);
              transform: scale(1); } }

  /*# sourceMappingURL=style.css.map */







  </style>


    <?php include 'include/footer.php'; ?>

    <script type="text/javascript">
      $(document).ready(function() {

          var $lightbox = $('#lightbox');
          
          $('[data-target="#lightbox"]').on('click', function(event) {
              var $img = $(this).find('img'), 
                  src = $img.attr('src'),
                  alt = $img.attr('alt'),
                  css = {
                      'minWidth': $(window).width()-50,
                      'maxHeight': $(window).height()-50
                  };
          
              $lightbox.find('.close').addClass('hidden');
              $lightbox.find('img').attr('src', src);
              $lightbox.find('img').attr('alt', alt);
              $lightbox.find('img').css(css);
          });
          
          $lightbox.on('shown.bs.modal', function (e) {
              var $img = $lightbox.find('img');
                  
              $lightbox.find('.modal-dialog').css({'width': $img.width()});
              $lightbox.find('.close').removeClass('hidden');
          });
      });


    </script>
</div>
</body>

</html>

