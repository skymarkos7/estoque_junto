<?php

include_once("conexao.php");


//consultar no banco de dados
$result_produtos = "SELECT * FROM produtos ORDER BY id DESC";
$resultado_produtos = mysqli_query($conn, $result_produtos);

$total = 0;

//Verificar se encontrou resultado na tabela "usuarios"
if(($resultado_produtos) AND ($resultado_produtos->num_rows != 0)){
	while($row_produtos = mysqli_fetch_assoc($resultado_produtos)){
     //   echo $row_produtos['nome_popular'] . "<br>";
      //  echo $row_produtos['quantidade'] . "<br>";
      //  echo $row_produtos['preco'] . "<br>";        
        $quantidades = $row_produtos['quantidade']; //recebe a quantidade
        $precos = $row_produtos['preco']; //recebe o preco
        $total_nesse_produto = $quantidades*$precos;  //multiplica a quantidade pelo preco
        $total = $total_nesse_produto + $total; 
    
        
	}
}else{
	echo "0";
}

$total_formatado = number_format($total,2,",",".");  //Formata o numero acrescentando ponto e virgula

echo $total_formatado;