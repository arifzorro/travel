<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


class dbquery extends model{

    function __construct() {
        parent::__construct();
    }
    
    public function get(){
        
//        $query="select * from post";
//        $sth=  $this->db->prepare($query);
//        $sth->setFetchMode(PDO::FETCH_ASSOC);
//        $sth->execute();
//        $data=$sth->fetchall();
//       echo '<pre>',  print_r($data),'</pre>';
       
       $query="select * from post where category='news'";
        $sth=  $this->db->prepare($query);
        $sth->setFetchMode(PDO::FETCH_ASSOC);
        $sth->execute();
       $data=$sth->fetchall();
       $count=  count($data);
       
//       //mengeluarkan isi array dalam array
//       echo 'panjang array : '.$count;
//       $array =array ("isipost","judul","author","tanggal","isipost");
//
//       
//       for($i=0 ; $i<$count ;$i++){
//           $simpan=$data[$i];
//           $countsimpan=  count($simpan);
//           for($j=0;$j<$countsimpan;$j++){
//               echo $simpan[$array[$j]];
//           }
//       }
       
       
        //mengeluarkan isi array dalam array
//       echo 'panjang array : '.$count;
//       $array =array ("isipost","judul","author","tanggal","isipost");
       
       //batas view post depan 3
       $geturlimage=new getfirstimage();
       $imagelist=array();
       for($i=0 ; $i<$count ;$i++){
           $simpan=$data[$i];
           $countsimpan=  count($simpan);
           $image_dan_judul=array();
           for($j=0;$j<1;$j++){
                     $image=$geturlimage->get_first_image_url($simpan["isipost"]);
                     $image_dan_judul[0]=$simpan["judul"];
                     $image_dan_judul[1]=$simpan["isipost"];
                     $image_dan_judul[2]=$image;
                     $image_dan_judul[3]=$simpan['id_post'];
                     $imagelist[$i]=$image_dan_judul;
                     
           }    
       }
       return $imagelist;
//       echo '<pre>',  print_r($data),'</pre>';
//       echo $image;
    }
    
     public function getpostwithjudul($judul){
        $query="select * from post where judul='".$judul."'";
//        echo $query;
        $stmt=  $this->db->prepare($query);
        $result= $stmt->setFetchMode(PDO::FETCH_NUM);
        $stmt->execute();
        $data=$stmt->fetchall();
//         while ($row = $stmt->fetch()) {
//             print $row[0] . "\t" . $row[1] . "\t" . $row[2] . "\n";
//        }

//        foreach ($data as $key){
//            foreach ($key as $tampil=>$value){
////                echo $tampil;
//                echo $value;
//            }
//        }
        return $data;   
    }
    
    

    
    public function postgetdata(){
       $data=  $this->get();
       return $data;
    }
    
    public function getuserfromcookeie($cookie){
   
     $x = explode(':', $cookie);
     return $x[0];
    }
    public function get_id_and_email_from_nicename($nickname){
         $query="select id,user_email from users where user_nicename='".$nickname."'";
         $stmt=  $this->db->prepare($query);
         $result= $stmt->setFetchMode(PDO::FETCH_ASSOC);
         $stmt->execute();
         $data=$stmt->fetchall();
         return $data;
    }
    
    
    public function isloggedinfromcookie($nickname){
        $query="select * from users where user_nicename='".$nickname."'";
         $stmt=  $this->db->prepare($query);
         $result= $stmt->setFetchMode(PDO::FETCH_ASSOC);
         return $result;//return boolean
    }
    
    public function insertdata($judul,$post,$date,$category,$author){
   
                 $query="insert into post (judul,isipost,tanggal,category,author) values ('".$judul."','".$post."','".$date."','".$category."','".$author."')";
//                 echo ''.$query;
                $stmt=$this->db->prepare($query);
                if($judul=="" || $post=="" || $category=="" || $author == ""){
                     require'views/alert/error.php';
                }
                else{
                    if ($stmt->execute()){
                            require 'views/alert/sukses.php';
                    }
                else{
                   require'views/alert/error.php';
                }
                }
         
    }
    public function deletepost($id,$user){
        $query=("delete from post where id_post='".$id."' and author='".$user."'");
        $stmt=$this->db->prepare($query);
    
            if ($stmt->execute()){
               require 'views/alert/suksesdelete.php';
            }
            else{
               require'views/alert/error.php';
            }
        
    }
    
    public function showrecentpost(){
        $query=("select * from post");
        $stmt=  $this->db->prepare($query);
        $result= $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $stmt->execute();
        $data=$stmt->fetchall();//dalam array ada array
        return $data;
    }
    
