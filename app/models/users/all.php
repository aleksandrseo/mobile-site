<?
//input
$rise = ($methods->request('rise','int'))?($methods->request('rise','int')):0;


//object query
$cursor = $db->find('users',array());
$cursor->sort(array('_id'=>-1))->limit(10)->skip($rise);




?>