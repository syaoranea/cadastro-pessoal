const cep = document.querySelector("#cep");

const showData = (result)=>{
    for(const campo in result){
        if(document.querySelector("#"+campo)){
            document.querySelector("#"+campo).value = result[campo]
        }
        
    }
}

cep.addEventListener("blur",(e)=>{
    console.log(cep.value);
    let search = cep.value.replace("-","")
    const options = {
        method: 'Get',
        mode: 'cors',
        cache: 'default'
    }

    fetch(`https://viacep.com.br/ws/${search}/json/`, options)
    .then(Response =>{ Response.json()
    .then(data => showData(data))
})
    .catch(e => console.log('Deu erro: '+ e,message))

})