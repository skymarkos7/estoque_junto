<?php
$servidor = "ns1014.hostgator.com.br"; //nome do servidor
$usuario = "louren93_lap"; // usuário do bancp
$senha = "lap123";  //senha do banco
$dbname = "louren93_lap";  //nome do banco

//Criar a conexao
$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);



// prepara as variáis para a conexao do tipo PDO

    $dsn = "mysql:dbname=$dbname;host=$servidor"; //declara a variavel de conexão
    $dbuser = $usuario;  //declara a variavel de usuario
    $dbpass = $senha;  // declara a variavel de senha ( vazio para xampp e wampp e "root" para macbook)
    
    