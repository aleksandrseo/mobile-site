<?
$nick = ($methods->request('nick','string'))?$methods->request('nick','string'):$_SESSION['nick'];

$filter = array('nick' => $nick);
$users = $db->findOne('users',$filter );
    
$allow = array('nick','exp','img','ties','power','virts','reals');
foreach ($users as $key => $value) {
    if (in_array($key,$allow)) {
        if (empty($value)) {
            $value = '';
        }
        if ($key == 'img') {
            $value = '<br/><img src="files/'.$value.'.png" width="64px" height="128px"/>';
        }
        echo $html->words($key) . ': ' . $value . '<br/>';
    }
}

?>