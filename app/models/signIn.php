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
        
        $collection = $db->db->selectCollection('users');
        $cursor = $collection->find($filter);
        foreach ($cursor as $obj) {
            $_SESSION['id'] = $obj['_id'];
            $route = 'profile';
            break;
        }
    }
}
?>