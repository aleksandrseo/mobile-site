<?
$filter = array(

);
$cursor = $streets->catalog($filter);
foreach($cursor as $obj) {
echo $html->imgStreet($obj['img']);
echo $obj['name'] . '<br/>';
} 

echo '<br/>';
echo $html->link('streetsAdd');

echo $html->linkBack('profile');
?>