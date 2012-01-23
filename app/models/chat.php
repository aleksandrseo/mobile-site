<?
//input
$rise = ($methods->request('rise','int'))?($methods->request('rise','int')):0;

if ($methods->isRequest())
{
    if (!isset($_REQUEST['message'])) {
        $methods->bad[] = 'Please, eneter message';
    }
    
    if (count($methods->bad) == 0) {
        $message = array(
        'nick' => $profile['nick'],
        'text' => $methods->request('message'),
        'date' => time(),
        'keyUser' => new Mongoid($_SESSION['_id'])
        );
        $db->insert('chat',$message);
    }
    
}
//code
$filter = array();
$cursor = $db->find('chat',$filter);
$cursor->limit(10)->skip($rise);
foreach($cursor as $message) {

    echo $html->linkProfile($message['nick']) . ' ';
    echo date("h:i A",$message['date']) . '<br/>';
    echo $message['text'] . '<br/>';
}

echo '<br/>';
if (($rise-10) >= 0) {
    echo $html->linkText('chat&rise='.($rise-10).'','back').' ';
}
if (($rise+10) <= $cursor->count()) {
    echo $html->linkText('chat&rise='.($rise+10).'','next').' ';
}
echo '<br/>';
?>