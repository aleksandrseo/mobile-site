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

public function __construct(){
    global $db;
    $this->db = $db;
}

public function getProfile($idProfile){
    global $db;
    return $db->findOne('users',array('_id'=>$idProfile));
}

public function changeParameters(){

}



}
?>