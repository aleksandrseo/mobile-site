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
        
        $word = explode('&',$word);
        $word = $word[0];
        
        $index = 'Начало';
        $signIn = 'Вход';
        $signUp = 'Регистрация';
        $aboutSite = 'Об игре';
        $aboutUs = 'О нас';
        $profile = 'Профиль';
    return $$word;
    }
    
    
    function showMes($messages){
    echo '<center>';
    foreach ($messages as $message) {
        echo '* ' . $message . ' *<br/>';       
    }
    echo '</center>';
    }
    
    function words($word){
        $nick = 'Ник';
        $email = 'email';
    return $$word;   
    }
}
?>