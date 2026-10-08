<?php
/*Faça um script para o cálculo de uma folha de pagamento. O script deve  ter o valor da sua hora e a quantidade de horas trabalhadas no mês. 
Considere: FGTS (11% do bruto, NÃO descontado), Sindicato (3% do bruto, descontado), e o IR (Imposto de Renda) que varia:
Bruto até 900: isento do imposto de renda.
Bruto até 1.500: desconto de 5%.
Bruto até 2.500: desconto de 10%.
Bruto acima de 2.500: desconto de 20%.
Imprima o resumo demonstrativo listando Bruto, Descontos detalhados e o Salário Líquido.*/


$v = 12;
$h = 160;
$b = $v * $h;
$si = ($b*0.03);

if ($b <=900) {
    $sf = $b-$si;
    echo "
    bruto: $b
    descontos: 3% de sindicato e 11% do bruto
    salário liquido:$sf";
}
elseif ($b >900 and $b <=1500) {
    $ir=$b*0.05;
    $sf = $b-$si-$ir;
    echo "
    bruto: $b
    descontos: 3% de sindicato, 11% do bruto e 5% do imposto de renda
    salário liquido:$sf";
}
elseif ($b >1500 and $b <=2500) {
    $ir=$b*0.10;
    $sf = $b-$si-$ir;
    echo "
    bruto: $b
    descontos: 3% de sindicato, 11% do bruto e 10% do imposto de renda
    salário liquido:$sf";}
else{
    $ir=$b*0.20;
    $sf = $b-$si-$ir;
    echo "
    bruto: $b
    descontos: 3% de sindicato, 11% do bruto e 20% do imposto de renda
    salário liquido:$sf";
}


















?>