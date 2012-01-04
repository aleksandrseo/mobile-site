<?
include('_autoload.php'); // autoload classes

// on/off header and footer
$htmlShow = false;
if (!m::request('html')) {
    $htmlShow = true;
}

//header
if ($htmlShow) {
    readfile('libs/header.html');
}

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