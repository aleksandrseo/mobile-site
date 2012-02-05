<?

// input
$loneliness = ($methods->request('loneliness','int'));
$rise = ($methods->request('rise','int'))?($methods->request('rise','int')):0;

if ($loneliness) {
    $filter = array();
} else {
    $filter = array('keyUser' => $profile['_id']);
}
$cursor = $db->find('constructions',$filter);

if ($cursor->count()>0) {
    echo 'Count constructions: ' . $cursor->count() .'<br/>';
}

$cursor->limit(10)->skip($rise);
if ($cursor->count() == 0) {
    $messages->good[]='Does not work on the same street. You need a new streets.';
}


foreach($cursor as $object) {
    
    
    
    echo $html->imgStreet($object['img']);
    echo $html->linkText('objects/constructions/construction&id='.$object['_id'].'',$object['name'] . '');
     
    if ($object['keyUser'] == $profile['_id']) { // your object
         
        if ($methods->courseVirts($object['timeCreate']) > 0) {
              
        echo $html->linkText('objects/constructions/cGet&objectId='.$object['_id'].' ','get virts');
        echo $methods->courseVirts($object['timeCreate']). ' ';
        echo $html->img('virts') . ' ';
        } else {
            echo 'Wait .. for profit';
        }
    } else {                                     // alien's object
        $result = $db->findOne('users',array('_id' => $object['keyUser']));
        echo $html->linkText('users/profile&nick='.$result['nick'].' ',$result['nick']) . '';
    }
    echo '<br/>';
}

echo '<br/>';
if (($rise-10) >= 0) {
    echo $html->linkText('objects/constructions/c&rise='.($rise-10).''.(($loneliness)?'&loneliness=n':'').'','back');
}
if (($rise+10) <= $cursor->count()) {
    echo $html->linkText('objects/constructions/c&rise='.($rise+10).''.(($loneliness)?'&loneliness=n':'').'','next');
}
echo '<br/><br/>';


echo $html->linkText('objects/constructions/c','Your constructions<br/>');
echo $html->linkText('objects/constructions/c&loneliness=n','All constructions<br/>');
echo $html->linkText('objects/constructions/cAdd','Create new constructions for make virts<br/>');

$backPage='users/profile';
?>