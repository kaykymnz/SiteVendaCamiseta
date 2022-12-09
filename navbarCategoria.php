<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Alterar</title>
</head>
<body>
<div class="navbarProd">
<ul class="prodLi">
    
    
    
    
    

    
<?php @session_start(); ?>
<?php

   
    echo  "<li><a href=pagProdutos.php?marca=Nike><img src=imgs/nike.png></a></li> ";
    echo  "<li><a href=pagProdutos.php?marca=Adidas><img src=imgs/adidas-logo.png></a></li> ";
    echo  "<li><a href=pagProdutos.php?marca=Puma><img src=imgs/puma-logo-1.png></a></li> ";
    echo  "<li><a href=pagProdutos.php?marca=NewBalance><img src=imgs/New-Balance-Logo-1972-2006.png></a></li> ";
    echo  "<li><a href=pagProdutos.php?marca=Kappa><img src=imgs/kappa.png></a></li> ";
    echo  "<li><a href=pagProdutos.php?marca=Umbro><img src=imgs/umbro-logo-1.png></a></li> ";
    echo  "<li><a href=pagProdutos.php?marca=UnderArmour><img src=imgs/Under_armour_logo.svg.png></a></li> ";

?>

</ul>
</div>
</body>