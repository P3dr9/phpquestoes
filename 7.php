<?php

$lado1 = 5;
$lado2 = 7;
$lado3 = 8;

if ($lado1==$lado2 and $lado2==$lado3){
    echo "Você tem um triângulo <b>Equilátero<b/>";
}
    
elseif ($lado1==$lado2 and $lado2!==$lado3){
    echo "Você tem um triângulo <b>Isóceles<b/>";
}
    
elseif ($lado1!==$lado2 and $lado2!==$lado3){
    echo "Você tem um triângulo <b>Escaleno<b/>";
}














?>