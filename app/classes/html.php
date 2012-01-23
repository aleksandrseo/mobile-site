<?
class html {
    public function link($link,$text = false,$type = 'route'){
        return ' <a href="index.php?' . $type . '=' . $link . '">' . $this->word($link) . '</a> <br/>';
    }
    public function linkText($link,$text = false,$type = 'route'){
        return ' <a href="index.php?' . $type . '=' . $link . '">' . $text . '</a> ';
    }
    public function linkBack($link,$type = 'route'){
        return '<br/> <a href="index.php?' . $type . '=' . $link . '">Back</a> <br/>';
    }
    public function button($link,$type = 'route'){
        return ' <a href="index.php?' . $type . '=' . $link . '"><div class="button" id="border">' . $this->word($link) . '</div></a><br/>';
    }
    public function linkProfile($name){
        return '<a href="index.php?profile='.$name.'">'.$name.'</a>';
    }
    public function word($word,$name = false){
        
        $word = explode('&',$word);
        $word = $word[0];
        
        $m['iхndex'] = 'Start';
        $m['signIn'] = 'SignIn';
        $m['signUp'] = 'SignUp';
        $m['aboutSite'] = 'About Game';
        $m['aboutUs'] = 'About Us';
        $m['shops'] = 'Shops';
        $m['banks'] = 'Banks';
        $m['gangs'] = 'Gangs';
        $m['streets'] = 'Streets';
        $m['protect'] = 'Protect';
        $m['search'] = 'Search';
        $m['profile'] = 'Profile';
        $m['logout'] = 'Logout';
        $m['streetsAdd'] = 'New street';
        $m['profileEdit'] = 'Your parameters';
        $m['user/uVirts'] = 'Virts';
        $m['user/uReals'] = 'Reals';
        $m['user/uTies'] = 'Popular';
        $m['user/uPower'] = 'Power';
        if (isset($m[$word])) {
            return $m[$word];
        } else {
            return 'Page';
        }
    }
    public function word1($word,$name = false){
        
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
        return '<img style="margin-top:-20px;" src="files/images/'.$var.'.png" width="18px" height="14px">';
    }
    
    
    function showMes($messages,$npc = false){
    echo '<center>';
    foreach ($messages as $message) {
        echo '<div class="message_good" id="border">';
        if ($npc == true) {
           
            echo '<img src=/files/nps.jpg width="48px" height="32px">';
        }
        echo $message;
        echo '</div>';       
    }
    echo '</center>';
    }
    
    function words($word){
        $nick = 'Nick';
        $email = 'email';
        $birthday = 'birthday';
        $exp = 'experience';
        $ties = 'Authority';
        $height = 'Height';
        $weight = 'Weight';
        $power = 'Power';
        $img = 'Avatar';
        $reals = 'reals';
        $virts = 'virts';
        $pubStreet = 'Player';
        return $$word;
    }
    function words1($word){
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
    function message($var){
        return '<div class="message">fggfgf'.$var.'</div>';
    }
}
?>