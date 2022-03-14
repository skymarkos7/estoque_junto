 var itens = document.getElementsByClassName("select2-selection__rendered"); //captura a classe do span, precisa estar fora da função
// var item = itens[1].innerHTML;
//alert (t);


function captura_dados(){
  var descricao = itens[1].innerHTML; // acessa a classe e guarda o conteudo texto, OBS:a classe só existe depois da página carregada
  var id = itens[1].id; // acessa o id dessa tag
 const descricao_separado = descricao.split(" / ", 2); // cria um array e separa as informações 
 document.getElementById("nome_produto").value = descricao_separado[0]; 
 document.getElementById("valor_unitario").value = "R$ "+descricao_separado[1]; 


}