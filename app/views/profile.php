<?
$profileId = $methods->request('id','string');
$profileId = ($profileId)?($profileId):$_SESSION['_id'];

$filter = array('_id' => $profileId);
$profile = $db->findOne('users',$filter );

$allow = array('img');
foreach ($profile as $key => $value) {
   
        if (empty($value)) {
            $value = '';
        }
        if ($key == 'img') {
            $value = '<br/><img src="files/'.$value.'.png" width="64px" height="128px"/>';
        }
        echo /*$html->words($key) . ': ' .*/ $value . '<br/>';
  
}
?>