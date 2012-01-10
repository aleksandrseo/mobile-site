<?
class html {
    public function link($link,$type = 'view'){
        return '<a href="index.php?' . $type . '=' . $link . '">' . $this->word($link) . '</a><br/>';
    }
    public function button($link,$type = 'view'){
        return '<a href="index.php?' . $type . '=' . $link . '"><div class="button" id="border">' . $this->word($link) . '</div></a><br/>';
    }
    public function word($word){
        $sign_in = 'Вход';
        $sign_up = 'Регистрация';
        $about_site = 'Об игре';
        $about_us = 'О нас';
        return $$word;
    }
}
?>