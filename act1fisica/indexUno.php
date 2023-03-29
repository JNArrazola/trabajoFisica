<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet"> -->
    <link rel="stylesheet" href="estilitos.css">
    <link rel="stylesheet" href="estilitos2.css">
    <link rel="stylesheet" href="/projectoFusionado/botonRegresar.css">
    <title>Act. Uno</title>
</head>

<body class="body">

    <div class="app">
        <form action="vista.php" method="post" id="form">
            <p class="mellevalaroña">Ingresa el sistema de unidades</p>
            <select name="select" id="" class="boton">
                <option value="SI" name ="SI">Sistema Internacional</option>
                <option value="US" name="US">Sistema Ingles</option>
            </select>
            <p class="text">Ingresa la masa</p>
            <input type="number" name="masa" class="boton" id="masa" step="0.001" >
            <p class="text">Ingresa la aceleracion</p>
            <input type="number" name="aceleracion" class="boton" id="aceleracion" step="0.001">
            <p class="text">Ingresa la fuerza</p>
            <input type="number" name="fuerza" class="boton" id="fuerza" step="0.001">
            <button type="submit" class="botonCalcular" id="botonCalcular">Calcular</button>
            <br>
        </form>
        <a href="/projectoFusionado/"><button class="pass">Regresar</button></a>
    </div>
    <script src="main.js"></script>
</body>

</html>