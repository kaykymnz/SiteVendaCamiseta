<?php
extract($_POST);
extract($_FILES);
$senha = md5($senha);
require('connect.php');


if($foto['size']> 0){

   if($foto_anterior   == "") {
        $arquivo = "imgs/".md5(time()).".jpg";
    }else{
        $arquivo = $foto_anterior;
    }
    move_uploaded_file($foto['tmp_name'],$arquivo);
 }else{
    $arquivo = $foto_anterior;
 }
             

if(mysqli_query($con,"UPDATE `tb_users` SET  `nome` = '$nome', `foto` = '$arquivo', `email` = '$email',
 `senha` = '$senha' WHERE `tb_users`.`codigo` = '$codigo';
")){
    $msg = "Informações alteradas com sucesso!";
}else{
        $msg = "Erro ao gravar";
}
    

session_start();
$_SESSION['msg'] = $msg;



header("location:meuperfil.php");
?>