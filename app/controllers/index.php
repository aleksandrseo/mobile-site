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
// get info about user
$filter = array();
if (isset($_SESSION['nick'])) {
    $filter = array('nick'=>$_SESSION['nick']);
}
$users = $db->findOne('users',$filter );

// header
echo '<center><b>Игрок ' . $users['nick'] . ' - ' . $html->word($route) . '</b></center><hr>';

// model
/*if (file_exists('app/code_lib/'.$route.'.php')) {
    require('app/code_lib/'.$route.'.php');
    $$route = new $route;
}*/
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
    echo $html->lineLink('user/uVirts',$html->img('virts') . ' ' . (($users['virts'])?$users['virts']:0) . ' ');
    echo $html->lineLink('user/uReals',$html->img('reals') . ' ' . (($users['reals'])?$users['reals']:0) . ' ');
    echo $html->lineLink('user/uPower',$html->img('power') . ' ' . ((isset($users['power']))?$users['power']:0) . ' ');
    echo $html->lineLink('user/uTies',$html->img('ties') . ' ' . ((isset($users['ties']))?$users['ties']:0) . ' ');
    echo '<hr/>';
}

// footer
if (isset($_SESSION['nick'])) {
    include('app/libs/centerMenu.php');
}

if ($methods->isLogged()){
    echo $html->link('logout');
}

// footer
include('app/libs/footerMenu.php');

?>
</body>