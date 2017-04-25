<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class konvurl {

    function __construct() {
        
    }
    
    public function set_post_name($posttitle){
        $posttitle=  strtolower($posttitle);
        $posttitle=  preg_replace("/[^a-z0-9]+/", "-", $posttitle);
      
        return $posttitle;
    }
    
    public function set_post_back($posturl){
        $posturl=  strtolower($posturl);
        $posturl=  preg_replace("/[^a-z0-9]+/", " ", $posturl);
        return $posturl;
    }

}