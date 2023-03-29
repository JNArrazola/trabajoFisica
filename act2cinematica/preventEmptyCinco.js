let formCinco = document.getElementById("formCinco")

formCinco.addEventListener("submit",(e)=>{

    let vf = document.getElementById("vf")
    let vi = document.getElementById("vi")
    let aceleracion = document.getElementById("aceleracion")

    if(vi.value==""||vf.value==""||aceleracion.value==""||aceleracion.value==0){
        e.preventDefault()
        alert("Ingresa datos válidos")
    } else {
        formCinco.submit()
    }

})