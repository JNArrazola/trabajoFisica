let form = document.getElementById("form")
let masa = document.getElementById("masa")
let fuerza = document.getElementById("fuerza")
let aceleracion = document.getElementById("aceleracion")

form.addEventListener("submit",(e)=>{
    //se verifica que todos los datos sean validos ( que no falte ninguno y que no se divida entre 0)
    let contador = 0

    if (masa.value!=""){
        contador+=1
    }

    if (fuerza.value!=""){
        contador+=1
    }

    if (aceleracion.value!=""){
        contador+=1
    }

    if (contador == 3){
        alert("No ingreses los 3 datos")
        e.preventDefault()
    } 
    
    if (contador == 1){
        alert("Faltan datos")
        e.preventDefault()
    }

    if (aceleracion.value==0&&masa.value==""){
        alert("La aceleración no puede ser 0")
        e.preventDefault()
    }

    if(masa.value==0&&aceleracion.value==""){
        alert("La masa no puede ser 0")
        e.preventDefault()
    }

    if (masa.value<0||fuerza.value<0||aceleracion.value<0){
        alert("No se pueden ingresar valores negativos")
        e.preventDefault()
    }


})

