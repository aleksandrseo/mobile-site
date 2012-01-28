<?
echo 'street :' . $infoStreet['name'] . '<br/>';
echo 'owner : ' . $html->linkProfile($infoUser['nick']) . '<br/>';

var_dump($constructions->type());
?>


<?
echo $html->linkText('constructions/cAdd','Build object');
?>