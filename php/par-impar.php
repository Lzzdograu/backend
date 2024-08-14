<?php

//iterar de 1 a 10 utilizando for
for($i = 1; $i <= 10; $i++){

    $categoria;
    $conjunto = ($i % 2 == 0) ? "par" : "impar";
    // Descobrir se o numero e par ou impar 
    switch ($i) {
        case $i <= 3 :
            $categoria = 'baixo';
            break;
    
         case $i <= 7:
           $categoria = 'Médio';
            break;
    
         case $i <= 10:
           $categoria = 'alto';
            break;
    
        default :
            $categoria = 'desconhecido';
            break;

    }

// exebir o numero e sua categoria
echo "O numero $i é $conjunto e está na categoria $categoria.<br/>"

}

?>