<?
echo 'street :' . $infoObject['name'] . '<br/>';
echo 'owner : ' . $html->linkProfile($infoUser['nick']) . '<br/>';

?>


<?
echo $html->linkText('constructions/cAdd','Build object');
?>