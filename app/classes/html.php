<?
class html {
    public function link($link,$type = 'route'){
        return '<a href="index.php?' . $type . '=' . $link . '">' . $this->word($link) . '</a><br/>';
    }
    public function linkBack($link,$type = 'route'){
        return '<br/><a href="index.php?' . $type . '=' . $link . '">Назад</a><br/>';
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
        $logout = 'Выйти';
        
        $streetsAdd = 'Создать улицу';
        return $$word;
    }
    public function img($var){
        return '<img src="files/images/'.$var.'.png" width="18px" height="18px">';
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
        $img = 'Аватарка';
        $reals = 'Зелень';
        $virts = 'Бабло';
        $pubStreet = 'Контролирует';
        return $$word;
    }
    function imgStreet($img){
        return '<img src="files/streets/'.$img.'.png" width="20px" height="20px">';
    }
    function lineLink($name,$text) {
        return '<a style="text-decoration:none;" href="index.php?profileEdit&'.$name.'=yes">'.$text.'</a>';
    }
}
?>