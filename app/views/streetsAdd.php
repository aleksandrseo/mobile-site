<form method="post" action="index.php?route=streetsAdd">
Название улицы<br/><input type="text" name="streetName"><br>
<input class="button" id="border" type="submit" value="Создать"><br/>
</form>
<?
echo $html->linkBack('streets');
?>