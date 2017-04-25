
<html>
    
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> <!-----shittttt gara gara ini ndak bisa kedetect arrow di gallery harus ada ini---->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" /><!------responsive---------->
    <link rel="stylesheet" type="text/css" href="<?php echo URL?>public/css/bootstrap3.3.4/css/bootstrap.min.css"/>
    <script type="text/javascript" src="<?php echo URL?>public/js/gbcjs/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="<?php echo URL?>public/css/bootstrap3.3.4/js/bootstrap.js"></script>
    <script type="text/javascript" src="<?php echo URL?>public/js/script.js"></script>
    <script type="text/javascript" src="<?php echo URL?>public/library/tinymce/js/tinymce/tinymce.min.js"></script>
    <link rel="stylesheet" type="text/css" id="theme" href="<?php echo URL ?>assets/css/theme-default.css"/>
    <link rel="stylesheet" type="text/css" id="theme" href="<?php echo URL ?>public/css/webeditor/tambahansettingeditor.css"/>
    <link type="text/css" rel="stylesheet" href="<?php echo URL?>public/css/webeditor/dashboard.css"/>
 
    <script src="<?php echo URL?>public/js/bootstrapjsvalidator/bootstrapValidator.js"></script>
<!--    untuk loading diatas header seperti di youtube-->
    <script src="<?php echo URL?>public/js/gbcjs/loadingfunc.js"></script>
    <script src="<?php echo URL?>public/js/gbcjs/loadingscreen.js"></script>
    
    
  
</head>
<body style="margin-left: 0px; margin-right: 0px;">
<div id="header_dasboard">
    <div class="header_welcome">
        <img src="<?php echo URL;?>public/image/arif.jpg" alt="profile_photo" class="img-circle">
       
        <?php
            $class=new dbquery();
            $user_info = $class->getuserfromcookeie($_COOKIE['cookie']);

        ?>
        <span class="user" rel="<?php echo $user_info; ?>">welcome [<?php echo $user_info ?>]</span>
        <a href="<?php echo URL;?>dashboard/logout">logout</a>
      
      
    </div>
      <a class="navbar-brand">GBC engine V.01</a>         
</div>
 
    
    