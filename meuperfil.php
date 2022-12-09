<?php require('seguranca.php'); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="imgs/icon.png">
    <title>Perfil</title>
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
        $perfis = mysqli_query($con, "Select * from `tb_users` where `codigo` = '$cod'");
        
        while($perfil=mysqli_fetch_array($perfis)){
            echo "<div class=categoriaPerfil>";
            echo "<p>Código: $perfil[codigo]</p>";
            echo "<p><img src= $perfil[foto]></p>";
            echo "<p>Nome de Usuário: $perfil[nome]</p>";
            echo "<p>Email: $perfil[email] </p>";
            echo "<p><a href=alterarPerfil.php?cod=$perfil[codigo]>Alterar</a>";
            echo "</div>";
        }

        ?>


</body>
</html>