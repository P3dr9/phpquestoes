<?php

/*Sistema de Caixa Eletrônico: O script deverá receber o valor do saque e informar quantas notas de cada valor serão fornecidas.
 As notas disponíveis são: 1, 5, 10, 50 e 100 reais. Valor mínimo de saque: 10 reais. Máximo: 600 reais. 
 (Ex: Sacar 256 reais gera duas notas de 100, uma de 50, uma de 5 e uma de 1).*/

$v=398;

$c100=intdiv($v,100);
$v=$v%100;

$c50=intdiv($v,50);
$v=$v%50;

$c10=intdiv($v,10);
$v=$v%10;

$c5=intdiv($v,5);
$v=$v%5;

$c1=$v;

echo"
notas de 100: $c100
notas de 50: $c50
notas de 10: $c10
notas de 5: $c5
notas de 1:$c1





";




?>
