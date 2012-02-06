<?
// input
$objectId = $methods->request('streetId','string');

// verification
$infoObject = $db->findOne('streets',array('_id' => new MongoId($objectId)));
$filterUser['_Id'] = $db->findOneId('users',array('_id' => new MongoId($infoObject['keyUser'])));

if ($filterUser['_Id'] == $profile['_id']) {

    // NO SQL
        
    // update user's money
    $db->update('users',
                array('_id' => $filterUser['_Id']),
                array('$inc' => array('virts' => $methods->courseVirts($infoObject['timeCreate']))
                     )
                );
    // update street's time
    $db->update('streets',
                array('_id' => $infoObject['_id']),
                array('$set' => array('timeCreate' => time() ))
                );
    // get user's info
    $profile = $users->getProfile($profile['_id']);
    // show message
    $messages->good[] = 'Virts+';    
}

$route = 'objects/streets/s';
?>