<?php
include_once "conexao.php"; //inclui o arquivo "conexão" que realiza a conexãop com o banco


//consultar no banco de dados
$result_usuario = "SELECT * FROM usuarios ORDER BY id DESC";
$resultado_usuario = mysqli_query($conn, $result_usuario);



//Verificar se encontrou resultado na tabela "usuarios"
if(($resultado_usuario) AND ($resultado_usuario->num_rows != 0)){
	while($row_usuario = mysqli_fetch_assoc($resultado_usuario)){
		//echo "IMAGEMN: &nbsp;" . $row_usuario['imagem'] . "<br>";     //problemas ao guardar imagem no banco
		echo "<div id='quadrado_usuario' class='quadrado'> NOME: &nbsp;" . $row_usuario['nome'] . "<br>";
		echo "EMAIL: &nbsp;" . $row_usuario['email'] . "</div>";
	}
}else{
	echo "Nenhum usuário encontrado";
}



