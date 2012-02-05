<?
class objects{

public function add($db,$collection,$object){
    
    $filter = array('name' => $object->name);
    if ($db->findOne($collection,$filter) == NULL)
        {
            $db->insert('constructions',$object);
            return true;
        } else {
            return false;
        }
}

}
?>