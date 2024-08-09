<?php

$salario = 2340;
$horas_extras = 23;
//Variaveis 

if ($salario < 2000 and $horas_extras > 10){
    $total = $salario * 1.2;
    echo "Esse e o valor total do seu salario com o bonus de 20%: $total";

}
   
elseif($salario >= 2000 and $horas_extras > 5 ){
    $total2 = $salario * 1.1;
    echo"Esse é o salario total com o bonus de 10%: $total2";
}
else {
    echo"Você não recebeu bonus nenhum";
}























?>