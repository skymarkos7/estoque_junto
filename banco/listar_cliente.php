<?php
include_once "conexao.php"; //inclui o arquivo "conexão" que realiza a conexãop com o banco


//consultar no banco de dados
$result_cliente = "SELECT * FROM clientes ORDER BY id DESC";
$resultado_cliente = mysqli_query($conn, $result_cliente);



//Verificar se encontrou resultado na tabela "usuarios"
/*
if(($resultado_cliente) AND ($resultado_cliente->num_rows != 0)){
	while($row_cliente = mysqli_fetch_assoc($resultado_cliente)){
		echo "<div id='quadrado_cliente' class='quadrado'> NOME: &nbsp;" . $row_cliente['nome_cliente'] . "<br>";				
		echo "TELEFONE: &nbsp;" . $row_cliente['telefone'] . "<br>";
		echo "ENDEREÇO: &nbsp;" . $row_cliente['endereco'] . "<br>";
		echo "PLACA: &nbsp;" . $row_cliente['placa'] . "<br>";
		echo "CPF: &nbsp;" . $row_cliente['cpf'] . "</div>";
	}
}else{
	echo "Nenhum usuário encontrado";
}
*/






//Verificar se encontrou resultado na tabela "usuarios"
if(($resultado_cliente) AND ($resultado_cliente->num_rows != 0)){
	while($row_cliente = mysqli_fetch_assoc($resultado_cliente)){
		echo "<tr><td>" . $row_cliente['nome_cliente'] . "</td>";				
		echo "<td>" . $row_cliente['telefone'] . "</td>";
		echo "<td>" . $row_cliente['endereco'] . "</td>";
		echo "<td>" . $row_cliente['placa'] . "</td>";
		echo "<td>" . $row_cliente['cpf'] . "</td></tr>";
	}
}else{
	echo "Nenhum usuário encontrado";
}