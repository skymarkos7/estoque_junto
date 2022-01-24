<?php
include_once("parte_de_cima.php");  //inclui o cabeçalho da página que será apresentada
?>




<script>
    function Mudarestado(el) {
        var display = document.getElementById(el).style.display;
        if (display == "none")
            document.getElementById(el).style.display = 'block';
        else
            document.getElementById(el).style.display = 'none';
    }

    function ocultando(el) {
        var display = document.getElementById(el).style.display;
        if (display == "none")
            document.getElementById(el).style.display = 'block';
        else
            document.getElementById(el).style.display = 'none';

    }

    function auto(el) {
        var display = document.getElementById(el).style.display;
        if (display == "none")
            document.getElementById(el).style.display = 'block';
        else
            document.getElementById(el).style.display = 'none';

    }
</script>


<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class="pe-7s-car icon-gradient bg-mean-fruit">
                    <img class="ilustracao_funcao" src="../img/icone/produtos.png" alt="grafico">
                </i>
            </div>
            <div>Peças no Estoque
                <div class="page-title-subheading">Peças cadastradas no sistema
                </div>
            </div>
        </div>
    </div>
</div>



<form action="" method="POST">
    <div class="tab-content">
        <div class="tab-pane tabs-animation fade show active">
            <div class="main-card mb-3 card">
                <div class="card-body">
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="position-relative form-group">
                                <input type="text" class="form-control " name="nome_popular" placeholder="Nome Popular" id="">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="position-relative form-group">
                                <input type="text" class="form-control " name="nome_tecnico" placeholder="Nome Tecnico" id="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="position-relative form-group">
                                <input type="text" class="form-control" name="referencia" placeholder="Referencia" id="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="position-relative form-group">
                                <input type="text" class="form-control" name="quantidade" placeholder="Quantidade" id="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="position-relative form-group">
                                <input type="text" class="form-control" name="lugar" placeholder="Localização no Estoque" id="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="position-relative form-group">
                                <input type="text" class="form-control" name="aplicacao" placeholder="Aplicacao" id="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="position-relative form-group">
                                <input type="text" class="form-control" name="preco" placeholder="Preco" id="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="position-relative form-group">
                                <input type="text" class="form-control" name="fabricante" placeholder="Fabricante" id="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="position-relative form-group">
                                <input type="text" class="form-control" name="fornecedor" placeholder="Fornecedor" id="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="position-relative form-group">
                                <input type="text" class="form-control" name="categoria" placeholder="Categoria" id="">
                            </div>
                        </div>
                        <div class="segura_possui_nota">
                            <div class="possui_nota">Possui Nota Fiscal</div>
                            <label class="switch">
                                <input type="checkbox" name="nota" checked>
                                <span name="nota" class="slider round"></span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <button class="login100-form-btn" id="entrar">castrar</button>
</form>












<?php

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
if (isset($_POST['nome_popular']) && ($_POST['nome_popular'] != "")) //verifica se a senha está vazia
{
    //   if (isset($_POST['referencia']) && ($_POST['referencia'] != "")) //verifica se o nome está vazio
    // {
    if (isset($_POST['quantidade']) && ($_POST['quantidade'] != "")) //verifica se o nome está vazio
    {
        //  if (isset($_POST['lugar']) && ($_POST['lugar'] != "")) //verifica se o nome está vazio
        // {
        //if (isset($_POST['aplicacao']) && ($_POST['aplicacao'] != "")) //verifica se o nome está vazio
        //{
        if (isset($_POST['preco']) && ($_POST['preco'] != "")) //verifica se o nome está vazio
        {
            //if (isset($_POST['nota']) && ($_POST['nota'] != "")) //verifica se o nota está marcado
            // $echo = $_POST['nota'];
            {

                if (isset($_POST['nota']) && ($_POST['nota'] != "")) //verifica se o campo nota está vazio
                {
                    $nota = "Sim";
                } else {
                    $nota = "Não";
                }

                //if (isset($_POST['fornecedor']) && ($_POST['fornecedor'] != "")) //verifica se o nome está vazio
                //{
                // if (isset($_POST['categoria']) && ($_POST['categoria'] != "")) //verifica se o nome está vazio
                //{

                $nome_tecnico = addslashes($_POST['nome_tecnico']);  //coloca o email digitado na varável $email
                $nome_popular = addslashes($_POST['nome_popular']);  //coloca a senha digitada (base64_encode encripta a senha) (addslashes impede manipulação do banco pelo usuário)
                $referencia = addslashes($_POST['referencia']);  //recebe o nome digitado	
                $quantidade = addslashes($_POST['quantidade']);  //recebe o nome digitado
                $lugar = addslashes($_POST['lugar']);  //recebe o nome digitado	
                $aplicacao = addslashes($_POST['aplicacao']);  //recebe o nome digitado	
                $preco = addslashes($_POST['preco']);  //recebe o nome digitado	
                $fabricante = addslashes($_POST['fabricante']);  //recebe o nome digitado	
                $fornecedor = addslashes($_POST['fornecedor']);  //recebe o nome digitado	
                $categoria = addslashes($_POST['categoria']);  //recebe o nome digitado		
                //$nota = $_POST['nota'];  //recebe o check-box do "possui nota"				
                //	$quantidade = addslashes($_POST['quantidade']);  //recebe o nome digitado


                try {
                    $pdo = new PDO($dsn, $dbuser, $dbpass);
                    $sql = "INSERT INTO produtos SET nome_popular = '$nome_popular', nome_tecnico ='$nome_tecnico', referencia = '$referencia', quantidade = '$quantidade', lugar ='$lugar', aplicacao ='$aplicacao', preco ='$preco', fabricante ='$fabricante', fornecedor ='$fornecedor', categoria ='$categoria', nota ='$nota'";
                    $sql = $pdo->query($sql);











                    echo "<div class='container' id='aviso_de_sucesso'>
                    <div class='alert alert-success'>
                      <strong>$nome_popular</strong>  Foi Cadastrado com Sucesso!
                    </div>                    
                  </div>";














                    //  echo "<script>document.write(' <b>" . $nome . "</b>  , foi cadastrado com Sucesso! 😎')</script>"; // passa uma mensagem javaScript por dentro do echo PHP e concatena com uma variável PHP




                    //trata a exeção, caso não consiga conectar.... (TRY faz parte do CATCH)	
                } catch (Exception $e) {
                    echo "falhou" . $e->getMessage();
                    echo "preencha os campos obrigatórios";
                }
            }
        }
    }
}



?>

<!----------- faz sumir o aviso de sucesso ---------->
<script type="text/javascript">
    setTimeout(function() {
        $("#aviso_de_sucesso").fadeOut().empty();
    }, 5000);
</script>



<?php
include_once("parte_de_baixo.php");  //inclui o cabeçalho da página que será apresentada
?>