<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class help extends Controller{

    function __construct() {
        parent::__construct();
       
           
    }
    function index(){
        echo 'we are inside help';
        $this->view->render('help/index'); 
    }
    public function other($arg=false){
        echo 'we are inside other';
        echo'optional'.$arg.'<br/>';
        
        require 'models/help_model.php';
        $model= new help_model();
    }

}
