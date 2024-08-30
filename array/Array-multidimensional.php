<?php

//criando a Array listas_coisas 
$listas_coisas = []

//criando uma Array frutas, dentro da Array listas_coisas
$listas_coisas['frutas'] = ['banana', 'Maça','Morango','uva'];

//crinado um Array pessoas, dentro da Array listas_coisas
$listas_coisas['pessoas'] = ['João','José','Maria'];

//Alterando o terceiro valor da Array FRUTAS
$listas_coisas['frutas'][2] = 'Abacaxi';

//Alterando o segundo valor da Array PESSOAS
$listas_coisas ['pessoas'][1] = 'Carlos';

echo "O terceiro valor da array FRUTAS agora é: ";
echo $listas_coisas['frutas'][2];

echo "<hr>"

echo "o segundo valor array PESSOAS agora é: ";
echo $listas_coisas['pessoas'][1];


// echo '<pre>';
// print_r($listas_coisas);
// echo '</pre>';



?>