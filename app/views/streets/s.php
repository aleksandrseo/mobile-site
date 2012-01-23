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

if ($cursor->count()>0) {
    echo 'Count streets : ' . $cursor->count() .'<br/>';
}

$cursor->limit(10)->skip($rise);
if ($cursor->count() == 0) {
    $messages->good[]='Does not work on the same street. You need a new streets.';
}

foreach($cursor as $streets) {
    
    echo $html->imgStreet($streets['img']);
    echo $streets['name'] . ' | ';
     
    if ($streets['keyUser'] == $profile['_id']) { // your street
         
        if ($methods->courseVirts($streets['timeCreate']) > 0) {
              
        echo $html->linkText('streets/sGet&streetId='.$streets['_id'].' ','get virts');
        echo $methods->courseVirts($streets['timeCreate']). ' ';
        echo $html->img('virts') . ' ';
        } else {
            echo 'Wait .. for profit';
        }
    } else {                                     // other street
        $result = $db->findOne('users',array('_id' => $streets['keyUser']));
        echo $html->linkText('profile&nick='.$result['nick'].' ',$result['nick']) . '';
    }
    echo '<br/>';
}

echo '<br/>';
if (($rise-10) >= 0) {
    echo $html->linkText('streets/s&rise='.($rise-10).''.(($loneliness)?'&loneliness=n':'').'','back');
}
if (($rise+10) <= $cursor->count()) {
    echo $html->linkText('streets/s&rise='.($rise+10).''.(($loneliness)?'&loneliness=n':'').'','next');
}
echo '<br/><br/>';


echo $html->linkText('streets/s','Your streets<br/>');
echo $html->linkText('streets/s&loneliness=n','All streets<br/>');
echo $html->linkText('streets/sAdd','Create new street for make virts<br/>');

$backPage='profile';
?>