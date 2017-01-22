<?php
$arquivo = fopen("out.txt", "w") or die("Não se pode abrir o arquivo!");
$txt = $_GET["info"]."\n";
fwrite($arquivo, $txt);
fclose($arquivo);
?>