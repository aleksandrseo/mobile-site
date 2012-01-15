<?
class signIn{

public function input($users) {
        
$res = array();   
                   
        if (methods::stringLenght($users->nick,4,30)) {
            $res[]='Ник должен быть от 4 до 30 символов';
        }        
        if (methods::stringLenght($users->pass,4,30)) {
            $res[]='Пароль должен быть от 4 до 30 символов';
        }
    if (count($res) > 0) {
        return $res;
    } else {
        return false;
    }
}

}
?>