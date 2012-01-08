<?
/*
main file
04.01.2012
*/

// autoload classes
include('_autoload.php');

//controller
if (!$methods->request('cont')) {
    require("controllers/index.php");
} else {
    require('controllers/' . $methods->request('cont') . '.php');
}

?>