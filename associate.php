<html>
<head>
<?php include 'include/connect.php'; ?>
<?php if(!empty( $_GET['page_name'])) $link = $_GET['page_name'] ?>
<?php if(!empty( $_GET['cpage_name'])) $page = $_GET['cpage_name'] ?>
<?php if(empty( $_GET['page_name'])) $link = 'Null' ?>
<?php if(empty( $_GET['cpage_name'])) $page = Null ?>
<?php

$rows =mysqli_query($con,"SELECT * FROM pages where slug='associates' " ) or die(mysqli_error($con));


while($row=mysqli_fetch_array($rows)){

  $pageid = $row['id'];  
  $pagename = $row['name'];
  $pagemetak = $row['metak'];
  $pagemetad = $row['metad'];
  $pagepost = $row['post'];
  $pagecover = $row['cover'];
?>

<meta name="keywords" content="<?php echo $pagemetak ?>">
<meta name="description" content="<?php echo $pagemetad ?>">


<style>
    .hbg{
    width: auto;
    height:auto;
    background: linear-gradient(90deg, #49c32c, #105d05);
    position: absolute;
    left: 0px;
    padding: 10px 10px 0px 7%;
    color: #ffffff;
    
    }
    .pbg{
        background: #ffffff;
    padding: 3rem 4rem;
    box-shadow: 0px 0px 30px rgba(115, 128, 157, 0.1);
    -webkit-box-shadow: 10px 10px 50px rgba(115, 157, 116, 0.51);
    border-radius: 1.25rem;
    
    }
</style>

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
<body onload="showtoast()"  class="page-header-fixed bg-1 layout-boxed">
  <div class="modal-shiftfix">

<?php $link='associates' ;?>

    <?php include('include/header.php') ?>




  <div class="banner">
    <img src="images/covers/<?php echo $pagecover ?>" class="img-responsive" width="100%"> 
  </div> <!--banner ends-->


  <div class="content_top">
    <div class="container pbg">
        <h1><?php echo $pagename ?></h1>
        <?php echo $pagepost ?>
      </div>
  </div> 
  
 



   

<div class="space"></div>



  </div>


<?php include('include/footer.php') ?>

</body>
</html> 