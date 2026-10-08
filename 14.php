<?php 


$horas =61;
$salario = 1450;
if ($horas <= 40) {

 echo "voçe vai receber $salario";
 
}
elseif ($horas > 40 && $horas < 60) {

$soma = $salario + ( $salario * 50/100);

 echo " voçe vai receber $soma";
}
elseif ($horas > 60) {
$soma= $salario + $salario;

echo " voçe vai receber $soma";

}
?>