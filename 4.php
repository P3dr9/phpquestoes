<?php
$salario = 2000;
$porcentagem = $salario/100;

if ($salario<=280){
    $aumento1 = $porcentagem*20;
    echo "<br>seu salário anterior era:$salario<br/>";
    echo "<br>o percentual é:20%<br/>";
    echo "<br>o valor do aumento é:$aumento1<br/>";
    echo "<br>seu novo salário é:". ($aumento1+$salario) ."<br/>";
}

elseif ($salario>=281 and $salario<=700){
    $aumento2 = $porcentagem*15;
    echo "<br>seu salário anterior era:$salario<br/>";
    echo "<br>o percentual é:15%<br/>";
    echo "<br>o valor do aumento é:$aumento2<br/>";
    echo "<br>seu novo salário é:". ($aumento2+$salario)."<br/>";
}

elseif ($salario>=701 and $salario<=1500){
    $aumento3 = $porcentagem*10;
    echo "<br>seu salário anterior era:$salario<br/>";
    echo "<br>o percentual é:10%<br/>";
    echo "<br>o valor do aumento é:$aumento3<br/>";
    echo "<br>seu novo salário é:". ($aumento3+$salario)."<br/>";
}

elseif ($salario>=1501){
    $aumento4 = $porcentagem*5;
    echo "<br>seu salário anterior era:$salario<br/>";
    echo "<br>o percentual é:5%<br/>";
    echo "<br>o valor do aumento é:$aumento4<br/>";
    echo "<br>seu novo salário é:". ($aumento4+$salario)."<br/>";
}

?>

