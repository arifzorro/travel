<?php 
$getdata=new paket();
$data=$getdata->getpostcontain();
?>

<htmL>
<head>

    <link rel="stylesheet" type="text/css" href="<?php echo URL?>public/css/gbctheme/defaultsplash.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo URL?>public/css/gbctheme/animate.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo URL?>public/css/gbctheme/templatereadmore.css"/>
     <script src="<?php echo URL?>public/js/gbcjs/jquery-1.7.1.js"></script>
    <script src="<?php echo URL?>public/js/gbcjs/script.js"></script>
   
</head>
<body>
<header>
    		<div class="fixed-bar animated-quick">
			<div class="container">
				<div class="row">
					<div class="twocol">
                                            <a href="#" class="logo" title="Go Home"><img src="<?php echo URL?>public/image/gbcpic/logo_fixed.png" alt="Daniel Filler" /></a>
					</div>
					<nav class="sixcol">
                                            <ul id="menu-main-navigation" class="menu">
                                                <li class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item"><a href="http://danielfiller.com/">About</a></li>
                                                <li><a href="http://danielfiller.com/work/">Work</a></li>
                                                <li><a href="http://danielfiller.com/blog/">Blog</a></li>
                                                <li><a href="http://danielfiller.com/contact/">Contact</a></li>
                                            </ul>
                                        </nav>					<div class="fourcol last">
						<a href="#" id="back-to-top" title="Back To Top">Back To Top</a>
					</div>
				</div>
			</div>
		</div> 
             <?php
//             buat parsing data posting dari array 2 dimensi menjadi 1 dimensi 
//                $conten=array();
//                $count=count($data);
//                for($i=0;$i<$count;$i++){
//                    $col=count($data[$i]);
//                    echo $col;
//                    for($j=0;$j<$col;$j++){
//                        $conten[$j]=$data[$i][$j];     
//                    }   
//                }
                   ?>
    
    <?php
        $geturlimage=new getfirstimage();
        $image=$geturlimage->get_first_image_url($data[0][2]);//langsung akses index baris ke 0 kolom ke 2 yaitu index isi posting
        $boolean=$geturlimage->is_image($data[0][2]);
        if($boolean==false){
    ?>
        <div class="withtitle" style=" position: relative; background: linear-gradient(rgba(23, 22, 23, 0.6), rgba(23, 22, 23, 0.6)), url(<?php echo URL?>public/image/noimage.png) no-repeat top center fixed; margin-bottom: 2em; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover; padding-bottom: 3em; /* background-position: center -60px; */ ">
    <?php }else{?>
            
          <div class="withtitle" style=" position: relative; background: linear-gradient(rgba(23, 22, 23, 0.6), rgba(23, 22, 23, 0.6)), url(<?php echo URL.$image?>) no-repeat top center fixed; margin-bottom: 2em; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover; padding-bottom: 3em; /* background-position: center -60px; */ ">    
            
    <?php }?>
<!--    check apakah di isipost ada gambar-->


 
<!--    <div class="withtitle" style=" position: relative; background: linear-gradient(rgba(23, 22, 23, 0.6), rgba(23, 22, 23, 0.6)), url(<?php echo URL.$image?>) no-repeat top center fixed; margin-bottom: 2em; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover; padding-bottom: 3em; /* background-position: center -60px; */ ">-->
                        
                <div class="container">
                    <div class="row main-nav">
                        <div class="twocol">
                            <a href="#" title="Go Home" class="logo"><img src="<?php echo URL;?>public/image/gbcpic/logo_home.png" alt="danie"/></a>
                            
                        </div>
                        <div class="tencol last">
                                <div class="nav">
                                    <ul>
                                        <li><a href="<?php echo URL?>home">Home</a></li>
                                        <li><a href="Activity">Activity</a></li>
                                        <li><a href="Galery">Galery</a></li>
                                        <li><a href="<?php echo URL?>tes">tes</a></li>
                                    </ul>
                                </div>
                        </div>   
                    </div>
                    <div class="row intro">
			<div class="twocol"></div>
			<div class="eightcol">
				<h1>AKASA TOUR TRAVEL<br /></h1>
                                <p>bersama kami dapatkan pengalaman liburan menarik di lombok<em>"Akasa Lombok Tour and Travel"</em></p>
				<a href="#" title="View My Work" class="button-link">View Gallery</a>
			</div>
                    </div>
                  
                </div>  
                
</div>
 </header> 
</bodY>
</html>