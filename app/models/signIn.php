<?
$users->nick = $methods->request('nick');
$users->pass = $methods->request('pass');

if ($methods->isRequest()) {
    $messages->bad = $signIn->input($users);
    
    if ((!$messages->have($messages->bad))) {
                
        $filter = array(
            'nick' => $users->nick,
            'pass' => $users->pass
        );
        $searchedUsers = 0;
        
        $cursor = $db->find('users',$filter);        
        foreach ($cursor as $obj) {
            $_SESSION['nick'] = $obj['nick'];
                  
            $searchedUsers++;
            $route = 'profile';
            break;
        }
        
        $obj = (object) array_merge((array) $obj, (array) $users);
            
        $filter = array(
            'nick' => $users->nick
        );
        $db->update('users',$filter,$obj);
        
        if ($searchedUsers == 0) {
            $messages->bad[] = 'Ник или пароль неверные. Попробуйте еще раз.';
        }
    }
}
?>