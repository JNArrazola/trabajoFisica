<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="centrarCosillas.css">
    <link rel="stylesheet" href="background.css">
    <link rel="stylesheet" href="inputs.css">
    <title>Fórmula Tres</title>
</head>

<body>



    <form action="" method="post" id="formulaTres">
        <div class="centrarSelect">
            <h1>Fórmula tres</h1>
        </div>
        <p>Selecciona el sistema de unidades:</p>

        <div class="centrarSelect">
            <select id="sistemaDeUnidades" name="sistemaDeUnidades" class="css-input">
                <option value="sistemaInternacional" name="sistemaInternacional">Sistema Internacional</option>
                <option value="sistemaIngles" name="sistemaIngles">Sistema Ingles</option>
            </select>

            <p>Ingresa la velocidad inicial:</p>
            <input type="number" name="vi" id="vi" step="any" class="css-input">
            <p>Ingresa el tiempo: </p>
            <input type="number" name="tiempo" id="tiempo" step="any" class="css-input">
            <p>Ingresa la aceleración:</p>
            <input type="number" name="aceleracion" id="aceleracion" step="any" class="css-input">


            <br>
            <br>
            <button type="submit" class="button">Calcular</button>
        </div>
    </form>

    <script src="preventEmptyTres.js"></script>


    <?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $vi = $_POST["vi"];
        $tiempo = $_POST["tiempo"];
        $aceleracion = $_POST["aceleracion"];
        $sistema = $_POST["sistemaDeUnidades"];

        $formula = $vi * $tiempo + ($aceleracion * pow($tiempo, 2)) / 2;

        if ($sistema == "sistemaInternacional") {
            echo '<p class="text">El desplazamiento es de ' . $formula . ' metros </p>';
            echo '<div class="centrar">';
            echo '<a href="indexDos.html"><button class="button">Regresar</button></a>';
            echo '</div>';
        } else {
            echo '<p class="text">El desplazamiento es de ' . $formula . ' pies </p>';
            echo '<div class="centrar">';
            echo '<a href="indexDos.html"><button class="button">Regresar</button></a>';
            echo '</div>';
        }

    }


    ?>
</body>

</html>