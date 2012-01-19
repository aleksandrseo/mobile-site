<?

$filter = array(
            '_id' => $methods->request('_id')
);
$new_obj = array(
    '$set' => array('virts' => 11000)
);
$db->update('users',$filter,$new_obj);

?>