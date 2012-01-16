<?
class methods{
    
public function request($name,$type = 'string') {
    if (isset($_REQUEST[$name])) {
        if (is_string($_REQUEST[$name]) && $type = 'string') {
            return $_REQUEST[$name];
        } else if (is_int($_REQUEST[$name]) && $type = 'int') {
            return $_REQUEST[$name];
        } else return 'falseType';        
    } else {
        return NULL;
    }
}
public function isRequest(){
    if (isset($_REQUEST['route']) and count($_REQUEST)>1) {
        return true;
    } else {
        return false;
    }
}
public function isNull($var){
    if ($var == NULL) {
        return true;
    } else {
        return false;
    }
}

public function stringLenght($string,$min = 1,$max = 64){
    if ((strlen($string) < $min) or (strlen($string) > $max)){
        return true;
    } else if ($string == NULL) {
        return true;
    } else {
        return false;
    }
}
function isEmail($email){
  $s=filter_var($email, FILTER_VALIDATE_EMAIL);
  return !empty($s);
}
function isLogged(){
    global $_SESSION;
    if (isset($_SESSION['nick'])) {
        return true;
    } else {
        return false;
    }
}
function isLogout(){
    global $_SESSION;
    unset($_SESSION);
    session_destroy();
}

}
?>