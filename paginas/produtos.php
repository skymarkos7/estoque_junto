<?php
include_once("parte_de_cima.php");  //inclui o cabeçalho da página que será apresentada

//$_GET["tipo"] = "lista";  //definindo uma visualização padrão para a página
?>




<!-------------- barra superior com descricao de cada página ------------>
<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class="pe-7s-car icon-gradient bg-mean-fruit">
                    <img src="https://img.icons8.com/nolan/64/air-suspension-warning.png" />
                </i>
            </div>
            <div>Peças no Estoque
                <div class="page-title-subheading">Peças cadastradas no sistema
                </div>
            </div>
        </div>

        <!--   Barra de Pesquisa ------>

        <div class="pesquisa">
            <div class="d-flex justify-content-center h-100">
                <div class="searchbar">
                    <input onfocus="pesquisa_aberta()" class=" search_input" type="text" name="" id="barra_pesquisa" placeholder="Pesquisar...">
                    <a href="#" class="search_icon"><i class="fas fa-search"></i></a>
                </div>
            </div>
        </div>




        <div class="visualizar">

            <p> Visualizar por: </p>

            <div class="lista">
               <a href="produtos.php?tipo=lista"> <img class="ilustracao_funcao" src="../img/icone/format-list.png" alt="grafico"></a>
            </div>

            <div class="grade">
            <a href="produtos.php?tipo=grade"> <img class="ilustracao_funcao" src="../img/icone/format-grade.png" alt="grafico"></a>
            </div>



        </div>
    </div>
</div>





<script>
    // FUNÇÃO PARA ACIONAR O ESTILO VARIÁVEL DA BARRA DE PESQUISA
    function pesquisa_aberta() {
        const elemento = document.getElementById('barra_pesquisa'); // busca pelo id "barra_pesquisa"
        elemento.classList.toggle('pesquisa_focada'); //adiciona e remove a casse "pesquisa_focada"
    }
</script>



<div class="tab-pane tabs-animation fade show active">
    <div id="mostrar_produto" class="container flex">
        <span id="conteudo"></span>
    </div>
</div>
<!-- <script>
    
    // TRAZER A LISTAGEM DOS PRODUTOS DA OUTRA PÁGINA E COLOCAR NA SPAN "conteudo"
    $(document).ready(function() {
        $.post('../banco/listar_produtos.php', function(retorna) {
            //Subtitui o valor no seletor id="conteudo"
            $("#conteudo").html(retorna);
        });
    });
</script> -->


<?php

include "../banco/listar_produtos.php";

?>


<!--------------------- ínicio código para selecionar os menus --------------------------------->
<script>
    function square() {
        const elemento = document.getElementById('seleciona_produto');
        elemento.className += ('mm-active');
    }
    square();
</script>
<!--------------------- fim código para selecionar os menus --------------------------------->


<?php
include_once("parte_de_baixo.php"); //inclui o rodapé da página que será apresentada
?>

</div>




