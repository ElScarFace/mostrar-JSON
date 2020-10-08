<?php
//abrir srchivo json
$datos= file_get_contents("json01.json");
//decodificar el archivo json
$lista=json_decode($datos, true);

foreach ($lista as $registro){
    echo "<p>";
    print_r ($registro);
    echo "</p>";
}
foreach ($lista as $registro){
    echo "<p>".$registro["Continente"]." - ".$registro["País"]." -".$registro["Capital"]."</p>";
}

?>

