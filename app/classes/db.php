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
public function findOne($table,$filter){
    $collection = $this->db->selectCollection($table);
    $result = $collection->find($filter);
    foreach($result as $obj) {
        return $obj;
    break;
    }
}
public function findOneId($table,$filter){
    $collection = $this->db->selectCollection($table);
    $result = $collection->find($filter);
    foreach($result as $obj) {
        return $obj['_id'];
    break;
    }
}

public function insert($table,$add){
    $collection = $this->db->selectCollection($table);
    $collection->insert($add,true);
}

public function update($table,$filter,$new_obj){
    $options['multiple'] = false;
    $collection = $this->db->selectCollection($table);
    
    $collection->update($filter,$new_obj,$options);
}
public function del(){
    
}

public function rename(){
    
}

}

?>