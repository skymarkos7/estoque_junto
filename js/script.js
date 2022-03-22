 var itens = document.getElementsByClassName("select2-selection__rendered"); //captura a classe do span, precisa estar fora da função
  
  // var item = itens[1].innerHTML;
  // console.log(item);


function captura_dados(){

  var descricao = itens[1].innerHTML; // acessa a classe e guarda o conteudo texto, OBS:a classe só existe depois da página carregada
  
  var id = itens[1].id; // acessa o id dessa tag
  
 //o numero 3 se refere a quantidade de itens que existe lá na descrição do produto ID,NOME,QUANTIDADE
  const descricao_separado = descricao.split(" / ", 3); // cria um array e separa as informações 

 
  //isso aqui se refere a descrição ou nome do produto, que está inserindo nos campos abaixo lá no pdv
  document.getElementById("id_produto").value = descricao_separado[0]; 

  //isso aqui se refere a descrição ou nome do produto, que está inserindo nos campos abaixo lá no pdv
  document.getElementById("nome_produto").value = descricao_separado[1]; 

  //isso aqui se refere ao preço, que está inserindo nos campos abaixo lá no pdv
  document.getElementById("valor_unitario").value = descricao_separado[2]; 


}

// ATENÇÃO É DAQUI PRA CIMA QUE É FEITO A INSERÇÃO DOS CAMPOS ABAIXO DA BARA DE PESQUISA 




 



function adicionando(){

    id_produto = document.getElementById("id_produto").value;
    nome_produto = document.getElementById("nome_produto").value;
    valor_produto = document.getElementById("valor_unitario").value;
    qtde_produto = document.getElementById("qtde_prod").value;    
    total_bruto = (valor_produto*qtde_produto);    
    
    console.log(id_produto);
    //transformando as variaveis de valores em formatação de REAIS R$
      var t = total_bruto.toLocaleString('pt-br',{style: 'currency', currency: 'BRL'});
      var v = valor_produto.toLocaleString('pt-br',{style: 'currency', currency: 'BRL'});

    if (typeof nome_produto !== 'undefined') {
      document.getElementById("insercao_tr").innerHTML 
      +=" <tr>   <td>"+id_produto+"</td>   <td>"+nome_produto+"</td>  <td></td>  <td>"+qtde_produto+"</td> <td>R "+v+"</td> <td></td> <td></td> <td> "+t+"</td>  </tr>";

       document.getElementById('nome_produto').value = " ";
        document.getElementById('valor_unitario').value = " ";
    }
      




    

   







  //  var tr = document.createElement("tr");
   // var td = document.createElement("td");        
    // document.getElementById("insercao_tr").appendChild(tr).appendChild(td);
    // document.getElementById("nome_prod_tabela").createElement('td');



    // ESSE ERA O CODIGO QUE INSERIA NOS ID JÁ EXISTENTES-------------INICIO

        // document.getElementById("nome_prod_tabela").innerHTML = nome_produto;
        // document.getElementById("qtde_prod_tabela").innerHTML = qtde_produto;
        // document.getElementById("valor_prod_tabela").innerHTML = valor_produto;
        // document.getElementById("total_bruto").innerHTML = parseFloat(valor_produto * qtde_produto) ;

    // ESSE ERA O CODIGO QUE INSERIA NOS ID JÁ EXISTENTES-------------FIM
  

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





