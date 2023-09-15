<?php

/**
*   database config
**/
define("APP_NAME", "Udemy App"); 
define("APP_DESC", "Free and paid tutorials"); 

// echo "<pre>";
// print_r($_SERVER);
// echo "</pre>";

if($_SERVER['SERVER_NAME'] == 'localhost'){
    //database config for local machine (server)
    define("DBHOST", "localhost"); 
    define("DBNAME", "udemy_db"); 
    define("DBUSER", "root"); 
    define("DBPASSWORD", ""); 
    define("DBDRIVER", "mysql"); 
    define("ROOT", "http://localhost/udemy/public"); 

}else {
    //database config for live server
    define("DBHOST", "localhost"); 
    define("DBNAME", "udemy_db"); 
    define("DBUSER", "root"); 
    define("DBPASSWORD", ""); 
    define("DBDRIVER", "mysql"); 
    define("ROOT", "http://"); 

}