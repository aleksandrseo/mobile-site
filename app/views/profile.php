<?
$input->nick = $methods->request('nick');

if ($users['nick'] != $input->nick) {
    $filter = array('nick'=>$input->nick);
    $users = $db->findOne('users',$filter );
}
    
$block = array('_id','pass','pass1','exp','ties','power','virts','reals');
foreach ($users as $key => $value) {
    if (!in_array($key,$block)) {
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