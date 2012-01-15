<h3>Главная</h3>
<?
$filter = array(
   '_id' => $_SESSION['id']
);        

$profile = $users->getProfile($filter);
foreach ($profile as $key => $value) {
    echo $html->words($key) . ': ' . $value . '<br/>';
}

?>