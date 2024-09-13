<?php

$nome = ["luis","Daniel","Augusto","Enzo","Guilherme","Felipe","Pablo","Vinicios","Maria","yuri"];
$valor = "luis";
$indice = array_search("Valor",$nome);

if ($indice !== false) {
    echo "$valor foi encontrada na posição: ".$indice;
}
else {
    echo "Esta não foi encontrado na base de dados ";
}

?>
