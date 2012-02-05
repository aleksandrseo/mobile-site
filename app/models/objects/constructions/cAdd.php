<?
if ($methods->isRequest()) {
    
$objects->name = $methods->request('constructionName','string');
$objects->img = 'city';
$objects->keyUser = $profile['_id'];
$objects->timeCreate = time();
$objects->timeMoney = time();
$objects->type = $methods->request('constructionType','string');


    if ($objects->add($db,'constructions',$objects)) {
        $messages->good[]='You have construction';
        $route = 'objects/construction/c';
    }
}
?>