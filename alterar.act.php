<?php
extract($_POST);
extract($_FILES);
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


 if($fotoCostas['size']> 0){

    if($foto_anterior_Costas   == "") {
         $arquivoCostas = "imgs/".md5(time()).".jpg";
     }else{
         $arquivoCostas = $foto_anterior_Costas;
     }
     move_uploaded_file($fotoCostas['tmp_name'],$arquivoCostas);
  }else{
     $arquivoCostas = $foto_anterior_Costas;
  }
      
                
            

if(mysqli_query($con,"UPDATE `inf_camisetas` SET  `dtaFab` = '$dtaFab', `dtaRecepcao` = '$dtaRecepcao', `marca` = '$marca',
 `modelo` = '$modelo', `forma` = '$forma', `cor` = '$cor', `edicao` = '$edicao', `preco` = '$preco',
  `time` = '$time', `genero` = '$genero',`liga` = '$liga',`tamanho` = '$tamanho',`foto` = '$arquivo',`foto2` = '$arquivoCostas' WHERE `inf_camisetas`.`cod` = '$codigo';
")){
    $msg = "Camisa gravada com sucesso!";
}else{
        $msg = "Erro ao gravar";
}
    

session_start();
$_SESSION['msg'] = $msg;



header("location:produtos.php");
?>