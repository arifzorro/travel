<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class dashboard_model extends model {

    function __construct() {
        parent::__construct();
    }
    function xhrinsert(){
        $text=$_POST['text'];
        $sth=$this->db->prepare('INSERT INTO data (text) values (:text)');
        $sth->execute(array(':text' => $text));
        $data=array('text' =>$text, 'id'=>$this->db->lastInsertId());
        echo json_encode($data); 
    }
    function xhrgetlisting(){
        $stmt=$this->db->prepare('Select * from data');
        $stmt->setFetchMode(PDO::FETCH_ASSOC); //ini berfungsi untu membersihkan array associattive
//     Array([0] => Array
//        (
//            [id] => 1
//            [0] => 1
//            [text] => sss
//            [1] => sss
//        )
//
//    [1] => Array
//        (
//            [id] => 2
//            [0] => 2
//            [text] => sss
//            [1] => sss
//        )

        
        $stmt->execute();
        $data=$stmt->fetchall();
//         echo '<pre>',  print_r($data),'</pre>';
//         print_r($data);
//        echo json_encode($data);
         return $data;
        
    }
    
    function xhrdeletelisting(){
        $id=$_POST['id'];
        $sth=$this->db->prepare('DELETE FROM data where id="'.$id.'"');
//        $sth->execute();
    }
    

}