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
if ($methods->isLogged()) {
// about user
$filter = array(
       'nick' => $_SESSION['nick']
);
$profile = $users->getProfile($filter);
echo $users->virts . '' .$users->reals . '';
//code
    include('app/libs/headerMenu.php');
}


// view's name
echo '<center><b>' . $html->word($route) . '</b></center>';

echo '<hr>';

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
    echo $html->lineLink('virts',$html->img('virts') . ' ' . $profile['virts'] . ' ');
    echo $html->lineLink('reals',$html->img('reals') . ' ' . $profile['reals'] . ' ');
    echo $html->lineLink('power',$html->img('power') . ' ' . $profile['power'] . ' ');
    echo $html->lineLink('ties',$html->img('ties') . ' ' . $profile['ties'] . ' ');
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