<?php
    function comprobarFeliz($numero){
        while($numero != $aux){
            $numeroPosiciones = count_chars($numero);
            for($i = 0; $i < $numeroPosiciones; $i++){
                $aux += pow($numero[$i],2);
            }
            if($aux == 1){
                echo "El número $numero es un número feliz";
            }
        }
        if($numero != $aux){
            echo "El número $numero no es un número feliz";
        }
    }
?>