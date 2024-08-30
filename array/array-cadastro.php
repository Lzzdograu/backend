<?php

$cadastro = []

$cadastro = ['usuario'] = ['joão','Maria','pedro'];
$cadastro = ['senha'] = ['1234','absd','5678'];

echo '<pre>';
print_r($cadastro);
echo '</pre>';


$cadastro ['usuario'][1] = ['Ana'];
$cadastro['senha'][1] = ['afgh'];

echo '<hr>';

echo "A tabela foi alterada com sucesso";

echo '<hr>';

echo '</pre>';
print_r ($cadastro);
echo '</pre>';

?>