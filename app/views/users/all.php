<?
foreach($cursor as $user) {
    echo '<a href="index.php?route=users/profile&id='.$user['_id'].'">' . $user['nick'] . '</a><br/>';
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