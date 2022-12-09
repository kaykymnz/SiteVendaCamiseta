<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="imgs/icon.png">
    <title>Login/Cadastro</title>
    
</head>
<body>
    <?php include('navbar.php'); ?>
    <?php
    @session_start();
    if(isset($_SESSION['msg'])){
        echo "<p>$_SESSION[msg]</p>";
        unset($_SESSION['msg']);
    }
    
    ?>
    <div class="login">
        <p class="txtLogin">ENTRAR: </p>
        <form class="inputLogin" action="login.act.php" method="post" enctype="multipart/form-data">
            <p>Email: <input type="email" name="email"></p>
            <p>Senha: <input type="password" name="senha"></p>
            <p><input type="submit" value="Entrar"></p>

        </form>
    

        <p class="txtLogin">CADASTRAR: </p>
        <?php
        include('formLogin.php')
        ?>
        </div>
</body>
</html>