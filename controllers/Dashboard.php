<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Dashboard extends Controller {
    public $edit="";
    function __construct() {
        parent::__construct();
        Session::init();  
        $logged=Session::get('loggedin');
        
//        <pre class='xdebug-var-dump' dir='ltr'><small>boolean</small> <font color='#75507b'>true</font>
//</pre>
//        var_dump($logged);
        if($logged == false){
           Session::destroy(); 
           header('location: login');
           exit();
        }
        //disini cek jika sudah login arahkan ke dashboard
        //set javascrip locatin
        $this->view->js=array('dashboard/js/default.js');
    }
    function index(){
        $this->view->renderdashboard('CMSdashboard/newpost');
    }
    function allpost(){ 
        if ($this->edit == ""){//dengan kondisi ini mengakali pembacaan url pada indeks ke 2 yaitu sebagai parameter;
            $this->view->renderdashboardallpost('CMSdashboard/allpost');
        }
        else{
            $this->view->renderdashboardallpost('CMSdashboard/edit');
        }
    }
    public function setpageedit($edit){
        $this->edit=$edit;    
    }
     function newpost(){
        $this->view->renderdashboardnewpost('CMSdashboard/newpost');
    }
    public function insert(){
        $dbquery=new dbquery();
        $judul=$_POST['juduleditor'];
        $post=$_POST['post'];
        var_dump($post);
        $date=date('y-m-d');
        $category=$_POST['category'];
        $author=$_POST['author'];
//        if(isset($author)){
//            echo'author sudah diset';
//        }
//        else{
//            echo 'belum diset';
//        }
        $dbquery->insertdata($judul,$post,$date,$category,$author);  
    }
    public function deletepost(){
        $id=$_POST['id'];
        $user=$_POST['user'];
//        $dbquery=new dbquery();
//        $dbquery->deletepost($id,$user);
        
    }
    public function recentpost(){
       $dbquery=new dbquery();
       $result=$dbquery->showrecentpost();
//       print_r($data);
//        $data=array();
//        //keluarin isi array dalam array
//        foreach ($result as $key){
//            $data=$key;
//        }
//        print_r($data);
        echo json_encode($result);
//       return $data;
    }
    
    public function update(){
        $dbquery=new dbquery();
        $judul=$_POST['juduleditor'];
        $post=$_POST['post'];
        var_dump("isi pos ".$post);
        //kembalikan link seperti semula bawaaan kc finder
        $modifpost=  $this->backurl_from_addbaseurl_to_url_image_kcfinder($post);
       
        $date=date('y-m-d');
        $category=$_POST['category'];
        $author=$_POST['author'];
         $id=$_POST['id'];
        $dbquery->updatepost($id,$judul,$modifpost,$date,$category,$author); 
    }
    
    public function showallpostdashboard(){
        $dbquery=new dbquery();
        $datapost=$dbquery->getallpostid();
        
        echo json_encode($datapost);
    }
    public function getpostwithidandauthor($user_info){
        //http://localhost/agbc/dashboard/allpost/edit?id=11 ; nilai id didapat dengan menggunakan fungsi get untuk variabel id; ini adalah salah satu cara untuk mempasing parameter
        //untuk user info didapatkan dari headerdashboard.php yang sebelumnya sudah diqueri
        $id=$_GET['id'];
        $author=$user_info;
        $dbquery=new dbquery();
        $data=$dbquery->getpostwith_id_and_author($id, $author);
        return $data;
    }
     public function get(){
        $dbquery=new dbquery();
        $id=$_get['id'];
    }
            
    function logout(){
        Session::destroy();
        header('location:'.URL.'login');
        exit();
    }
    function xhrinsert(){
        //lihat class controller variabel models
        $data=$this->models->xhrinsert();
        //bisa juga dengan ini
        
//       $dashboardmodel=new dashboard_model();
//       $dashboardmodel->xhrinsert();
   
    }
    function xhrgetlisting(){
        $data=$this->models->xhrgetlisting();
//        print_r($data);
        echo json_encode($data);
    }
    
    function xhrdeletelisting(){
        $this->models->xhrdeletelisting();
    }
    
    public function addbaseurl_to_image_kcfinder($contain){
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
    
    public function backurl_from_addbaseurl_to_url_image_kcfinder($contain){
           $length=  strlen($contain);
           $data=array(); 
           for($i=0; $j=$i<$length;$i++){
                $ambilstring=substr($contain,$i,32);
                if($ambilstring =="../../public/kcfinder-3.20-test2"){
                      $newurl="public/kcfinder-3.20-test2";
                      $newcontain=substr_replace($contain,$newurl,$i,32);   
                      var_dump($newcontain);
                      return $newcontain;
                }
           }
           }
    }
    
    
  
