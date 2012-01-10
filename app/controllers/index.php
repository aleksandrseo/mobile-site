<?
$view = $methods->request('view');
$model = $methods->request('model');

readfile('header.html');

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

readfile('footer.html');

?>