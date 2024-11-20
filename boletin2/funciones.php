<?php
            function a_binario($numero) {
                return decbin($numero); // Convierte a binario usando la función PHP nativa
            }

            function a_hexadecimal($numero) {
                return dechex($numero); // Convierte a hexadecimal usando la función PHP nativa
            }

            function a_simbolo($numero) {
                // Convierte el número en el correspondiente carácter ASCII
                return ($numero >= 32 && $numero <= 126) ? chr($numero) : ''; 
                // Muestra solo caracteres imprimibles (entre 32 y 126 en ASCII)
            }
?>