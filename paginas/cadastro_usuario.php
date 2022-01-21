<!DOCTYPE html>
<html lang="pt-br">

<head>

	<head>
		<title>Login lap</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="../estilo/login.css">
	</head>
</head>

<body>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="../img/login.png" alt="IMG">
				</div>

				<form method="POST" enctype="multipart/form-data" class="login100-form validate-form">
					<!-- metodo POST lança para a varialvél global deixando disponível para o banco-->
					<span class="login100-form-title">
						Cadastrar novo Usuário
					</span>

					<div class="wrap-input100">
						<input class="input100" type="text" id="nome_usuario" name="nome_usuario" placeholder="Nome Completo" required>

						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>
					<div class="wrap-input100 validate-input" data-validate="tente usar o formato: ex@abc.xyz">
						<input class="input100" type="text" id="email" name="email" placeholder="Email" required>

						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="A senha é nescessária">
						<input class="input100" type="password" id="senha" name="senha" placeholder="Senha" required>

						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" id="entrar">
							Login
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>










	<?php

	//------------------ inicio conexão com o banco ----------------------

	// $dsn = "mysql:dbname=louren93_lap;host=ns1014.hostgator.com.br"; //declara a variavel de conexão
	// $dbuser = "louren93_lap";  //declara a variavel de usuario
	// $dbpass = "lap123";  // declara a variavel de senha ( vazio para xampp e wampp e "root" para macbook)

	include("../banco/conexao.php");

	//------------------ fim da conexão com o banco ----------------



	if (isset($_POST['email']) && ($_POST['email'] != "")) //verifica se o e-mail está vazio
	{
		if (isset($_POST['senha']) && ($_POST['senha'] != "")) //verifica se a senha está vazia
		{
			if (isset($_POST['nome_usuario']) && ($_POST['nome_usuario'] != "")) //verifica se o nome está vazio
			{

				$nome_usuario = addslashes($_POST['nome_usuario']);  //coloca o email digitado na varável $email
				$senha = md5(addslashes($_POST['senha']));  //coloca a senha digitada (base64_encode encripta a senha) (addslashes impede manipulação do banco pelo usuário)
				$email = addslashes($_POST['email']);  //recebe o nome digitado				
			//	$cpf = addslashes($_POST['cpf']);  //recebe o nome digitado
			//	$placa = addslashes($_POST['placa']);  //recebe o nome digitado


				try {
					$pdo = new PDO($dsn, $dbuser, $dbpass);

					$sql = "INSERT INTO usuarios SET nome = '$nome_usuario', email ='$email', senha = '$senha'";
					$sql = $pdo->query($sql);


					echo "<script>alert(' " . $nome_usuario . "  , Seu cadastro foi realizado com Sucesso! 😀💪')</script>"; // passa uma mensagem javaScript por dentro do echo PHP e concatena com uma variável PHP











					/*------------------------- faz o login depois de cadastrar o usuário -----------------------*/ {
						session_start(); {
							try {
								$db = new	PDO($dsn, $dbuser, $dbpass);

								$sql = $db->query(" SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'");

								if ($sql->rowCount() > 0) {

									$dado = $sql->fetch();

									$_SESSION['id'] = $dado['id'];


									$_SESSION['nome'] = $dado['nome'];

								//	print_r($dado[1]);
									


									header("Location:../index.php");

									echo "<script type=\"text/javascript\"> window.setTimeout(\"location.href='../index.php';\", 500); </script>"; //encaminha o usuário a home depois de 500 mile segundos
								}
							} catch (PDOException $e) {
								echo "Falhou: " . $e->getMessage();  //OBS: se der um echo "E-Mail: ".$email. " SEMHA: " .$senha; (imprime a senha e o e-mail)
							}
						}
					}
					//------------------------- fim do cadastro do usuário --------------------------------------------------------------



















					//trata a exeção, caso não consiga conectar.... (TRY faz parte do CATCH)	
				} catch (Exception $e) {
					echo "falhou" . $e->getMessage();
				}
			}
		}
	}





	?>