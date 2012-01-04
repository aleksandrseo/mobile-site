<?
$menu = m::request('menu');
$core = m::request('core');

if ($menu) {
    require('models/' . $menu . '.php');
    require('views/' . $menu . '.php');
} else if ($core) {
    require('models/' . $core . '.php');
} else  {
    require("models/index.php");
    require("views/index.php");
}


?>