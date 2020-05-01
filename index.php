<?php
echo '<pre>';
    require_once 'Produto.php';
    $pro = new produto();
    $pro-> setId('0001');
    $pro-> setNome('Notebook Dell X159');
    $pro-> setDescricao('Core I9 9900k, 16Gb Ram e SSD 500GB');
    $pro-> setQuantidade(1);    
    $pro-> setPreco(3892.12);
    $pro-> setTaxa('50.00');
    $pro-> setFrete('');

    
    //Pensei em fazer um if aqui para confirmar a quantidade e multiplicar pelo valor e depois somar a taxa
    echo "PARABÉNS,<br>Você comprou o produto ID: ".$pro->getId()." - ".$pro->getNome()."<br>"; 
    echo "Descrição: ".$pro->getDescricao()."<br>";
    echo "Quantidade: ".$pro->getQuantidade()."<br>";
    echo "Preço: ".$pro->getPreco()."<br>";
    echo "Taxa de entrega R$: ".$pro->getTaxa();"<br>";  

    echo '<pre>';
?>