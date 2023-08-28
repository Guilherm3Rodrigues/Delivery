<?php 

    require_once "comandos.php";
    require_once "../private_delivery/conexao.php";
    require_once "../private_delivery/admCardapio.php";

    $acao = isset($_GET['acao']) ? $_GET['acao'] : $acao;

    if ($acao == 'inserir') {
    $admCardapio = new AdmCardapio();

    $admCardapio->__set('categoria', $_POST['categoria']);
    $admCardapio->__set('produto', $_POST['produto']);
    $admCardapio->__set('descricao', $_POST['descricao']);
    $admCardapio->__set('valor', $_POST['valor']);

    $conexao = new Conexao();

    $comandos = new Comandos($conexao, $admCardapio);

    $comandos->inserir();

    header('Location: admControl.php?inclusao=1');
   
    } else if ($acao == 'recuperar' || $acao == 'removerEdit') {

        $admCardapio = new AdmCardapio();
        $conexao = new Conexao();

        $comandos = new Comandos($conexao, $admCardapio);
        $listaCardapio = $comandos->buscar();
    }

    

?>