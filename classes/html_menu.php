<?
class html_menu {
    function __construct() {
     $this->enter = $this->link('Вход','enter');
     $this->registration = $this->link('Регистрация','registration');
     $this->aboutSite = $this->link('О сайте','about_site');
     $this->aboutUs = $this->link('О нас','about_us');
    }
    public function link($text,$link,$type = 'view'){
     return '<a href="index.php?' . $type . '=' . $link . '">' . $text . '</a><br/>';
    }
}
?>