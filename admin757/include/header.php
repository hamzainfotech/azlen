<div class="navbar navbar-fixed-top" style="background: #fff">
    <div class="container-fluid main-nav clearfix">
    <div class="nav-collapse">
      <ul class="nav">

        <?php

        $rows =mysqli_query($con,"SELECT name,slug,res FROM pages WHERE hide=0 ORDER BY ordr" ) or die(mysqli_error($con));
                  
          while($row=mysqli_fetch_array($rows)){
            
            $slug = $row['slug']; 
            $name = $row['name']; 
            $res = $row['res']; 

            ?>

        <li>
          <a <?php if($link==$slug) echo'class="current"' ;?> href="<?php if($res==0) echo'cpages-' ;?><?php echo $slug ?>"></span><?php echo $name ?></a>

        </li>

       
        <?php } ?>
      <a href="manages">
      <span class="upr" style="position: fixed;right: 30px;top: 20px; color: #e40000"><i class="fa fa-bars" ></i> Manage</span></a>

      </ul>

    </div>
  </div>
</div>

