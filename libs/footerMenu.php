<center>
<hr>
<?
if ($methods->isLogged()) {
    echo $html->linkText('users/profile&nick='.$_SESSION['_id'].'','My profile') . ' ';
}
echo $html->link('aboutSite');
//echo $html->linkCont('index','Партнерская программа');
?>
Stonehenge Games, 2012
<center/>