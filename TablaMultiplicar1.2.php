<?php
$min=2;
$max=9;

echo "<h1>Tablas de multiplicar del $min</h1>\n";
for ($i=$min; $i<=$max ; $i++){
    echo "<h3>Tabla del $i:</h3>\n";
    for ($j=0; $j <=10 ; $j++) {
        echo "<p>$i * $j =".($i*$j)."</p>\n";
    }
    echo "\n";
}