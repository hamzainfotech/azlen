<html>
<head>
<?php include 'include/connect.php'; ?>
<?php if(!empty( $_GET['page_name'])) $link = $_GET['page_name'] ?>
<?php if(!empty( $_GET['cpage_name'])) $page = $_GET['cpage_name'] ?>
<?php if(empty( $_GET['page_name'])) $link = 'Null' ?>
<?php if(empty( $_GET['cpage_name'])) $page = Null ?>
<?php

$rows =mysqli_query($con,"SELECT * FROM pages where slug='careers' " ) or die(mysqli_error($con));


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

</head>
<body onload="showtoast()"  class="page-header-fixed bg-1 layout-boxed">
  <div class="modal-shiftfix">



    <?php include('include/header.php') ?>


  <div class="banner">
    <img src="images/covers/<?php echo $pagecover ?>" class="img-responsive" width="100%"> 
  </div> <!--banner ends-->

<!--
<!--
  <div class="content_top">
    <div class="container">
        <h1><?php echo $pagename ?></h1>
        <?php echo $pagepost ?>
      </div>
  </div> <!--content_top ends-->
  

     <br>
     
  
  
     
     <br>
     
     
     
     
  <div class="container pbg">
    <div class="row">
        
        
<br>

 <?php echo $pagepost ?>
<br>            
             
            
     <div class="row"  class="pbg">
      <div class="col-md-6">
          <h2>Contact Us:</h2>
                <br><br>
        <div class="address">
            
        <h4>Address:</h4>
         
        <ul class="list-unstyled">
            <?php echo $siteaddress ?>
        </ul>
       
        </div>
             <hr>
             <div class="phone">
            <h4>Phone:</h4>
              
            <ul class="list-unstyled">
              <li> <?php echo $sitephone ?></li>
          </ul>
        </div>
             <hr>
        <div class="email">
        <h4>Email:</h4>
            
        <ul class="list-unstyled">
            <li> <a href="mailto:<?php echo $sitemail ?>"><?php echo $sitemail ?></a></li>
        </ul>
        </div>
        
      </div>
         
      <div class="col-md-6">
             <div class="row">
        <div class="card">
            <div class="card-body">
                <h2>Apply Now:</h2>
                <br><br>
                 <form action="" method="post">
                         <div class="form-row">
                             <div class="form-group col-md-6">
                               <input id="Full Name" name="name" placeholder="Full Name" class="form-control" type="text">
                             </div>
                             <div class="form-group col-md-6">
                               <input type="email" name="email" class="form-control" id="inputEmail4" placeholder="Email">
                             </div>
                           </div>
                         <div class="form-row">
                             <div class="form-group col-md-6">
                                 <input id="Phone No." name="phone" placeholder="Phone No." class="form-control" required type="text">
                             </div>
                             <div class="form-group col-md-6">
                                 <input id="Subject" name="subject" placeholder="Subject" class="form-control" required type="text">
                             </div>
                             <div class="form-group col-md-12">
                                       <textarea id="comment" name="msg" cols="40" rows="5" placeholder="Additional Information"class="form-control"></textarea>
                              </div>
                         </div>
                         
                         <div class="col-md-12">
                             <button name="submit" type="submit" class="btn btn-danger">Apply</button>
                         </div>
                     </form>

                     <?php
                     if(isset($_POST['submit'])) {
                     // EDIT THE 2 LINES BELOW AS REQUIRED
                     $email_to = "ndc@ndcpak.com";
                     $email_subject = "Website Career";

                     function died($error) {
                     // your error code can go here
                     echo "We are very sorry, but there were error(s) found with the form you submitted. ";
                     echo "These errors appear below.<br /><br />";
                     echo $error."<br /><br />";
                     echo "Please go back and fix these errors.<br /><br />";
                     die();
                     }
                     
                     $name = $_POST['name']; // required
                     $subject = $_POST['subject']; // required
                     $email = $_POST['email']; // required
                     $phone = $_POST['phone']; // not required
                     $msg = $_POST['msg']; // required
                     
                     $email_message = "Form details below.\n\n";


                     function clean_string($string) {
                     $bad = array("content-type","bcc:","to:","cc:","href");
                     return str_replace($bad,"",$string);
                     }



                     $email_message .= "Name: ".clean_string($name)."\n";
                     $email_message .= "Email: ".clean_string($email)."\n";
                     $email_message .= "Telephone: ".clean_string($phone)."\n";
                     $email_message .= "Subject: ".clean_string($subject)."\n";
                     $email_message .= "Message: ".clean_string($msg)."\n";


                     // create email headers
                     $headers = 'From: '.$email_from."\r\n".
                     'Reply-To: '.$email_from."\r\n" .
                     'X-Mailer: PHP/' . phpversion();
                     @mail($email_to, $email_subject, $email_message, $headers);
                     ?>

                     <!-- include your own success html here -->
                    
                    <br>
                    <br>
                    <br>
                    <br>
                         <h3>
                             
                     Thank you for contacting us. 
                     <br>We will be in touch with you very soon.
                     </h3>
                     

                     <?php

                     }
                     ?>
            </div>
        </div>
             </div>
    </div>
         <div class="clearfix">&nbsp;</div>
     </div>
     </div>
     
     
     
     
     
     



   

<div class="space"></div>



  </div>


<?php include('include/footer.php') ?>

</body>
</html> 