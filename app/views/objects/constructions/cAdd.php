<form method="post" action="index.php?route=objects/constructions/cAdd">
Название<br/><input type="text" name="constructionName"><br>
Что именно строить:<br/>
<SELECT NAME="constructionType">
<option value=1>Магазин</option>
<option value=2>Банк</option>
<option value=3>Офисный-центр</option>
<option value=4>Кафе</option>
<option value=5>Ресторан</option>
<option value=6>Киоск</option>
<option value=7>Рынок</option>
</SELECT><br/>
<input class="button" id="border" type="submit" value="New constructions"><br/>
</form>
<?
$backPage='objects/constructions/';
?>