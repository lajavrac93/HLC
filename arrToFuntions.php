<?php
//Pasar arrays a funciones
$numeros=array(1,2); //array posicional
tomar_array($numeros);
function tomar_array($entrada)
{
    echo "$entrada[0] + $entrada[1] = ".$entrada[0]+$entrada[1];
}
?>