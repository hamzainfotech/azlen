<header class="header-wrapper">
    <div class="topbar clearfix">
      <div class="container">
        
        <ul class="topbar-right">
          <li class="phoneNo"><i class="fa fa-phonex"></i><?php echo $sitephone ?></li>
          <li class="email-id hidden-xs hidden-sm"><i class="fa fa-envelopex"></i>
            <a href="mailto:<?php echo $sitemail ?>"><?php echo $sitemail ?></a>
          </li>
          <li class="email-id hidden-xs hidden-sm"><i class="fa fa-envelopex"></i>
            <a href="contact">Contact</a>
          </li>
          <li class="email-id hidden-xs hidden-sm"><i class="fa fa-envelopex"></i>
            EN-CA
          </li>
        </ul>
      </div>
    </div>


 <?php if($link=='home') { ?>

                <a class=" home-logo navbar-brand logo clearfix hidden-xs" href="index">
                  <center>
                    <img src="images/<?php echo $sitelogo; ?>" alt="" class="img-responsive"/>
                  </center></a>

              <?php } ?>

    <div class="header clearfix">
      <nav class="navbar navbar-main navbar-default">
        <div class="container">
          <div class="row">
            <div class="col-xs-12">
              <div class="header_inner">
               
                <a class="navbar-brand logo clearfix" href="index"><img src="images/<?php echo $sitelogo; ?>" alt="" class="img-responsive sitelogo"/></a>

                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-nav" aria-expanded="false">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  </button>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="main-nav"><span class="navbar-header"></span>
                  <ul class="nav navbar-nav navbar-right">

              


                    <?php

                    $rows =mysqli_query($con,"SELECT name,slug,res FROM pages  WHERE hide=0  ORDER BY ordr" ) or die(mysqli_error($con));
                              
                      while($row=mysqli_fetch_array($rows)){
                        
                        $slug = $row['slug']; 
                        $name = $row['name']; 
                        $res = $row['res']; 

                        ?>

                    <li <?php if($link==$slug) echo'class="apply_now"' ;?> <?php if($slug=='pages') echo'class=""' ; ?>>



                      <a href="<?php if($res==0) echo'cpages-' ;?><?php if($slug=='pages') echo $slug; else  echo $slug ?>"></span><?php echo $name ?></a>

                    </li>



                    
                    <?php } ?>

                  </ul>
                </div><!-- navbar-collapse -->

              </div>
            </div>
          </div>
        </div><!-- /.container -->
      </nav><!-- navbar -->
    </div>
  </header>