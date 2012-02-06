<center>
<hr>
<?
if ($methods->isLogged()) {
    echo $html->linkText('users/profile','Main') . ' ';
    echo $html->link('logout');
} 

if (!$methods->isLogged()) {
    echo $html->linkText('users/all','Всего игроков ' . $countUserCursor . '') . '<br>';
    echo $html->linkCont('index','Партнерская программа');
    echo $html->link('aboutSite');
}
?>
Stonehenge Games, 2012
<center/>