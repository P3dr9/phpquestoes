<?php

$num1 = 38;
$num2 = 47;
$num3 = 7;

if ($num1<$num2 and $num2<$num3){
    echo "$num1,$num2";
} 
elseif ($num3<$num1 and $num1<$num2){
    echo "$num3,$num2";
} 
elseif ($num2<$num3 and $num3<$num1){
    echo "$num2,$num1";
}
elseif ($num1<$num3 and $num3<$num2){
    echo "$num1,$num2";
}
elseif ($num2<$num1 and $num1<$num3){
    echo "$num2,$num3";
}
elseif ($num3<$num2 and $num2<$num1){
    echo "$num3,$num1";
}

?>