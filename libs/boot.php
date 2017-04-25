<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class boot {

    function __construct() {
        
//        $url = isset($_GET['url']) ? $_GET['url'] : null;
        $url= isset( $_GET['url'] ) ? $_GET['url'] : null ;
        $url= rtrim($url,'/');
        $url= explode('/', $url);
//        var_dump($url);
//        print_r($url);
        
        if(empty($url[0])){
            require 'controllers/index.php';
            $controller=new index();
            $controller->index();
            return false;
        }
        else{

        $file='controllers/' .$url[0]. '.php';
        if (file_exists($file)){
            require $file;
            if(isset($url[0])){
              $controller=new $url[0];
              $controller->index();
                if(isset($url[1])){
                    $controller->{$url[1]}();
                }
            }
            
          
//            else if(isset($url[2])){
//             $controller->{$url[1]}($url[2]);
//            }
           
        }
        else{
            require 'controllers/error.php';
            $error=new error();
            
            throw new Exception("the : $file doesnt exist");
        }
//         
         
      
          
          
        
//        if (){
//            $
//        }else{
//           if(isset($url[1])){
//          
//               
//           } 
//        }
//            
//    }
    }
    }
}