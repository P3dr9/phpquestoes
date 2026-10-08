<?php
///Consumo de energia: A empresa de energia ENERGIA MÁXIMA utiliza a seguinte tabela para calcular o valor da conta:Até 100 kWh: R$ 0,50 
// por kWh;De 101 até 200 kWh: R$ 0,70 
// por kWh;De 201 até 300 kWh: R$ 0,90 
// por kWh;Acima de 300 kWh: R$ 1,10 por kWh.

$kwm= 10;
 if ($kwm <= 100){
    $soma = 0.50 * $kwm;
  echo " voçe consumiu $kwm kwm ,o kwm esta 0,50, pagara $soma  ";
}
elseif ($kwm > 100 && $kwm <=200 ) {
    
  $soma = 0.70 * $kwm;
 echo " voçe consumiu $kwm kwm ,o kwm esta 0,70, pagara $soma  ";
}
elseif ($kwm > 200 && $kwm <=300 ) {
    
     $soma = 0.90 * $kwm;
 echo " voçe consumiu $kwm kwm ,o kwm esta 0,90, pagara $soma  ";
}
elseif ($kwm > 300) {
    
      $soma = 1.10 * $kwm;
 echo " voçe consumiu $kwm kwm ,o kwm esta 1,10, pagara $soma  ";

}
?>