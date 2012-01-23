<?
$streets->name = $methods->request('streetName','string');
$streets->img = 'city';
$streets->keyUser = $profile['_id'];
$streets->timeCreate = time();
$streets->timeMoney = time();

if ($methods->isRequest()) {
    
    $filter = array('name' => $streets->name);
    if ($db->findOne('streets',$filter) == NULL)
        {
            $db->insert('streets',$streets);
            $messages->good[]='You have street';
            $route = 'streets/s';
        }
}
?>