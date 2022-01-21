<?php
include_once("parte_de_cima.php");  //inclui o cabeçalho da página que será apresentada
?>


<!-------------- INICIO barra superior com descricao de cada página ------------>
<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class="pe-7s-car icon-gradient bg-mean-fruit">
                    <img class="ilustracao_funcao" src="../img/icone/usuarios.png" alt="grafico">
                </i>
            </div>
            <div>Usuários Cadastrados
                <div class="page-title-subheading">Visão Geral
                </div>
            </div>
        </div>
    </div>
</div>
<!-------------- FIM barra superior de descricao cada página ------------>



<div id="mostrar_usuario" class="container flex">
<span id="conteudo"></span>
</div>
<script>
	$(document).ready(function() {
		$.post('../banco/listar_usuario.php', function(retorna) {
			//Subtitui o valor no seletor id="conteudo"
			$("#conteudo").html(retorna);
		});
	});
</script>


<?php
include_once("parte_de_baixo.php"); //inclui o rodapé da página que será apresentada
?>