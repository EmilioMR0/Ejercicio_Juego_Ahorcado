<!-- Lógica del Ejercicio 2:
Realizamos el formulario para la recogida de datos del usuario, declarando previamente las variables que vayamos a usar,
posteriormente en un archivo a parte al que llamaremos "conversiones.inc.php" crearemos las funciones para realizar las conversiones:
1. De binario a decimal. Que lo podremos hacer guardando el número en un string de manera que al ir revisando sus posiciones
solo tendremos que elevar el exponente en 1 por cada posición pero como la primera posición del array sea la que tenga el exponente más alto,
usaremos la función "count_chars" para así saber desde qué numero empezar y realizaremos un bucle for usando el "--" para así que la última posición del array sea la que tenga
el exponente más bajo.
2. De decimal a binario. Para hacerlo crearemos un array donde iremos guardando todos los restos de las divisiones, se podría hacer con un bucle while que se detenga
cuando el cociente sea 1 y mediante un "implode" mostremos finalmente el número decimal en binario. -->


<!-- De este código solo nos valdría reciclar el formulario y modificándolo NO HACER CASO AL CÓDIGO ES UNA COPIA DEL EJERCICIO 1 -->


<!DOCTYPE html>
<html lang="es-ES">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>
<body>
    <?php
        $num=$_POST['num']; // Variable que almacenará el número introducido por el usuario
        $numToText=$_POST['numToText']; // Variable que usaremos para crear el array
        $contador=$_POST['contador']; // Contador para saber cuantos número ha introducido el usuario
        if(!isset($num)){
            // Inicializamos las variables
            $contador=0;
            $numToText="";
    ?>
            <form action="#" method="post">
                Introduzca 10 números: <input type="number" name="num" value="num" autofocus>
                <input type="hidden" name="contador" value="<?php echo $contador; ?>">
                <input type="hidden" name="numToText" value="<?php echo $numToText; ?>">
                <input type="submit" value="Enviar">
            </form>
    <?php
            echo "Lleva $contador números introducidos.";
        } else if($contador < 10){
    ?>
            <form action="#" method="post">
                Introduzca 10 números: <input type="number" name="num" value="num" autofocus>
                <input type="hidden" name="contador" value="<?php echo ++$contador; ?>">
                <input type="hidden" name="numToText" value="<?php echo $numToText; ?>">
                <input type="submit" value="Enviar">
            </form>
    <?php
            echo "Lleva $contador números introducidos.";
        }

        if($contador == 10){
            $numToText = "$numToText,$num";
            $numero = substr($numToText,2);
            $arrayNum = explode(",",$numero);
            
            // Comprobaciones
            echo "<br><br>";
            echo $numToText;
            echo $numero;
            echo $arrayNum;
        }
    ?>
</body>
</html>

<?php
    function arrayOriginal($arrayNum){
        echo "<h2>Array Original</h2>";
        echo "<table border='1'><tr>";
        echo "<td>Posición</td>";

        for($i = 0; $i <= 10; $i++){
            echo "<td>$i</td>";
        }
        echo "</tr>";
        echo "<tr>";
        echo "<td>Número</td>";
        for($i = 0; $i <= 10; $i++){
            echo "<td>$arrayNum[$i]</td>";
        }
        echo "</tr></table>";
    }
?>