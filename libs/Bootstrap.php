<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Bootstrap {

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
    

        $file='controllers/' .$url[0]. '.php';
        if (file_exists($file)){
            require $file;
        }
        else{
            $this->error();
        }
        
        $controller=new $url[0];
        $controller->loadmodel($url[0]);
         
           
        if(isset($url[3])){
            require 'views/CMSdashboard/'.$url[3].'.php';
        }
        else if(isset($url[2])){
            if(method_exists($controller,$url[1])){
                if($url[2]=='edit'){
                    $controller->setpageedit($url[2]);
                    $controller->{$url[1]}();
                }else{
//                    var_dump($controller->$url[1]($url[2]));
                     $controller->{$url[1]}($url[2]);  //harus ada {} untuk mengenali dia
                   
                }
                    
            }
            else{
                $this->error();
            }
        }else{
           if(isset($url[1])){
               //object (class) dan method
               if(file_exists($file)){
//                   echo $file;
                   if(method_exists($controller, $url[1])){
                       $controller->{$url[1]}();
                   }else{
                           
                        $controller->setposturl($url[1]); //disini agar url pada index ke 1 yg g' da fungsinya bisa ke baca
                        $controller->index2();
//                   $controller->getpostcontain();
                   }
               }else{
                   echo 'haiiii';
                   $this->error();
               }
               
           }else{
               $controller->index();
           } 
        }
    
    
    }
    
    function error(){
        require 'controllers/error.php';
        $error=new error();
        $error->index();
        return false;
//            throw new Exception("the : $file doesnt exist");
    }

}