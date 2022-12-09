<?php
    $codigo = $_GET['cod'];
    require('connect.php');
    $busca = mysqli_query($con,"SELECT * FROM `inf_camisetas` WHERE `cod`= '$codigo'");

    $camisa = mysqli_fetch_array($busca);
    unset($camisa['foto']);
if(mysqli_query($con,"DELETE FROM `inf_camisetas` WHERE `cod` = '$codigo'")){
    $msg = "Camiseta deletada";
}else{
    $msg = "Erro ao deletar";
}
    session_start();
    $_SESSION['msg'] = $msg;
    header("location:produtos.php");

?>