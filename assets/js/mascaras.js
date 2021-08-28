function mascara_cpf(){
    var cpf = document.getElementById('cpf')
    if(cpf.value.length == 3 || cpf.value.length == 7){
        cpf.value += "."
    }else if(cpf.value.length == 11){
        cpf.value += "-"
    }
}

function mascara_rg(){
    var rg = document.getElementById('rg')
    if(rg.value.length == 2 || rg.value.length == 6){
        rg.value += "."
    }else if(rg.value.length == 10){
        rg.value += "-"
    }
}

function mascara_fixo(){
    var telefone = document.getElementById('telefone')
    if(telefone.value.length == 2 || telefone.value.length == 7){
        telefone.value += "-"
    }
}

function mascara_celular(){
    var celular = document.getElementById('celular')
    if(celular.value.length == 2 || celular.value.length == 8){
        celular.value += "-"
    }
}