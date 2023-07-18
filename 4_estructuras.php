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
    
    // ejemplo del profe 
    echo "<h1>if</h1><br>";
    $color ="rojo";
    if($color="rojo")
    {
        print("Efectivamente, el color es rojo ");
    }
    //ejemplo 2
    $x=10;
    $y=15;
    if($x == $y)
    {
        print("x e y son iguales");
    }
    elseif($x > $y)
    {
        print("x es mayor que y");
    }
    elseif( $x < $y)
    {
        print("x es menor que y");
    }
    
    

     //while
     // indica que mientras no se cumpla una determinada condición, no se saldrá del bucle y no 
     //saltará a la asiguiente linea de código.
     echo "<h1>while</h1><br>";
     $x =10;
     while(--$x)
     {
        echo"<big>";
        echo"<b>";
        print("Número:".$x)
        echo "<br>";
        echo "<hr>";
     }



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
     // sirve para incluir archivos en nuestras pagínas y solo será necesario hacer referencia 
     // a este archivo con la instrucion requiere. Se usa prinipalmente para definir variables,
     // y estas estarán listas una vez  hagamos una llamada al archivo donde esten guardadas.

     // include
     //El funcionamiento es igual que el de la instruccion requiere(), con la diferencia de que si 
     //puede procesar el código tanra veces como la llamemos a esa pagina externa.
     include("variable.php");
     echo "<br>";
     print("$x"."$z"."$y");

     
     echo "<h1>Require</h1><br>";

     

     //ejemplo del profe
     // será utilizado para ejecutar un bucle en un determinado númeri de veces, hasta que se cumpla una
     //condición
     echo "<br>";
     echo "<h1>for</h1>"
     for($x=5;$x=10;$x++)
     {
        print("Número: ".$x."<br>")
     }



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

    // ejemplo del profe
    // se utiliza para comprobar un dato ente variables posibilidades

    $color ="negro ";
    switch($color)
    {
        case "blanco";
             $sector ="claro";
             break;
        case "naranja";
             $sector ="normal";
             break;
        case "negro";
             $sector ="oscuro";
             break;
    }
    print($sector);


    ?>
    
</body>
</html>