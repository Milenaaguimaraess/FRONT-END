<?php
        echo "Olá mundo!!";

        $repetir = True;
        $vezes = 10;
        $contador = 1;

        while ($repetir == True){
        echo "<br> estou repetindo";
        
            if ($contador == $vezes){
                // break;
                $repetir = false;
            }
         
            $contador++;
        }
    ?>