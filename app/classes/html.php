<?
class html {
    public function link($link,$text = false,$type = 'route'){
        return '<a href="index.php?' . $type . '=' . $link . '">' . $this->word($link) . '</a><br/>';
    }
    public function linkText($link,$text = false,$type = 'route'){
        return '<a href="index.php?' . $type . '=' . $link . '">' . $text . '</a>';
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
        
        $m['iхndex'] = 'Начало';
        $m['signIn'] = 'Вход';
        $m['signUp'] = 'Регистрация';
        $m['aboutSite'] = 'Об игре';
        $m['aboutUs'] = 'О нас';
        $m['shops'] = 'Магазины';
        $m['banks'] = 'Банки';
        $m['gangs'] = 'Группировки';
        $m['streets'] = 'Улицы';
        $m['protect'] = 'Охрана';
        $m['search'] = 'Поиск';
        $m['profile'] = 'Профиль';
        $m['logout'] = 'Выйти';
        $m['streetsAdd'] = 'Создать улицу';
        $m['profileEdit'] = 'Твои параметры';
        $m['user/uVirts'] = 'Бабло';
        $m['user/uReals'] = 'Золото';
        $m['user/uTies'] = 'Связи';
        $m['user/uPower'] = 'Сила';
        if (isset($m[$word])) {
            return $m[$word];
        } else {
            return 'Страница';
        }
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
    function lineLink($route,$text) {
        return '<a style="text-decoration:none;" href="index.php?route='.$route.'">'.$text.'</a>';
    }
}
?>