<?

$block = array('_id','pass','pass1','connection','db','nick','virts','reals');

// about user
$filter = array(
       'nick' => $_SESSION['nick']
);
$profile = $users->getProfile($filter);

echo '<center><b>'.$profile['nick'].'</center></b>';

foreach ($profile as $key => $value) {
    if (!in_array($key,$block)) {
        if (empty($value)) {
            $value = 'не указан';
        }
        if ($key == 'img') {
            $value = '<br/><img src="files/'.$value.'.png" width="64px" height="128px"/>';
        }
        echo $html->words($key) . ': ' . $value . '<br/>';
    }
}

?>