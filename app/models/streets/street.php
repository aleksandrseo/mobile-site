<?
$streetId = ($methods->request('id','street'));
$streetId = ($streetId)?($streetId):NULL;

if ($streetId) {
    $streetId = new MongoId($streetId);
    // street
    $infoStreet = $db->findOne('streets',array('_id' => $streetId));
    // keyUser
    $infoUser = $db->getObjectParameter('users',$infoStreet['keyUser'],array('_id','nick'));
    // keyConstructions
}
?>