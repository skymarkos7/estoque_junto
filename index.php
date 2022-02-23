<?php
 session_start(); //inicia uma sessão

 if (isset($_SESSION['id']) && empty($_SESSION['id']) == false) {  //verifica se já foi feito login se sim, executa o código a baixo "pagina principal do site" - VERIFICA SE EXISTE ID DE USUÁRIO NO ID DA SESSAO

   header('Location:paginas/pdv.php'); //encaminha o usuário a página home

 } else {

    header("Location:paginas/login.php"); // leva o usuário até a página de login caso ele não esteja logado
   

 }
