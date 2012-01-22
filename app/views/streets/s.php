<?

//var_dump($users);
$rise = ($methods->request('rise','int'))?($methods->request('rise','int')):0;

$cursor = $db->find('streets',array());
//var_dump($cursor->count());
$cursor->limit(7)->skip(0);
foreach($cursor as $streets) {
    echo $html->imgStreet($streets['img']);
    echo $streets['name'] . ' ';
    echo $methods->courseVirts($streets['timeCreate']);
 
    if ($streets['keyUser'] == $profile['_id']) {
        
        //echo $html->linkText('profile&nick='.$_SESSION['nick'].'',$_SESSION['nick']) . ' ';
        echo $html->linkText('streets/sGet&streetId='.$streets['_id'],'Сбор бабла');
    } else {
        $filter = array(
            '_id' => $streets['keyUser']
        );    
        $result = $db->findOne('users',$filter);
        echo $html->linkText('profile&nick='.$result['nick'].'',$result['nick']) . '';
    }
    
    
    
    
    echo '<br/>';
}

echo '<br/>';
if (($rise-7) >= 0) {
    echo $html->linkText('streets/s&rise='.($rise-7).'','Назад');
}
if (($rise+7) <= $cursor->count()) {
    echo $html->linkText('streets/s&rise='.($rise+7).'','Вперед');
}
echo '<br/><br/>';

echo $html->linkText('streets/sAdd','Построить улицу');
echo '<br/>';
echo $html->linkBack('profile');

?>