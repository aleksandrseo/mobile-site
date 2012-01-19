<?
echo $html->link('profile&nick='.$_SESSION['nick'].'');
echo '<br/>';
echo $html->linkText('streets/s','Улицы').'<br/>';
echo $html->link('banks');
echo '<br/>';
echo $html->link('search');
echo '<br/>';
?>