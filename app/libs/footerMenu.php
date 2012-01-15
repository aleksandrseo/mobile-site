<center>
<hr>
<?
echo $html->link('aboutSite');

if ($methods->isAuth()){
    echo $html->link('index&logout=yes','выход');
}

?>

Stonehenge Games, 2012
<center/>