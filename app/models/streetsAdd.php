<?


$streets->name = $methods->request('streetName','string');
$streets->img = 'city';
$streets->keyUser = $users['_id'];
$streets->timeCreate = time();

if ($methods->isRequest()) {

    $db->insert('streets',$streets);
    $messages->good[]='Улица создана';
    $route = 'streets';
}
?>