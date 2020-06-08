<br>
<br>
<br>

	<footer class="footer-v1">
  <div class="menuFooter clearfix" style="background: #505050">
    <div class="container">
      <div class="row clearfix">
		<div class="col-sm-3">
        	<p><img src="images/<?php echo $sitelogo; ?>" alt="" class="img-responsive"/></p>
        	<p><?php echo $fpost ;?></p>
        </div>
    <div class="col-sm-3 ">
      <br>
      <span class="bb" style="font-size: 24px">Products: </span>
      <br>
            <?php

    $rows =mysqli_query($con,"SELECT * FROM productcat  ORDER BY ordr" ) or die(mysqli_error($con));
    $n=0;

    while($row=mysqli_fetch_array($rows)){

      $name = $row['name'];
      $slug = $row['slug']; ?>
      <br>
          <span style="font-size: 16px"> <?php echo $name ?> </span> <br>
          <?php } ?>
        </div>
        <div class="col-sm-3 col-xs-12 ">
          <br>
      <span class="bb" style="font-size: 24px">Quick Links: </span>
      <br>
          <ul class="menuLink">
          <?php

          $rows =mysqli_query($con,"SELECT name,slug,res FROM pages where hide=0  ORDER BY ordr" ) or die(mysqli_error($con));
                    
            while($row=mysqli_fetch_array($rows)){
              
              $slug = $row['slug']; 
              $name = $row['name']; 
              $res = $row['res']; 

              ?><br>
            <li <?php if($slug=='videos') echo ' style="display:none;" ' ; ?> ><a style="font-size: 16px" href="<?php echo $slug ?>"><?php echo $name ?></a></li>
                    <?php } ?>
            
          </ul>
        </div><!-- col-sm-3 col-xs-6 -->


        
        <div class="col-sm-3 col-xs-6 ">
          <div class="footer-address">
            <div class="socialArea">
          </div>
          <span class="bb" style="font-size: 24px">Contact Us: </span>
          <br><br>
           <p style="font-size: 18px">
                            <strong><i class="fa fa-map-marker"></i> Address:</strong> <br>
                            <br>
                            <?php echo $siteaddress ?> 
              </p>
                            <br>

                        <p style="font-size: 18px">
                        	<strong><i class="fa fa-phone"></i> Call Us:</strong> <br> 
                            <br>

                            <?php echo $sitephone ?> 
                           
                        </p>
                            <br>

                        
                        <p style="font-size: 18px">
                        	<strong><i class="fa fa-envelope"></i> Email:</strong> <br>
                            <br>

                            <?php echo $sitemail ?> 
                            
                        </p>
            
          </div>
        </div><!-- col-sm-3 col-xs-6 -->

      </div><!-- row -->
    </div><!-- container -->
  </div><!-- menuFooter -->

  <div class="footer clearfix" style="background: #000">
    <div class="container">
      <div class="row clearfix">
        <div class="col-sm-6 col-xs-12 copyRight">
          <p style="font-size: 18px">© 2020 <?php echo $sitename ?>. </p>
        </div><!-- col-sm-6 col-xs-12 -->
        <div class="col-sm-6 col-xs-12 privacy_policy">
         	&nbsp;
        </div><!-- col-sm-6 col-xs-12 -->
      </div><!-- row clearfix -->
    </div><!-- container -->
  </div><!-- footer -->
</footer>


<!-- JQUERY SCRIPTS -->
<script src="plugins/jquery/jquery-1.11.1.min.js"></script>
<script src="plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="plugins/flexslider/jquery.flexslider.js"></script>
<script src="plugins/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
<script src="plugins/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>


<script type="text/javascript" src="js/jquery.zoomslider.js"></script>

<script src="plugins/selectbox/jquery.selectbox-0.1.3.min.js"></script>
<script src="plugins/pop-up/jquery.magnific-popup.js"></script>
<script src="plugins/animation/waypoints.min.js"></script>
<script src="plugins/count-up/jquery.counterup.js"></script>
<script src="plugins/animation/wow.min.js"></script>
<script src="plugins/animation/moment.min.js"></script>
<script src="plugins/calender/fullcalendar.min.js"></script>
<script src="plugins/owl-carousel/owl.carousel.js"></script>
<script src="plugins/timer/jquery.syotimer.js"></script>
<script src="plugins/smoothscroll/SmoothScroll.js"></script>
<script src="js/custom.js"></script>

