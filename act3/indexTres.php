<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilosStart.css">
    <link rel="stylesheet" href="/projectoFusionado/botonRegresar.css">
    <title>Suma de vectores</title>
</head>
<body>
     

    <script type="text/javascript">
        <!--
            function isNumberKey(evt)
            {
             var charCode = (evt.which) ? evt.which : event.keyCode
             if (charCode > 31 && (charCode < 48 || charCode > 57))
                return false;
                
             return true;
            }
        -->
        //este script se encarga de que no puedas ingresar números decimales o negativos en el input de número de vectores
        </script>

    <div class="father" id="divUno">
        <div class="child">
        <h1>Programa 3: Suma de n vectores</h1>   
        <p>Ingresa el número de vectores</p>
        <input type="number" class="cssInput" id="numVectores" name="numDeVectores" onkeypress="return isNumberKey(this)">
        <br>
        <button id="ingresar" class="button-52">Ingresar</button> 
        <script src="numDeVectores.js"></script>  
        <br>
        <br>
        <a href="/projectoFusionado"><button class="pass">Regresar</button></a>
        </div>
    </div>

</body>
</html>