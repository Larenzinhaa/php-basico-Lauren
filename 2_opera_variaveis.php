<?php
// Recebe os dois valores pela URL usando o método GET
// Digitar a URL para poder enviar os valores
// Exemplo de URL: http://localhost/php-basico-Lauren/2_opera_variaveis.php?numero1=10&numero2=5

$numero1 = $_GET['numero1'];
$numero2 = $_GET['numero2'];

// Verifica se os valores foram passados corretamente
if (isset($numero1) && isset($numero2)){
    // Converte os valores para inteiros
    $numero1 = (int)$numero1;
    $numero2 = (int)$numero2;

    // Realiza as operações ariméticas básicas
    $soma = $numero1 + $numero2;
    $subtracao = $numero1 - $numero2;
    $multiplicacao = $numero1 * $numero2;
    $divisao = $numero1 / $numero2;

    // Exibe os resultados 
    echo "Soma: $soma <br>";
    echo "Subtração: $subtracao <br>";
    echo "Multiplicação: $multiplicacao <br>";
    echo "Divisão: $divisao <br>";
}else {
    echo "ATENÇAO! Por favor, foneça os valores de numero1 e numero2 pela URL.";
}
?>