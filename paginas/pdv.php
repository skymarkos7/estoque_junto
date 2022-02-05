<!------------------- INICIO - INCLUI A PARTE DE CIMA DA PÁGINA -------------------->
<?php
include_once("parte_de_cima.php");
?>
<!------------------- FIM - INCLUI A PARTE DE CIMA DA PÁGINA -------------------->


<div class="tela_pdv">



    <div class="top_pdv">

        <div class="estado_caixa">
            <p>Caixa Livre</p>
        </div>

        <div class="parte_dentro_top">

            <div class="numero_venda">

                <p>Nr. Venda: </p>
                <input type="text" name="numero_venda">

            </div>

            <div class="data_venda">

                <p>Data Venda: </p>
                <input type="text" name="data_venda">

            </div>

            <div class="cliente_venda">                      
                <p>Cliente: </p>
                <input type="text" name="cliente_venda">

            </div>

        </div>



        <script>
		
        function relogio(){
            var data=new Date();
            var hor=data.getHours();
            var min=data.getMinutes();
            var seg=data.getSeconds();
            
            if(hor < 10){
                hor="0"+hor;
            }
            if(min < 10){
                min="0"+min;
            }
            if(seg < 10){
                seg="0"+seg;
            }
            
            var horas=hor + ":" + min + ":" + seg;
            
            document.getElementById("hora").value=horas;
        }

        var timer=setInterval(relogio,1000);

    </script>








        <div class="horario_pdv">
            <input type="text" id="hora">
        </div>

    </div>


    <div class="parte_busca_pdv">

        <div class="quantidade_item_pdv">
            <p>Qtd</p>
            <input type="text" name="quantidade_item_pdv">
        </div>

        <div class="descrição_item_pdv">
            <p>Descrição</p>
            <input type="text" name="descrição_item_pdv">
        </div>


    </div>





    <div class="duas_parte_corpo_pdv">

        <div class= "corpo_pdv_esquerda">

            <div class= "imagem_produto_pdv">
                <div class="imagem_produto_pdv_quadro">
                    
                    <img src="<?php echo URL_BASE; ?>midias/imagens/teclado.png" alt=""/>
                    
                </div>
            </div>

            <div class= "codigo_e_valor">

                <div class="codigo_produto_pdv">
                    <p>Código Barras</p>
                    <input type="text" name="codigo_produto_pdv">
                </div>

                <div class="valor_produto_pdv">
                    <p>Valor Unitário</p>
                    <input type="text" name="valor_produto_pdv">
                </div>
            </div>


            <div class="formas_de_pagamentos_e_outros">

                <div class="forma1">
                    <a>Forma pgto (1): </a>

                    <input class="forma_input1" type="text" name="forma_de_pgto">

                    <input  class="forma_input2" type="text" name="valor_forma_de_pgto">

                </div>


                <br>

                <div class="forma2">
                    <a>Forma pgto (2): </a>
                    <input class="forma_input1" type="text" name="forma_de_pgto2">
                    <input class="forma_input2" type="text" name="valor_forma_de_pgto2">
                </div>

                <div class="vendedoretotais">
                    <a>Total Bruto: </a>  <input class="tbruto_input" type="text" name="total_bruto">
                    <a>Vendedor: </a>  <input class="vendor_input" type="text" name="vendedor">
                    <a>Qtd itens: </a>  <input class="qtde_input" type="text" name="qtde_itens">
                </div>



            </div>

            <div class="tres_quadros">
                
                        <div class="quadro_atalhos1">
                            <p>Aplicar Desconto</p>
                            <p>Nova venda</p>
                            <p>Localizar Produto</p>
                            <p>Alterar Venda</p>
                            <p>Forma de Pagamento</p>
                            <p>excluir Produto</p>
                            <p>Alterar Qtde</p>
                        </div>
                
                        <div class="quadro_atalhos2">
                            <p>Imprimir cupom</p>
                            <p>Imprimir cupom maior</p>
                            <p>Localizar Venda</p>
                            <p>Selecionar Cliente</p>
                            <p>Cancelar / Excluir Venda</p>
                            <p>Finalizar Venda</p>
                            <p>Pesquisar Produto</p>
                        </div>
                
                        <div class="quadro_funcoes">
                            <p>Nova Venda</p>
                            <p>Finalizar Venda</p>
                            <p>tela vendas completa</p>
                            <p>Sair</p>
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
                                     <tbody>
                                     <tr>
                                         <td>12345</td>
                                         <td>Coca Cola</td>
                                         <td>UN</td>
                                         <td>2</td>
                                         <td>R$2,50</td>
                                         <td>R$0,00</td>
                                         <td>R$0,00</td>
                                         <td>R$5,00</td>
                                         
                                       
                                     </tr>
                                     <tr>
                                         <td> 54321</td>
                                         <td>Mouse Sem fio</td>
                                         <td>UN</td>
                                         <td>1</td>
                                         <td>R$25,00</td>
                                          <td>R$0,00</td>
                                          <td>R$0,00</td>
                                          <td>R$25,00</td>
                                     </tr>
                                     </tbody>
                                     <tfoot>
                                         <td>98756</td>
                                         <td>Batom Marrom</td>
                                         <td>UN</td>
                                         <td>1</td>
                                         <td>R$5,00</td>
                                          <td>R$0,00</td>
                                          <td>R$0,00</td>
                                          <td>R$5,00</td>
                                     </tfoot>
                                  </table>
                        
                        
                        
                        
                    </div>
            
                    <div class="total_liquido_pdv">
                        <p>Total Liquido</p> <input class="qtde_input" type="text" name="total_liquido">
                    </div>
            
                    <div class="total_pago_pdv">
                        <a>Total Pago</a><br> <input  type="text" name="total_pago">
                            
                    </div>
                    <div class="total_pago_pdv">
                       
                             <a>Troco</a><br> <input  type="text" name="troco">
                    </div>

            
            
        </div>


    </div>


    <!-- VISUAL CODE É UM LIXOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOO --->






</div>


<!-------------- inicio - inclue a parte de baixo da página ------------>

<!-------------- fim - inclue a parte de baixo da página ------------>