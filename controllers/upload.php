<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class upload extends Controller {

    function __construct() {
        parent::__construct();
    }
    
    public function index(){
       
    }
    
    public function picture(){
         $this->view->renderdashboard("upload/index");
    }
    
    public function upload_file(){
        $target_dir =$_SERVER['DOCUMENT_ROOT']."agbc/views/upload/uploads/";
        $target_file = $target_dir . basename($_FILES["file"]["name"]);
        echo $target_file;
        $uploadOk = 1;
        $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
        // Check if image file is a actual image or fake image
        if(isset($_POST["submit"])) {
            $check = getimagesize($_FILES["file"]["tmp_name"]);
            if($check !== false) {
                $uploadOk = 1;
            } else {
                echo "File is not an image.";
                $uploadOk = 0;
            }
        }
        // Check if file already exists
        if (file_exists($target_file)) {
            echo "Sorry, file already exists.";
            $uploadOk = 0;
        }
        // Check file size
        if ($_FILES["file"]["size"] > 500000) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }
        // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }
        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
                echo "The file ". basename( $_FILES["file"]["name"]). " has been uploaded.";
                   $class=new dbquery();
//                   $user_info = $class->getuserfromcookeie($_COOKIE['cookie']);
                   $id_and_email=$class->get_id_and_email_from_nicename($_COOKIE['cookie']);
                   $id_email=array();
//                   foreach ($id_and_email as $key){
//                       echo $key['id'];
//                       echo $key['user_email'];
//                   }
                    foreach ($id_and_email as $key){
                        $id_email=$key;
                   }
                   $date= date("Y-m-d H:i:s");
                   $this->inserttogallery($id_email['id'], $id_email['user_email'],$_FILES["file"]['name'], $date);
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
    }
    public function inserttogallery($id,$email,$pathgambar,$date){
//        echo '<br>'.$id;
//        echo '<br>'.$email;
//        echo '<br>'.$pathgambar;
//        echo '<br>'.$date;
        $class=new dbquery();
        $class->insertpicture($id, $email, $pathgambar, $date);
        
        
    }
    public function getallpicture($id,$user_email,$limit){
         $class=new dbquery();
         return $class->getgallerydatawithlimit($id,$user_email,$limit);
         
    }
    
    public function pagenumber(){
        
    }


    public function getlength_rowpicture($id,$user_email){
         $class=new dbquery();
         $data=$class->getgallerydata($id,$user_email);
         $length=  count($data);
         return $length;
    }
    public function getid_useremail($user_nickname){
        $class=new dbquery();
        return $class->get_id_and_email_from_nicename($user_nickname);
        
    }
    
    public function delete(){
       $id_gambar=$_POST['id'];
       $userid=$_POST['userid'];
//       echo $id_gambar;
       $dbquery=new dbquery();
       $dbquery->deletepicture($id_gambar, $userid);
       
    }
    public function deleteallpic(){
        $id=  json_decode($_POST['data']);
        $dbquery=new dbquery();
        $dbquery->deleteallpicture($id);
    }
    
    public function document(){
           $date= date("y-m-d H:i:s");
           $date= date("d-m-Y H:i:s");
           echo $date;
    }
    

}