<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="centrarCosillas.css">
    <link rel="stylesheet" href="background.css">
    <link rel="stylesheet" href="inputs.css">
    <title>Formula Cinco</title>
</head>
<body>
    <form action="formulaCinco.php" method="post" id="formCinco">
        <div class="centrarSelect">
        <h1>Fórmula no.5</h1>
        <p>Ingresa el sistema de Unidades:</p>
        <select name="sistema" id="sistema" class="css-input">
            <option value="sistemaInternacional">Sistema Internacional</option>
            <option value="sistemaIngles">Sistema Ingles</option>
        </select>
        <p>Ingresa la velocidad final:</p>
        <input type="number" name="vf" id="vf" step="any" class="css-input">
        <p>Ingresa la velocidad inicial:</p>
        <input type="number" name="vi" id="vi" step="any" class="css-input">
        <p>Ingresa la aceleración:</p>
        <input type="number" name="aceleracion" id="aceleracion" step="any" class="css-input">
        <br>
        <button type="submit" class="button">Calcular</button>
        </div>
    </form>
    <!-- <br> -->
    <!-- <a href="index.html"><button class="button">Regresar</button></a> -->
    <script src="preventEmptyCinco.js"></script>

    <?php
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $vf = $_POST["vf"];
        $vi = $_POST["vi"];
        $aceleracion = $_POST["aceleracion"];
        $sistema = $_POST["sistema"];

        $formula = (pow($vf,2)-pow($vi,2))/(2*$aceleracion);

        if($sistema=="sistemaInternacional"){
            echo '<p class="text">El desplazamiento es de '.$formula.' metros </p>';
            echo '<div class="centrar">';
            echo '<a href="indexDos.html"><button class="button">Regresar</button></a>';
            echo '</div>';
        } else {
            echo '<p class="text">El desplazamiento es de '.$formula.' pies </p>';
            echo '<div class="centrar">';
            echo '<a href="indexDos.html"><button class="button">Regresar</button></a>';
            echo '</div>';;
        }


    }
    ?>
</body>
</html>