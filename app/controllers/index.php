<?
$route = $methods->request('route','string');
$route = ($route)?($route):'index';
$message = array();
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
if ($route == 'signIn') {
    require('app/models/signIn.php');    
}
if ($methods->isLogged()) {
   $profile = $users->getProfile($_SESSION['_id']);
} else {
   $profile = NULL;
}

// header
echo '<center><b>Игрок ' . $profile['nick'] . ' - ' . $html->word($route) . '</b></center><hr>';

if (file_exists('app/models/'.$route.'.php')) {
    require('app/models/'.$route.'.php');
    
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
require("app/views/$route.php");
echo '<hr/>';


if ($methods->isLogged()) {
    echo $html->lineLink('user/uVirts',$html->img('virts') . ' ' . (($profile['virts'])?$profile['virts']:0) . ' ');
    echo $html->lineLink('user/uReals',$html->img('reals') . ' ' . (($profile['reals'])?$profile['reals']:0) . ' ');
    echo $html->lineLink('user/uPower',$html->img('power') . ' ' . (($profile['power'])?$profile['power']:0) . ' ');
    echo $html->lineLink('user/uTies',$html->img('ties') . ' ' . (($profile['ties'])?$profile['ties']:0) . ' ');
    echo '<hr/>';
}

// footer
if ($methods->isLogged()){
    include('libs/centerMenu.php');
    echo $html->link('logout');
}

// footer
include('libs/footerMenu.php');
?>
</body>