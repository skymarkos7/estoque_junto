<?php
include_once("parte_de_cima.php");  //inclui o cabeçalho da página que será apresentada
?>



<form action="" method="POST">
    <div class="tab-content">
        <div class="tab-pane tabs-animation fade show active">
            <div class="main-card mb-3 card">
                <div class="card-body">
                    <div class="form-row">

                        <div class="col-md-6">
                            <div class="position-relative form-group">
                                <input type="text" class="form-control " name="produto" placeholder="produto" id="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="position-relative form-group">
                                <input type="text" class="form-control" name="referencia" placeholder="referencia" id="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="position-relative form-group">
                                <input type="text" class="form-control" name="cliente" placeholder="Cliente" id="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="position-relative form-group">
                                <input type="text" class="form-control" name="quantidade" placeholder="Quantidade" id="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="position-relative form-group">
                                <input type="text" class="form-control" name="quantidade_estoque" placeholder="Quantidade em Estoque" id="">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="position-relative form-group">
                                <input type="text" class="form-control" name="preco" placeholder="Preco da peça" id="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="position-relative form-group">
                                <input type="text" class="form-control" name="nota" placeholder="Possui nota Fiscal" id="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="position-relative form-group">
                                <input type="text" class="form-control" name="fornecedor" placeholder="fornecedor" id="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="position-relative form-group">
                                <input type="text" class="form-control" name="fabricante" placeholder="fabricante" id="">
                            </div>
                        </div> 
                        <div class="col-md-6">
                            <div class="position-relative form-group">
                                <input type="text" class="form-control" name="aplicacao" placeholder="aplicacao" id="">
                            </div>
                        </div>  
                        <div class="col-md-6">
                            <div class="position-relative form-group">
                                <input type="text" class="form-control" name="lugar" placeholder="lugar do estoque" id="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="position-relative form-group">
                                <input type="text" class="form-control" name="categoria" placeholder="categoria" id="">
                            </div>
                        </div>

                        <div class="segura_slider_checkbox">
                            <div class="slider_checkbox">Fiado</div>
                            <label class="switch">
                                <input type="checkbox" name="fiado">
                                <span name="fiado" class="slider round"></span>
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
// $dsn = "mysql:$dbname;host=$servidor"; //declara a variavel de conexão
// $dbuser = $usuario;  //declara a variavel de usuario
// $dbpass = $senha;  // declara a variavel de senha ( vazio para xampp e wampp e "root" para macbook)
// $comparacao_cliete = "SELECT * FROM usuarios WHERE id == $id_cliente";
// consultar no banco de dados
// $result_usuario = "SELECT * FROM usuarios QUERY BY id DESC";
// $resultado_usuario = mysqli_query($conn, $result_usuario);



include("../banco/conexao.php");


//------------------------------------------------------------








//------------------ fim da conexão com o banco ----------------


// if (isset($_POST['nome_tecnico']) && ($_POST['nome_tecnico'] != "")) //verifica se o e-mail está vazio
// {
//  if (isset($_POST['vendedor']) && ($_POST['vendedor'] != "")) //verifica se a senha está vazia ---- > acrescentar no futuro uma verificacao de quem está logado e atribuir  a venda
// {
//   if (isset($_POST['referencia']) && ($_POST['referencia'] != "")) //verifica se o nome está vazio
// {
if (isset($_POST['produto']) && ($_POST['produto'] != "")) //verifica se o nome está vazio
{
    //  if (isset($_POST['lugar']) && ($_POST['lugar'] != "")) //verifica se o nome está vazio
    // {
    //if (isset($_POST['aplicacao']) && ($_POST['aplicacao'] != "")) //verifica se o nome está vazio
    //{
    if (isset($_POST['quantidade']) && ($_POST['quantidade'] != "")) //verifica se o nome está vazio
    {
        //if (isset($_POST['fiado']) && ($_POST['fiado'] != "")) //verifica se o fiado está marcado
        // $echo = $_POST['fiado'];
        {

            if (isset($_POST['fiado']) && ($_POST['fiado'] != "")) //verifica se o campo fiado está marcado/vazio
            {
                $fiado = "Sim";
            } else {
                $fiado = "Não";
            }

            //if (isset($_POST['fornecedor']) && ($_POST['fornecedor'] != "")) //verifica se o nome está vazio
            //{
            // if (isset($_POST['categoria']) && ($_POST['categoria'] != "")) //verifica se o nome está vazio
            //{






            $vendedor = $_SESSION['nome']; //recebe o id do vendedor 
            $produto = addslashes($_POST['produto']);  //coloca a senha digitada (base64_encode encripta a senha) (addslashes impede manipulação do banco pelo usuário)
            $quantidade = addslashes($_POST['quantidade']);  //recebe o nome digitado	
            $cliente = addslashes($_POST['cliente']);  //recebe o nome digitado
            $data = mktime(02, 30, 00, 04, 30, 1995); // recebe a data com DIA - MES - ANO - MINUTO           
            $data_venda = date("d-m-Y H:i", $data);






            // inseri em DATA_VENDA a datae em formato legível
            // $aplicacao = addslashes($_POST['aplicacao']);  //recebe o nome digitado	
            // $preco = addslashes($_POST['preco']);  //recebe o nome digitado	
            // $fabricante = addslashes($_POST['fabricante']);  //recebe o nome digitado	
            // $fornecedor = addslashes($_POST['fornecedor']);  //recebe o nome digitado	
            // $categoria = addslashes($_POST['categoria']);  //recebe o nome digitado		
            // $fiado = $_POST['fiado'];  //recebe o check-box do "possui fiado"				
            // $quantidade = addslashes($_POST['quantidade']);  //recebe o nome digitado


            try {
                $pdo = new PDO($dsn, $dbuser, $dbpass);
                $sql = "INSERT INTO vendas SET vendedor = '$vendedor', produto ='$produto', quantidade = '$quantidade', cliente = '$cliente', data_venda ='$data_venda', fiado ='$fiado'";
                $sql = $pdo->query($sql);


                echo "<div class='container' id='aviso_de_sucesso'>
                    <div class='alert alert-success'>
                      <strong>$produto</strong>  Venda Realizada!
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
//  }

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