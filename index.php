<?
/*
main file
04.01.2012
*/

ini_set('use_trans_sid',1);

// autoload classes
include('_autoload.php');

//controller
if (!$methods->request('cont')) {
    require("app/controllers/index.php");
} else {
    require('app/controllers/' . $methods->request('cont') . '.php');
}

?>