<?php
//puxando telefone da loja pra enviar msg
$infoLoja = $comandos->carregarInfo();  
$telefoneString = $infoLoja['telefone'];   
$telefoneStringNumeros = preg_replace("/[^0-9]/", "", $telefoneString);   

$admCardapio = new AdmCardapio();
$conexao = new Conexao();
$comandos = new Comandos($conexao, $admCardapio);

$arrayProdutos;
$valorTotal = 0;
$valorSomado=0;

foreach ($_SESSION['itens'] as $key => $itens) 
{
    $arrayProdutos[$key] = $itens['produto'] . ' x ' . $itens['numero_pedido'];
    $valor = $itens['valor'] * $itens['numero_pedido'];
    $valorSomado += $valor;
}


$valorTotal = $valorSomado + $_SESSION['freteFinal'];
$produtos = implode(PHP_EOL . '- ', $arrayProdutos);

$mensagem = 'Obrigado por comprar conosco!' . PHP_EOL . PHP_EOL;
$mensagem .= 'Você comprou:' . PHP_EOL;
$mensagem .= '- ' . $produtos . PHP_EOL . PHP_EOL;
$mensagem .= 'O valor total é de R$ ' . $valorTotal . '.' . PHP_EOL . PHP_EOL;
$mensagem .= 'Agradecemos a preferência ^_^';



print '<script>window.open("https://api.whatsapp.com/send?phone=55' . $telefoneStringNumeros .
  '&text='. urlencode($mensagem) .'", "_blank");</script>';

    
