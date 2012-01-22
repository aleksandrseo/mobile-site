<?
class messages{
    
public $good = array();
public $bad = array();
public $npc = array();


public function have($var){
    if (isset($var) && count($var)>0) {
        return $var;
    } else {
        return false;
    }
}

    
}
?>