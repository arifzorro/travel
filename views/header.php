<html>
    <head>
        <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
        
        <title>MVC</title>
        <link  rel="stylesheet" type="text/css" href="<?php echo URL;?>public/css/default.css" />
       <script type="text/javascript" src="<?php echo URL; ?>public/js/jquery 11.2.js"></script>
       <link rel="stylesheet" type="text/css" href="<?php echo URL;?>public/css/bootstrap3.3.4/css/bootstrap.css"/>
        <link rel="stylesheet" type="text/css" href="<?php echo URL;?>public/css/bootstrapmodif/Harvest.css"/>
        
         <link rel="stylesheet" type="text/css" href="<?php echo URL;?>public/css/overload.css"/>
<!--        <script type="text/javascript" src="public/js/tesjs.js"></script>-->
       <?php
       if(isset($this->js)){
           foreach ($this->js as $js){
               echo '<script type="text/javascript" src="'.URL.'views/'.$js.'"></script>';
           }
       }
       ?>
    </head>
<!--    navbar-->

    
    
    <body>
      
        

        
        <?php Session::init()?>
        <div id="header">
            header
            <br/>
            <a href="<?php echo URL;?>index">index</a>
            <a href="<?php echo URL;?>help">help</a>
           
               <?php if(Session::get('loggedin')==true){?>
                    <a href="<?php echo URL;?>dashboard/logout">logout</a>
                   
               <?php }else{?>
                    <a href="<?php echo URL;?>Login"> login</a>
               <?php }?>
               
           
        </div>
        <div id="content">
            ini adalah content
            
      
        
        
       
      
        
 
    
