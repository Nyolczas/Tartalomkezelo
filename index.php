<?php
require_once("adatbazis.php");

/* Menü összeállítása */
$sql = "SELECT id, alias, menunev
        FROM cms_tartalom
        WHERE statusz = 1
        ORDER BY sorrend ASC";

$eredmeny = mysqli_query($dbconn, $sql);

$menu = "<ul>\n";
while ($sor = mysqli_fetch_assoc($eredmeny)) {
	$menu.= "<li><a href=\"index.php?id={$sor['id']}\">{$sor['menunev']}</a></li>\n";
}
$menu.="</ul>\n";

/* Tartalom összeállítása */
$id = (isset($_GET['id'])) ? $_GET['id'] : 1;
$sql = "SELECT menunev, tartalom, modositas, leiras, kulcsszavak
        FROM cms_tartalom
        WHERE id = {$id}
        LIMIT 1";

$leiras = $sor['leiras'];
$kulcsszavak = $sor['kulcsszavak'];
$menunev = $sor['menunev'];
$tartalom = $sor['tartalom'];

/* Modulok kezelése */
$oldalsav = "";

//Sablonozó
$sablon = file_get_contents("sablon.html");
$sablon = str_replace("{{menunev}}",  $menunev,   $sablon);
$sablon = str_replace("{{leiras}}",   $leiras,   $sablon);
$sablon = str_replace("{{kulcsszavak}}", $kulcsszavak, $sablon);
$sablon = str_replace("{{menu}}",     $menu,     $sablon);
$sablon = str_replace("{{tartalom}}", $tartalom, $sablon);
$sablon = str_replace("{{oldalsav}}", $oldalsav, $sablon);
print $sablon;
?>
