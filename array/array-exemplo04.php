<?php

//cria um array chmado $frutas contendo três elementos: "Maça","Banana" e "Laranja";
$frutas = array ("Maça","Banana","Laranja");

//verifica se "Banana" está presente no array $frutas.
if (in_array("Banana",$frutas)){
// Se "Banana" estiver no array, exiba a mensagem "Banana está na lista de frutas".
   echo "Banana está na lista de frutas.";
}else {
    //Se "Banana está nao esta na lista, exiba a mensagem "banana nao esta namlista de furtas ";
    echo "Banana não esta na lista de frutas";
}



?>