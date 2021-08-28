


function valida_cpf(cpf = 0){
    var cpf = document.getElementById("cpf");
    console.log(cpf.value);
    cpf = cpf.value.replace(/\.|-/g,"");
    console.log(cpf);
     let soma = 0;
    for (x=0; x < 9; x++){
        soma += cpf[x] * (10 -x);
    }
    console.log(soma);
    soma = (soma * 10) % 11;
    if(soma == 10 || soma == 11){
        soma = 0;
    }

    if(soma != cpf[9]){
        console.log("erro 1");
        var container = document.getElementById("cpf");
        container.style.border = "1px solid #f20909";
        var container = document.getElementById("ccpf");
        container.innerText = "CPF invalido";
        console.log("erro 1");
        return false
    }
    console.log(soma);
    soma = 0;

    for (x=0; x < 10; x++){
        soma += cpf[x] * (11 -x);
    }
    console.log(soma);
    soma = (soma * 10) % 11;
    if(soma == 10 || soma == 11){
        soma = 0;
    }

    if(soma != cpf[10]){
        console.log("erro 2");
        var container = document.getElementById("cpf");
        container.style.border = "1px solid #f20909";
        var container = document.getElementById("ccpf");
        container.innerText = "CPF invalido";
        return false
    }
    var container = document.getElementById("cpf");
        container.style.border = "1px solid #89837F";
   
    console.log("validado");
    console.log(soma);
    var container = document.getElementById("ccpf");
        container.innerText = "";
    return true;
}