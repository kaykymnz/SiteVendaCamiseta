<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="imgs/icon.png">
    <title>Inicial</title>
</head>
<body>
    
    <?php
        include('navbar.php');
        include('navbarCategoria.php');
        include('banner.php');
    ?>
    <div class="pesquisaAlter">
    <div class="imgsCategorias">
    <div class="imgsCategoriasTxt">
        <img src="imgs/brasil.jpg" alt="">
    <p>Peitas Das Seleções</p>
    <?php echo "<p><a href=pagCategorias.php?liga=Copa-Do-Mundo class=myButton><img src=imgs/carrinho.png>Comprar</a></p>" ?>
        </div>
    <div class="imgsCategoriasTxt">
        <img src="imgs/luciano.jpg" alt="">
        <p>As Melhores do Brasileirão</p>
        <?php echo "<p><a href=pagCategorias.php?liga=brasileiro class=myButton><img src=imgs/carrinho.png>Comprar</a></p>" ?>
    </div>
    <div class="imgsCategoriasTxt">
        <img src="imgs/treino.jpg" alt="">
        <p>Conjuntos De Peso!!</p>
        <?php echo "<p><a href=pagCategorias.php?modelo=Conjunto class=myButton><img src=imgs/carrinho.png>Comprar</a></p>" ?>
        
        

        </div>
</div>

    <div class="mainCategory">
    <div>
        <h1 class="txtCategory">Para entrar no clima da Copa!!!!</h1>
        <?php include('categoriaCopa.php');?>   

    </div>









    </div>
    
<?php include('footer.php');?>
</body>
</html>