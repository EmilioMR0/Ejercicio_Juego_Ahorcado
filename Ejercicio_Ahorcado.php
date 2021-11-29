<!-- Ejercicio 11. Crea un mini-diccionario español-inglés que contenga, al menos, 20 palabras (con su traducción).
Utiliza un array asociativo para almacenar las parejas de palabras.
El programa pedirá una palabra en español y dará la correspondiente traducción en inglés. -->

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
        $palabraUsuario = strtoupper($_POST['palabraUsuario']);
        $listaPalabras = array ("ordenador", "nosotros", "esternocleidomastoideo", "noche", "dar", "porque", "nuevo", "camino", "bebe", "ahora", "tiempo", "cuando", "ir", "deporte", "cohete", "fuego", "rojo", "pato", "zorro", "baloncesto", "hacer", "jugar");
        $generacionPalabra = strtoupper($listaPalabras[rand(0,22)]); // Intentar que esto no se recargue al recargar la página

        echo $generacionPalabra;

        if (!isset($_POST['Enviar'])) {
    ?>
            <form action="#" method="post">
                Introduzca una letra o palabra: <input type="text" name="palabraUsuario" autofocus><br>
                <input type="submit" name="Enviar" value="Enviar">
            </form>
    <?php
        }else{
    ?>
            <form action="#" method="post">
                Introduzca una letra o palabra: <input type="text" name="palabraUsuario" autofocus><br>
                <input type="submit" value="Enviar">
            </form>
    <?php
            // Usamos la función in_array para buscar el valor introducido por el usuario en el array, y en caso de que esté mostrarlo por pantalla
            if ($generacionPalabra == $palabraUsuario) {
                echo "La palabra introducida es la correcta<br><br>";
            } else {
                echo "La palabra introducida no es la correcta.";
            }
        }
      ?>
</body>
</html>