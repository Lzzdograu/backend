<?php

$numero = 1000;
$contador = 0;

if ($numero >= 0){
    while ($contador <= $numero){
        if($contador  % 2 == 0){
             echo "$contador<br>";
        
        }
        $contador++;
    }
}

else{
    echo"Esse número não é par ou positivo";
}








?>