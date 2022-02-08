<!------------------- INICIO - INCLUI A PARTE DE CIMA DA PÁGINA -------------------->
<?php
include_once("parte_de_cima.php");
?>
<!------------------- FIM - INCLUI A PARTE DE CIMA DA PÁGINA -------------------->




<!---------------- Título descrevendo a página início------------------------>
<div class="app-main__inner">

    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-car icon-gradient bg-mean-fruit">
                    <img src="https://img.icons8.com/nolan/64/file.png"/>
                    </i>
                </div>
                <div>Relatórios
                    <div class="page-title-subheading">Visão Geral
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!---------------- Título descrevendo a página Fimn ------------------------>







Está é uma página de relatórios




<!--------------------- ínicio código para selecionar os menus --------------------------------->
<script>
    function square() {
        const elemento = document.getElementById('seleciona_relatorios');
        elemento.className += ('mm-active');
    }
    square();
</script>
<!--------------------- fim código para selecionar os menus --------------------------------->



<!-------------- inicio - inclue a parte de baixo da página ------------>
<?php
include_once("parte_de_baixo.php"); //inclui o rodapé da página que será apresentada
?>
<!-------------- fim - inclue a parte de baixo da página ------------>