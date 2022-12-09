<?php require('seguranca.php'); ?>
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

    <?php
        @session_start();
        if(isset($_SESSION['msg'])){
            echo "<p class=alerta>$_SESSION[msg]</p>";
            unset($_SESSION['msg']);
        }
        include('navbar.php');
        ?>

        <?php
            $codigo = $_GET['cod'];
            require('connect.php');
            $busca = mysqli_query($con, "Select * from `inf_camisetas` where `cod` = '$codigo'");
            $camisa = mysqli_fetch_array($busca);
    ?>
   <div class="divForm">
    <form class="formulario" action="alterar.act.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="codigo" value="<?php echo $camisa['cod']; ?>">
        <input type="hidden" name="foto_anterior" value="<?php echo $camisa['foto']; ?>">
        <input type="hidden" name="foto_anterior_Costas" value="<?php echo $camisa['foto2']; ?>">

    <div class="div1">
    <p>Data de Fabricação: <input type="date" name="dtaFab" value="<?php echo $camisa['dtaFab'];?>"></p>
    <p>Data de Recepção: <input type="date" name="dtaRecepcao"value="<?php echo $camisa['dtaFab'];?>"></p>
    <p>Marca
           <select name="marca">
           <option value="false"></option>
            <?php
                $marcas = ['Nike','Adidas','Puma','Kappa','Joma','Umbro','Topper',"UnderArmour",'Penalty',"NewBalance"];
                foreach($marcas as $marca){
                    if($marca == $camisa['marca']){
                        echo "<option value='$marca' selected>$marca</option>";
                    }else{
                        echo "<option value='$marca'>$marca</option>";
                    }
                }
            ?>
            </select>
        </p>
    <p>Modelo:   
        <select name="modelo">
            <option value="false"></option>
            <?php
                $modelos = ["Manga Curta","Manga Longa","Jaqueta","Regata","Conjunto"];
                foreach($modelos as $modelo){
                    if($modelo == $camisa['modelo']){
                        echo "<option value='$modelo' selected>$modelo</option>";
                    }else{
                        echo "<option value='$modelo'>$modelo</option>";
                    }
                }
            ?>

        </select>
    </p>
    <p>Forma:   
         <select name="forma">
            <option value="false"></option>
            <?php
                $formas = ["Gola Redonda","Gola V","Polo"];
                foreach($formas as $forma){
                    if($forma == $camisa['forma']){
                        echo "<option value='$forma' selected>$forma</option>";
                    }else{
                        echo "<option value='$forma'>$forma</option>";
                    }
                }
            ?>
        </select>
    </p>
    <p>Cor:
    <select name="cor">
            <option value="false"></option>
            <?php
                $cores = ['vermelho','azul','verde','amarelo','branco','preto','rosa','laranja','roxo'];
                foreach($cores as $cor){
                    if($cor == $camisa['cor']){
                        echo "<option value=$cor selected>$cor</option>";
                    }else{
                        echo "<option value=$cor>$cor</option>";
                    }
                }
            ?>
            </select>
    </p>
    <p><label class="btnFoto" for="arquivo">Foto</label></p>
    <p><label class="btnFoto" for="arquivo2">Foto 2</label></p>
           
    </div>
    <div class="div2">
    <p>Edição: <input type="text" name="edicao"value="<?php echo $camisa['edicao'];?>"></p>
    <p>Preço: <input type="number" name="preco"value="<?php echo $camisa['preco'];?>"></p>
    <p>Time: <input type="text" name="time"value="<?php echo $camisa['time'];?>"></p>
    <p>Gênero:   
            <select name="genero">
            <option value="false"></option>
            <?php
                $generos = ['masculina','feminina'];
                foreach($generos as $genero){
                    if($genero == $camisa['genero']){
                        echo "<option value=$genero selected>$genero</option>";
                    }else{
                        echo "<option value=$genero>$genero</option>";
                    }
                }
            ?>

            </select>
        </p>
    <p>Liga: 
    <select name="liga">
            <option value="false"></option>
            <?php
                $ligas = ["ligue 1","Serie A","Premier League",'BundesLiga','Brasileiro',"La Liga",'MLS','Eredvise',"Primera Divisón","Copa Do Mundo"];
                foreach($ligas as $liga){
                    if($liga == $camisa['liga']){
                        echo "<option value='$liga' selected>$liga</option>";
                    }else{
                        echo "<option value='$liga'>$liga</option>";
                    }
                }
            ?>
 
            </select></p>
    <p>Tamanho: 
          <select name="tamanho">
            <option value="false"></option>
            <?php
                $tamanhos = ['infantil','juvenil','PP','P','M','G','GG','XG'];
                foreach($tamanhos as $tamanho){
                    if($tamanho == $camisa['tamanho']){
                        echo "<option value=$tamanho selected>$tamanho</option>";
                    }else{
                        echo "<option value=$tamanho>$tamanho</option>";
                    }
                }
            ?>
            </select>
            <div>      
            <script>
            $(function(){
                $('#arquivo').change(function(){
                    const file = $(this)[0].files[0]
                    const fileReader = new FileReader()
                    fileReader.onloadend = function(){
                        $('#preview').attr('src', fileReader.result)
                    }
                    fileReader.readAsDataURL(file)
                })
            })
       
            $(function(){
                $('#arquivo2').change(function(){
                    const file = $(this)[0].files[0]
                    const fileReader = new FileReader()
                    fileReader.onloadend = function(){
                        $('#preview2').attr('src', fileReader.result)
                    }
                    fileReader.readAsDataURL(file)
                })
            })
        </script>
        </div>       
        <p><input type="submit" value="ALTERAR"></p>
        <div id="img-container">
            <img id="preview" src="<?php echo $camisa['foto'];?>">
            <img id="preview2" src="<?php echo $camisa['foto2'];?>">
        </div>
    </div>
    <input type="file" name="foto" id="arquivo" class="arquivo">
    <input type="file" name="fotoCostas" id="arquivo2" class="arquivo">


</form>
</div>