<?php

$intl = 8;
$forç = 4;
$agil = 70;

    if ($intl>$forç && $intl>$agil) {
    echo "clsse mago";
} 
elseif ($agil>$intl && $agil>$forç){
    echo "classe arqueiro";
} 
elseif ($forç>$agil && $forç>$intl ){
    echo "classe guerreiro";
}
elseif ($forç=$intl or $forç=$agil or $intl= $agil){
    echo " classe hibrida";
}







?>