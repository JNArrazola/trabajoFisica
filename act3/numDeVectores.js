let button = document.getElementById("ingresar");

button.addEventListener("click", () => {
  const vectores = document.getElementById("numVectores").value;

  if (vectores < 1 || vectores > 30) {
    alert("Ingrese vectores válidos");
    //si el número de vectores no es válido, entonces se envía un alert
  } else {
    const divUno = document.getElementById("divUno");
    divUno.classList.add("hidden");

    document.write('<div class="mainContainer">')

    document.write('<div class="child">');
    document.write(
      '<form action="operaciones.php" method="post" id="enviarVectores">'
    );
    for (let i = 1; i <= vectores; i++) {
      document.write("<hr>");
      document.write("<p>Ingresa la magnitud del vector " + i + ":</p>");
      document.write(
        '<input placeholder="N" class="cssInput" type="number" name="vector' +
          i +
          '" id="vector' +
          i +
          '" step="any">'
      );
      document.write("<br>");
      document.write("<p>Ingresa el ángulo polar del vector " + i + ":</p>");
      document.write(
        '<input placeholder="°" class="cssInput" type="number" name="angulo' +
          i +
          '" id="angulo' +
          i +
          '" step="any">'
      );

      //este ciclo for crea todos los inputs que el usuario requiera
    }

    //******crear input con el valor de vectores para mandarlo al php*********** */
    document.write(
      '<input type="number" name="numDeVectores" class="hidden" id="numDeVectores">'
    );
    let imaginario = document.getElementById("numDeVectores");
    imaginario.setAttribute("value", vectores);
    //

    document.write("<br>");
    document.write("<br>");
    document.write('<div class="centrarBoton">');
    document.write('<button class="button-52 center" id="ingresarVectores" type="submit">Calcular</button>');
    document.write('</div>');
    document.write("</form>");
    document.write("</div>");
    document.write("</div>");

    document.write('<link rel="stylesheet" href="estilosDespues.css">')
    const enviarVectores = document.getElementById("enviarVectores");
    let bool;

    enviarVectores.addEventListener("submit", (e) => {
      bool = true;
      //aqui se verifica que ningún input de los generados se encuentre vacío
      for (let i = 1; i <= vectores; i++) {
        let vectorCheck = document.getElementById("vector" + i + "").value;
        let angleCheck = document.getElementById("angulo" + i + "").value;

        if (
          vectorCheck == "" ||
          angleCheck == "" ||
          angleCheck < 0 ||
          vectorCheck < 0
        ) {
          bool = false;
          break;
        }
      }

      if (bool == false) {
        alert("Verifica tus datos");
        e.preventDefault();
        //si está vacío, entonces se enviará un alert que te avisará que debes verificar tus datos
      }
    });
  }
});
