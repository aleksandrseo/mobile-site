<?
// input
$sum = (int) $methods->request('sum','int');

if ($methods->isRequest()) {
    // update user's money
    $db->update('users',
                array('_id' => $profile['_id']),
                array('$inc' => array('reals' => $sum)
                     )
    );
    $messages->good[] = 'reals+';
}
?>