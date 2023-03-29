let form = document.getElementById("formulaCuatro")

form.addEventListener("submit",(e)=>{

    let vf = document.getElementById("vf")
    let aceleracion = document.getElementById("aceleracion")
    let tiempo = document.getElementById("tiempo")

    if(vf.value==""||aceleracion.value==""||tiempo.value==""){
        alert("Ingresa los datos validos")
        e.preventDefault()
    } else {
        form.submit()
    }
})