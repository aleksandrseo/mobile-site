<?
// route
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
<div style="text-align: right"><a href=""><img src="files/reload.png"></a></div>
<?
global $users;


if ($route == 'signIn') {
    require('app/models/signIn.php');    
}
if ($methods->isLogged()) {
   $profile = $users->getProfile($_SESSION['_id']);
} else {
   $profile = NULL;
}

//model
if (file_exists('app/models/'.$route.'.php')) {
    if (substr($route, -1) == '/') {
    $route = $route.'index';
    }
    require('app/models/'.$route.'.php');
}

//


//message
if (($messages->have($messages->bad))) {
    $html->showMes($messages->bad);
    echo '<br/>';
}
//message
if (($messages->have($messages->good))) {
    $html->showMes($messages->good);
    echo '<br/>';
}
//content
// header
echo '<center><b>' . $profile['nick'] . ' - ' . $html->word($route) . '</b></center>';


require("app/views/$route.php");
if (isset($backPage)) {
    echo $html->linkBack($backPage);
}


if ($methods->isLogged()) {
    echo '<hr/>';
    $html->userParameters($profile);
    echo '<hr/>';
}

// menu
if ($methods->isLogged()){
    echo $html->linkText('users/profile','My profile') . ' '.'<br/><br/>';
    echo $html->linkText('objects/streets/s','Улицы').'<br/>';
    echo $html->linkText('objects/constructions/c','Собственность').'<br/>';
    echo $html->linkText('chat','Чат').'<br/>';
    echo $html->linkText('users/all','Все пользователи (' . $countUserCursor . ')').'<br/>';
}

// footer
include('libs/footerMenu.php');
echo $profile['nick'];
?>

<?
if ($route == 'index') {
?>
<script type="text/javascript" src="http://mobtop.ru/c/23781.js">
</script>
<noscript>
<a href="http://mobtop.ru/in/23781"><img src="http://mobtop.ru/23781.gif" alt="MobTop.Ru - Рейтинг и статистика мобильных сайтов"/></a>
</noscript>
<a href="http://waplog.net/c.shtml?424849"><img src="http://c.waplog.net/424849.cnt" alt="waplog" /></a>
<?
} else {
?>
<script type="text/javascript" src="http://mobtop.ru/c/23782.js">
</script>
<noscript>
<a href="http://mobtop.ru/in/23782">
<img src="http://mobtop.ru/23782.gif" alt="MobTop.Ru - Рейтинг и статистика мобильных сайтов"/></a>
</noscript>
<a href="http://waplog.net/c.shtml?424850"><img src="http://c.waplog.net/424850.cnt" alt="waplog" /></a>
<?
}
?>
</body>