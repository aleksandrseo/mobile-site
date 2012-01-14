<?
class html {
    public function link($link,$type = 'route'){
        return '<a href="index.php?' . $type . '=' . $link . '">' . $this->word($link) . '</a><br/>';
    }
    public function linkBack($link,$type = 'route'){
        return '<a href="index.php?' . $type . '=' . $link . '">Назад</a><br/>';
    }
    public function button($link,$type = 'route'){
        return '<a href="index.php?' . $type . '=' . $link . '"><div class="button" id="border">' . $this->word($link) . '</div></a><br/>';
    }
    public function word($word){
        $index = 'Начало';
        $signIn = 'Вход';
        $signUp = 'Регистрация';
        $aboutSite = 'Об игре';
        $aboutUs = 'О нас';
    return $$word;
    }
}
?>