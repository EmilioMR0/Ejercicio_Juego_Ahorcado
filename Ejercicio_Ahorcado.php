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
        <meta name="description" content="Realización del Ejercicio 11 de Arrays">
        <title>Ejercicio 11</title>
        <link rel="stylesheet" href=".././css/estilos.css">
</head>
<body>
    <?php
        $palabraES = $_POST['palabraES'];
        $traducciones = array ("ordenador", "nosotros", "esternocleidomastoideo", "noche", "dar", "porque", "nuevo", "camino", "bebe", "ahora", "tiempo", "cuando", "ir", "deporte", "cohete", "fuego", "rojo", "pato", "zorro", "baloncesto", "hacer", "jugar");
        $generacionPalabra = $traducciones[rand(0,21)];

        echo strtoupper($generacionPalabra);

        if (!isset($palabraES)) {
    ?>
            <form action="#" method="post">
                Introduzca una palabra en Español: <input type="text" name="palabraES" autofocus><br>
                <input type="submit" value="Enviar">
            </form>
    <?php
        }else{
    ?>
            <form action="#" method="post">
                Introduzca una palabra en Español: <input type="text" name="palabraES" autofocus><br>
                <input type="submit" value="Enviar">
            </form>
    <?php
            // Usamos la función in_array para buscar el valor introducido por el usuario en el array, y en caso de que esté mostrarlo por pantalla
            if (in_array($palabraES, $palabraEnEspanol)) {
                echo "$palabraES en inglés es $traducciones[$palabraES]<br><br>";
            } else {
                echo "La palabra introducida no está en el diccionario.";
            }
        }
      ?>
</body>
</html>