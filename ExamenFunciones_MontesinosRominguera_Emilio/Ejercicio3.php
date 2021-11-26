<!-- Lógica del Ejercicio 3:
Realizamos el formulario para la recogida de datos del usuario, declarando previamente las variables que vayamos a usar,
para calcular si un número es feliz o no lo que haremos será almacenar el número como string para poder acceder a cada una de sus posiciones sin importar la longitud,
mediante la función "count_chars" sabremos las posiciones que tiene, y a partir de un bucle for recorreremos las posiciones elevando los números al cuadrado
y volviendolos a almacenar para que así en caso de que el número sea infeliz podamos comprararlo con un anterior resultado y verificar que el número era infeliz,
o si, por el contrario, la operación acaba teniendo como resultado 1 mostrará por pantalla que el número es un número feliz. -->

<!-- Hice la explicación pero no pude hacer el desarrollo del ejercicio-->

<!DOCTYPE html>
<html lang="es-ES">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>
<body>
    <?php
        $num=$_POST['num']; // Variable que almacenará el número introducido por el usuario
        if(!isset($num)){
            // Inicializamos las variables

    ?>
            <form action="#" method="post">
                Introduzca un número para saber si es feliz o infeliz: <input type="number" name="num" value="num" autofocus>
                <input type="submit" value="Enviar">
            </form>
    <?php
        } else if($contador < 10){
    ?>
            <form action="#" method="post">
                Introduzca un número para saber si es feliz o infeliz: <input type="number" name="num" value="num" autofocus>
                <input type="submit" value="Enviar">
            </form>
    <?php
        }
        
    ?>
</body>
</html>