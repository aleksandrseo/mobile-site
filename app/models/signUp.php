<?
$users->nick = $methods->request('nick');
$users->pass = $methods->request('pass');
$users->pass1 = $methods->request('pass1');
$users->email = $methods->request('email');

if ($methods->isRequest()) {
    $messages->bad = $signUp->input($users);
    
    if ((!$messages->have($messages->bad))) {
        
        // nick
        $filter = array(
            'nick' => $users->nick
        );                
        $collection = $db->db->selectCollection('users');
        $cursor = $collection->find($filter);
        foreach ($cursor as $obj) {
           if (isset($obj)) {
            $messages->bad[] = 'Данный ник уже занят. Попробуйте другой.';
            break;
           }
        }
        // pass == pass1
        if ($users->pass != $users->pass1) {
            $messages->bad[] = 'Пароль и повтор пароля не совпадают.';
        }     
            if ((!$messages->have($messages->bad))) {
                $collection = $db->db->selectCollection('users');
                $collection->insert($users,true);
                $messages->good[] = 'Регистрация успешна';
            }
    }
}
?>