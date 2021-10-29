<?php
//factorial con recursividad

$valor=7;

echo "<h3>El factorial de $valor es: ".(calculo($valor))."</h3>";

//funcion que recibe un numero si ese numero es 1 termina y devuelve 1, sino la funcion multiplica el numero que le llega por ella misma menos 1
function calculo($num){
    
    if($num>1){
       return $num * calculo($num-1);    
    }else{

    return $num;
    }
}
?>