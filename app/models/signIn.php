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
            $route = 'profile';
        }
        
        
        
        if ($searchedUsers == 0) {
            $messages->bad[] = 'Ник или пароль неверные. Попробуйте еще раз.';
        }
    }

}
?>