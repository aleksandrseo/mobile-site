<form method="post" action="index.php?route=signIn">
Nick<br/><input type="text" name="nick"><br>
Pass:<br/><input type="text" name="pass"><br>
<input class="button" id="border" type="submit" value="SignIn"><br/>
</form>
<?
echo $html->linkBack('index');
?>