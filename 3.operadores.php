<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores</title>
</head>
<body>
    <h1>Operadores</h1>
    <?php
    //Operadores aritméticos
    /* Recuerda que un "operador" es un símbolo que le indica a la máquina una operación o acción a realizar.
     Desde su nombre, los operadores aritméticos indican que se relacionan a las operaciones matemáticas 
     que usan con frecuencia y son de común conocimiento.  Un operador aritmético trabaja en el código manipulando 
     los datos numéricos que puedan presentarse. Es así como se evidencian dos tipos: binarios y unitarios.*/

     <h2>EJEMPLOS ARITMETICOS</h2>

     echo (5 % 3)."\n";           // muestra 2
     echo (5 % -3)."\n";          // muestra 2
     echo (-5 % 3)."\n";          // muestra -2
     echo (-5 % -3)."\n";         // muestra -2

     //
     $a = 8;
     echo ++$a;
     echo "<br />";
     echo $a;
     

     //
     $a = 8;
 
     $b = 3;
    
     echo $a + $b."<br>";
    
     echo $a - $b."<br>";
    
     echo $a * $b."<br>";
    
     echo $a / $b."<br>";
    
     echo $a % $b,"<br>";
    
     $a++;
    echo $a."<br>";
    
     $b--;
    echo $b."<br>";
    //

    //Operadores de comparación 
    /* Los operadores de comparación, tal como su nombre lo indica, comparan los valores de una condición y las
     identifican en dos estados: falsa o verdadera. */

     <h2>EJEMPLO 2 COMPARACION</h2>

     var_dump(0 == "a"); // 0 == 0 -> true
     var_dump("1" == "01"); // 1 == 1 -> true
     var_dump("1" == "1e0"); // 1 == 1 -> true

     switch ("a") {
     case 0:
     echo "0";
     break;
     case "a": // nunca se ejecuta ya que "a" ya ha coincidido con 0
     echo "a";
     break;
     }

     
     // Integers
     echo 1 <=> 1; // 0
     echo 1 <=> 2; // -1
     echo 2 <=> 1; // 1


     // Floats
     echo 1.5 <=> 1.5; // 0
     echo 1.5 <=> 2.5; // -1
     echo 2.5 <=> 1.5; // 1

     // Strings
     echo "a" <=> "a"; // 0
     echo "a" <=> "b"; // -1
     echo "b" <=> "a"; // 1

     echo "a" <=> "aa"; // -1
     echo "zz" <=> "aa"; // 1

     // Arrays
     echo [] <=> []; // 0
     echo [1, 2, 3] <=> [1, 2, 3]; // 0
     echo [1, 2, 3] <=> []; // 1
     echo [1, 2, 3] <=> [1, 2, 1]; // 1
     echo [1, 2, 3] <=> [1, 2, 4]; // -1

     // Objects
     $a = (object) ["a" => "b"];
     $b = (object) ["a" => "b"];
     echo $a <=> $b; // 0

     $a = (object) ["a" => "b"];
     $b = (object) ["a" => "c"];
     echo $a <=> $b; // -1

     $a = (object) ["a" => "c"];
     $b = (object) ["a" => "b"];
     echo $a <=> $b; // 1

     // only values are compared
     $a = (object) ["a" => "b"];
     $b = (object) ["b" => "b"];
     echo $a <=> $b; // 1

     //

     
     //Tipos de comparación
     /*Igualdad: representado con el símbolo (=) en la mayoría de lenguajes.*/
     /* Desigualdad: es inverso al de igualdad.*/
     /*Mayor que: compara dos valores y valida que el número de la izquierda sea mayor que el de la derecha.*/
     /* Menor que: determina si el valor de la izquierda es menor que el de la derecha.*/

     //Operadores lógicos 
     /* Este tipo de operadores permite obtener solo dos resultados, por lo que se conocen también como booleanos, 
     porque hacen uso de los principios del álgebra de Boole. Los resultados son Verdadero o Falso. */

    

     echo "<h1>OPERADORES LÓGICOS</h1><br>";
     $x =4;
     $y =5;

     if(($x==4) && ($y==5))
     {
        print("Estas en lo correcto");

     }
     echo "<br>";
     if(($x==4) OR ($y==3))
     {
        print("La segunda operacion tambien es correcta")

     }


     // --------------------
     // foo() nunca será llamado ya que los operadores están en cortocircuito

     $a = (false && foo());
     $b = (true  || foo());
     $c = (false and foo());
     $d = (true  or  foo());

     // --------------------
     // "||" tiene una precedencia mayor que "or"

     // El resultado de la expresión (false || true) es asignado a $e
     // Actúa como: ($e = (false || true))
     $e = false || true;

     // La constante false es asignada a $f antes de que suceda la operación "or"
     // Actúa como: (($f = false) or true)
     $f = false or true;

     var_dump($e, $f);

     // --------------------
     // "&&" tiene una precedencia mayor que "and"

     // El resultado de la expresión (true && false) es asignado a $g
     // Actúa como: ($g = (true && false))
     $g = true && false;

     // La constante true es asignada a $h antes de que suceda la operación "and"
     // Actúa como: (($h = true) and false)
     $h = true and false;

     var_dump($g, $h);


     
     
     //Operadores de union de cades

     /*Los operadores de unión se utilizan para especificar el tipo de coincidencia entre columnas que están unidas en una relación.

     De forma predeterminada, los valores se comparan utilizando el operador de igual (=). Cuando utiliza un operador que no es el signo de igual
     (=), crea uniones basadas en un rango de valores. */

     echo "<h1>OPERADORES UNION DE CADENAS</h1><br>";
     ST ="Ejemplo"
     $w ="union";
     $x ="de";
     $y ="cadenas"
     $z = '';
     $resultado1 =$t;
     $resultado2 =$t.$z.$x.$z.$w.$z.$x.$z.$y;
     echo '<b><h1>';
     echo $resultado1;
     echo '<hr>';
     echo $resultado2;
     echo '>/b></h1>';

    ?>
    
</body>
</html>