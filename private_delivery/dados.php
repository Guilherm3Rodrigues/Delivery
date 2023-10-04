<?php 
    

    require_once "comandos.php";
    require_once "../private_delivery/conexao.php";
    require_once "../private_delivery/admCardapio.php";

    $acao = isset($_GET['acao']) ? $_GET['acao'] : $acao;

    if ($acao == 'inserir') 
    {

        $admCardapio = new AdmCardapio();

        $admCardapio->__set('categoria', $_POST['categoria']);
        $admCardapio->__set('produto', $_POST['produto']);
        $admCardapio->__set('descricao', $_POST['descricao']);
        $admCardapio->__set('valor', $_POST['valor']);

        $conexao = new Conexao();

        $comandos = new Comandos($conexao, $admCardapio);

        $comandos->inserir();

        header('Location: admControl.php?inclusao=1');
    
    } 
    
    else  if ($acao == 'recuperar') 
    
        {

            $admCardapio = new AdmCardapio();
            $conexao = new Conexao();

            $comandos = new Comandos($conexao, $admCardapio);
            $listaCardapio = $comandos->buscar();

            if (isset($_GET['id'])) 
            {
                $admCardapio->__set('id', $_GET['id']);
                $objetoProduto = $comandos->add_carrinho();
                
                $valorTotal = $objetoProduto['valor'];
                $_SESSION['valorTotal'] = $valorTotal;


               header('location: cardapio.php?recuperar');
            }
            
        }

    else if ($acao == 'Atualizar') 
    
        {            
            $admCardapio = new AdmCardapio();

            $conexao = new Conexao();

            $comandos = new Comandos($conexao, $admCardapio);

            $listaCardapio = $comandos->buscar();

            
            if(isset($_POST['id']))
            {
                $admCardapio->__set('id', $_POST['id']);

                if (isset($_POST['descricao']))
                {
                    $admCardapio->__set('descricao', $_POST['descricao']);
                }
                if (isset($_POST['valor']))
                {
                    $admCardapio->__set('valor', $_POST['valor']);
                }
                if (isset($_POST['produto']))
                {
                    $admCardapio->__set('produto', $_POST['produto']);
                }
                
                
                //print $admCardapio->__get('id');
                //print $admCardapio->__get('descricao');
                
                $comandos->editar();
                
                
                
                header('location: cardapio.php?acao=Atualizar');
            }
            
                
        }

        else  if ($acao == 'remover') 
    
        {
            
            $admCardapio = new AdmCardapio();
            $conexao = new Conexao();

            $admCardapio->__set('id', $_GET['id']);

            $comandos = new Comandos($conexao, $admCardapio);
            
            $comandos->remover();

            header('location: cardapio.php?acao=Atualizar');


        }

        else if ($acao == 'logar')

        {
            if(isset($_POST['usuario']) && $_POST['usuario'] !== null )
                {

                    if($_POST['usuario'] == 'admin') 
                    {
                        if(isset($_POST['senha']) && $_POST['senha'] == 'admin') 
                        {
                            header('Location: admControl.php');
                        }
                        
                    } 
                    else 
                    { 
                        header('Location: index.php?erro=1');
                    };
                    
                } 

        }

        else  if ($acao == 'recuperarPedidos') 
    
        {
            
            $admCardapio = new AdmCardapio();
            $conexao = new Conexao();

            $comandos = new Comandos($conexao, $admCardapio);
            $listaPedidos = $comandos->buscarPedidos();
            
            
        }


        
    

?>