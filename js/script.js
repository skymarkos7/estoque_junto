 var itens = document.getElementsByClassName("select2-selection__rendered"); //captura a classe do span, precisa estar fora da função
// var item = itens[1].innerHTML;
//alert (t);


function captura_dados(){

  var descricao = itens[1].innerHTML; // acessa a classe e guarda o conteudo texto, OBS:a classe só existe depois da página carregada
  var id = itens[1].id; // acessa o id dessa tag
 const descricao_separado = descricao.split(" / ", 2); // cria um array e separa as informações 
  document.getElementById("nome_produto").value = descricao_separado[0]; 
  document.getElementById("valor_unitario").value = descricao_separado[1]; 


}

function adicionando(){

    nome_produto = document.getElementById("nome_produto").value;
    valor_produto = document.getElementById("valor_unitario").value;
    qtde_produto = document.getElementById("qtde_prod").value;    
        

  //  var tr = document.createElement("tr");
   // var td = document.createElement("td");        
    // document.getElementById("insercao_tr").appendChild(tr).appendChild(td);
    // document.getElementById("nome_prod_tabela").createElement('td');


    document.getElementById("nome_prod_tabela").innerHTML = nome_produto;
    document.getElementById("qtde_prod_tabela").innerHTML = qtde_produto;
    document.getElementById("valor_prod_tabela").innerHTML = valor_produto;
    document.getElementById("total_bruto").innerHTML = parseFloat(valor_produto * qtde_produto) ;

  
  

/*




  var divNova = document.createElement("div");
    var conteudoNovo = document.createTextNode("Olá, cumprimentos!");
    divNova.appendChild(conteudoNovo);
    var ids = ttttssss;
    element.id = ids;

    console.log(divNova);
    //console.log(conteudoNovo);


  console.log(nome_produto);
  console.log(valor_produto);
  console.log(qtde_produto);



   
//---------------------------------

   

  
    // cria um novo elemento div
    // e dá à ele conteúdo
    
     //adiciona o nó de texto à nova div criada
  
    // adiciona o novo elemento criado e seu conteúdo ao DOM
    var divAtual = document.getElementById("prinn");
    document.body.insertBefore(divNova, divAtual);
 
  









----------       CÓDIGO A SER LAPIDADO





    // Buscar elemento pai
    var elemento_pai = document.body;
    
    // Criar elemento
    var titulo = document.createElement('h1');
    
    // Criar o nó de texto
    var texto = document.createTextNode("Um título qualquer");
    
    // Anexar o nó de texto ao elemento h1
    titulo.appendChild(texto);
    
    // Agora sim, inserir (anexar) o elemento filho (titulo) ao elemento pai (body)
    elemento_pai.appendChild(titulo);
*/



  
}





