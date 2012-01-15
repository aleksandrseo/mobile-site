<?
class users{
    
public $nick;
public $pass;
public $pass1;
public $email;
public $connection;
public $db;

public function __construct(){
    global $db;
    $this->db = $db;
}

public function getProfile($filter){
    $profile = false;
    
    $collection = $this->db->selectCollection('users');
    $cursor = $collection->find($filter);
    $cursor->limit(1);
    foreach($cursor as $obj) {
           $profile = $obj;      
    }
    return $profile;
}


}
?>