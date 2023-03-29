<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="centrarCosillas.css">
    <link rel="stylesheet" href="background.css">
    <link rel="stylesheet" href="inputs.css">
    <title>Formula Dos</title>
</head>

<body>

    <form action="formulaDos.php" method="post" id="formulaDos">
   
        <div class="centrarSelect">
        <h1>Fórmula no.2</h1>
        <p>Ingresa el sistema de unidades:</p>
        <select name="selectSistema" id="selectSistema" class="css-input">
            <option value="sistemaInternacional">Sistema Internacional</option>
            <option value="sistemaIngles">Sistema Ingles</option>
        </select>
        

        <p>Ingresa el valor de la velocidad inicial:</p>
        <input type="number" name="vi" id="vi" step="any" class="css-input">
        <p>Ingresa el valor de la aceleración:</p>
        <input type="number" name="aceleracion" id="aceleracion" step="any" class="css-input">
        <p>Ingresa el valor del tiempo:</p>
        <input type="number" name="tiempo" id="tiempo" step="any" class="css-input">
        <br>
        <br>
        <button type="submit" class="button">Calcular</button>
    </form>
    <!-- <br> -->
    </div>
    <!-- <a href="index.html"><button class="button">Regresar</button></a> -->

    <script src="preventEmptyDos.js"></script>


    <?php
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $vi = $_POST["vi"];
        $aceleracion = $_POST["aceleracion"];
        $tiempo = $_POST["tiempo"];
        $sistema = $_POST["selectSistema"];

        $formula = $vi + $aceleracion*$tiempo;

        if($sistema=="sistemaInternacional"){
            echo '<p class="text">La velocidad final es de '.$formula.' m/s</p>';
            echo '<div class="centrar">';
            echo '<a href="indexDos.html"><button class="button">Regresar</button></a>';
            echo '</div>';
        } else {
            echo '<p class="text">La velocidad final es de '.$formula.' ft/s</p>';
            echo '<div class="centrar">';
            echo '<a href="indexDos.html"><button class="button">Regresar</button></a>';
            echo '</div>';
        }

    }
    ?>
    

</body>

</html>