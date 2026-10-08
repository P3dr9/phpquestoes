<?php
$preco = number_format(100.00, 0, ",", ".");
$opcao = 4;

if ($opcao == 1) {
    $desconto = $preco * (10 / 100);
    $final = $preco - $desconto;
    
    echo "Total: R$ $preco\n";
    echo "Foi descontado: R$ $desconto\n";
    echo "O produto com promoção deu: R$ $final\n";
} 

    elseif ($opcao == 2) {
    $desconto = $preco * (5 / 100);
    $final = $preco - $desconto;
   
    echo "Total: R$ $preco\n";
    echo "Foi descontado: R$ $desconto\n";
    echo "O produto com promoção deu: R$ $final\n";
} 

    elseif ($opcao == 3) {
    $parcela = $preco / 3;
   
    echo "Total: R$ $preco\n";
    echo "Dividido em 3x de: R$" . number_format($parcela, 2, ',', '.'). "\n";
    echo "O produto deu: R$ $preco\n";
} 

    elseif ($opcao == 4) {
    $juros = $preco * (10 / 100);
    $final = $preco + $juros;
    $parcela = $final / 6;
   
    echo "Total: R$ $preco";
    echo "Teve juros de: R$ $juros";
    echo "Dividido em 6x de: R$" . number_format($parcela, 2, ',', '.'). "\n";
    echo "O produto com juros deu: R$ $final";
} 

    else {
    echo "Opção inválida.";
}
?>