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
public function findOneId($table,$filter,$parameter = '_id'){
    $collection = $this->db->selectCollection($table);
    $result = $collection->find($filter);
    foreach($result as $obj) {
        return $obj[$parameter];
    break;
    }
}
public function getObjectParameter($table,$idObject,$parameter){
    $tmp = array();     
    $res = $this->findOne($table,array('_id'=>$idObject));
    foreach($res as $value=>$key) {
        if (in_array($value,$parameter)) $tmp[$value] = $key;         
    };
    return $tmp;
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
public function delete($table,$filter = array()){
    $collection = $this->db->selectCollection($table);
    return $collection->remove($filter);
}

public function rename(){
    
}

}

?>