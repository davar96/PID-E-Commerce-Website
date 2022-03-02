<?php

// define constant variables
define('DB_NAME', 'pid_e_commerce_website');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_HOST', 'localhost');

try{

    // connection variable
    $con = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

    // encoded language
    mysqli_set_charset($con, 'utf8');


}catch (Exception $ex){
    print "Une erreur s'est produite. Message: " . $ex->getMessage();
} catch (Error $e){
    print "Veuillez réessayer ultérieurement";
}