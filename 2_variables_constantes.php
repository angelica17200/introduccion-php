<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables y constantes</title>
</head>
<body>
    <h1>Variables y constantes </h1>
    <!--scrip php-->
    <?php
        /*1. La forma de representar las avriables en php es enterponiendo el simbolo $ a la palabra que 
        utlizaremos como variable. Ejemplo: $edad*/

        /*2. Debemos prestar atencion a las mayusculas y minisculas, ya que PHP reconoce la diferencia 
        entre las dos. Ejemplo: $valor es diferente de $VALOR  */

        /*3. ¿Para que se utilizan las variables? Gracias a ellas podremos realizar
        operaciones aritmeticas y operaciones con cadenas, etc */

        /*4. Las variables las utilizamos como y cuando queremos en una misma pagina, ya que no existe 
        limitaciones en cuanto a su uso */

        /*5. Hay que prestar atencion a no provocar errores por utilizar como variables palabras reservadas 
        por el lenaguaje. Ejemplo: $os se genera error, porque es una variable predefinida */

        /*6. Tambien se debe evitar el error de empezar una variable por un número. Ejemplo: $35var = 
        45 es un error */

        /*En PHP no es necesario especificar el tipo de variable, pero si debemos saber cuándo ultilizamos 
        las comillas a la hora de definirlas, ya que su uso indica que se esta hablando de una cadena. 
        Ejemplo: $cuenta =7, $nombre ="nestor" */

        /*POdemos mostrar las variables en pantalla de varias maneras: una de ellas puede ser  utilizando
        la opcion echo(); otra puede ser mediante print(); */

        $a =5;
        $b ="7";
        echo "<b><h1>";
        echo($a);
        echo "<br>";
        echo($b);
        echo "</b></h1>";

        //Constantes
        //La forma de definir una constante es mediante la funcion define 
        //Sintsxis:define("nombre_variable","valor_variable")

        define("capital_colombia","Bogota")
        define("habitantes", 7000000);

    ?>


    
</body>
</html>