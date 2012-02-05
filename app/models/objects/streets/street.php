<?
$objectId = ($methods->request('id','string'));
$objectId = ($objectId)?($objectId):NULL;

if ($objectId) {
    $objectId = new MongoId($objectId);
    // street
    $infoObject = $db->findOne('streets',array('_id' => $objectId));
    // keyUser
    $infoUser = $db->getObjectParameter('users',$infoObject['keyUser'],array('_id','nick'));
    // keyConstructions
}
?>