<?php

$valor_compra = 0;
$cliente_vip = "sim";

if ($valor_compra > 500 or $cliente_vip == "sim"){
    echo "Cliente com desconto aplicado";
}
else{
    echo "Cliente sem desconto";
}



?>