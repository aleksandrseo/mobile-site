<?
if (!m::request('menu')) {
    require("views/index.php");
} else {
    require('views/' . m::request('menu') . '.php');
}
?>