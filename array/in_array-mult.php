<?php

$usuarios = [
    [ "id" => 1,
       "nome" => "joão",
       "email" => "joao@example.com"],
    
    [ "id" => 2,
       "nome" => "Pedro",
       "email" => "Pedro@example.com"],

    [ "id" => 3,
       "nome" => "Maria",
       "email" => "Maria@example.com"],


];

$busca = "Pedro@example.com";

echo '<pre>';
print_r($usuarios);
echo '<pre>';

$usuarios, especificamente no campo 'nome'.
$indice = array_search($busca, array_column($usuarios,'email'));

$busca foi encontrado no array.
if($indice !== false){
   echo "$busca foi encontrada com o ID: " . $usuarios[$indice]['id'];
}
else{
   echo "$busca não foi encontrada na lista de usuarios.";
}
?>