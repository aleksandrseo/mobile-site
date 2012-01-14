<?
class db {

public $safeOperation = true;

public function __construct() {
    
$connection = new Mongo();
$db = $connection->selectDB('virtualworld');

}

}
?>