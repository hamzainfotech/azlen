<?php include 'include/connect.php'; ?>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">




<!-- PLUGINS CSS STYLE -->
<link rel="icon" type="image/png" href="images/logo.png">
<link href="plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="plugins/selectbox/select_option1.css">
<link rel="stylesheet" href="plugins/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="plugins/flexslider/flexslider.css" type="text/css" media="screen" />

<link rel="stylesheet" type="text/css" href="css/zoomslider.css" />
<script type="text/javascript" src="js/modernizr-2.6.2.min.js"></script>

<link rel="stylesheet" href="plugins/calender/fullcalendar.min.css">
<link rel="stylesheet" href="plugins/animate.css">
<link rel="stylesheet" href="plugins/pop-up/magnific-popup.css">
<link rel="stylesheet" type="text/css" href="plugins/rs-plugin/css/settings.css" media="screen">
<link rel="stylesheet" type="text/css" href="plugins/owl-carousel/owl.carousel.css" media="screen">

<!-- CUSTOM CSS -->
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/theme-1.css">
<link rel="stylesheet" href="css/default.css" id="option_color">
<link rel="stylesheet" href="css/custom.css">

<?php

$rows =mysqli_query($con,"SELECT * FROM contact " ) or die(mysqli_error($con));


while($row=mysqli_fetch_array($rows)){

  $sitename = $row['sitename'];  
  $sitelogo = $row['logo'];  
  $sitephone = $row['phone'];  
  $sitemail = $row['email'];  
  $siteaddress = $row['address'];  
  $gmaps = $row['gmaps'];  
  $fpost = $row['fpost'];  
  $facebook = $row['facebook'];  
  $twitter = $row['twitter'];  
  $insta = $row['insta'];  
  $youtube = $row['youtube'];  

}


function substrwords($text, $maxchar, $end='...') {
    if (strlen($text) > $maxchar || $text == '') {
        $words = preg_split('/\s/', $text);      
        $output = '';
        $i      = 0;
        while (1) {
            $length = strlen($output)+strlen($words[$i]);
            if ($length > $maxchar) {
                break;
            } 
            else {
                $output .= " " . $words[$i];
                ++$i;
            }
        }
        $output .= $end;
    } 
    else {
        $output = $text;
    }
    return $output;
}

?>

