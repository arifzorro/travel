<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class login extends Controller {

    function __construct() {
        parent::__construct();
         
    }
    function index(){ 
//        require 'models/login_model.php';
//        $model=new login_model(); 
   
//        $class=new getpost();
//        if($class->isloggedinfromcookie($nickname)){
//                 header('location:'.URL.'dashboard');
//        }
        if(isset($_COOKIE['cookie'])){
             header('location:'.URL.'dashboard');
        }
        else{
                  $this->view->renderlogin('login/index');
        }
      
        
        
    }
    
    function run(){
        echo 'runnnn';
        //call login_model
       $this->models->run();
        
    }

}