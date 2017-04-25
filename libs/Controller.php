<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Controller {

    function __construct() {
//        echo ' main controler </br>';
        $this->view =new view();
        
     
    }
    function loadmodel($name){
        $path='models/'.$name.'_model.php';
        if(file_exists($path)){
           require 'models/'.$name.'_model.php';
           $modelname=$name.'_model';
           $this->models=new $modelname();
           
       }
    }

}