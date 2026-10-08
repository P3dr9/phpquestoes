<?php
$notaB = 10;
$notaP = 10;
$media= ($notaB+$notaP)/2;

    if ($media>=9 and $media<=10){
        echo "<b>Aprovado!<b/> Sua nota é A";
        echo "<br>E sua média é: $media<br/>";
    }
    elseif ($media>=7.5 and $media<9){
        echo "<b>Aprovado!<b/> Sua nota é B";
        echo "<br>E sua média é: $media<br/>";
    }
    
elseif ($media>=6 and $media<7.5){
        echo "<b>Aprovado!<b/> Sua nota é C";
        echo "<br>E sua média é: $media<br/>";
    }

elseif ($media>=4 and $media<6){
        echo "<b>Reprovado!<b/> Sua nota é D";
        echo "<br>E sua média é: $media<br/>";
    }

elseif ($media>=0 and $media<4){
        echo "<b>Reprovado!<b/> Sua nota é E";
        echo "<br>E sua média é: $media<br/>";
    }

?>