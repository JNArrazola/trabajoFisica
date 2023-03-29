<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    (float) $masa = $_POST["masa"];
    (float) $acc = $_POST["aceleracion"];
    (float) $fuerza = $_POST["fuerza"];
    (float) $sistema = $_POST['select'];




    if ($sistema == "SI") {

        if (empty($masa)) {
            $masa = (float)$fuerza / (float)$acc;
            $frase = "La masa es de " . $masa . " kg";
        } else if (empty($fuerza)) {
            $fuerza = (float)$masa * (float) $acc;
            $frase = "La fuerza es de " . $fuerza . " newtons";
        } else if (empty($acc)) {
            $acc = (float) $fuerza / (float) $masa;
            $frase = "La aceleración es de " . $acc . " m/s^2";
        }
    }

    if ($sistema == "US") {

        if (empty($masa)) {
            $masa = (float)$fuerza / (float)$acc;
            $frase = "La masa es de " . $masa . " slug";
        } else if (empty($fuerza)) {
            $fuerza = (float)$masa * (float)$acc;
            $frase = "La fuerza es de " . $fuerza . " lb";
        } else if (empty($acc)) {
            $acc = (float) $fuerza / (float) $masa;
            $frase = "La aceleración es de " . $acc . " ft/s^2";
        }
    }


}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo</title>
    <link rel="stylesheet" href="estilitos2.css">
</head>

<body>
    <div class="app">
        <p class="text">
            <?php echo $frase ?>
        </p>
        <a href="indexUno.php"><button class="botonRegresar">Regresar</button></a>
    </div>
</body>

</html>