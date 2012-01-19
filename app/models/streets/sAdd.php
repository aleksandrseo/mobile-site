<?


$streets->name = $methods->request('streetName','string');
$streets->img = 'city';
$streets->keyUser = $users['_id'];
$streets->timeCreate = time();

if ($methods->isRequest()) {
    
    $filter = array('name' => $streets->name);
    $result = $db->findOne('streets',$filter);
    if ($result == NULL) {
        $db->insert('streets',$streets);
        $messages->good[]='Улица построена';
        $route = 'streets/s';
    }
}
?>