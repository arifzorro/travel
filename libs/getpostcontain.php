<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class getpostcontain {


    function __construct() {
        
    }
    
//    public function setposttitle($posturl){
//        $this->posturl=$posturl;
//    }
    
    public function getcontain($posturl){
        $class=new dbquery();
        $konv_post_url=new konvurl();
        $judul=$konv_post_url->set_post_back($posturl);
        $data=$class->getpostwithjudul($judul);
        return $data;
     
    }
    

}