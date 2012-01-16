<?
$streets->name = $methods->request('streetName','string');
$streets->img = 'city';

if ($methods->isRequest()) {

    $streets->add($streets);
    $messages->good[]='Улица создана';
    $route = 'streets';
}
?>