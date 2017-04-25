<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


class getpost extends model{

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
       
       $query="select * from post";
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
//       
       
       
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
        $stmt=  $this->db->prepare($query);
        $result= $stmt->setFetchMode(PDO::FETCH_NUM);
        $stmt->execute();
        $data=$stmt->fetchall();
//        var_dump($data);
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
    
    public function isloggedinfromcookie($nickname){
        $query="select * from users where user_nicename='".$nickname."'";
         $stmt=  $this->db->prepare($query);
         $result= $stmt->setFetchMode(PDO::FETCH_ASSOC);
         return $result;
    }
    
    
    
}