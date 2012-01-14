<?
$route = $methods->request('route','string');
$route = ($route)?($route):'index';
?>
<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.0//EN" "http://www.wapforum.org/DTD/xhtml-mobile10.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Онлайн-игра НаРайоне.моби</title>
    <link rel="stylesheet" href="files/css.css" type="text/css"/>
</head>
<div class="page" id="border">
    
<?
include('app/libs/headerMenu.php');
// view's name
echo '<center><b>' . $html->word($route) . '</b></center>';


// model
if (file_exists('app/models/'.$route.'.php')) {
    require('app/models/'.$route.'.php');
}
if (file_exists('app/code_lib/'.$route.'.php')) {
    require('app/code_lib/'.$route.'.php');
}
//message
var_dump($methods->isMessage($message));
if ($methods->isMessage($message)) {
    var_dump($message);
}
//content
require("app/views/$route.php");

// footer
include('app/libs/footerMenu.php');
?>
</body>