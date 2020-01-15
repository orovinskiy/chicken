<?php
/**
 * @author Oleg Rovinskiy
 * @date 1/15/2020
 * @url https://github.com/orovinskiy/chicken
 * This is a chicken web page
 */

//error reporting..
ini_set("display_errors",1);
error_reporting(E_ALL);

//Require autoload file
require("vendor/autoload.php");

//Instantiate F3
$f3 = Base::instance();

//Define a default route
$f3->route('GET /', function(){
    echo "hello";
});

//Run f3
$f3->run();
