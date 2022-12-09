<?php
        require('connect.php');
        @session_start();
        echo $cod= $_SESSION['cod'];
        var_dump($_SESSION);

extract($_FILES);
extract($_POST);


$arquivo = "imgs/".md5(time().$foto['size']). ".jpg";
move_uploaded_file($foto['tmp_name'],$arquivo);

$arquivoCostas = "imgs/".md5(time().$fotoCostas['size']). ".jpg";
move_uploaded_file($fotoCostas['tmp_name'],$arquivoCostas);

        if(mysqli_query($con, "INSERT INTO `inf_camisetas` (`cod`,`usuario`, `dtaFab`, `dtaRecepcao`, `marca`, `modelo`, `forma`, `cor`, `edicao`, `preco`, `time`, `genero`, `liga`, `tamanho`, `foto`,`foto2`)
         VALUES (NULL,'$cod', '$dtaFab', '$dtaRecepcao', '$marca', '$modelo', '$forma', '$cor', '$edicao', '$preco', '$time', '$genero', '$liga', '$tamanho', '$arquivo','$arquivoCostas');")){
        $msg = "Camisa gravada com sucesso!";
  }else{
        $msg = "Erro ao gravar";
       }
    

session_start();
$_SESSION['msg'] = $msg;
header("location:produtos.php");



?>