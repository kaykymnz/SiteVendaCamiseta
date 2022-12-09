
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    

<?php
        @session_start();

        include('navbar.php');
        ?>

        <?php
            $codigo = $_GET['cod'];
            require('connect.php');
            $busca = mysqli_query($con, "Select * from `tb_users` where `codigo` = '$codigo'");
            $perfil = mysqli_fetch_array($busca);
    ?>

         <form class="alterLogin" action="alterarPerfil.act.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="codigo" value="<?php echo $perfil['codigo']; ?>">
            <input type="hidden" name="foto_anterior" value="<?php echo $perfil['foto']; ?>">
            <p>Nome: <input type="text" name="nome" value="<?php echo $perfil['nome'];?>"></p>
            <p>Foto: <input type="file" name="foto" id="arquivo" class="arquivoPerfil">
 
            <div id="img-container">
            <img id="previewPerfil" src="<?php echo $perfil['foto'];?>">
            </div></p>
            <p>Email: <input type="email" name="email" value="<?php echo $perfil['email'];?>"></"></p>
            <p>Senha: <input type="password" name="senha"></p>

            <p><label class="btnFoto" for="arquivo">Foto</label></p>
            <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" 
        crossorigin="anonymous"></script>
    
        <script>
            $(function(){
                $('#arquivo').change(function(){
                    const file = $(this)[0].files[0]
                    const fileReader = new FileReader()
                    fileReader.onloadend = function(){
                        $('#previewPerfil').attr('src', fileReader.result)
                    }
                    fileReader.readAsDataURL(file)
                })
            })
        </script>

            <p><input type="submit" value="Alterar"></p>

        </form>

    </body>
</html>