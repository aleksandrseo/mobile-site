<center>
<hr>
<?
if ($methods->isLogged()) {
    echo $html->linkText('profile&nick='.$_SESSION['_id'].'','My profile') . ' ';
}
echo $html->link('aboutSite');
?>

Stonehenge Games, 2012
<center/>