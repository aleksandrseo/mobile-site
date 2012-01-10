<?
class html {
    public function __construct() {
     $this->sign_in = $this->link('sign_in');
     $this->sign_up = $this->link('sign_up');
     $this->about_site = $this->link('about_site');
     $this->about_us = $this->link('about_us');
    }
    private function link($link,$type = 'view'){
        return '<a href="index.php?' . $type . '=' . $link . '"><div class="button" id="border">' . $this->word($link) . '</div></a><br/>';
    }
    public function word($word){
        $sign_in = 'Регистрация';
        $sign_up = 'Вход';
        $about_site = 'Об игре';
        $about_us = 'О нас';
        return $$word;
    }
}
?>