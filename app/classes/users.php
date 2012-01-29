<?
class users{

public $_id;
public $img;
public $nick;
public $pass;
public $email;
public $birthday;
public $exp;
public $ties;
public $height;
public $weight;
public $reals;
public $virts;
public $power;
public $level;
public $referalls = array();
public $streets = array();
public $constuctions = array();
protected $db;

public function setNick($var){
    $this->nick = $var;
}
public function getNick(){
    return $this->nick;
}

public function __construct(){
    global $db;
    $this->db = $db;
}

public function get($var){
    return $this->$var;
}

public function getProfile($idProfile){
    global $db;
    return $db->findOne('users',array('_id'=>$idProfile));
}



}
?>