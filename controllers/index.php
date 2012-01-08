<?
$view = $methods->request('view');
$model = $methods->request('model');

readfile('header.html');

if ($view) {
    require('models/' . $view . '.php');
    require('views/' . $view . '.php');
} else if ($model) {
    require('models/' . $model . '.php');
} else  {
    require("models/index.php");
    require("views/index.php");
}

readfile('footer.html');

?>