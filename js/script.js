

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


 var itens = document.getElementsByClassName("select2-selection__rendered");
// var item = itens[1].innerHTML;
//alert (t);




function foi(){
  var descricao = itens[1].innerHTML;
  var id = itens[1].id;
 // alert (descricao);
 document.getElementById("nome_produto").value = descricao;

}