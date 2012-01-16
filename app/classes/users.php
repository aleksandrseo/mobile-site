<?
class users{
    
public $img;
public $nick;
public $pass;
public $pass1;
public $email;
public $birthday;
public $exp;
public $ties = 0;
public $height;
public $weight;
public $reals = 50;
public $virts = 2000;
public $power = 0;
public $connection;
public $db;
public $pubStreet;

public function __construct(){
    global $db;
    $this->db = $db;
    
    $this->img = 'default';
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