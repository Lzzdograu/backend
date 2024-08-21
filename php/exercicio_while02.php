<?php

$numero_max = 25;
$contador = 1;
/*coletar os dados*/
if ($numero_max >= 0){//ver se o numero é positivo
    do{
        echo "o contadpor é: $contador ";      
        if($contador % 2 != 0){//ver se é impar
            echo "$contador<br>";
        }
        $contador++;//contar os numeros

    }
    while($contador < $numero_max);//ver se o numero é menos que o contador 
}
else {
    echo "esse numero não é compativel";// se for par 
}



?>