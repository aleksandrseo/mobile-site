<?
$view = $methods->request('view');
$model = $methods->request('model');

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
include('app/libs/header_menu.php');

if ($view) {
    if (file_exists('app/models/' . $view . '.php')) {
        require('app/models/' . $view . '.php');
    }
    require('app/views/' . $view . '.php');
} else if ($model) {
    require('app/models/' . $model . '.php');
} else  {
    require("app/models/index.php");
    require("app/views/index.php");
}

include('app/libs/footer_menu.php');
?>
</div>
</body>