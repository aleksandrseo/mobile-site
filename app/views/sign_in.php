<?
echo $html->word('sign_in');
?>
<form method="post" action="index.php?model=sign_in">
Ник<br/><input type="text" name="nick"><br>
Пароль:<br/><input type="text" name="password"><br>
Повтор пароля:<br/><input type="text" type="password" name ="pass"><br/>
<input name="dfd" type="submit"><br/>
</form>