<?
class streets {
    
public $name;
public $img;
public $db;
public $collection;

public function __construct(){
    global $db;
    $this->db = $db;
}


public function catalog($filter){
    $collection = $this->db->selectCollection('streets');
    return $collection->find($filter);
}

public function add($street){
    $collection = $this->db->selectCollection('streets');
    $collection->insert($street,true);
}

public function del(){
    
}

public function rename(){
    
}

}

?>