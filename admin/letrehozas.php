<?php
$urlap = <<<URLAP
<form method="post" action="">
	<h3>Új oldal létrehozása</h3>
	<p><label for="alias">Alias:</label><br>
	<input type="text" id="alias" name="alias"></p>
	<p><label for="sorrend">Sorrend:</label><br>
	<input type="number" id="sorrend" name="sorrend" min="1"></p>
	<p><label for="menunev">Menunév:*</label><br>
	<input type="text" id="menunev" name="menunev" required></p>
	<p><label for="tartalom">Tartalom:</label><br>
	<textarea id="tartalom" name="tartalom"></textarea></p>
	<p><label for="leiras">Leírás:</label><br>
	<textarea id="leiras" name="leiras"></textarea></p>
	<p><label for="kulcsszavak">Kulcsszavak:</label><br>
	<textarea id="kulcsszavak" name="kulcsszavak"></textarea></p>
	<p><label for="statusz">Státusz:</label><br>
	<select id="statusz" name="statusz">
		<option value="1">Látható</option>
		<option value="0">Láthatatlan</option>
	</select></p>
	<input type="submit" id="rendben" name="rendben" value="Rendben">
	<input type="reset" value="Mégse">
</form>
URLAP;

//Sablonozó
$sablon = file_get_contents("sablon.html");
$sablon = str_replace("{{menunev}}",  "Új oldal létrehozása",   $sablon);
$sablon = str_replace("{{menu}}",     "",     $sablon);
$sablon = str_replace("{{tartalom}}", $urlap, $sablon);
$sablon = str_replace("{{oldalsav}}", "", $sablon);
print $sablon;
?>