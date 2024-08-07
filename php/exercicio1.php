<?php

$nota_1 = 9;
$nota_2 = 7;
$nota_3 = 5;

$media = ($nota_1 + $nota_2 + $nota_3) /3;

echo "Nota da primeira prova: $nota_1 <br>";
echo "Nota da segunda prova: $nota_2 <br>";
echo "Nota da terceira prova: $nota_3 <br>";

echo  "Média da notas das trez provas: $media <br>";

if ($media < 7){
    echo 'O aluno foi REPROVADO';
}
else{
    echo ' O aluno foi APROVADO';
}

?>