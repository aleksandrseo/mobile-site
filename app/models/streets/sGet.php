<?
$streetId = $methods->request('streetId','string');
$infoStreet = $db->findOne('streets',array('_id' => new MongoId($streetId)));
$filterUser['_id'] = $db->findOneId('users',array('_id' => new MongoId($infoStreet['keyUser'])));

// update user's money
$filter = array(
            '_id' => $filterUser['_id']
);
$new_obj = array(
    '$inc' => array('virts' => $methods->courseVirts($infoStreet['timeCreate']) )
);
$db->update('users',$filter,$new_obj);

// update street's times money
$filter = array(
            '_id' => $infoStreet['_id']
);
$new_obj = array(
    '$set' => array('timeCreate' => time())
);
$db->update('streets',$filter,$new_obj);


$messages->good[] = 'Бабло получено';
$route = 'streets/s';
?>