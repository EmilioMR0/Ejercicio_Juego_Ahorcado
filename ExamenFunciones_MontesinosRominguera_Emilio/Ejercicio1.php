<!-- Lógica del Ejercicio 1:
Realizamos el formulario para la recogida de datos del usuario, declarando previamente las variables que vayamos a usar,
posteriormente usaremos la función explode para así poder crear el array habiendo juntado todos los números en una variables con un separador cualquiera,
crear y usar las funciones para acabar el programa de la siguiente manera:
1. Crear la tabla en "echo" y utilizar bucles for para mostrar tanto la posición del array como el valor que corresponde a cada posición
2. Crear una tabla donde en las primeras posiciones (mostradas también por un bucle for) estén los números que no sean primos y en las últimas se vayan almacenando los primos
esto lo realizaremos muy seguramente con un bucle pero usando "--" para así ir guardando primero los números no primos en las últimas posiciones (empezando por la posición 9)
3. En esta última función la realizaremos de manera muy semejante a la primera función, realizando la tabla, mediante un bucle imprimiremos las posiciones del array,
y mediante otro bucle imprimiremos el array ya modificado, todo esto usando "echo" con "table", "tr" y "td" -->

<!DOCTYPE html>
<html lang="es-ES">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
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

<!-- ================================ FUNCIONES ============================== -->

<?php
    function($arrayNum){
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