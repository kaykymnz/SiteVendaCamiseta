<?php require('seguranca.php'); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="imgs/icon.png">
    <title>Produtos</title>
</head>
<body>

    <?php include('navbar.php');?>
    <?php
    @session_start();
    $cod= $_SESSION['cod'];
        if(isset($_SESSION['msg'])){
            echo "<p class=alert>$_SESSION[msg]</p>";
            unset($_SESSION['msg']);          
        } 
        require('connect.php');
        $camisas = mysqli_query($con, "Select * from `inf_camisetas` where `usuario` = '$cod'");
        
        while($camisa=mysqli_fetch_array($camisas)){
            echo "<div class=category>";
            echo "<p>Código: $camisa[cod]</p>";
            echo "<p>Data De Fabricação: $camisa[dtaFab]</p>";
            echo "<p>Data De Recepção: $camisa[dtaRecepcao]</p>";
            echo "<p>Marca: $camisa[marca] </p>";
            echo "<p>Modelo: $camisa[modelo]</p>";
            echo "<p>Forma: $camisa[forma]</p>";
            echo "<p>Cor: $camisa[cor]</p>";
            echo "<p>Edição: $camisa[edicao]</p>";
            echo "<p>Time: $camisa[time]</p>";
            echo "<p>Preço: $camisa[preco]</p>";
            echo "<p>Gênero: $camisa[genero]</p>";
            echo "<p>Liga: $camisa[liga]</p>";
            echo "<p>Tamanho: $camisa[tamanho]</p>";
            echo "<img src= $camisa[foto]>";
            echo "<p><a href=compra.php?cod=$camisa[cod]>
         <input type=button value='Ver Venda'></a></p>    ";
            echo "<p><a class=alterar href=alterarProduto.php?cod=$camisa[cod]>Alterar</a>
            <a class=excluir href=javascript:excluir($camisa[cod])>Exluir</a></p>";
           

            echo "</div>";
        }
        ?>
        <script>
    function excluir(codigo){
        resp = confirm('Deseja excluir o registro'+codigo+'?');
        if(resp==true){
            window.location = "excluir.php?cod="+codigo;
        }
    }
</script>

</body>
</html>