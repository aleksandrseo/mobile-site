<?
class constructions{
    
public $name;
public $timeProfit;
public $size;
    
public function type(){
    $type['stall'] = array('name' => NULL,'profit'=> 2);
    $type['market'] = array('name'=>NULL,'profit'=>3);
    $type['shop'] = array('name'=>NULL,'profit'=>4);
    $type['plant'] = array('name'=>NULL,'profit'=>5);
    return $type;
}



}
?>