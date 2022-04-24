<!------------------- INICIO - INCLUI A PARTE DE CIMA DA PÁGINA -------------------->
<?php
include_once("parte_de_cima.php");
include_once "../banco/conexao.php";

?>
<!------------------- FIM - INCLUI A PARTE DE CIMA DA PÁGINA -------------------->



<!----------- Inseri uma barrinha de busca dentro dos resultados -------------->
<script>
    $(document).ready(function() {
        $('.select_busca').select2();
    });
</script>
<!---------------- FIM --------------------------------------->




<?php
$cliente_nome = "SELECT * FROM clientes ORDER BY id DESC";
$clientenome = mysqli_query($conn, $cliente_nome);

$produtos_nome = "SELECT * FROM produtos ORDER BY id DESC";
$produtonome = mysqli_query($conn, $produtos_nome);

?>



<!-- ----------------------------------FOMULARIO ONDE DIGITA O TEMO PARA PESQUISAR --
<form method="POST" action="">

    <input type="text" name="termo_buscado">
    <input type="submit" value="pesquisar">

</form>
------------------------------------------O FIM DO FORMULARIO -->



<!-- -----------------------------------------------FAZENDO A BUSCA NO BANCO DO TERMO DIGITADO -->
<?php /*
@$termo_buscado = $_POST['termo_buscado'];

$result_produto =
    "SELECT * FROM produtos 
   WHERE nome_tecnico LIKE '%$termo_buscado%'
   OR nome_popular LIKE '%$termo_buscado%'
    OR referencia LIKE '%$termo_buscado%'
     OR aplicacao LIKE '%$termo_buscado%' ";

$resultado_produto = mysqli_query($conn, $result_produto);
*/
?>
<!--  -------------------------------------------AQUI ACABA A BUSCA E É RETORNADO AS VARIAVEIS COM O RESULTADO -->





<!-- --------------------------------------------- AQUI É PARA A EXIBIÇÃO SE EXISTIR O CONTEUDO BUSCADO  -->
<?php /* if (isset($_POST['termo_buscado'])) { ?>

    <?php foreach ($resultado_produto as $pesq_prod) : ?>

        <p><?php echo $pesq_prod['id'] ?></p>
        <p><?php echo $pesq_prod['nome_tecnico'] ?></p>
        <p><?php echo $pesq_prod['nome_popular'] ?></p>
        <p><?php echo $pesq_prod['referencia'] ?></p>
        <p><?php echo $pesq_prod['preco'] ?></p>
        <p><?php echo $pesq_prod['fornecedor'] ?></p>
        <p><?php echo $pesq_prod['fabricante'] ?></p>
        <p><?php echo $pesq_prod['aplicacao'] ?></p>
        <p><?php echo $pesq_prod['quantidade'] ?></p>
        <p><?php echo $pesq_prod['lugar'] ?></p>
        <p><?php echo $pesq_prod['nota'] ?></p>
        <p><?php echo $pesq_prod['categoria'] ?></p>

    <?php endforeach; ?>

<?php  } */ ?>

<!-- --------------------------------------------------------------- FIM DOS RESULTADO BUSCADOS -->











