<htmL>
<head>
     <link rel='stylesheet' id='zn-templtecss-css'  href='<?php echo URL?>public/css/raise/template.css' type='text/css' media='all' />
     <link rel="stylesheet" type="text/css" href="<?php echo URL?>public/css/bootstrap3.3.4/css/bootstrap.min.css"/>
<!--      <link rel="stylesheet" type="text/css" href="<?php echo URL?>public/css/bootstrapcsvalidator/bootstrapValidator.css"/>-->
    <link rel="stylesheet" type="text/css" href="<?php echo URL?>public/css/gbctheme/defaultsplash.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo URL?>public/css/gbctheme/animate.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo URL?>public/css/gbctheme/templatereadmore.css"/>
    
<!--      <script src="<?php echo URL?>public/js/gbcjs/jquery-1.7.1.js"></script>-->
<!--      <script src="<?php echo URL?>public/js/gbcjs/jquery-1.9.1.min.js"></script>-->

     <script src="<?php echo URL?>public/js/bootstrapjsvalidator/bootstrapValidator.js"></script>
    <script src="<?php echo URL?>public/js/gbcjs/script.js"></script>
     
</head>
<body>
<header>
    		<div class="fixed-bar animated-quick">
			<div class="container">
				<div class="row">
					<div class="twocol">
                                            <a href="<?php echo URL?>/home" class="logo" title="Go Home"><img src="<?php echo URL?>public/image/gbcpic/logo_fixed.png" alt="akasa tour travel" /></a>
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
    
<div class="splash">
                <div class="container">
                    <div class="navto"><img class="listtoogle" src="<?php echo URL?>public/image/iconlist.png" width="50px" height="40px" alt="listtoogle"/></div>
                    <div class="row main-nav">
                        <div class="twocol">
                            <a href="<?php echo URL?>/home" title="Go Home" class="logo"><img src="<?php echo URL;?>public/image/lomboktouragent_biglogo.png" alt="danie"/></a>
                            
                        </div>
                        <div class="tencol last navigation">
<!--                            <div class="navcollapse"></div>-->
                                <div class="nav">
                                    <ul>
                                        <li><a href="<?php echo URL?>home">Home</a></li>
                                        <li><a href="Activity">Activity</a></li>
                                        <li><a href="iosslider">iosslider</a></li>
                                        <li><a href="<?php echo URL?>tes">tes</a></li>
                                    </ul>
                                </div>
                        </div>   
                    </div>
                    <div class="row intro">
			<div class="twocol"></div>
			<div class="eightcol">
				<h1>WUJUDKAN LIBURAN MEMUASAKAN<br /></h1>
                                <p>bersama kami dapatkan pengalaman liburan menarik di lombok<em>"Akasa Lombok Tour and Travel"</em></p>
<!--                                <p> jln raya tanjung gunung sari </p>-->
				<a href="#" title="View My Work" class="button-link">View Gallery</a>
			</div>
                    </div>
                  
                </div>  
                
</div>
 </header>
    <script type="text/javascript">
    $(function (){
       $(document).on('click','.listtoogle',function (){
          $('div.tencol.navigation').toggle(1000);
       });
    });
    
    </script>
<!--    <script type="text/javascript">
            $(document).ready(function(){
                var menu="close";
              $('.listtoogle').click(function(){
                  if(menu=="close"){
                       $('div.tencol.navigation').toggle("slow");
                       menu="open";
                  }else{
                       $('div.tencol.navigation').css('display','blok')
                       menu="close";
                  }
                 
              });  
            });
 </script>-->
</bodY>
</html>