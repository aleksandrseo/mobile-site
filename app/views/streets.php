<?
//var_dump($users);


$filter = array(

);
$cursor = $db->find('streets',$filter);
foreach($cursor as $streets) {
    echo $html->imgStreet($streets['img']);
    echo $streets['name'] . ' ';
    $res = round((time() - $streets['timeCreate'])/60);
    echo $res . ' ';
    
    if ($streets['keyUser'] == $users['_id']) {
        echo $html->linkText('profile&nick='.$_SESSION['nick'].'',$_SESSION['nick']) . ' *';
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
echo $html->link('streetsAdd');

echo $html->linkBack('profile');

?>