<?
class m {

public function request($name) {
    if (isset($_REQUEST[$name])) {
        return $_REQUEST[$name];
    } else {
        return false;
    }
}

}
?>