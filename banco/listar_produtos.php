<?php
include_once "conexao.php";


//consultar no banco de dados
$result_produto = "SELECT * FROM produtos ORDER BY id DESC";
$resultado_produto = mysqli_query($conn, $result_produto);



//Verificar se encontrou resultado na tabela "usuarios"
if (($resultado_produto) and ($resultado_produto->num_rows != 0)) {
        while ($row_produto = mysqli_fetch_assoc($resultado_produto)) {

                
                      
                        echo "<div id='quadrado_produto' class='quadrado main-card mb-3 card'> NOME POPULAR: &nbsp;" . $row_produto['nome_popular'] . "<br>";
                        echo "NOME TÉCNICO: &nbsp;" . $row_produto['nome_tecnico'] . "<br>";
                        echo "NOME REFERÊNCIA: &nbsp;" . $row_produto['referencia'] . "<br>";
                        echo "PREÇO: &nbsp;" . $row_produto['preco'] . "<br>";
                        echo "FORNECEDOR: &nbsp;" . $row_produto['fornecedor'] . "<br>";
                        echo "FABRICANTE: &nbsp;" . $row_produto['fabricante'] . "<br>";
                        echo "QUANTIDADE: &nbsp;" . $row_produto['quantidade'] . "<br>";
                        echo "LOCAL: &nbsp;" . $row_produto['lugar'] . "<br>";
                        echo "POSSUI NOTA?: &nbsp;" . $row_produto['nota'] . "</div>";
                    
                

        }
} else {
        echo "Nenhum produto encontrado";
}
