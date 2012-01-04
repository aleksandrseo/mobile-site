<?
/*
main file
04.01.2012
*/

// autoload classes
include('_autoload.php');

// on/off header and footer
$htmlShow = false;
if (!m::request('html')) {
    $htmlShow = true;
}

//header
if ($htmlShow) {
    readfile('libs/header.html');
}

//controller
if (!m::request('cont')) {
    require("controllers/index.php");
} else {
    require('controllers/' . m::request('cont') . '.php');
}

//footer
if ($htmlShow) {
    readfile('libs/footer.html');
}
?>