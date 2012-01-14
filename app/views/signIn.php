<form method="post" action="index.php?route=sign_in">
Ник<br/><input type="text" name="nick"><br>
Пароль:<br/><input type="text" name="password"><br>
<input class="button" id="border" type="submit" value="Вход"><br/>
</form>
<?
echo $html->linkBack('index');
?>