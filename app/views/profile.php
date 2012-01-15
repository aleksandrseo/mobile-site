<h3>Главная</h3>
<?
$filter = array(
   'nick' => $methods->request('nick')
);

$profile = $users->getProfile($filter);

$block = array('_id','pass','pass1','connection','db');

foreach ($profile as $key => $value) {
    if (!in_array($key,$block)) {
        if (empty($value)) {
            $value = 'не указан';
        }
        if ($key == 'img') {
            $value = 'files/profile/'.$value.'.png';
        }
        echo $html->words($key) . ': ' . $value . '<br/>';
    }
}

?>