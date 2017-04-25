<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class login_model extends model {
    
   
            
    function __construct() {
        parent::__construct();
//        echo md5('arif');
    }
    public function run(){ 
        try{
      
        $sth=$this->db->prepare("select user_email,user_login,user_nicename from users where user_email=:email and user_pass=MD5(:password)");
        $sth->execute(array(':email' => $_POST['email'],':password' => $_POST['password']));
//        var_dump($sth);
        $data=$sth->fetchAll();
        $temp=$data[0];

        var_dump($data);
        $count=$sth->rowCount();
        
        if($count > 0 &&  $temp['user_login'] == "root"){
            //login
            Session::init();
            Session::set('loggedin', true);
            setcookie('cookie', $temp['user_nicename'], time()+(24*3600), '/');
//               echo ''.$user;
            header('location:'.URL.'dashboard');
        }
        else{
            header('location:../login');
        }
        
        }
        catch (PDOException $ex){
            echo ''.$ex->getMessage();
        }
        
        
 ////pengetesan query database       
     /*   echo $_POST['login'];
        echo md5($_POST['password']);
        
        try{
        $stmt = $this->db->prepare("SELECT * FROM users");
        var_dump($stmt);
        $stmt->execute();
        $data=$stmt->fetchAll();
        var_dump($data);
        //bisa pake koma juga
          echo '<pre>',  print_r($data),'</pre>';*/
          
          
//                    while ($row = $stmt->fetch()) {
//                print_r($row);
//                }
//        
      
//        } catch (PDOException $ex) {
//            echo $ex->getMessage();
//        }
        }
   
}