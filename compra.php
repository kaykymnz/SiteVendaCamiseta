<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="imgs/icon.png">
    <title>Comprar</title>
</head>
<body>
    
    <?php
        include ('navbar.php');
        include ('navbarCategoria.php');
        
    ?>
        <img class="frete"src="imgs/frete.jpg" alt="">
     <?php
        @session_start();
        if(isset($_SESSION['msg'])){
            echo "<p class=alerta>$_SESSION[msg]</p>";
            unset($_SESSION['msg']);
        }
            
            $codigo = $_GET['cod'];
            require('connect.php');
            $busca = mysqli_query($con, "Select * from `inf_camisetas` where `cod` = '$codigo'");
          

            while($camisa=mysqli_fetch_array($busca)){
                
                echo "<div class=geralCompra>";
                echo "<div class=ftpqna>";
                echo "<img src= $camisa[foto]>";
                echo "<img src= $camisa[foto2]>";
                echo "</div>";
                echo "<div class=col-md-3 >
                <img class=pri src = $camisa[foto]>
                <img class=seg src= $camisa[foto2]>
                </div>";
                echo "<div class=prodCompra>";
                
                echo "<p>Camisa $camisa[time] $camisa[modelo] </p>";
                echo "<p>Edição $camisa[edicao] $camisa[genero]</p>";
                
                echo "<div class=precoCompra>";
                echo "<p>R$$camisa[preco],00</p>";
        
                echo "<p class=desconto>5% de desconto pagando com nosso cartão</p>";
                echo "</div>";
                echo "<p><a href=joao.php>Comprar</a><a href=joao.php>Adicionar ao carrinho</a></p>";
                echo "<div class= detalhes>
                <p class=icones><img src=imgs/compra.png alt=>Compra Segura</p> 
                <p> Utilizamos o Mercado Pago como intermediador de compra. Ele garante que seu produto será entregue, ou seu dinheiro de volta!</p>";
                echo "
                <p class=icones><img src=imgs/whats.png alt=>Suporte ao cliente</p> 
                <p>Nossa equipe está pronta para te ajudar se tiver alguma dúvida ou dificuldade.</p></div>";
                echo "</div>";
                echo "</div>";

                echo "<div class=relacionados>";
                echo "<div>";
                echo"<h1 class=txtCategory>Veja também:</h1>";
                
                $camisas = mysqli_query($con, "Select * from `inf_camisetas` where `liga` like 'Copa Do Mundo'");

                while($camisa=mysqli_fetch_array($camisas)){

                    
                    echo "<div class=category>";
                    echo "<img src= $camisa[foto]>";
                    echo "<p>Camiseta $camisa[time] </p>";
                    echo "<p>Edição $camisa[edicao]</p>";
                    echo "<p>$camisa[modelo] </p>";
                    echo "<p>Liga: $camisa[liga]</p>";
                    echo "<p class=precoCamisa>R$$camisa[preco],00 </p>";
                    echo "<p><a href=compra.php?cod=$camisa[cod]>
                    <input type=button value=Comprar></a></p>    ";
                    echo "</div>";
                }

                
            }
            echo "</div>";
            echo "</div>";
            include('footer.php');
    ?>
    
</body>
</html>