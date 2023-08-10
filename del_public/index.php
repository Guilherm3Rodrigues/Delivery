<!DOCTYPE html>
<html lang="pt-br">
<?php $nomeRestaurante = "McDonalds" ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php print $nomeRestaurante ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body class="margin">
<div class="container">
    <div class="col">
        <img src="imagens/fachada-index.jpg" class="img-fluid rounded borda-img" alt="Imagem Background">
    </div>
</div>


    <div class="container">
        <div class="row justify-content-center align-items-center">

            <div class="col-md-4 col-lg-2">
                <img src="imagens/logo-index.png" class="position-relative img-thumbnail" alt="Logo Loja">
            </div>
            <div class="col-md-8 col-lg-4">
                <h1 class="text-primary position-relative"> MC Donalds </h1>
                <h3 class="text-primary position-relative">(35) 98899-9749 </h3>
                <p class="text-danger position-relative"> Rua Maria Lourdes de Andrade, 185</p>
                <p class="text-danger"> Bairro Sossego - Piranguinho</p>
            </div>
        </div>
    </div>





    <div class="sticky-md-bottom position-absolute bottom-0 start-50 translate-middle-x">
        <div class="text-center" style="height:140px">
            <p class="text-primary"> Funcionamento: Terça a Sabado - 18:00 as 00:00</p>
            <h2 class="text-success" > ABERTO </h2>

        </div>
        <div>
            <a class="borda-carrinho fs-3 fw-bolder btn btn-danger position-relative bottom-0 start-50 translate-middle btn btn-lg btn-primary rounded-pill"
                href="cardapio.php" >
          Cardapio</a>
      </div>
    </div>


    
    
</body>
</html>