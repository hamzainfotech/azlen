<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>

  <?php include 'include/head.php'; ?>

  <title>Inspiration</title>


  <?php if(!empty( $_GET['page_name'])) $link = $_GET['page_name'] ?>
  <?php if(!empty( $_GET['service_name'])) $page = $_GET['service_name'] ?>
  <?php if(empty( $_GET['page_name'])) $link = Null ?>
  <?php if(empty( $_GET['service_name'])) $page = Null ?>

</head>

<body class="body-wrapper">
    
    
    




  <div class="main_wrapper" style="background-color: #d4d4d4">
  <?php include 'include/header.php'; ?>

  <?php if(empty( $_GET['service_name'])){ ?>
  
  

    <div class="container">
    <div class="latest-projects">
              

                    
                    <div class="clearfix">&nbsp;</div>
               
                      <?php

       $rows =mysqli_query($con,"SELECT * FROM service WHERE feat=1  ORDER BY ordr" ) or die(mysqli_error($con));
    $n=0;

    while($row=mysqli_fetch_array($rows)){

      $name = $row['name'];
      $slug = $row['slug'];
      $desp = $row['desp'];
      $id = $row['id'];
      
      
      $rows2 =mysqli_query($con,"SELECT * FROM simgs where feat=1 AND pid='$id'  ORDER BY ordr" ) or die(mysqli_error($con));
      $n=0;

      while($row2=mysqli_fetch_array($rows2)){

        $img = $row2['img'];

      }


      ?>
      
                            <a href="dservices-<?php echo $slug ?>">
                    <div class="item col-md-3 col-12">
                        <div class="item-inner">
                            <div class="project-item">
                                <div class="img" style="min-height:;"> <img style="width: 100%" src="images/services/<?php echo $img ?>"></div>
                                <div class="info-mask" style="padding: 20px 10px; background: #fff">
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
    
    
    <?php } ?>
    <?php include 'include/footer.php'; ?>

</div>
</body>

</html>

