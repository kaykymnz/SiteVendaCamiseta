<?php
    extract($_POST);
    extract($_FILES);
    $senha = md5($senha);
 
    require('connect.php');

    $busca = mysqli_query($con, "SELECT * FROM `tb_users` WHERE `email` = '$email'");
    session_start();
    if($busca->num_rows ==1){
            $user = mysqli_fetch_array($busca);
        if($senha === $user['senha']){
            $_SESSION['login'] = true;
            $_SESSION['nome'] = $user['nome'];
            $_SESSION['cod'] = $user['codigo'];
            $_SESSION['foto'] = $user['foto'];
            $target = "location:inicial.php";
        }else{
            $msg = "Email ou senha incorretos1!";
            $target = "location:login.php";
        }

    }else{
        $msg = "Email ou senha incorretos";
        $target = "location:login.php";
    }
    $_SESSION['msg'] = $msg;
    header($target);
?>