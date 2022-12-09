
<?php

    $texto = $_GET['txt'];
    
     echo"<a href=inicial.php  class=cancelar ><p>Limpar Pesquisa</p></a>";
    require('connect.php');
    $camisas = mysqli_query($con, "Select * from `inf_camisetas` where `time` like '%$texto%'");
    
    echo "<div>";
    while($camisa=mysqli_fetch_array($camisas)){
        echo "<div class=category>";
        echo "<img src= $camisa[foto]>";
        echo "<p>Camiseta $camisa[time] </p>";
        echo "<p>Edição $camisa[edicao]</p>";
        echo "<p>R$$camisa[preco],00 </p>";
        echo "<p>$camisa[modelo] </p>";
        echo "<p>Liga: $camisa[liga]</p>";
        echo "<p>Tamanho: $camisa[tamanho]</p>";
        echo "<p><a href=compra.php?cod=$camisa[cod]>
        <input type=button value=Comprar></a></p>     ";
        echo "</div>";
          }      
          echo "</div>";
?>