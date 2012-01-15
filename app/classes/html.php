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
    public function word($word,$name = false){
        
        $word = explode('&',$word);
        $word = $word[0];
        
        $index = 'Начало';
        $signIn = 'Вход';
        $signUp = 'Регистрация';
        $aboutSite = 'Об игре';
        $aboutUs = 'О нас';
        $shops = 'Магазины';
        $banks = 'Банки';
        $gangs = 'Группировки';
        $streets = 'Улицы';
        $protect = 'Охрана';
        $search = 'Поиск';
        $profile = 'Профиль';
        $logout = 'Выход';
        var_dump($name);
        if ($name) {
            return $name;
        } else {
            return $$word;
        }    
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
        $birthday = 'Дата';
        $exp = 'Опыт';
        $ties = 'Связи';
        $height = 'Рост';
        $weight = 'Масса';
        $power = 'Сила';
        if (isset($$word)) {
            return $$word;
        } else {
            return false;
        }
    }
}
?>