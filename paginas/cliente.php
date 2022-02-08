<!------------------- INICIO - INCLUI A PARTE DE CIMA DA PÁGINA -------------------->
<?php
include_once("parte_de_cima.php");
?>
<!------------------- FIM - INCLUI A PARTE DE CIMA DA PÁGINA -------------------->






<!-------------- INICIO barra superior com descricao de cada página ------------>
<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class="pe-7s-car icon-gradient bg-mean-fruit">
                <img src="https://img.icons8.com/nolan/64/groups.png"/>
                </i>
            </div>
            <div>Clientes Cadastrados
                <div class="page-title-subheading">Clientes cadastrados no sistema
                </div>
            </div>
        </div>
    </div>
</div>
<!-------------- FIM barra superior de descricao cada página ------------>



<!-------------- inicio estilo da página ------------>
<style type="text/css">
    table {
        border-collapse: collapse;
    }

    table thead tr {
        background-color: #ddd;
        border-bottom: 2px solid #fff;
    }

    table th,
    table td {
        padding: 2px 10px;
    }
</style>
<!-------------- fim estilo da página ------------>





<!-------------- inicio - cabeçalho da tabela ------------>
<table id="lista">
    <thead>
        <tr>
            <th>
                <div>Nome</div>
                <div><input id="filtro-nome" /></div>
            </th>
            <th>Telefone</th>
            <th>Endereço</th>
            <th>Placa</th>
            <th>CPF</th>
        </tr>
    </thead>
    <!-------------- fim - cabeçalho da tabela ------------>



    <!--  <div id="mostrar_cliente" class="container flex">   -->



    <!-------------- inicio - CORPO da tabela e onde sairá os dados do banco ------------>
    <tbody>
        <?php
        include("../banco/listar_cliente.php");
        ?>
    </tbody>
</table>
<!-------------- fim - CORPO da tabela e onde sairá os dados do banco ------------>


<!-------------- inicio - SCRIPT DA PESQUISA ------------>
<script type="text/javascript">
    var filtro = document.getElementById('filtro-nome');
    var tabela = document.getElementById('lista');
    filtro.onkeyup = function() {
        var nomeFiltro = filtro.value;
        for (var i = 1; i < tabela.rows.length; i++) {
            var conteudoCelula = tabela.rows[i].cells[0].innerText;
            var corresponde = conteudoCelula.toLowerCase().indexOf(nomeFiltro) >= 0;
            tabela.rows[i].style.display = corresponde ? '' : 'none';
        }
    };
</script>
<!-------------- fim - SCRIPT DA PESQUISA ------------>



<!--------------------- ínicio código para selecionar os menus --------------------------------->
<script>
    function square() {
        const elemento = document.getElementById('seleciona_cliente');
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