
        <form class="inputLogin" action="cadastrarLogin.act.php" method="post" enctype="multipart/form-data">
            <p>Nome: <input type="text" name="nome"></p>

            <p><input type="file" name="foto" id="arquivo"></p>
            <p>Email: <input type="email" name="email"></p>
            <p>Senha: <input type="password" name="senha"></p>
            <p><label class="btnFotoLogin" for="arquivo">Foto</label>         
               <div id="img-container">
            <img id="preview" src="">

        </div></p>
            <p><input type="submit" value="Criar Conta"></p>
            <script>$(function(){
                $('#arquivo').change(function(){
                    const file = $(this)[0].files[0]
                    const fileReader = new FileReader()
                    fileReader.onloadend = function(){
                        $('#preview').attr('src', fileReader.result)
                    }
                    fileReader.readAsDataURL(file)
                })
            })</script>


        </form>
    