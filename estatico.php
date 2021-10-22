
<?php
//funcion que no sirve al no guardar la informacion
function contarfail()
{
    $a = 0;
    echo "$a<br>";
    $a++;
}
//funcion que pese a terminar guarda la información
function contar()
{
    static $a = 0;
    echo "static $a<br>";
    $a++;
}
//recursiva
function contar_recursivo()
{
    static $count = 0;

    $count++;
    echo "recursivo $count<br>";
    if ($count < 10) {
        contar_recursivo();
    }
    $count--;
}
for ($i=0; $i < 5; $i++) { 
    # code...
    contar();
    echo "<br>";
    contarfail();
    echo "<br>";
    contar_recursivo();
}
?>
