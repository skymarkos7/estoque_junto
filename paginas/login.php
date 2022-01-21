<!DOCTYPE html>
<html lang="pt-br">

<head>
	<title>Login lap</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../estilo/login.css">

</head>

<body>



	<?php
	session_start(); 

	if (isset($_POST['email']) && empty($_POST['email']) == false) //verifica se o e-mail está vazio
	{
		$email = addslashes($_POST['email']); //coloca o email na variavel $email
		$senha = md5(addslashes($_POST['senha']));  //coloca a senha digitada na varável $senha ( addslashes impede que o usuario manipule o banco)


		$dsn = "mysql:dbname=louren93_lap;host=ns1014.hostgator.com.br"; //declara a variavel de conexão
		$dbuser = "louren93_lap"; //declara a variavel de usuario
		$dbpass = "lap123"; // declara a variavel de senha ( vazio para xampp e wampp e "root" para macbook)

		try {
			$db = new	PDO($dsn, $dbuser, $dbpass);
			$sql = $db->query("SELECT * FROM usuarios WHERE senha = '$senha' AND email = '$email'");


			if ($sql->rowCount() > 0) {

				

				$dado = $sql->fetch();


				$_SESSION['id'] = $dado['id'];  //atribui id a sessão

				$_SESSION['nome'] = $dado[1]; //atribui nome pelo indice [1] a sessão


				


				header("Location:../index.php");
			} else {
				echo "<script>alert('Usuario ou senha não cadastrado')</script>";
			}
		} catch (PDOException $e) {
			echo "A conexão com o banco Falhou: " . $e->getMessage();  //echo "E-Mail: ".$email. " SEMHA: " .$senha; //imprime a senha e o e-mail
		}
	}

	?>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="../img/login.png" alt="IMG">
				</div>

				<form method="POST" class="login100-form validate-form">  <!-- metodo POST lança para a varialvél global deixando disponível para o banco-->
					<span class="login100-form-title">
						Login do Membro
					</span>

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

					<div class="text-center p-t-12">
						<span class="txt1">
							Esqueceu o nome de
						</span>
						<a class="txt2" href="#">
							Usuário / Senha?
						</a>
					</div>

					<div class="text-center p-t-136">
						<a class="txt2" href="cadastro_usuario.php">
							Crie sua Conta
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>

</body>

</html>
