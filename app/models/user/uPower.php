<?

var_dump('ooop');

$filter = array(
            'nick' => $_SESSION['nick']
);
$new_obj = array(
    '$set' => array('virts' => 11000)
);
$db->update('users',$filter,$new_obj);

?>