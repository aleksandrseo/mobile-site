<?
// input
$loneliness = ($methods->request('loneliness','int'));
$rise = ($methods->request('rise','int'))?($methods->request('rise','int')):0;

if ($loneliness) {
    $filter = array();
} else {
    $filter = array('keyUser' => $profile['_id']);
}
$cursor = $db->find('streets',$filter);

//var_dump($cursor->count());
$cursor->limit(7)->skip(0);
foreach($cursor as $streets) {
    
    echo $html->imgStreet($streets['img']);
    echo $streets['name'] . ' | ';
     
    if ($streets['keyUser'] == $profile['_id']) {
        echo $html->linkText('streets/sGet&streetId='.$streets['_id'].' ','забрать');
        echo $methods->courseVirts($streets['timeCreate']);
        echo $html->img('virts');
    } else {
        $result = $db->findOne('users',array('_id' => $streets['keyUser']));
        echo $html->linkText('profile&nick='.$result['nick'].' ',$result['nick']) . '';
    }
    echo '<br/>';
}

echo '<br/>';
if (($rise-7) >= 0) {
    echo $html->linkText('streets/s&rise='.($rise-7).'&loneliness=yes','Назад');
}
if (($rise+7) <= $cursor->count()) {
    echo $html->linkText('streets/s&rise='.($rise+7).'&loneliness=yes','Вперед');
}
echo '<br/><br/>';


echo $html->linkText('streets/s','Твои улицы<br/>');
echo $html->linkText('streets/s&loneliness=yes','Улицы всех<br/>');
echo $html->linkText('streets/sAdd','Построить улицу<br/>');
echo $html->linkBack('profile');

?>