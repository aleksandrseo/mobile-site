<?
unset($users);

$users->nick = $methods->request('nick');
$users->pass = $methods->request('pass');
$pass1 = $methods->request('pass1');
$users->email = $methods->request('email');
$users->reals = 50;
$users->virts = 1000;
$users->power = 0;
$users->ties = 0;
$users->img = 'default';

if ($methods->isRequest()) {
    $messages->bad = $signUp->input($users);
    
    if ((!$messages->have($messages->bad))) {
        // nick
        $filter = array(
            'nick' => $users->nick
        );                
        $cursor = $db->find('users',$filter);
        foreach ($cursor as $obj) {
           if (isset($obj)) {
            $messages->bad[] = 'Данный ник уже занят. Попробуйте другой.';
            break;
           }
        }
        if ($users->pass != $pass1) {
            $messages->bad[] = 'Пароль и повтор пароля не совпадают.';
        }     
            if ((!$messages->have($messages->bad))) {
                $db->insert('users',$users);
                $messages->good[] = 'Регистрация успешна';
                $_SESSION['nick'] = $users->nick;
                $route = 'profile';
            }           
    }
}
?>