<form method="post" action="index.php?route=signUp">
Ник<br/><input type="text" name="nick" value="<? echo $methods->request('nick') ?>"><br>
Пароль:<br/><input type="text" name="pass" value="<? echo $methods->request('pass') ?>"><br>
Повтор пароля:<br/><input type="text" name="pass1" value="<? echo $methods->request('pass1') ?>"><br>
Email:<br/><input type="text" name="email" value="<? echo $methods->request('email') ?>"><br>
<input class="button" id="border" type="submit" value="Регистрация">
</form>
<br/>
<?
echo $html->linkBack('index');
?>