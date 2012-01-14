<?
class SignUp{

public function input($user) {
               
$res = array();
    
        if (methods::stringLenght($user['nick'],4,30)) {
            $res[]='Ник должен быть от 4 до 30 символов';
        }
        if (methods::stringLenght($user['pass'],4,30)) {
            $res[]='Пароль должен быть от 4 до 30 символов';
        }
        if (methods::stringLenght($user['email'],8,30)) {
            $res[]='Email должен быть от 4 до 30 символов';
        }
    if (count($res) > 0) {
        return $res;
    } else {
        return false;
    }
    
}

public function register($user){
  
}

}
?>