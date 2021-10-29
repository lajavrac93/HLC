<?php
//variables establecidas
$i=8;
$j=5;
$x=0.005;
$y=-0.01;
$c='c';
$d='d';
//variables añadidas
$abc="abcdefghijklmnopqrstuvwxz";
$funciones=array($i<=$j,$c>$d,$x>=0,$x<$y--,$j!=6,!($i<=$j),"",);
//operaciones
echo "<h1>Expresiones sencillas </h1>";
for ($i=0; $i <strlen($abc) ; $i++) { 
    
}
//funcion callback
function evalua(bool $a,string $b){
    return $a?"<p>$b = true</p>":"<p>$b = false</p>";
}
?>