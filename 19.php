<?php

//Uma raposa está correndo por uma floresta e precisa atravessar uma área de 100 metros. Para correr com segurança, sua velocidade deve estar entre 10 km/h e 20 km/h.
// Entretanto:
// se estiver cansada, sua velocidade máxima é de 15 km/h;
// se estiver chovendo, ela não pode correr a mais de 12 km/h.




$raps = 5;
$cansada = false;
$chovendo = false;

if ( ($cansada=false || $chovendo=false) && $raps <=20 ) {
echo "velocidade ok voçe esta seguro";
}
   elseif ($cansada=true && $chovendo=true && $raps >= 10){ 
echo "velocidade muito alta , voçe nao esta nada seguro diminua rapido";
    }
    elseif ($cansada=true && $raps >= 15 || $chovendo=true && $raps>=12){ 
echo "velocidade muito alta, voçe nao esta seguro";
    }

?>