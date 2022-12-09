<?php @session_start(); ?>
<div class="navbar">
<ul>
    <img class="icon" src="imgs/icon.png" alt="">
    <a  class="logo" href="inicial.php"><li>Take Sports</li></a>
    <li>
        <input type="text" placeholder="O que você está procurando?" onkeyup="pesquisar(this.value)" >

        <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" 
        crossorigin="anonymous"></script>

        <script>
            
            function pesquisar(texto){
                conteudo = $('.mainCategory').html();
                if(texto !=""){
                    $.ajax({
                        type: "post",
                        url: "pesquisar.php?txt="+texto,
                        data: "txt",
                        success: function (response) { 
                                $('.mainCategory').html(response);
                        }
                    });
                }else{
                   
                    $('.mainCategory').html(conteudo);
                }
            }


</script>

    </li>
    <li class="dropdown"><img src="imgs/carrinho.png" alt="">
        <div class="dropdown-content">
            <ul>
                <a href="https://produto.mercadolivre.com.br/MLB-1715851437-kit-coleco-carrinho-de-ferro-estilo-hot-wheels-10-pecas-_JM?matt_tool=18956390&utm_source=google_shopping&utm_medium=organic" target="blank"><li>Acessar carrinho</li></a>
                <a href="https://www.jogos360.com.br/crie_seu_fusca.html" target="blank"><li>Editar carrinho</li></a>
            </ul>
        </div>
    </li>
    <li class="dropdown"><img src="imgs/pergunta.png" alt="">
        <div class="dropdown-content">
            <ul>
                <a href="https://www.etecitaquera.com.br" target="blank"><li>Sobre Nós</li></a>
                <a href="https://www.delegaciaeletronica.policiacivil.sp.gov.br/ssp-de-cidadao/home" target="blank"><li>Relatar</li></a>
                <a href="https://pt.stackoverflow.com" target="blank"><li>Perguntas Frequentes</li></a>
            </ul>
        </div>
    </li>
    
    <li class="dropdown"><img src="imgs/msg.png" alt="">
        <div class="dropdown-content">
            <ul>
            <a href="#"><li>Whatsapp</li></a>
            <a href="https://www.instagram.com/_.menezzes_/" target="blank"><li>Instagram</li></a>
            </ul>
        </div>
    </li>
    
    <li class="dropdown"><?php

             if(!isset($_SESSION['login']) || $_SESSION['login'] != true){
               echo" <img src=imgs/perfil.png class=perfil>";}
               else{
                echo "<a href=meuperfil.php><img src= $_SESSION[foto] class=perfil></a>";
                
            }
             ?>
        <div class="dropdown-content">
            <ul>
                <?php
                    if(!isset($_SESSION['login']) || $_SESSION['login'] != true){
                        echo "<a href=login.php><li>Login</li></a>";
                    }else{
                        echo "<a href=logoff.php><li>Sair</li></a>";
                    }
                ?>
                <a href="meuperfil.php"><li>Meu Perfil</li></a>
                <a href="produtos.php"><li>Meus Produtos</li></a>
                <a href="cadastrar.php"><li>Cadastrar Produtos</li></a>
                <a href="joao.php" target="blank"><li>João Mandrake</li></a>            
            </ul>
        </div>
    </li>

</ul>
</div>