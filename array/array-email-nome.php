<?php

$cadastro

//crinado uma Array nome dentro do cadastro 

$cadastro ['Nome'] = ['João','Luis','Daniel','Augusto'];

//criando uma Array e-mail

$cadastro ['e-mail'] = ['João@gmail.br','luis@gmail.','brDaniel@gmail.br','AUgusto@gmail.br'];

echo '<pre>';
echo '<br>';
echo $cadastro['nome'] [2];
echo $cadastro ['e-mail'] [1];
echo '<pre>';


$cadastro ['nome'] [2] = ['Senai'];
$cadastro ['e-mail'] [1] = ['aluno@senai.br'];