<?php
 $a = 1; /* ámbito global */

function test()
{
    //se modifica la variable de ámbito global desde la función
    $a = 10;
    echo "Dentro de la función $a y la global $GLOBALS[a]<br>"; /* referencia a una variable del ámbito local */

}
//se muestra el valor de la variable de ámbito global
//modificada en la función
echo "Fuera de la función $a <br>";
function test2()
{
    //se modifica la variable de ámbito global desde la función
    $GLOBALS['a'] = 10;
    echo "Dentro de la función 2 "; /* referencia a una variable del ámbito local */
    var_dump($GLOBALS['a']);
    
}
//se muestra el valor de la variable de ámbito global
//modificada en la función
echo "Fuera de la función 2 $a <br>";
function test_globals()
{
    //se modifica la variable de ámbito global desde la función
    global $a ;// no se puede asignar valor al referenciarle.
    $a =10;
    echo "Dentro de la función test_globals "; /* referencia a una variable del ámbito local */
    var_dump($a);
    
}
//se muestra el valor de la variable de ámbito global
//modificada en la función
echo "Fuera de la función test_globals $a <br>";



test();
test2();
test_globals();
?>