<?php
include_once("parte_de_cima.php");  //inclui o cabeçalho da página que será apresentada
?>



<!---------------- Título descrevendo a página início------------------------>

<!---------------- Título descrevendo a página início------------------------>

<!-------------- INICIO barra superior com descricao de cada página ------------>
<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class="pe-7s-car icon-gradient bg-mean-fruit">
                <img src="https://img.icons8.com/nolan/64/add-user-group-man-man.png"/>
                </i>
            </div>
            <div>Clientes
                <div class="page-title-subheading">Adicionar clientes ao sistema
                </div>
            </div>
        </div>
    </div>
</div>






<form action="" method="POST" enctype="multipart/form-data">
    <div class="tab-content">
        <div class="tab-pane tabs-animation fade show active">
            <div class="main-card mb-3 card">
                <div class="card-body">
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="position-relative form-group">
                                <input type="text" class="form-control " name="nome_cliente" placeholder="Nome do Cliente" id="">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="position-relative form-group">
                                <input type="text" class="form-control " name="endereco" placeholder="Endereço" id="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="position-relative form-group">
                                <input type="text" class="form-control" name="cpf" placeholder="CPF" id="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="position-relative form-group">
                                <input type="text" class="form-control" name="telefone" placeholder="Telefone" id="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="position-relative form-group">
                                <input type="text" class="form-control" name="placa" placeholder="Placa" id="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <button class="login100-form-btn" id="entrar">castrar</button>
</form>





<?php


if (isset($_FILES['pic'])) {
    $ext = strtolower(substr($_FILES['pic']['name'], -4)); //Pegando extensão do arquivo
    $new_name = date("Y.m.d-H.i.s") . $ext; //Definindo um novo nome para o arquivo
    $dir = '../img/clientes/'; //Diretório para uploads 
    move_uploaded_file($_FILES['pic']['tmp_name'], $dir . $new_name); //Fazer upload do arquivo
    chmod("../img/clientes/" . $new_name, 644); //Corrige a permissão do arquivo.

    echo ("Imagen enviada com sucesso!");
}



//------------------ inicio conexão com o banco ----------------------

//  $dsn = "mysql:dbname=louren93_lap;host=ns1014.hostgator.com.br"; //declara a variavel de conexão
//  $dbuser = "louren93_lap";  //declara a variavel de usuario
//  $dbpass = "lap123";  // declara a variavel de senha ( vazio para xampp e wampp e "root" para macbook)

include("../banco/conexao.php");

// $dsn = "mysql:$dbname;host=$servidor"; //declara a variavel de conexão
// $dbuser = $usuario;  //declara a variavel de usuario
// $dbpass = $senha;  // declara a variavel de senha ( vazio para xampp e wampp e "root" para macbook)




//------------------ fim da conexão com o banco ----------------


// if (isset($_POST['nome_tecnico']) && ($_POST['nome_tecnico'] != "")) //verifica se o e-mail está vazio
// {
if (isset($_POST['nome_cliente']) && ($_POST['nome_cliente'] != "")) //verifica se o compo nome do cliente está vazia
{
    //   if (isset($_POST['referencia']) && ($_POST['referencia'] != "")) //verifica se o nome está vazio
    // {


    //if (isset($_POST['fornecedor']) && ($_POST['fornecedor'] != "")) //verifica se o nome está vazio
    //{
    // if (isset($_POST['categoria']) && ($_POST['categoria'] != "")) //verifica se o nome está vazio
    //{

    $nome_cliente = addslashes($_POST['nome_cliente']);  //coloca o email digitado na varável $email
    $endereco = addslashes($_POST['endereco']);  //coloca a senha digitada (base64_encode encripta a senha) (addslashes impede manipulação do banco pelo usuário)
    $cpf = addslashes($_POST['cpf']);  //recebe o nome digitado	
    $telefone = addslashes($_POST['telefone']);  //recebe o nome digitado
    $placa = addslashes($_POST['placa']);  //recebe o nome digitado	                
    $data_cadastro_cliente = date('d-m-Y');  //recebe a data atual no formato dia-mes-ano	
    //   $preco = addslashes($_POST['preco']);  //recebe o nome digitado	
    //   $fabricante = addslashes($_POST['fabricante']);  //recebe o nome digitado	
    //   $fornecedor = addslashes($_POST['fornecedor']);  //recebe o nome digitado	
    //   $categoria = addslashes($_POST['categoria']);  //recebe o nome digitado		
    //$nota = $_POST['nota'];  //recebe o check-box do "possui nota"				
    //	$quantidade = addslashes($_POST['quantidade']);  //recebe o nome digitado


    try {
        $pdo = new PDO($dsn, $dbuser, $dbpass);
        $sql = "INSERT INTO clientes SET nome_cliente = '$nome_cliente', endereco ='$endereco', cpf = '$cpf', telefone = '$telefone', placa ='$placa', data_cadastro_cliente ='$data_cadastro_cliente'";
        $sql = $pdo->query($sql);











        echo "<div class='container' aviso_de_sucesso id='aviso_de_sucesso'>
                    <div class='alert alert-success'>
                      <strong>$nome_cliente</strong>  Foi Cadastrado com Sucesso!
                    </div>                    
                  </div>";














        //  echo "<script>document.write(' <b>" . $nome . "</b>  , foi cadastrado com Sucesso! 😎')</script>"; // passa uma mensagem javaScript por dentro do echo PHP e concatena com uma variável PHP




        //trata a exeção, caso não consiga conectar.... (TRY faz parte do CATCH)	
    } catch (Exception $e) {
        echo "falhou" . $e->getMessage();
        echo "preencha os campos obrigatórios";
    }
}



?>

<!----- faz sumir o aviso de sucesso ------->
<script type="text/javascript">
    setTimeout(function() {
        $("#aviso_de_sucesso").fadeOut().empty();
    }, 5000);
</script>
<!----- faz sumir o aviso de sucesso ------->


<!--------------------- ínicio código para selecionar os menus --------------------------------->
<script>
    function square() {
        const elemento = document.getElementById('seleciona_novo_cliente');
        elemento.className += ('mm-active');
    }
    square();
</script>
<!--------------------- fim código para selecionar os menus --------------------------------->



<?php
include_once("parte_de_baixo.php");  //inclui o cabeçalho da página que será apresentada
?>