function obrigatorionome(){
    var container = document.getElementById("nome");
    var container2 = document.getElementById("cnome");
    if(container.value == ""){
        container.style.border = "1px solid #f20909";
        container2.innerText = "Não pode deixar campo de nome vazio";
        
    }else{
        container.style.border = "1px solid #89837F";
        container2.innerText = "";
        return TRUE;
    }
}

function obrigatoriorua(){
    var container = document.getElementById("logradouro");
    var container2 = document.getElementById("clogradouro");
    if(container.innerText == ""){
        container2.innerText = "Não pode deixar campo de endereço vazio";
        container.style.border = "1px solid #f20909";
    }else{
        container.style.border = "1px solid #89837F";
        container.innerText = "";
        return TRUE;
    }
}

function obrigatorionum(){
    var container = document.getElementById("numero");
    var container2 = document.getElementById("cnumero");
    if(container.innerText == ""){
        container2.innerText = "O campo de numero é obrigatorio";
        container.style.border = "1px solid #f20909";
    }else{
        container.style.border = "1px solid #89837F";
        container.innerText = "";
        return TRUE;
    }
}

function obrigatoriocel(){
    var container = document.getElementById("celular");
    var container2 = document.getElementById("ccelular");
    if(container.innerText == ""){
        container2.innerText = "O campo de celular é obrigatorio";
        container.style.border = "1px solid #f20909";
    }else{
        container.style.border = "1px solid #89837F";
        container.innerText = "";
        return TRUE;
    }
}