<div class="tela_pdv">

    <div class="top_pdv">

        <div class="estado_caixa">
            <p>Caixa Livre</p>
        </div>

        <div class="parte_dentro_top">

            <div class="numero_venda">

                <p>Nr. Venda: </p>
                <input type="text" value="00021" name="numero_venda">

            </div>
            <div class="data_venda">

                <p id="data">Data Venda: </p>
                <input type="text" id="datado" name="data_venda">

            </div>


            <?php if (($clientenome) and ($clientenome->num_rows != 0)) : ?>

                <div class="cliente_venda">

                    <p>Cliente: </p>
                    <select name="<?php echo $clientee['id'] ?>" class="select_busca">

                        <?php while ($clientee = mysqli_fetch_assoc($clientenome)) : ?>

                            <option value="<?php echo $clientee['id'] ?>"><?php echo $clientee['nome_cliente'] ?></option>

                    <?php endwhile;
                    endif; ?>

                    </select>



                </div>


        </div>



        <div class="horario_pdv">
            <input type="text" id="hora">
        </div>

    </div>


    <div class="parte_busca_pdv">

        <div class="quantidade_item_pdv">
            <p>Qtd</p>
            <input type="text" value="1" id="qtde_prod" name="quantidade_item_pdv">
        </div>

        <!-- <?php
                // $o = 0;       // 1 - iniciando a variável    
                // $e = 0;
                // $a = 0;
                ?> -->

        <?php if (($produtonome) and ($produtonome->num_rows != 0)) : ?>
            <div onchange="captura_dados()" class="descrição_item_pdv">
                <p>Descrição</p>

                <select name="<?php echo $clientee['id'] ?>" class="select_busca">

                    <option value="">Por favor Escolha um Produto</option>

                    <?php while ($produtoo = mysqli_fetch_assoc($produtonome)) : ?>


                        <option value="<?php echo $produtoo['id'] ?>"><?php echo $produtoo['id']; ?> / <?php echo $produtoo['nome_tecnico'] ?> / <?php echo $produtoo['preco'] ?></option>


                        <?php /*    APRENAS COMENTANDO PARA USAR ESSE CODIGO NO FUTURO PARA SABER QUAL ID É DE CADA PRODUTO
                        // salvando variável para ser usada pelo JavaScript - IDEAL É FAZER UM FOR CONTADOR COM ARRAY
                        $agrupa_id[$a] = $produtoo['id'];
                        $preco[$e] = "- R$ " . $produtoo['preco']; // 2 - salvando e incrementando

                        $varphp[$o] = "id " . $agrupa_id[$a] . " " . $preco[$e];
                        $o++;
                        $a++;
                        $e++;
                        */ ?>

                <?php endwhile;
                endif; ?>

                </select>

            </div>
    </div>


    <?php /*
    for ($i = 0; $i < count($varphp); $i++) {
        echo $varphp[$i] . PHP_EOL;
    } // 3 - imprimindo
    */
    ?>


    <div class="duas_parte_corpo_pdv">

        <div class="corpo_pdv_esquerda">

            <div class="imagem_produto_pdv">
                <div class="imagem_produto_pdv_quadro">

                    <img src="../img/produto.png" width="90%" height="90%" style="margin-top:10px;" alt="Imagem do produto" />

                </div>
            </div>


            <div class="codigo_e_valor">

                <!-- //isso aqui recebe o id não aparece na tela inicio -->

                <div style="display:none;" class="codigo_produto_pdv">
                    <p>id do Produto</p>
                    <input placeholder="Insira um produto" type="text" id="id_produto" name="id_produto_pdv">
                </div>
                <!-- //isso aqui recebe o id não aparece na tela fim -->


                <div class="codigo_produto_pdv">
                    <p>Nome do Produto</p>
                    <input placeholder="Insira um produto" type="text" id="nome_produto" name="codigo_produto_pdv">
                </div>

                <div class="valor_produto_pdv">
                    <p>Valor Unitário</p>
                    <input placeholder="0,00" class="alinhamento" type="text" id="valor_unitario" name="valor_produto_pdv">
                </div>
            </div>







            <div class="formas_de_pagamentos_e_outros">

                <div class="forma1">
                    <a>Forma pgto: </a>

                    <button class="forma_input1 alinhamento" type="text" name="forma_de_pgto"> cartão </button>

                    <button class="forma_input2 alinhamento" type="text" name="valor_forma_de_pgto"> Dinheiro </button>

                </div>


                <br>





            </div>

            <div class="tres_quadros">

                <div class="quadros quadro_atalhos1">
                    <p>Aplicar Desconto</p>
                    <p>Nova venda</p>
                    <p>Localizar Produto</p>
                </div>

                <div class="quadros quadro_atalhos2">
                    <p>Imprimir cupom</p>
                    <p>Imprimir cupom maior</p>
                    <p>Localizar Venda</p>
                </div>

                <div class="quadro_funcoes">
                    <p onclick="adicionando()">Adicionar Produto</p>
                    <p>Limpar Produto</p>
                    <p>Finalizar Venda</p>
                    <p style="background-color:red;">Cancelar Venda</p>
                </div>
            </div>
        </div>

        <div class="corpo_pdv_direita">


            <div class="lista_itens_pdv">

                <table border="0">
                    <thead>
                        <tr>
                            <th>Codigo</th>
                            <th>Descrição</th>
                            <th>Un</th>
                            <th>Qtde</th>
                            <th>Pc. Unitario</th>
                            <th>% Desconto</th>
                            <th>R$ Desconto</th>
                            <th>Total Bruto</th>
                        </tr>
                    </thead>
                    <div id="prinn"></div>
                    <tbody id="insercao_tr">
                        <tr id="insercao_td">
                            <td>12345</td>
                            <td id="nome_prod_tabela">Coca Cola</td>
                            <td>UN</td>
                            <td id="qtde_prod_tabela">2</td>
                            <td id="valor_prod_tabela">R$2,50</td>
                            <td>R$0,00</td>
                            <td>R$0,00</td>
                            <td id="total_bruto">R$5,00</td>

                        </tr>
                    </tbody>
                </table>

            </div>

            <div class="total_liquido_pdv">
                <p>Total Liquido</p> <input placeholder="0,00" class="qtde_input alinhamento" type="text" name="total_liquido">
            </div>

            <div class="total_pago_pdv">
                <a>Total Pago</a><br> <input class="alinhamento" placeholder="0,00" type="text" name="total_pago">

            </div>
            <div class="total_pago_pdv">

                <a>Troco</a><br> <input style="text-align: right;" class="alinhamento" placeholder="0,00" type="text" name="troco">
            </div>

        </div>
    </div>
</div>



<!------------- Início - Atualizar as datas da páginas -------------------------------->
<script>
    function relogio() {
        var data = new Date();
        var hor = data.getHours();
        var min = data.getMinutes();
        var seg = data.getSeconds();

        if (hor < 10) {
            hor = "0" + hor;
        }
        if (min < 10) {
            min = "0" + min;
        }
        if (seg < 10) {
            seg = "0" + seg;
        }

        var horas = hor + ":" + min + ":" + seg;
        document.getElementById("hora").value = horas;
    }
    var timer = setInterval(relogio, 1000);


    const d = new Date();
    let text = d.toLocaleDateString();
    document.getElementById("datado").value = text;
</script>
<!------------- Fim - Atualizar as datas da páginas -------------------------------->







<!--------------------- ínicio código para selecionar os menus e fechar menu para o PDV --------------------------------->
<script>
    function square() {
        //selecionar os menus
        const elemento = document.getElementById('seleciona_pdv');
        elemento.className += ('mm-active');

        //fechar menu para o PDV
        const elemento1 = document.getElementById('menu_retratil');
        const elemento2 = document.getElementById('muda_botao');
        elemento1.classList.toggle('closed-sidebar');
        elemento2.classList.toggle('is-active');
    }
    square();
</script>
<!--------------------- fim código para selecionar os menus --------------------------------->