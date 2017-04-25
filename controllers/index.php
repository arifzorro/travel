<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class index extends Controller {

    function __construct() {
        parent::__construct();
//        echo 'we are insinde index';
        
    }
    function index(){
//        $this->view->render('index/home'); //memanggil fungsi render di class view.php
        $this->view->render('index/homenew'); //memanggil fungsi render di class view.php
    }

}