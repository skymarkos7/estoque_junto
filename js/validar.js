//................... Campo E-mail ............................................ 


if (document.dados.email.value == "") {
    alert("O campo E-MAIL é OBRIGATÓRIO!");
    document.dados.email.focus();
    return false;
}

if (document.dados.email.value.indexOf(' ') !== -1) {
    alert("Desculpe, O campo Email não permite ESPAÇOS");
    document.dados.email.focus();
    return false;
}

if (document.dados.email.value.indexOf('@') == -1) {
    alert("Não é um email válido, Você esqueceu do '@'");
    document.dados.email.focus();
    return false;
}

if (document.dados.email.value.indexOf('.') == -1) {
    alert("Não é um email válido, tente inserir a terminação'.com'");
    document.dados.email.focus();
    return false;
}







//--------------------------------------------------------Outras validações----------------------------------------------------------------------------------

//.............. Campo CPF ....................................................    
/*
    if (document.dados.tx_cpf.value.length < 11)
  
        alert("Cpf Invalido!");
        document.dados.tx_cpf.focus();
        return false;
    }


//.............. Campo Data ...................................................    

    if (document.dados.tx_data.value == "")
    {
        alert("O campo data é OBRIGATÓRIO!");
        document.dados.tx_data.focus();
        return false;
    }


//.............. Campo Sexo  .................................................

    if (document.dados.tx_sexo.value == "")
    {
        alert("O sexo é OBRIGATÓRIO!");
        document.dados.tx_telefone.focus();
        return false;
    }


//............. Campo Menssagem  ..............................................

    if (document.dados.tx_mensagem.value.length < 1)
    {
        alert("Não esqueça da sua Menssagem!");
        document.dados.tx_mensagem.focus();
        return false;
    }

*/


return true;
}

function seguranca(num) {
    var er = /[¨a-z.]/;

    er.lastIndex = 0;

    var campo = num;

    if (er.test(campo.value)) {
        document.progress.value = 10;

        return false;
    }

}


