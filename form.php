<script>
function readImage() {
    if (this.files && this.files[0]) {
        var file = new FileReader();
        file.onload = function(e) {
            document.getElementById("preview").src = e.target.result;
        };       
        file.readAsDataURL(this.files[0]);
    }
}
document.getElementById("img-input").addEventListener("change", readImage, false);
</script>
<div class="divForm">
    <form class="formulario" action="cadProduto.act.php" method="post" enctype="multipart/form-data">

    <div class="div1">
    <p>Data de Fabricação: <input type="date" name="dtaFab"></p>
    <p>Data de Recepção: <input type="date" name="dtaRecepcao"></p>
    <p>Marca
           <select name="marca">
                <option value="false"></option>
                <option value="Nike">Nike</option>
                <option value="Adidas">Adidas</option>
                <option value="Kappa">Kappa</option>
                <option value="Joma">Joma</option>
                <option value="Puma">Puma</option>
                <option value="Umbro">Umbro</option>
                <option value="Topper">Topper</option>
                <option value="UnderArmour">Under Armor</option>
                <option value="Penalty">Penalty</option>
                <option value="NewBalance">New Balance</option>
            </select>
        </p>
    <p>Modelo:   
        <select name="modelo">
            <option value="false"></option>
            <option value="Manga curta">Manga Curta</option>
            <option value="Manga longa">Manga Longa</option>
            <option value="Jaqueta">Jaqueta</option>
            <option value="Regata">Regata</option>
            <option value="Conjunto">Conjunto</option>
        </select>
    </p>
    <p>Forma:
         <select name="forma">
            <option value="false"></option>
            <option value="Polo">Polo</option>
            <option value="Gola V">Gola V</option>
            <option value="Gola redonda">Gola Redonda</option>
        </select>
    </p>
    <p>Cor:
    <select name="cor">
            <option value="false"></option>
            <option value="Vermelho">Vermelho</option>
            <option value="Azul">Azul</option>
            <option value="Verde">Verde</option>
            <option value="Amarelo">Amarelo</option>
            <option value="Branco">Branco</option>
            <option value="Preto">Preto</option>
            <option value="Rosa">Rosa</option>
            <option value="Laranja">laranja</option>
            <option value="Roxo">Roxo</option>
            <option value="Bege">Bege</option>

            </select>
    </p>
    <p><label class="btnFoto" for="arquivo">Foto</label></p>
    <p><label class="btnFoto" for="arquivo2">Foto 2</label></p>
           
    </div>
    <div class="div2">
    <p>Edição: <input type="text" name="edicao"></p>
    <p>Preço: <input type="number" name="preco"></p>
    <p>Time: <input type="text" name="time"></p>
    <p>Gênero:   
            <select name="genero">
            <option value="false"></option>
            <option value="Masculina">Masculina</option>
            <option value="Feminina">Feminina</option>
            </select>
        </p>
    <p>Liga: 
    <select name="liga">
            <option value="false"></option>
            <option value="ligue 1">Ligue 1</option>
            <option value="Serie A">Serie A</option>
            <option value="Premier League">Premier League</option>
            <option value="BundesLiga">BundesLiga</option>
            <option value="Brasileiro">Brasileiro</option>
            <option value="La Liga">La Liga</option>
            <option value="MLS">MLS</option>
            <option value="Eredvise">Eredvise</option>
            <option value="Primera Divisón">Primera Divisón</option>
            <option value="Copa Do Mundo">Copa Do Mundo</option>

            </select></p>
    <p>Tamanho:   <select name="tamanho">
            <option value="false"></option>
            <option value="infantil">Infantil</option>
            <option value="juvenil">Juvenil</option>
            <option value="PP">PP</option>
            <option value="P">P</option>
            <option value="M">M</option>
            <option value="G">G</option>
            <option value="GG">GG</option>
            <option value="XG">XG</option>
            </select>
            <div>
           
        </div>
        
        <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" 
        crossorigin="anonymous"></script>
    
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

        <p><input type="submit" value="VENDER"></p>
        <div id="img-container">
            <img id="preview" src="">
            <img id="preview2" src="">
        </div>
    </div>
    <input type="file" name="foto" id="arquivo" class="arquivo">
    
    <input type="file" name="fotoCostas" id="arquivo2" class="arquivo">
    



</form>
</div>