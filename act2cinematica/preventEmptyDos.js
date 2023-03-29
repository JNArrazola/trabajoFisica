let formulaDos = document.getElementById("formulaDos")
console.log(formulaDos)

formulaDos.addEventListener("submit",(e)=>{
    let vi = document.getElementById("vi")
    let aceleracion = document.getElementById("aceleracion")
    let tiempo = document.getElementById("tiempo")

    if(vi.value==""||aceleracion.value==""||tiempo.value==""){
        e.preventDefault();
        alert("Ingresa datos válidos")
    } else {
        formulaDos.submit();
    }
    
})