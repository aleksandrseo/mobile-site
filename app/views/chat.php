<?
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
<form method="post" action="index.php?route=chat">
Message<br/><textarea class="textarea" name="message"></textarea><br>
<input class="button" id="border" type="submit" value="Add"><br/>
</form>