    public function updatepost($id,$judul,$isipost,$tanggal,$category,$author){
        $query=("UPDATE post SET judul='".$judul."',isipost='".$isipost."',tanggal='".$tanggal."',category='".$category."',author='".$author."' where id_post='".$id."'");
//        echo $query;
        $stmt=$this->db->prepare($query);
        if($judul==""|| $isipost=="" || $category=="" || $author == ""){
                     require'views/alert/error.php';
        }
        else{
            if ($stmt->execute()){
                require 'views/alert/suksesupdate.php';
            }
            else{
                require'views/alert/error.php';
            }
        }
    }
    
    public function getallpostid(){
        $query=("select id_post,judul,tanggal,category from post");   
        $stmt=$this->db->prepare($query);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $stmt->execute();
        $data=$stmt->fetchall();
        return $data;
    }
    
    public function getpostwith_id_and_author($id,$author){
         $query=("select * from post where id_post='".$id."' and author='".$author."'");   
        $stmt=$this->db->prepare($query);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $stmt->execute();
        $data=$stmt->fetchall();
        return $data;
    }
    public function insertpicture($id,$user_email,$pathgambar,$date){
        
        $query="insert into gallery (id,user_email,pathgambar,date) values ('".$id."','".$user_email."','".$pathgambar."','".$date."')";
                 echo ''.$query;
        $stmt=$this->db->prepare($query);
        $stmt->execute();
         
    }

    public function getgallerydata($id,$user_email){
        $query=("select * from gallery where id='".$id."' and user_email='".$user_email."'"); 
        $stmt=$this->db->prepare($query);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $stmt->execute();
        $data=$stmt->fetchall();
        return $data;
    }
    
       public function getgallerydatawithlimit($id,$user_email,$limit){
        $query=("select * from gallery where id='".$id."' and user_email='".$user_email."' ORDER BY id_gambar desc $limit"); 
        $stmt=$this->db->prepare($query);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $stmt->execute();
        $data=$stmt->fetchall();
        return $data;
    }
    
    public function deletepicture($id_gambar,$userid){
        $query1=("select * from gallery where id_gambar='".$id_gambar."' and id='".$userid."'"); 
        $stmt1=$this->db->prepare($query1);
        $stmt1->setFetchMode(PDO::FETCH_ASSOC);
        $stmt1->execute();
        $data=$stmt1->fetchall();
        $picture=array();
        foreach ($data as $key){
           $picture=$key;
        }
        $query=("delete from gallery where id_gambar='".$id_gambar."' and id='".$userid."'");
        $stmt=$this->db->prepare($query);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        if ($stmt->execute()){                   
                 $target_dir =$_SERVER['DOCUMENT_ROOT']."agbc/views/upload/uploads/".$picture['pathgambar'];
                 foreach (glob($target_dir) as $file){  //menghapus gambar pada directory dengan perintah php
                     if(is_file($file)){
                         @unlink($file);
                     }
                 }
               require 'views/alert/suksesdeletepic.php';
            }
            else{
               require'views/alert/error.php';
            }
    }
    
    //parameter : array id 
    public function deleteallpicture($id){
        
        //getpathgambar to delete from directory
        $count=count($id);
        $picture=array();
        $counter=0;
        for($i=0;$i<$count;$i++){
            $query1=("select * from gallery where id_gambar='".$id[$i]."'"); 
            $stmt1=$this->db->prepare($query1);
            $stmt1->setFetchMode(PDO::FETCH_ASSOC);
            $stmt1->execute();
            $data=$stmt1->fetchall();
            foreach ($data as $key){
               $picture[$counter]=$key;
            }
            $counter++;
        }
        
        //get onlypathgambar
        $pathpic=array();
        $hit=0;
        foreach ($picture as $key){
            $pathpic[$hit]=$key['pathgambar'];
            $hit++;
        }
        $tanda=0;
        for($i=0;$i<$count;$i++){
            $query="delete from gallery where id_gambar='".$id[$i]."'";
             $stmt=$this->db->prepare($query);
             $stmt->execute();
             $target_dir =$_SERVER['DOCUMENT_ROOT']."agbc/views/upload/uploads/".$pathpic[$i];
                 foreach (glob($target_dir) as $file){  //menghapus gambar pada directory dengan perintah php
                     if(is_file($file)){
                         @unlink($file);
                     }
                 }
          
         if($tanda==$count-1){
             return require 'views/alert/suksesdelete.php';
         }
          $tanda++;   
        }
        
    }
    
    public function get_post_with_category_paketfullday(){
        $query=("select id_post,judul,isipost,tanggal,category from post where category='fullday'");   
        $stmt=$this->db->prepare($query);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
//        $stmt->setFetchMode(PDO::FETCH_NUM);
        $stmt->execute();
        $data=$stmt->fetchall();
//        var_dump($data);
        return $data;
    }
    
    
}


