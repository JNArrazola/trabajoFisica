<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="centrarCosillas.css">
    <link rel="stylesheet" href="background.css">
    <link rel="stylesheet" href="inputs.css">
    <title>Formula Cuatro</title>
</head>
<body>
    <h1>Fórmula no. 4</h1>
    <form action="formulaCuatro.php" method="post" id="formulaCuatro">
        <div class="centrarSelect">
        <p>Ingresa el sistema de unidades:</p>
        <select name="sistema" id="" class="css-input">
            <option value="sistemaInternacional">Sistema Internacional</option>
            <option value="sistemaIngles">Sistema Ingles</option>
        </select>
        <p>Ingresa la velocidad final:</p>
        <input type="number" name="vf"  id="vf" step="any" class="css-input">
        <p>Ingresa la aceleracion:</p>
        <input type="number" name="aceleracion"  id="aceleracion" step="any" class="css-input">
        <p>Ingresa el tiempo:</p>
        <input type="number" name="tiempo"  id="tiempo" step="any" class="css-input">
        <br>
        <br>
        <button type="submit" id="calcular" class="button">Calcular</button>
        </div>
    </form>
    <!-- <br>
    <a href="index.html"><button class="button">Regresar</button></a>     -->
    <script src="preventEmptyCuatro.js"></script>

    <?php
    
        if($_SERVER['REQUEST_METHOD']=='POST'){
            $vf = $_POST["vf"];
            $acc = $_POST["aceleracion"];
            $tiempo = $_POST["tiempo"];
            $sistema = $_POST["sistema"];

            $formula = $vf*$tiempo-($acc*pow($tiempo,2))/2;
            
            if($sistema=="sistemaInternacional"){
                echo '<p class="text">El desplazamiento es de '.$formula.' metros </p>';
            echo '<div class="centrar">';
            echo '<a href="indexDos.html"><button class="button">Regresar</button></a>';
            echo '</div>';
            } else {
                echo '<p class="text">El desplazamiento es de '.$formula.' pies </p>';
            echo '<div class="centrar">';
            echo '<a href="indexDos.html"><button class="button">Regresar</button></a>';
            echo '</div>';
            }

        }
    ?>


</body>
</html>