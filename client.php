<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>

  <?php include 'include/head.php'; ?>

  <title>Clients Categories </title>


  <?php if(!empty( $_GET['page_name'])) $link = $_GET['page_name'] ?>
  <?php if(!empty( $_GET['client_name'])) $page = $_GET['client_name'] ?>
  <?php if(empty( $_GET['page_name'])) $link = Null ?>
  <?php if(empty( $_GET['client_name'])) $page = Null ?>





</head>

<body class="body-wrapper">

  <div class="main_wrapper" style="background-color: #dadada">
  <?php include 'include/header.php'; ?>
  
  <?php
  $rows =mysqli_query($con,"SELECT * FROM pages where slug='clients' " ) or die(mysqli_error($con));


while($row=mysqli_fetch_array($rows)){

  $pageid = $row['id'];  
  $pagename = $row['name'];
  $pagemetak = $row['metak'];
  $pagemetad = $row['metad'];
  $pagepost = $row['post'];
  $pagecover = $row['cover'];
  
}
?>


<br>
<br>



  <div class="container " style="background-color: #fff;padding: 20px">

    
    <div class="latest-projects">
    
    <span style="font-size: 28px; " class="bb">OUR BROCHURES</span>
    
    <div class="clearfix">&nbsp;</div>


    <?php

    $rows =mysqli_query($con,"SELECT * FROM clients  ORDER BY ordr" ) or die(mysqli_error($con));
    $n=0;

    while($row=mysqli_fetch_array($rows)){

      $name = $row['name'];
      $url = $row['url'];
      $img = $row['img'];
      $id = $row['id'];
      
  


      ?>

    <div class="row">
    
    <div class="col-md-2">
    </div>
            
  
    <div class="col-md-8 " style="padding: 20px; border: 1px solid grey">
            <a target="blank" href="pdf/<?php echo $img ?>">  <div class="bro">

                      <img style="float: right;" src="images/pdf.png">

                      <h4 class="heading1" style="    text-align: left;line-height: 40px"><?php echo $name ?></h4>

                    </div>
                  </a>
                     
    </div>
                
        
    
    <div class="col-md-2">
    </div> 



  </div>
  <br>

  <?php } ?>


  

  </div>
  

  </div>
  


    <?php include 'include/footer.php'; ?>

</div>
</body>

</html>

