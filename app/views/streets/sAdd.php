<form method="post" action="index.php?route=streets/sAdd">
Название улицы<br/><input type="text" name="streetName"><br>
<input class="button" id="border" type="submit" value="Создать"><br/>
</form>
<?
echo $html->linkBack('streets/s');
?>