<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilosPhp.css">
    <!-- <link href='https://fonts.googleapis.com/css?family=Acme' rel='stylesheet'> -->
    <title>Resultado Final</title>
</head>
<body>
    
    

    <?php
    $sumaX = 0;
    $sumaY = 0;
    if ($_SERVER['REQUEST_METHOD']=='POST'){
        
        $numDeVectores = $_POST['numDeVectores'];
        

        $vectores = array();
        $angulos = array();
        $componenteX = array();
        $componenteY = array();

        for ($i=1; $i < $numDeVectores+1 ; $i++) { 
            $vectores[$i] = $_POST['vector'.$i];
            $angulos[$i] = $_POST['angulo'.$i];

            $componenteX[$i] = (double)(number_format($vectores[$i] * (cos(deg2rad($angulos[$i]))),2));
            

            $sumaX = $sumaX + $componenteX[$i];

            $componenteY[$i] = (double)(number_format($vectores[$i] * (sin(deg2rad($angulos[$i]))),2));
            $sumaY = $sumaY + $componenteY[$i];
            
        }

        $resultante = sqrt(pow($sumaX,2)+pow($sumaY,2));
        
        if ($sumaX==0){
            $anguloResultante = 0;
        } else {
            $anguloResultante = rad2deg(atan($sumaY/$sumaX));
        }
        


        echo '<div class="padre">';
            echo '<p class="textResultado"> La fuerza resultante es de '.$resultante.' newtons</p>';
            echo '<p class="textResultado"> El ángulo del vector es de '.$anguloResultante.' grados';
            echo '<br>';
            echo '<div class="centrarBotoncito">';
                echo '<a href="indexTres.php"><button class="botoncito">Regresar</button></a>';
            echo '</div>';
        echo '</div>';
        
    }
    ?>
</body>
</html>