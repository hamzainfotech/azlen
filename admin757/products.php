<html>
<head>

  <?php include('include/head.php') ?>


  <title>
    products
  </title>

  <?php if(!empty( $_GET['page_name'])) $link = $_GET['page_name'] ?>
  <?php if(!empty( $_GET['product_name'])) $page = $_GET['product_name'] ?>
  <?php if(empty( $_GET['page_name'])) $link = 'Null' ?>

  <?php


  for ($i=0; $i < 100 ; $i++) { 

    if(isset($_POST['savecat'.$i])){
      $msg="Unsuccessful" ;

      $id=$_POST['savecat'.$i];
      $name=$_POST['name'.$i];
      $slug1=$_POST['slug'.$i];
      $desp=$_POST['desp'.$i];
      $ordr=$_POST['ordr'.$i];

      $slug2=preg_replace('/[^A-Za-z0-9-]+/', '-', $slug1);
      $slug=strtolower($slug2);

      if (!empty($_FILES['img'.$i]['name'])) {
          
        // Get image name
        $image = $_FILES['img'.$i]['name'];
        $image = md5(uniqid())  . "1.png";
        
        // image file directory
        $target = "../images/products/".basename($image);

        $data=mysqli_query($con,"UPDATE productcat SET `img`='$image' where `id`='$id'")or die( mysqli_error($con) );

        if (move_uploaded_file($_FILES['img'.$i]['tmp_name'], $target)) {
          $msg = "Image uploaded successfully";
        }else{
          $msg = "Failed to upload image";
        }


      }



      $sql = "UPDATE productcat SET `name` = '$name',`slug` = '$slug',`desp` = '$desp',`ordr` = '$ordr' WHERE `id` =$id";

      mysqli_query($con, $sql) ;
      ($msg=mysqli_error($con));
      if(empty($msg))  $msg="Updated";
      header("location:products-$slug");


    }

  }



  for ($i=0; $i < 100 ; $i++) { 

    if(isset($_POST['delcat'.$i])){
      $msg="Unsuccessful" ;

      $id=$_POST['delcat'.$i];

       $rows =mysqli_query($con,"SELECT img FROM productcat where id='$id'  ORDER BY ordr" ) or die(mysqli_error($con));
       while($row=mysqli_fetch_array($rows)){
         $img = $row['img']; 
         unlink("../images/products/".$img);
         }
  
      $sql = "DELETE FROM productcat WHERE id=$id ";

      $rows =mysqli_query($con,"SELECT id FROM product where pid='$id'  ORDER BY ordr" ) or die(mysqli_error($con));
       while($row=mysqli_fetch_array($rows)){
                 $pid = $row['id']; 

      $rowsx =mysqli_query($con,"SELECT img FROM pimgs where pid='$pid'  ORDER BY ordr" ) or die(mysqli_error($con));
       while($rowx=mysqli_fetch_array($rowsx)){
                 $img = $rowx['img']; 
         unlink("../images/products/".$img);

      $sql = "DELETE FROM pimg WHERE pid=$pid  ";
      mysqli_query($con, $sql) ;
       }


     }

      mysqli_query($con, $sql) ;
      $sql = "DELETE FROM product WHERE pid=$id  ";

      mysqli_query($con, $sql) ;
      ($msg=mysqli_error($con));

      if(empty($msg))  $msg="product Category Deleted";

            header("location:products");


      }

  }




  
  ?>



  <?php
  if(isset($_POST['addcat'])){

      $msg="Unsuccessful" ;
      
       $name=$_POST['newname'];
       $slug1=$_POST['newslug'];
       $ordr=$_POST['newordr'];


       $slug=strtolower(preg_replace('/[^A-Za-z0-9-]+/', '-', $slug1));

       // Get image name
       $image = $_FILES['img']['name'];
       $image = md5(uniqid())  . "1.png";
       
       // image file directory
       $target = "../images/products/".basename($image);

      
       if (move_uploaded_file($_FILES['img']['tmp_name'], $target)) {
         $msg = "Image uploaded successfully";
       }else{
         $msg = "Failed to upload image";
       }


  $data=mysqli_query($con,"INSERT INTO productcat (name,slug,img,ordr)VALUES ('$name','$slug','$image','$ordr')")or die( mysqli_error($con) );

    $msg="Category Added" ;
      header("location:products-$slug");

      
  }




  for ($i=0; $i < 100 ; $i++) { 

    if(isset($_POST['savepro'.$i])){
      $msg="Unsuccessful" ;

      $id=$_POST['savepro'.$i];
      $name=$_POST['name'.$i];
      $slug1=$_POST['slug'.$i];


      $ordr=$_POST['ordr'.$i];

       $slug=strtolower(preg_replace('/[^A-Za-z0-9-]+/', '-', $slug1));


      if(isset($_POST['feat'.$i]) ){
        $feat=1;
      }else{
        $feat=0;
      } 






      $sql = "UPDATE product SET `name` = '$name',`slug` = '$slug',`ordr` = '$ordr',`feat` = '$feat' WHERE `id` =$id";

      mysqli_query($con, $sql) ;
      ($msg=mysqli_error($con));
      if(empty($msg))  $msg="product Updated";


    }

  }



  for ($i=0; $i < 100 ; $i++) { 

    if(isset($_POST['delpro'.$i])){
      $msg="Unsuccessful" ;

      $id=$_POST['delpro'.$i];
  

      $rowsx =mysqli_query($con,"SELECT img FROM pimgs where pid='$id'  ORDER BY ordr" ) or die(mysqli_error($con));
       while($rowx=mysqli_fetch_array($rowsx)){
                 $img = $rowx['img']; 
         unlink("../images/products/".$img);

      $sql = "DELETE FROM pimg WHERE pid=$id  ";
      mysqli_query($con, $sql) ;
       }


      $sql = "DELETE FROM product WHERE id=$id  ";

      mysqli_query($con, $sql) ;
      ($msg=mysqli_error($con));

      if(empty($msg))  $msg="product Deleted";



    }

  }




  
  ?>



  <?php
  if(isset($_POST['addpro'])){

      $msg="Unsuccessful" ;
      
       $pid=$_POST['addpro'];
       $name=$_POST['newname'];
       $slug1=$_POST['newslug'];
       $ordr=$_POST['newordr'];
       $slug=strtolower(preg_replace('/[^A-Za-z0-9-]+/', '-', $slug1));


       if(isset($_POST['feat']) ){
         $feat=1;
       }else{
         $feat=0;
       } 


       $rows =mysqli_query($con,"SELECT slug FROM productcat where id='$pid'  ORDER BY ordr" ) or die(mysqli_error($con));
       while($row=mysqli_fetch_array($rows)){
         $pslug = $row['slug']; 
       }

       if(empty($pslug)) $pslug=$page;
       if(empty($pid)){
       $rows =mysqli_query($con,"SELECT id FROM productcat where slug='$pslug'  ORDER BY ordr" ) or die(mysqli_error($con));
       while($row=mysqli_fetch_array($rows)){
         $pid = $row['id'];        }
       }
        



  $data=mysqli_query($con,"INSERT INTO product (name,pid,pslug,slug,ordr,feat)VALUES ('$name','$pid','$pslug','$slug','$ordr','$feat')");

  ($msg=mysqli_error($con));

  if(empty($msg))  $msg="product Added";

  header("location:dproducts-$slug");

      
  }
  ?>


