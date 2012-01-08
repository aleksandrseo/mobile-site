<?
class sql{

public function __construct() {
    
    $dbHost = 'localhost';
    $dbUser = 'root';
    $dbPass = 'root';
    $dbName = 'naraione';
    
    mysql_connect($dbHost,$dbUser,$dbPass);
    mysql_select_db($dbName);
    mysql_query("SET NAMES utf8");
}

public function query($sql){
    return mysql_query($sql);
}

public function result($sqlResult){
    return mysql_result($sqlResqult);
}

public function fetch($sqlResult){
    return mysql_fetch_assoc($sqlResult);
}

?>