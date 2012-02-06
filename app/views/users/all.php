<?
foreach($cursor as $user) {
    echo $html->linkProfile($user['nick']);
    echo ' ';
    echo $html->userParameters($user) . '<br/>';
}

echo '<br/>';
if (($rise-10) >= 0) {
    echo $html->linkText('users/all&rise='.($rise-10).'','back').' ';
}
if (($rise+10) <= $cursor->count()) {
    echo $html->linkText('users/all&rise='.($rise+10).'','next').' ';
}
echo '<br/>';

?>