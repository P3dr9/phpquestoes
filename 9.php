<?php
echo "Telefonou para a vítima?
Esteve no local do crime?
Mora perto da vítima?
Devia para a vítima?
Já trabalhou com a vítima?";
$Afirmaçoes = 4;

if ($Afirmaçoes == 2){
    echo "
    Pessoa Suspeita";
}

elseif ($Afirmaçoes == 3 or $Afirmaçoes == 4){
    echo "
    Cúmplice do Caso";
}
elseif ($Afirmaçoes == 5){
    echo "
    É o Assasino!";
}

else echo "
Inocente"






?>