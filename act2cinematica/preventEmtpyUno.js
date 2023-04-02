let formulaUno = document.getElementById("formulaUno")

formulaUno.addEventListener("submit",(e)=>{
    //se verifica que ningun dato este vacio
    let vf = document.getElementById("vf")
    let vi = document.getElementById("vi")
    let tiempo = document.getElementById("tiempo")
    
    if(vf.value == "" || vi.value == "" || tiempo.value == ""){
        e.preventDefault()
        alert("Ingresa los datos correctos")
    } else {
        formulaUno.submit();
    }
})

