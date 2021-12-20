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
            $respuesta = $_POST['respuesta'];
        }
        if (!isset($_POST['Enviar'])) {
            $respuesta = "";
            $fallos = 0;
            $generacionPalabra = $listaPalabras[rand(0,21)];
            for($i = 0; $i < strlen($generacionPalabra); $i++){
                // Declaramos la variable respuesta asignándole el valor "_" a todas sus posiciones para ir agregándole letras posteriormente
                $respuesta[$i] = "_";
                echo $respuesta[$i];
            }

    ?>
            <form action="#" method="post">
                Introduzca una letra o palabra: <input type="text" name="palabraUsuario" autofocus>
                <input type="hidden" name="generacionPalabra" value="<?php echo $generacionPalabra; ?>">
                <input type="hidden" name="fallos" value="<?php echo ++$fallos; ?>">
                <input type="hidden" name="respuesta" value="<?php echo $respuesta; ?>"><br><br>
                <input type="submit" name="Enviar" value="Enviar"><br><br>
            </form>
    <?php

echo $generacionPalabra;

        }else{
            if ($generacionPalabra == $palabraUsuario) {
                echo "La palabra introducida es la correcta<br><br>";
                echo "Has acertado con $fallos fallos.<br><br>";
            } else {
                echo "La palabra introducida no es la correcta.<br><br>";
                echo "Llevas $fallos fallos.<br><br>";
            }

            for ($i = 0; $i < strlen($generacionPalabra); $i++){
                if ($generacionPalabra[$i] == $palabraUsuario){
                    $respuesta[$i] = $palabraUsuario;
                }
            }

            for ($i = 0; $i < strlen($respuesta); $i++){
                echo $respuesta[$i];
            }
            
    ?>
            <form action="#" method="post">
                Introduzca una letra o palabra: <input type="text" name="palabraUsuario" autofocus>
                <input type="hidden" name="generacionPalabra" value="<?php echo $generacionPalabra; ?>">
                <input type="hidden" name="fallos" value="<?php echo ++$fallos; ?>">
                <input type="hidden" name="respuesta" value="<?php echo $respuesta; ?>"><br><br>
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