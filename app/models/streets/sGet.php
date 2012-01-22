<?
// input
$streetId = $methods->request('streetId','string');

// verification
$infoStreet = $db->findOne('streets',array('_id' => new MongoId($streetId)));
$filterUser['_Id'] = $db->findOneId('users',array('_id' => new MongoId($infoStreet['keyUser'])));



if ($filterUser['_Id'] == $profile['_id']) {

    // NO SQL
    
    // update user's money
    $db->update('users',
                array('_id' => $filterUser['_Id']),
                array('$inc' => array('virts' => $methods->courseVirts($infoStreet['timeCreate']) ),
                      '$set' => array('ties' => 10 )
                     )
                );
    // update street's time
    $db->update('streets',
                array('_id' => $infoStreet['_id']),
                array('$set' => array('timeCreate' => time() ))
                );
    // update user's info
    $profile = $users->getProfile($profile['_id']);
    
    // show message
    $messages->good[] = 'Бабло получено';    
}

$route = 'streets/s';
?>