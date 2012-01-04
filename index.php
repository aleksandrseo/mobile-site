<?
function request($name) {
    global $_REQUEST;
    if (isset($_REQUEST[$name])) {
        return $_REQUEST[$name];
    } else {
        return false;
    }
}


if (request('page')) {
    require('controllers/' . request('page') . '.php');
} else {
    require("controllers/index.php");
}
?>