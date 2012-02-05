<?
if ($methods->isRequest()) {

$streets->name = $methods->request('streetName','string');
$streets->img = 'city';
$streets->keyUser = $profile['_id'];
$streets->timeCreate = time();
$streets->timeMoney = time();

    if ($objects->add($db,'constructions',$objects)) {
            $messages->good[]='You have street';
            $route = 'objects/streets/s';
    }
}
?>