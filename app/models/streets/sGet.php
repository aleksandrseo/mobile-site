<?

$streetId = "4f15ce21993f40563f000000";
$filter = array('_id'=>$streetId);
var_dump($filter);
$result = $db->findOne('streets',$filter );

var_dump($result);

$route = 'streets/s';
?>