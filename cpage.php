<html>
<head>
<?php include 'include/connect.php'; ?>
<?php if(!empty( $_GET['page_name'])) $link = $_GET['page_name'] ?>
<?php if(!empty( $_GET['cpage_name'])) $page = $_GET['cpage_name'] ?>
<?php if(empty( $_GET['page_name'])) $link = 'Null' ?>
<?php if(empty( $_GET['cpage_name'])) $page = Null ?>
<?php

$rows =mysqli_query($con,"SELECT * FROM pages where slug='$page'  ORDER BY ordr" ) or die(mysqli_error($con));


while($row=mysqli_fetch_array($rows)){

  $pageid = $row['id'];  
  $pagename = $row['name'];
  $pagemetak = $row['metak'];
  $pagemetad = $row['metad'];
  $pagepost = $row['post'];
  $pagecover = $row['cover'];
  $pageordr = $row['ordr'];
?>

<meta name="keywords" content="<?php echo $pagemetak ?>">
<meta name="description" content="<?php echo $pagemetad ?>">

<title>
  <?php echo $pagename ?> - NDC
</title>

<?php } ?>

  <?php include('include/head.php') ?>


<style type="text/css">
  
  #catimg{
    height: 100px;
    width:  200px;
  }

  #catimg1{
    width:  200px;
  }  
  #ccatimg{
    height: 70px;
    width:  150px;
  }

  #ccatimg1{
    width:  120px;
  }

</style>

</head>
<body  class="page-header-fixed bg-1 layout-boxed">
  <div class="modal-shiftfix">



    <?php include('include/header.php') ?>

<?php if (!empty($page)) {


  ?>



  <?php

  $rows =mysqli_query($con,"SELECT * FROM childpages where slug='$page'  ORDER BY ordr" ) or die(mysqli_error($con));
  

  while($row=mysqli_fetch_array($rows)){

    $pageid = $row['id'];  
    $pagename = $row['name'];
    $pagemetak = $row['metak'];
    $pagemetad = $row['metad'];
    $pagepost = $row['post'];
    $pagecover = $row['cover'];
    $pageordr = $row['ordr'];

  }

  ?>


  <div class="banner">
    <img src="images/covers/<?php echo $pagecover ?>" class="img-responsive" width="100%"> 
  </div> <!--banner ends-->


  <div class="content_top">
    <div class="container">
        <h1><?php echo $pagename ?></h1>
        <?php echo $pagepost ?>
      </div>
  </div> <!--content_top ends-->
  

     <br><br>


  <?php } ?>

   

<div class="space"></div>



  </div>


<?php include('include/footer.php') ?>

</body>
</html> 