<?
//input
$rise = ($methods->request('rise','int'))?($methods->request('rise','int')):0;

//object query
$cursor = $db->find('chat',array());
$cursor->sort(array('_id'=>-1))->limit(10)->skip($rise);

// inputs
if ($methods->isRequest())
{
    // error
    if (!isset($_REQUEST['message'])) {
        $messages->bad[] = 'Please, eneter message';
    }
    if ($methods->request('message')=='') {
        $messages->bad[] = 'Null messages';
    }
    
    if ( count($messages->bad) == 0) {
    foreach($cursor as $message) {
        if ($methods->request('message')==$message['text']) {
            $messages->bad[] = 'Repeat message';
            break;
        }
    }
    }        
        
    if ( count($messages->bad) == 0) {
        $message = array(
        'nick' => $profile['nick'],
        'text' => $methods->request('message'),
        'date' => time(),
        'keyUser' => new Mongoid($_SESSION['_id'])
        );
        $db->insert('chat',$message);
    }
    
}

?>