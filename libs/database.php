<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class database extends PDO{

    function __construct() {
        try{
//        parent::__construct('mysql:host=localhost;dbname=mvc', 'root', '');
          parent::__construct(DB_TYPE.':host='.DB_HOST.';dbname='.DB_NAME,DB_USER,DB_PASS);
        }
        catch (PDOException $ex){
            echo $ex->getMessage();
        }
    }

}