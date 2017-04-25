<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require 'libs/Bootstrap.php';
require 'libs/Controller.php';
require 'libs/view.php';
require 'libs/model.php';
require 'libs/database.php';
require 'config/database.php';
require 'config/paths.php';

//session
require 'libs/Session.php';  

require 'models/dbquery.php';
require 'models/konvurl.php';
require 'models/getfirstimage.php';
require 'libs/getpostcontain.php';
//require "views/headergbc.php";
$app=new Bootstrap();
