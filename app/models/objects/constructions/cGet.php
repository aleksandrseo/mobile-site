<?
// input
$objectId = $methods->request('objectId','string');

// verification
$infoObject = $db->findOne('constructions',array('_id' => new MongoId($objectId)));
$filterUser['_Id'] = $db->findOneId('users',array('_id' => new MongoId($infoObject['keyUser'])));



if ($filterUser['_Id'] == $profile['_id']) {

    // NO SQL
        
    // update user's money
    $db->update('users',
                array('_id' => $filterUser['_Id']),
                array('$inc' => array('virts' => $methods->courseVirts($infoObject['timeCreate']))
                     )
                );
    // update object's time
    $db->update('constructions',
                array('_id' => $infoObject['_id']),
                array('$set' => array('timeCreate' => time() ))
                );
    // get user's info
    $profile = $users->getProfile($profile['_id']);
    // show message
    $messages->good[] = 'Virts+';    
}

$route = 'objects/constructions/c';
?>