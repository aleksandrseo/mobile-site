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
        return '';
    }
}
public function isNull($var){
    if ($var == NULL) {
        return true;
    } else {
        return false;
    }
}
public function stringLenght($string,$min,$max){
    if ((strlen($string) >= 1) and ((strlen($string) < $min) or (strlen($string) > $max))) {
        return true;
    } else {
        return false;
    }
}
public function isMessage($message){
    if (isset($message) && count($message)>0) {
        return $message;
    } else {
        return false;
    }
}

}
?>