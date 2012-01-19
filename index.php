<?
/*
main file
04.01.2012
*/


// autoload classes
include('_autoload.php');

//sessions support
session_start();

//controller
if (!$methods->request('cont')) {
    require("app/controllers/index.php");
} else {
    require('app/controllers/' . $methods->request('cont') . '.php');
}



?>
