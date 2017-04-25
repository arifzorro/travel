<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Session {
    
    public static $usernicename;
    
    public static function init(){
        @session_start();
    }

    public static function set($key,$value){
       $_SESSION [$key]=$value;
   }
   
   public static function get($key){
       if(isset($_SESSION[$key]))
          return $_SESSION[$key];
   }
   
   public static function destroy(){
//       delete cookie        
       unset($_COOKIE['cookie']);
       
       setcookie('cookie', '', time() - (24*3600),'/');
       session_destroy();
   }
     
       public static function Setloginuser($usernicename){
 
           Session::$usernicename=$usernicename;
             
        }
        
        public static function getloginuser(){
            return Session::$usernicename;
        }
       

   

}