<?
$streetId = ($methods->request('id','street'));
$streetId = ($streetId)?($streetId):NULL;

if ($streetId) {
    $streetId = new MongoId($streetId);

    $filter = array('_id' => $streetId);
    
    $street = $db->findOne('streets',$filter);
    var_dump($street);
    echo $street['name'] . '<br/>';
    echo $street['keyUser'];
    
}

echo '<br>';
echo $html->linkText('streets/s','back<br/>');
?>