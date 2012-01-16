<?
class db {
    
public $db;
public $collection;

public function __construct(){
    global $db;
    $this->db = $db;
}

public function find($table,$filter){
    $collection = $this->db->selectCollection($table);
    return $collection->find($filter);
}

public function insert($table,$add){
    $collection = $this->db->selectCollection($table);
    $collection->insert($add,true);
}
public function update($table,$filter,$new_object){
    $collection = $this->db->selectCollection($table);
    $collection->update($filter,$new_object);
}
public function del(){
    
}

public function rename(){
    
}

}

?>