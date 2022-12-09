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
    
<?php
 @session_start();
    include('navbar.php');
    include('navbarCategoria.php');
    require('connect.php');

    $marca = $_GET['marca'];
    echo"<div class=tdFooter>";
    $camisas = mysqli_query($con, "Select * from `inf_camisetas` where `marca` like '$marca'");
    
    echo "<img class=bannerMarca src=imgs2/$marca.jpg>";
    echo"<div class=txtProdutos><p> Todos Produtos da $marca</p></div>";
    echo"<div class=mainCategory>";
    echo "<div>";

    while($camisa=mysqli_fetch_array($camisas)){
       
        echo "<div class=category>";
        echo "<img src= $camisa[foto]>";
        echo "<p>Camisa $camisa[time] </p>";
        echo "<p>Edição $camisa[edicao]</p>";
        echo "<p>$camisa[modelo] </p>";
        echo "<p>Liga: $camisa[liga]</p>";
        echo "<p class=precoCamisa> R$$camisa[preco],00 </p>";
        echo "<p><a href=compra.php?cod=$camisa[cod]>
        <input type=button value=Comprar></a></p>    ";
        echo "</div>";
        
        
        
    }
    echo "</div>";
    echo"</div>";


         echo "<div>";
        include('footer.php');
        echo "</div>";
        echo "</div>";
        ?>