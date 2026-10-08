<?php
$usoucartao = true;
$cartao = 5 / 100;
$file = 10;
$alcatra = 14;
$picanha = 20;

if ($file <= 5 && $usoucartao == true) {
    $valor1 = $file * 4.9;
    $desconto1 = $valor1 * $cartao;
    $final = $valor1 - $desconto1;

    echo
        "\n total: $valor1,
    foi descontado: $desconto1,
    o file com promoção deu: $final \n";
} elseif ($file <= 5 && $usoucartao == false) {
    $valor2 = $file * 4.9;

    echo
        "o file deu: $valor2";
} elseif ($file > 5 && $usoucartao == true) {
    $valor3 = $file * 5.8;
    $desconto3 = $valor3 * $cartao;
    $final = $valor3 - $desconto3;

    echo
        "\n valor total: $valor3,
    foi descontado: $desconto3,
    o file com promoção deu: $final \n";
} elseif ($file > 5 && $usoucartao == false) {
    $valor4 = $file * 5.8;

    echo
        "o file deu: $valor4";
}

if ($alcatra <= 5 && $usoucartao == true) {
    $valor5 = $alcatra * 5.9;
    $desconto5 = $valor5 * $cartao;
    $final = $valor5 - $desconto5;

    echo

        "\n valor total: $valor5,
    foi descontado: $desconto5,
    a alcatra com promoção deu: $final \n";

} elseif ($alcatra <= 5 && $usoucartao == false) {
    $valor6 = $alcatra * 5.9;

    echo
        "a alcatra deu: $valor6";
} elseif ($alcatra > 5 && $usoucartao == true) {
    $valor7 = $alcatra * 6.8;
    $desconto7 = $valor7 * $cartao;
    $final = $valor7 - $desconto7;

    echo

        "\n valor total: $valor7, 
    foi descontado: $desconto7, 
    a alcatra com promoção deu: $final \n";

} elseif ($alcatra > 5 && $usoucartao == false) {
    $valor8 = $alcatra * 6.8;

    echo
        "a alcatra deu: $valor8";
}

if ($picanha <= 5 && $usoucartao == true) {
    $valor9 = $picanha * 6.9;
    $desconto9 = $valor9 * $cartao;
    $final = $valor9 - $desconto9;

    echo

        "\n valor total: $valor9,
    foi descontado: $desconto9,
    a picanha com promoção deu: $final \n";

} elseif ($picanha <= 5 && $usoucartao == false) {
    $valor10 = $picanha * 6.9;

    echo
        "a picanha deu: $valor10";
} elseif ($picanha > 5 && $usoucartao == true) {
    $valor11 = $picanha * 7.8;
    $desconto11 = $valor11 * $cartao;
    $final = $valor11 - $desconto11;

    echo

        "\n valor total: $valor11,
    foi descontado: $desconto11,
    a picanha com promoção deu: $final \n";

} elseif ($picanha > 5 && $usoucartao == false) {
    $valor12 = $picanha * 7.8;

    echo
        "a picanha deu: $valor12";
}

?>