<?php
$corEscolhida = "vermelho";

switch ($corEscolhida) {

    case "vermelho":
        echo "você escolheu a cor vermelha. ";
        break;

     case "azul":
        echo "você escolheu a cor azul. ";
        break;

     case "verde":
        echo "você escolheu a cor verde. ";
        break;

    default :
        echo "Cor não disponivel.";
        break;
}

?>