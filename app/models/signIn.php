<?
$input->nick = $methods->request('nick');
$input->pass = $methods->request('pass');

if ($methods->isRequest()) {
    $messages->bad = $signIn->input($input);
    
    if ((!$messages->have($messages->bad))) {
                
        $filter = array(
            'nick' => $input->nick,
            'pass' => $input->pass
        );
        $searchedUsers = 0;
        
        $cursor = $db->find('users',$filter);        
        foreach ($cursor as $obj) {
            $_SESSION['nick'] = $obj['nick'];
                  
            $searchedUsers++;
            $filter = array('nick'=>$_SESSION['nick']);
            $users = $db->findOne('users',$filter );
            $route = 'profile';
            break;
        }
        
        /*$obj = (object) array_merge((array) $obj, (array) $users);            
        $filter = array(            'nick' => $users->nick
        );
        $db->update('users',$filter,$obj);*/
        
        if ($searchedUsers == 0) {
            $messages->bad[] = 'Ник или пароль неверные. Попробуйте еще раз.';
        }
    }

}
?>