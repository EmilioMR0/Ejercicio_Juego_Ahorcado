<!-- Ejercicio 11. Crea un mini-diccionario español-inglés que contenga, al menos, 20 palabras (con su traducción).
Utiliza un array asociativo para almacenar las parejas de palabras.
El programa pedirá una palabra en español y dará la correspondiente traducción en inglés. -->

<?php
// Configuramos la salida de errores para que se muestren todos
error_reporting(E_ALL);
ini_set('display_errors', '1');
?>

<!DOCTYPE html>
<html>
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="witdh=device,initial-scale=1.0">
        <meta name="lang" content="es-ES">
        <meta name="author" content="Emilio">
        <meta name="keywords" content="computers,programming,web design,html,html,html5,css,php">
        <meta name="description" content="Realización del Ejercicio del juego del Ahorcado">
        <title>Ahorcado</title>
        <link rel="stylesheet" href=".././css/estilos.css">
</head>
<body>
    <?php

        $listaPalabras = array ("ordenador", "nosotros", "esternocleidomastoideo", "noche", "dar", "porque", "nuevo", "camino", "bebe", "ahora", "tiempo", "cuando", "ir", "deporte", "cohete", "fuego", "rojo", "pato", "zorro", "baloncesto", "hacer", "jugar");

        if(isset($_POST['Enviar'])){
            $palabraUsuario = strtoupper($_POST['palabraUsuario']);
            $generacionPalabra = strtoupper($_POST['generacionPalabra']);
            $fallos = $_POST['fallos'];
        }
        if (!isset($_POST['Enviar'])) {
            $respuesta = [];
            $generacionPalabra = $listaPalabras[rand(0,21)];
    ?>
            <form action="#" method="post">
            Introduzca una letra o palabra: <input type="text" name="palabraUsuario" autofocus><br><br>
                <input type="hidden" name="generacionPalabra" value="<?php echo $generacionPalabra ?>">
                <input type="hidden" name="fallos" value="<?php echo $fallos ?>">
                <input type="hidden" name="respuesta" value="<?php echo $respuesta ?>">
                <input type="submit" name="Enviar" value="Enviar"><br><br>
            </form>
    <?php

echo $generacionPalabra;

        }else{
            // Usamos la función in_array para buscar el valor introducido por el usuario en el array, y en caso de que esté mostrarlo por pantalla
            if ($generacionPalabra == $palabraUsuario) {
                echo "La palabra introducida es la correcta<br><br>";
                echo "Has acertado con $fallos fallos.<br><br>";
            } else {
                echo "La palabra introducida no es la correcta.<br><br>";
                // $fallos++;
                echo "Llevas $fallos fallos.<br><br>";
            }

            // Comprobamos que el dato introducido sea una letra 
            if(strlen($palabraUsuario) == 1){
                for($i = 0; $i < strlen($generacionPalabra); $i++){
                    if($generacionPalabra[$i] == $palabraUsuario){
                        $respuesta[$i] = $palabraUsuario;
                    }else if($respuesta[$i] == "_" || is($respuesta[$i])){
                        $respuesta[$i] = $palabraUsuario;
                    }else{
                        $respuesta[$i] = "_";
                    }
                }
            }

            foreach($respuesta as $valor){
                echo $valor;
            }
    ?>
            <form action="#" method="post">
                Introduzca una letra o palabra: <input type="text" name="palabraUsuario" autofocus><br><br>
                <input type="hidden" name="generacionPalabra" value="<?php echo $generacionPalabra ?>">
                <input type="hidden" name="fallos" value="<?php echo ++$fallos ?>">
                <input type="hidden" name="respuesta" value="<?php echo $respuesta ?>">
                <input type="submit" name="Enviar" value="Enviar"><br><br>
            </form>
    <?php
echo $generacionPalabra;
        }
    ?>
            <br>
            <br>

            <!-- Botón para volver a jugar -->
            <form action="./Ejercicio_Ahorcado.php">
                <input type="submit" value="Volver a jugar">
            </form>
</body>
</html>