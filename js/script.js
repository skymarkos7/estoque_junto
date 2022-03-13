

function enviar(){

       
  teste =  document.querySelector("[aria-activedescendant]");
  alert(teste);
    
    
    }
    



  
   //var variavel = document.getElementsByClassName("select2-selection__rendered").innerHTML = 3333;
  // var x = document.getElementsByClassName("select2-selection__rendered");
  // var variavel = x.title;
   
  // document.getElementById("nome_produto").value = variavel;

   //alert (x);

  // let select = document.querySelector('.select2-selection__rendered');
 // var x = select.innerHTML;
  // console.log(x);

  //var x = document.getElementsByClassName("select2-selection__rendered")[0];
  // var z = x.id;

 //  alert (x);


 var itens = document.getElementsByClassName("select2-selection__rendered"); //captura a classe do span
// var item = itens[1].innerHTML;
//alert (t);




function foi(){
  var descricao = itens[1].innerHTML; // acessa a classe e guarda o conteudo texto, OBS:a classe só existe depois da página carregada
  var id = itens[1].id; // acessa o id dessa tag
 const descricao_separado = descricao.split(" / ", 2); // cria um array e separa as informações 
 document.getElementById("nome_produto").value = descricao_separado[0]; 
 document.getElementById("valor_unitario").value = descricao_separado[1]; 


}