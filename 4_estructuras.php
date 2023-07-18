<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ESTRUCTURA DE CONTROL</title>
</head>
<body>
    <H1>Estructura de control</H1>
    <?php
    
    //if, if.else
    echo "<h1>if, if.else</h1><br>";

    if ($a > $b) {
        echo "a es mayor que b";
    } elseif ($a == $b) {
        echo "a es igual que b";
    } else {
        echo "a es menor que b";
    }

    //
    


     //while
     echo "<h1>while</h1><br>";



     //do-while
     echo "<h1>do-while</h1><br>";
     do {
        if ($i < 5) {
            echo "no es lo suficientemente grande";
            break;
        }
        $i *= $factor;
        if ($i < $minimum_limit) {
            break;
        }
       echo "i está bien";
    
        /* procesar i */
    
    } while (0);


     //for
     echo "<h1>for</h1><br>";

    $people = array(
        array('name' => 'Kalle', 'salt' => 856412),
        array('name' => 'Pierre', 'salt' => 215863)
    );
    
    for($i = 0, $size = count($people); $i < $size; ++$i) {
        $people[$i]['salt'] = mt_rand(000000, 999999);
    }

     //require
     echo "<h1>Require</h1><br>";

     // Función require_once
    require_once("la_ruta_de_archivo.php");
    require_once "la_ruta_de_archivo.php";

     // Include_once
    include_once("la_ruta_de_archivo.php");
    include_once "la_ruta_de_archivo.php";

    //
    require('somefile.php');

     //include
     echo "<h1>Include</h1><br>";

     echo "Una $fruta $color"; // Una

     include 'vars.php';

     echo "Una $fruta $color"; // Una manzana verde



     //swich
     echo "<h1>swich</h1><br>";
     if ($i == 0) {
        echo "i es igual a 0";
    } elseif ($i == 1) {
        echo "i es igual a 1";
    } elseif ($i == 2) {
        echo "i es igual a 2";
    }
    
    switch ($i) {
        case 0:
            echo "i es igual a 0";
            break;
        case 1:
            echo "i es igual a 1";
            break;
        case 2:
            echo "i es igual a 2";
            break;
    }


    ?>
    
</body>
</html>