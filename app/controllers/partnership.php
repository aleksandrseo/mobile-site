<?
$route = $methods->request('route','string');
$route = ($route)?($route):'index';
$message = array();
?>
<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.0//EN" "http://www.wapforum.org/DTD/xhtml-mobile10.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Партнерская программа Stonehenge Games</title>
    <link rel="stylesheet" href="files/css_partnership.css" type="text/css"/>
</head>
<div class="menu">
<?
// footer
if ($methods->isLogged()){
    include('libs/partnership/centerMenu.php');
    echo $html->link('logout');
}
?>
</div>
<div class="page" id="border">    
<?

if ($route == 'signIn') {
    require('app/models/partnership/signIn.php');    
}
if ($methods->isLogged()) {
   $profile = $users->getProfile($_SESSION['_id']);
} else {
   $profile = NULL;
}

// header
echo '<center><b>' . $profile['nick'] . ' - ' . $html->word($route) . '</b></center><hr>';

if (file_exists('app/models/partnership/'.$route.'.php')) {
    require('app/models/partnership/'.$route.'.php');
    
}
//message
if (($messages->have($messages->bad))) {
    $html->showMes($messages->bad);
}
//message
if (($messages->have($messages->good))) {
    $html->showMes($messages->good);
}
//content
require("app/views/partnership/$route.php");
if (isset($backPage)) {
    echo $html->linkBack($backPage);
}
echo '<hr/>';

if ($methods->isLogged()) {
    echo $html->lineLink('user/uVirts',$html->img('virts') . ' ' . $profile['virts'] . ' ');
    echo $html->lineLink('user/uReals',$html->img('reals') . ' ' . $profile['reals'] . ' ');
    echo $html->lineLink('user/uPower',$html->img('power') . ' ' . $profile['power'] . ' ');
    echo $html->lineLink('user/uTies',$html->img('ties') . ' ' . $profile['ties'] . ' ');
    echo '<hr/>';
}

// footer
include('libs/partnership/footerMenu.php');
echo $profile['nick'];
?>
</body>