<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class view {
 public static $activedashboard;
    function __construct() {
//        echo 'this is is view';
    }
//    public static $datacontain;
//    public function setviewheader($datacontain){
//        view::$datacontain=$datacontain;
//    }
    public function render($name){  //render index halaman depan
        require 'views/headergbc.php';
        require 'views/' .$name. '.php';
        require 'views/footergbc.php';
    }
    public function rendercontain($path){
        require 'views/headertitle.php';
        require 'views/' .$path. '.php';
        require 'views/footergbc.php';

    }
   public function renderpaketmenu($path){
        require 'views/headertitle_paket.php';
        require 'views/' .$path. '.php';
        require 'views/footergbc.php';

    }
      public function renderlogin($name){
//        require 'views/headergbc.php';
        require 'views/headerlogin.php';
        require 'views/' .$name. '.php';
        require 'views/footergbc.php';
    }
    
    public function renderdashboard($name){
        
        require 'views/headerdashboard.php';
        require 'views/CMSdashboard/sidebarmodern.php';
//        require 'views/CMSdashboard/sidebarhtml.html';
        require 'views/' .$name. '.php';
        
    }

    public function renderdashboardallpost($name){
        require 'views/headerdashboard.php';
//        require 'views/CMSdashboard/sidebar.php';
        require 'views/CMSdashboard/sidebarmodern.php';
//         require 'views/CMSdashboard/sidebarhtml.html';
        require 'views/' .$name. '.php';
    }
    
    public function renderdashboardnewpost($name){
        require 'views/headerdashboard.php';
         require 'views/CMSdashboard/sidebar.php';
        require 'views/CMSdashboard/index.php';
    }
    public function rendererror($path){
        echo 'ini error';
    }
    public function renderiosslider(){
        require 'views/iosslider/iossliderview.php';
    }
      public function renderpaket ($name){
        require 'views/headergbc.php';
        require 'views/' .$name. '.php';
        require 'views/footergbc.php';
    }

}