<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class error extends Controller {

    function __construct() {
        parent::__construct();
       
    }
    function index(){
         echo 'ini adalah error';
        $this->view->msg='INI ERRORRRR';
        $this->view->rendererror('ss'); 
    }

}

