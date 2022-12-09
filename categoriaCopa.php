<?php
 @session_start();
 
    require('connect.php');

    $camisas = mysqli_query($con, "Select * from `inf_camisetas` where `liga` like 'Copa Do Mundo'");
   
    while($camisa=mysqli_fetch_array($camisas)){
        echo "<div class=category>";
        echo "<img src= $camisa[foto]>";
        echo "<p>Camisa $camisa[time] </p>";
        echo "<p>Edição $camisa[edicao]</p>";
        echo "<p>$camisa[modelo] </p>";
        echo "<p>Liga: $camisa[liga]</p>";
        echo "<p class=precoCamisa>R$$camisa[preco],00 </p>";
        echo "<p><a href=compra.php?cod=$camisa[cod]>
        <input type=button value=Comprar></a></p>    ";
        echo "</div>";
    }
    
        ?>