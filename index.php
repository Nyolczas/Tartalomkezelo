<?php
$menunev = "Bemutatkozás";
$leiras = "Az oldal pár mondatos leírása...";
$kulcsszavak = "kulcsszó1, kulcsszó2, kulcsszó3, kulcsszó4";
$menu = '<ul>
             <li><a href="#" class="aktiv">Bemutatkozás</a></li>
             <li><a href="#">Kedvencek</a></li>
             <li><a href="#">Galéria</a></li>
             <li><a href="#">Kapcsolat</a></li>
         </ul>';

$tartalom = "
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>";

$oldalsav = "";

$sablon = file_get_contents("sablon.html");
$sablon = str_replace("{{menunev}}",  $menunev,   $sablon);
$sablon = str_replace("{{leiras}}",   $leiras,   $sablon);
$sablon = str_replace("{{kulcsszavak}}", $kulcsszavak, $sablon);
$sablon = str_replace("{{menu}}",     $menu,     $sablon);
$sablon = str_replace("{{tartalom}}", $tartalom, $sablon);
$sablon = str_replace("{{oldalsav}}", $oldalsav, $sablon);
print $sablon;
?>
