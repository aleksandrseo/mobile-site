<?
class html_menu {
    function __construct() {
     $this->enter = $this->hyperLink('Вход','enter');
    }
    public function hyperLink($text,$link,$type = 'view'){
     return '<a href="index.php?' . $type . '=' . $link . '">' . $text . '</a><br/>';
    }
}
?>