<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//require 'models/getpost.php';
class tes extends Controller {
    public static $posturl;
    function __construct() {
        parent::__construct();
//        echo 'we are insinde index';
        
    }
    
    public function setposturl($posturl){
        tes::$posturl=$posturl;
    }
    
    public function getpostcontain(){

//        $this->posturl=$posturl;
        $getpost=new getpostcontain();
        $data=$getpost->getcontain(tes::$posturl);
//        var_dump($data);
//        $this->index2();
        return $data;
   
    }
    function index(){
        $this->view->render('tes/tes');
    }
    
    function index2(){
        $this->view->rendercontain('news/index');
       
    }
            


}