<style type="text/css">
  
  #catimg{
    height: 100px;
    width:  150px;
  }

  #catimg1{
    width:  118px;
  }  
  #ccatimg{
    height: 70px;
    width:  150px;
  }

  #ccatimg1{
    width:  120px;
  }

  .filein{
    width: 100px;
  }

</style>

</head>
<body onload="showtoast()"  class="page-header-fixed bg-1 layout-boxed">
  <div class="modal-shiftfix">



    <?php include('include/header.php') ?>

<?php if (!empty($page)) {


  ?>

    <div class="container-fluid main-content">
      <div class="row">
        <!-- Basic Table -->

        <div class="col-lg-12">
          <div class="widget-container fluid-height clearfix">
            <div class="heading" style="text-transform: capitalize;">
              <i class="fa fa-lightbulb-o"></i> <?php echo $page ?> product
            </div>
            <div class="widget-content padded clearfix">
              <table class="table table-bordered">
                <thead>
                  <th>
                   Name 
                 </th>

                 <th>
                   Slug 
                 </th>

                 <th>
                  Meta Keywords
                </th>
                <th>
                  Meta Descp
                </th>
                <th style="max-width: 60px;">
                  Order
                </th>
                <th style="max-width: 60px;">
                  Feature
                </th>

                <th class="hidden-xs">
                  Save
                </th>


              </thead>
              <tbody>

                <?php

                $rows =mysqli_query($con,"SELECT * FROM product where pslug='$page'  ORDER BY ordr" ) or die(mysqli_error($con));
                $n=0;

                while($row=mysqli_fetch_array($rows)){

                  $slug = $row['slug']; 
                  $name = $row['name']; 
                  $metak = $row['metak']; 
                  $metad = $row['metad']; 
                  $ordr = $row['ordr']; 
                  $id = $row['id']; 
                  $feat = $row['feat']; 

                  ?>
                  <form method="post" action="" enctype="multipart/form-data">

                    <tr>
                      <td>
                        <input type="text" class="form-control" name="name<?php echo $n ?>" value="<?php echo $name ?>">
                      </td>

                      <td>
                        <input type="text" class="form-control" name="slug<?php echo $n ?>" value="<?php echo $slug ?>">
                      </td>
                      <td>
                        <input type="text" class="form-control" name="metak<?php echo $n ?>" value="<?php echo $metak ?>">
                      </td>
                      <td>
                        <input type="text" class="form-control" name="metad<?php echo $n ?>" value="<?php echo $metad ?>">
                      </td>


                      <td  style="max-width: 60px;">
                        <input type="text" class="form-control" name="ordr<?php echo $n ?>" value="<?php echo $ordr ?>">
                      </td>
                      <td  style="max-width: 60px;">
                        <center>
                        <input type="checkbox" style="display: inline-block;" class="" name="feat<?php echo $n ?>" <?php if($feat==1) echo 'checked' ?> >
                      </center>
                      </td>



                      <td>

                        <div class="btn-group">

                          <button type="submit" name="savepro<?php echo $n ?>" class="btn btn-success-outline" value="<?php echo $id ?>"> <i class="fa fa-save"></i></button>

                          <a href="dproducts-<?php echo $slug ?>" class="btn btn-primary-outline" value="<?php echo $id ?>"> </i> <i class="fa fa-pencil"></i></a>


                          <button type="submit" name="delpro<?php echo $n ?>" class="btn btn-danger-outline" value="<?php echo $id ?>"> <i class="fa fa-trash-o"></i></button>
                        </div>
                      </td>
                    </tr>

                  </form>

                  <?php $n++; } ?>

                  <form method="post" action="" enctype="multipart/form-data">

                    <tr>
                      <td>
                        <input type="text" class="form-control" name="newname" value="" required="">
                      </td>

                      <td>
                        <input type="text" class="form-control" name="newslug" value="" required="">
                      </td>
                      <td>
                        <input type="text" class="form-control" name="newmetak" value="">
                      </td>
                      <td>
                        <input type="text" class="form-control" name="newmetad" value="">
                      </td>


                      <td  style="max-width: 60px;">
                        <input type="text" class="form-control" name="newordr" value="" required="">
                      </td>

                      <td  style="max-width: 60px;">
                        <center>
                        <input type="checkbox" style="display: inline-block;" class="" name="feat"  >
                        </center>
                      </td>



                      <td>

                        <div class="btn-group">

                          <button type="submit" value="" name="addpro" class="btn btn btn-outline"> <i class="fa fa-plus"></i></button>
                        </div>
                      </td>
                    </tr>

                  </form>

                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>

  <?php } ?>

    

      <div class="container-fluid main-content">
      <div class="row">
        <!-- Basic Table -->
        <div class="col-lg-12">
          <div class="widget-container fluid-height clearfix">
            <div class="heading">
              <i class="fa fa-tags"></i>Products Category
            </div>
            <div class="widget-content padded clearfix">
              <table class="table table-bordered">
                <thead>
                  <th>
                   Name 
                 </th>

                 <th>
                   Slug 
                 </th>
                 
                 <th>
                  Image
                </th>
                <th style="max-width: 100px; width: 100px;">
                  New Image
                </th>
              
                <th style="max-width: 60px;">
                  Order
                </th>

                <th class="hidden-xs">
                  Add/Manage Products
                </th>


              </thead>
              <tbody>

                <?php

                $rows =mysqli_query($con,"SELECT * FROM productcat  ORDER BY ordr" ) or die(mysqli_error($con));
                $n=1;

                while($row=mysqli_fetch_array($rows)){

                  $slug = $row['slug']; 
                  $pslug = $row['slug']; 
                  $name = $row['name']; 
                  $img = $row['img']; 
                  $desp = $row['desp']; 

                  $ordr = $row['ordr']; 
                  $id = $row['id']; 
                  $parentid = $row['id']; 

                  ?>
                  <form method="post" action="" enctype="multipart/form-data">

                    <tr>
                      <td>
                        <input type="text" class="form-control" name="name<?php echo $n ?>" value="<?php echo $name ?>">
                      </td>

                      <td>
                        <input readonly="" type="text" class="form-control" name="slug<?php echo $n ?>" value="<?php echo $slug ?>">
                      </td>
                      
                      <td>
                        <img id="catimg" src="../images/products/<?php echo $img ?>" class="form-control" ?>
                      </td>
                      <td>
                        <input id="catimg1"  type="file" class="filein  form-control" name="img<?php echo $n ?>">
                      </td>
                  

                      <td  style="max-width: 60px;">
                        <input type="text" class="form-control" name="ordr<?php echo $n ?>" value="<?php echo $ordr ?>">
                      </td>



                      <td>

                        <div class="btn-group">

                          <button type="submit" name="savecat<?php echo $n ?>" class="btn btn-success-outline" value="<?php echo $id ?>"> <i class="fa fa-save"></i></button>

                          <a href="products-<?php echo $slug ?>" class="btn btn-primary-outline" value="<?php echo $id ?>"> </i> <i class="fa fa-plus"></i></a>

                          <button type="submit" name="delcat<?php echo $n ?>" class="btn btn-danger-outline" value="<?php echo $id ?>"> <i class="fa fa-trash-o"></i></button>
                        </div>
                      </td>
                    </tr>
                     <tr>
                        
                      <td  style="display:none"  colspan="6"  style="min-width: 300px;">
                        <textarea id="editor<?php echo $n; ?>" name="desp<?php echo $n ?>"><?php echo $desp ?></textarea> 
                      </td>
                    </tr>

                  </form>


                  <tr>
                    <td></td>
                    <td>Product Name</td>
                    <td> Product Slug </td>
                    <td> Image + Featured </td>
                    <td>Order </td>
                    <td> Action </td>
                  </tr>
                <?php

                $rowsx =mysqli_query($con,"SELECT * FROM product where pslug='$pslug'  ORDER BY ordr" ) or die(mysqli_error($con));
                $p=0;

                while($rowx=mysqli_fetch_array($rowsx)){

                  $slug = $rowx['slug']; 
                  $name = $rowx['name']; 
                  $metak = $rowx['metak']; 
                  $metad = $rowx['metad']; 
                  $ordr = $rowx['ordr']; 
                  $id = $rowx['id']; 
                  $feat = $rowx['feat']; 

                  ?>
                  <form method="post" action="" enctype="multipart/form-data">

                    <tr>
                      <td style="border:none;"></td>

                      <td>
                        <input type="text" class="form-control" name="name<?php echo $p ?>" value="<?php echo $name ?>">
                      </td>

                      <td>
                        <input type="text" class="form-control" name="slug<?php echo $p ?>" value="<?php echo $slug ?>">
                      </td>


                      <td  style="max-width: 60px;">
                        <center>

                          <?php 
                             $rowsxe =mysqli_query($con,"SELECT * FROM pimgs where pslug='$slug' && feat=1  ORDER BY ordr" ) or die(mysqli_error($con));
                             while($rowxe=mysqli_fetch_array($rowsxe)){
                $img = $rowxe['img'];                 ?> 
                <img src="../images/products/<?php echo $img ?>" style="width: 80px">
                  <?php } ?>
                        <input type="checkbox" style="display: inline-block;" class="" name="feat<?php echo $p ?>" <?php if($feat==1) echo 'checked' ?> >
                      </center>
                      </td>


                      <td  style="max-width: 60px;">
                        <input type="text" class="form-control" name="ordr<?php echo $p ?>" value="<?php echo $ordr ?>">
                      </td>



                      <td>

                        <div class="btn-group">

                          <button type="submit" name="savepro<?php echo $p ?>" class="btn btn-success-outline" value="<?php echo $id ?>"> <i class="fa fa-save"></i></button>

                          <a href="dproducts-<?php echo $slug ?>" class="btn btn-primary-outline" value="<?php echo $id ?>"> </i> <i class="fa fa-pencil"></i></a>


                          <button type="submit" name="delpro<?php echo $p ?>" class="btn btn-danger-outline" value="<?php echo $id ?>"> <i class="fa fa-trash-o"></i></button>
                        </div>
                      </td>
                    </tr>

                  </form>

                  <?php $p++; } ?>

                  <form method="post" action="" enctype="multipart/form-data">

                    <tr>
                      <td style="border: none"></td>
                      <td>
                        <input placeholder="New Product Name" type="text" class="form-control" name="newname" value="" required="">
                      </td>

                      <td>
                        <input placeholder="New Product Slug" type="text" class="form-control" name="newslug" value="" required="">
                      </td>


                      <td  style="max-width: 60px;">
                        <center>
                        <input type="checkbox" style="display: inline-block;" class="" name="feat"  >
                        </center>
                      </td>


                      <td  style="max-width: 60px;">
                        <input placeholder="Ord." type="text" class="form-control" name="newordr" value="" required="">
                      </td>



                      <td>

                        <div class="btn-group">

                          <button type="submit" value="<?php echo $parentid ?>" name="addpro" class="btn btn btn-outline"> <i class="fa fa-plus"></i></button>
                        </div>
                      </td>
                    </tr>

                  </form>




                  <?php $n++; } ?>

                  <tr>
                    <td colspan="6"><br><br>
                    </td>
                  </tr>

                  <form method="post" action="" enctype="multipart/form-data">

                    <tr>
                      <td>
                        <input placeholder="New Products Category" type="text" class="form-control" name="newname" value="" required="">
                      </td>

                      <td>
                        <input placeholder="New Category Slug" type="text" class="form-control" name="newslug" value="" required="">
                      </td>
                      
                      <td colspan="2">
                        <input type="file" class="form-control" name="img" required="">

                      </td>
                  

                      <td  style="max-width: 60px;">
                        <input placeholder="Ord." type="text" class="form-control" name="newordr" value="" required="">
                      </td>



                      <td>

                        <div class="btn-group">

                          <button type="submit" name="addcat" class="btn btn btn-outline"> <i class="fa fa-plus"></i></button>
                        </div>
                      </td>
                    </tr>

                  </form>

                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>


<div class="space"></div>



  </div>
</div>

<?php include('include/footer.php') ?>

</body>
</html>