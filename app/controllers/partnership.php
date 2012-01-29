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
<div class="page" id="border">

<div class="header">
<?
echo '<h3>Партнерская программа</h3>';
?>
</div>

<div class="menu" id="border">
Вход
<form method="post" action="index.php?route=signIn">
Nick<br/><input type="text" name="nick"><br>
Pass:<br/><input type="text" name="pass"><br>
<input class="button" id="border" type="submit" value="SignIn"><br/>
</form>

</div>

<div class="page_in" id="border">
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
echo '<center><b>' . $profile['nick'] . '</b></center>';

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

if ($methods->isLogged()) {
    echo $html->lineLink('user/uVirts',$html->img('virts') . ' ' . $profile['virts'] . ' ');
    echo $html->lineLink('user/uReals',$html->img('reals') . ' ' . $profile['reals'] . ' ');
    echo $html->lineLink('user/uPower',$html->img('power') . ' ' . $profile['power'] . ' ');
    echo $html->lineLink('user/uTies',$html->img('ties') . ' ' . $profile['ties'] . ' ');
}
?>
</div>

<?
// footer
include('libs/partnership/footerMenu.php');
echo $profile['nick'];
?>
</div>
</body>