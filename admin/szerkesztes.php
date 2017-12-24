<?php
require_once("../adatbazis.php");
$sql = "SELECT id, alias, sorrend, menunev, tartalom, modositas, statusz
        FROM cms_tartalom
        ORDER BY sorrend ASC";

$eredmeny = mysqli_query($dbconn, $sql);

$tablazat = "<p><a href=\"letrehozas.php\">Új oldal létrehozása</a></p>
<table>
<tr>
	<th>Alias</th>
	<th>No.</th>
	<th>Menunev</th>
	<th>Tartalom</th>
	<th>Statusz</th>
</tr>\n";
while ($sor = mysqli_fetch_assoc($eredmeny)) {
	$tablazat.= "<tr>
		<td>{$sor['alias']}</td>
		<td>{$sor['sorrend']}</td>
		<td>{$sor['menunev']}</td>
		<td>".substr(strip_tags($sor['tartalom']), 0, 100)."</td>
		<td>{$sor['modositas']}</td>
	</tr>\n";
}
$tablazat.= "</table>
<p><a href=\"letrehozas.php\">Új oldal létrehozása</a></p>\n";

//Sablonozó
$sablon = file_get_contents("sablon.html");
$sablon = str_replace("{{menunev}}",  "Szerkesztés",   $sablon);
$sablon = str_replace("{{menu}}",     "",     $sablon);
$sablon = str_replace("{{tartalom}}", $tablazat, $sablon);
$sablon = str_replace("{{oldalsav}}", "", $sablon);
print $sablon;
?>
