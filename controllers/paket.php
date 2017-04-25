<?php

class paket extends Controller {
    public static $posturl;
     
    function __construct() {
        parent::__construct();
//        echo 'we are insinde index';
        
    }
//    function fullday(){
//                $this->view->render("paket/fullday"); //memanggil fungsi render di class view.php
//
//    }
    
    function fullday($category){
                $this->view->render("paket/category"); //memanggil fungsi render di class view.php

    }
    public function getdatapaketwithcategory(){
        $class=new dbquery();
        $data=$class->get_post_with_category_paketfullday();
//        var_dump($data);
        return $data;
        
    }
        public function setposturl($posturl){
            paket::$posturl=$posturl;
        }
    
        public function getpostcontain(){
//        $this->posturl=$posturl;
        $getpost=new getpostcontain();
        $data=$getpost->getcontain(paket::$posturl);
//        var_dump($data);
//        this->index2();
        return $data;
   
       }
    public function get_image_url($isipost){
           $geturlimage=new getfirstimage();
           $imageurl=$geturlimage->get_first_image_url($isipost);
           return $imageurl;
    }
    
    public function get_string_directory_url_image_intag($url_image){
      
         $geturlimage=new getfirstimage();
         $string=$geturlimage->get_string_directory_url_image($content);
         echo $string;
         return $string;
    }
     public function remove_image_url_V2($content){
//         var_dump($content);
         $geturlimage=new getfirstimage();
         $string=$geturlimage->remove_image_url_in_content($content);
         return $string;
         
     }
     
    public function is_images($imageurl){
        $geturlimage=new getfirstimage();
        $boolean=$geturlimage->is_image($imageurl);
        return $boolean;
    }
    
      function index2(){
        $this->view->renderpaketmenu('paket/showcontainpaket');//folder/file.php   
    }
    
    public function addbaseurl($contain){
       $length=  strlen($contain);
//        echo $length; 
       $data=array(); 
        for($i=0; $j=$i<$length;$i++){
            $ambilstring=substr($contain,$i,26);
//            echo 'STring ke'.$i;
//            var_dump($ambilstring);
            if($ambilstring =="public/kcfinder-3.20-test2"){
                $newurl=URL."public/kcfinder-3.20-test2";
                $newcontain=substr_replace($contain,$newurl,$i,26);
                return $newcontain;
            }
        }
    }
    public function clear_image_url_in_post($containpost){
        $geturlimage=new getfirstimage();
        $contain=$geturlimage->remove_image_url_in_content($containpost);
        return $contain;
    }
    
}