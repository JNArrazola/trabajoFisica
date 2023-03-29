let formulaTres = document.getElementById("formulaTres")

formulaTres.addEventListener("submit",(e)=>{

    let vi = document.getElementById("vi")
    let tiempo = document.getElementById("tiempo")
    let aceleracion = document.getElementById("aceleracion") 

    if (vi.value==""||tiempo.value==""||aceleracion.value==""){
        e.preventDefault()
        alert("Ingresa los datos correctos")
    } else {
        formulaTres.submit()
    }

})