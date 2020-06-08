<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>


  <?php if(!empty( $_GET['page_name'])) $link = $_GET['page_name'] ?>
  <?php if(!empty( $_GET['tdvideo_name'])) $page = $_GET['tdvideo_name'] ?>
  <?php if(empty( $_GET['page_name'])) $link = Null ?>
  <?php if(empty( $_GET['tdvideo_name'])) $page = Null ?>
 
<?php include 'include/head.php'; ?>

<title> Videos  <?php echo $sitename ?> </title>
  

</head>

<body class="body-wrapper">

  <div class="main_wrapper">
      
  <?php include 'include/header.php'; ?>
  <br>




  <?php if(!empty($page)){ ?>
 
  <div class="row" style="width: 98%">


          <div class="col-md-4">

            <div class="sidebar">

              <span style="font-size: 20px; color: #fff; padding-bottom: 10px;" class="bb"> Videos: </span>
              <div style="padding: 20px;">
                 <?php 
       $rows =mysqli_query($con,"SELECT * FROM tvideoscat ORDER BY ordr" ) or die(mysqli_error($con));
    $n=0;

    while($row=mysqli_fetch_array($rows)){

      $name = $row['name'];
      $id = $row['id'];?>
      <a class="sidelink" href="tvideos-<?php echo $id ?>"> <?php echo $name ?></a> <br>
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
       $rows =mysqli_query($con,"SELECT * FROM tvideos where id=$page ORDER BY ordr" ) or die(mysqli_error($con));
    $n=0;

    while($row=mysqli_fetch_array($rows)){

      $name = $row['name'];
      $catslug = $row['catslug'];
      $id = $row['id'];
      $url = $row['url'];

      $img = $row['img'];


      ?>
      
        <?php echo $url ?>
                       <div class="mask-inner text-center">
                                        <h4 class="title" style=""><?php echo $name ?>
                                          


                                        </h4>
                                        

                                        
                                        
                                    </div><!--//mask-inner-->


                                    <br>
                                    <br>
                                    
                                    <hr>
                                    <br>



               <?php } ?>



          </div>




    <div class="clearfix">&nbsp;</div>
      <div class="row">


     
        <?php 
       $rows =mysqli_query($con,"SELECT * FROM tvideos ORDER BY ordr" ) or die(mysqli_error($con));
    $n=0;

    while($row=mysqli_fetch_array($rows)){

      $name = $row['name'];
      $catslug = $row['catslug'];
      $id = $row['id'];

      $img = $row['img'];


      ?>
      
                            <a href="tdvideos-<?php echo $id ?>">
                    <div class="item col-md-6 col-12">
                        <div class="item-inner" style="background-color: #fff">
                            <div class="project-item">
                                <div class="img" style="min-height:200px;"> 

                                  <div class="play"><i class="fa fa-play playicon"></i></div>
                                  <img style="width: 100%" src="images/images/<?php echo $img ?>"></div>
                                <div class="info-mask" style="padding: 20px 10px; background: #fff; border-top: 1px solid grey">
                                    <div class="mask-inner text-center">
                                        <h4 class="title" style=""><?php echo $name ?>
                                          


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




  <?php if(empty($_GET['dvideo_name'])){ ?>
 
  <div class="row" style="width: 98%">


          <div class="col-md-4">

            <div class="sidebar">

              <span style="font-size: 20px; color: #fff; padding-bottom: 10px;" class="bb"> Videos: </span>
              <div style="padding: 20px;">
                 <?php 
       $rows =mysqli_query($con,"SELECT * FROM tvideoscat ORDER BY ordr" ) or die(mysqli_error($con));
    $n=0;

    while($row=mysqli_fetch_array($rows)){

      $name = $row['name'];
      $id = $row['id'];?>
      <a class="sidelink" href="tvideos-<?php echo $id ?>"> <?php echo $name ?></a> <br>
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
       $rows =mysqli_query($con,"SELECT * FROM tvideos ORDER BY ordr" ) or die(mysqli_error($con));
    $n=0;

    while($row=mysqli_fetch_array($rows)){

      $name = $row['name'];
      $catslug = $row['catslug'];
      $id = $row['id'];

      $img = $row['img'];


      ?>
      
                            <a href="tdvideos-<?php echo $id ?>">
                    <div class="item col-md-6 col-12">
                        <div class="item-inner" style="background-color: #fff">
                            <div class="project-item">
                                <div class="img" style="min-height:200px;"> 

                                  <div class="play"><i class="fa fa-play playicon"></i></div>
                                  <img style="width: 100%" src="images/images/<?php echo $img ?>"></div>
                                <div class="info-mask" style="padding: 20px 10px; background: #fff; border-top: 1px solid grey">
                                    <div class="mask-inner text-center">
                                        <h4 class="title" style=""><?php echo $name ?>
                                          


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


  

    <?php include 'include/footer.php'; ?>



</div>
</body>

</html>

