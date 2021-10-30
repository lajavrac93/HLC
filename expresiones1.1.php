<?php
//variables establecidas
$i=8;
$j=5;
$x=0.005;
$y=-0.01;
$c='c';
$d='d';
//variables añadidas
$texto = "";
$abc="abcdegimnopqrstuvwxz";
//operaciones
echo "<h1>Expresiones sencillas </h1>";
//echo "\n".strlen($abc);
 $texto= ($i<=$j)? "<p>". substr($abc,0,1).") " ."$i<=$j".": true</p>":  "<p>". substr($abc,0,1).") " ."$i<=$j".": false</p>";
 echo "<br/>".$texto;
 $texto= ($c>$d)? "<p>". substr($abc,1,1).") " ."($c>$d)".": true</p>": "<p>". substr($abc,1,1).") " ."($c>$d)".": false</p>";
 echo "<br/>".$texto;
 $texto= ($x>=0)? "<p>". substr($abc,2,1).") " ."($x>=0)".": true</p>": "<p>". substr($abc,2,1).") " ."($x>=0)".": false</p>";
 echo "<br/>".$texto;
 $texto= ($x<$y--)? "<p>". substr($abc,3,1).") " ."($x<$y--)".": true</p>": "<p>". substr($abc,3,1).") " ."($x<$y--)".": false</p>";
 echo "<br/>".$texto;
 $texto= ($j!=6)? "<p>". substr($abc,4,1).") " ."($j!=6)".": true</p>": "<p>". substr($abc,4,1).") " ."($j!=6)".": false</p>";
 echo "<br/>".$texto;
 $texto= (!($i<=$j))? "<p>". substr($abc,5,1).") " ."(!($i<=$j))".": true</p>": "<p>". substr($abc,5,1).") " ."(!($i<=$j))".": false</p>";
 echo "<br/>".$texto;
 $texto= (!($x>0))? "<p>". substr($abc,6,1).") " ."(!($x>0))".": true</p>": "<p>". substr($abc,6,1).") " ."(!($x>0))".": false</p>";
 echo "<br/>".$texto;
 $texto= ($c>$d || $c>0 )? "<p>". substr($abc,7,1).") " ."($c>$d || $c>0 )".": true</p>": "<p>". substr($abc,7,1).") " ."($c>$d || $c>0 )".": false</p>";
 echo "<br/>".$texto;
 $texto= (5*($i+$j)>'c')? "<p>". substr($abc,8,1).") " ."(5*($i+$j)>'c')".": true</p>": "<p>". substr($abc,8,1).") " ."(5*($i+$j)>'c')".": false</p>";
 echo "<br/>".$texto;
 $texto= ($x+$y>=0)? "<p>". substr($abc,9,1).") " ."($x+$y>=0)".": true</p>": "<p>". substr($abc,9,1).") " ."($x+$y>=0)".": false</p>";
 echo "<br/>".$texto;
 $texto= (2*$x+($y==0))? "<p>". substr($abc,10,1).") " ."(2*$x+($y==0))".": true</p>": "<p>". substr($abc,10,1).") " ."(2*$x+($y==0))".": false</p>";
 echo "<br/>".$texto;
 $texto= ($x+$y>=0)? "<p>". substr($abc,11,1).") " ."($x+$y>=0)".": true</p>": "<p>". substr($abc,11,1).") " ."($x+$y>=0)".": false</p>";
 echo "<br/>".$texto;
 $texto= ($x<++$y)? "<p>". substr($abc,12,1).") " ."($x<++$y)".": true</p>": "<p>". substr($abc,12,1).") " ."($x<++$y)".": false</p>";
 echo "<br/>".$texto;
 $texto= (-($i+$j)!=-$i+$j)? "<p>". substr($abc,13,1).") " ."(-($i+$j)!=-$i+$j)".": true</p>": "<p>". substr($abc,13,1).") " ."(-($i+$j)!=-$i+$j)".": false</p>";
 echo "<br/>".$texto;
 $texto= ($i<=$j && $i>=$c)? "<p>". substr($abc,14,1).") " ."($i<=$j && $i>=$c)".": true</p>": "<p>". substr($abc,14,1).") " ."($i<=$j && $i>=$c)".": false</p>";
 echo "<br/>".$texto;
 $texto= ($i>0 && $j<5)? "<p>". substr($abc,15,1).") " ."($i>0 && $j<5)".": true</p>": "<p>". substr($abc,15,1).") " ."($i>0 && $j<5)".": false</p>";
 echo "<br/>".$texto;
 $texto= ($i>0 || $j<5)? "<p>". substr($abc,16,1).") " ."($i>0 || $j<5)".": true</p>": "<p>". substr($abc,16,1).") " ."($i>0 || $j<5)".": false</p>";
 echo "<br/>".$texto;
 $texto= ($x>$y && $i>0 || $i<5)? "<p>". substr($abc,17,1).") " ."($x>$y && $i>0 || $i<5)".": true</p>":  "<p>". substr($abc,17,1).") " ."($x>$y && $i>0 || $i<5)".": false</p>";
 echo "<br/>".$texto;
 $texto= (/*($3*$i-2*$j)%(2*$d - $c) > (3 * $d)*/false)? "<p>". substr($abc,18,1).") " ."($3*$i-2*$j)%(2*$d - $c) > 3 * $d".": true</p>": "<p>". substr($abc,18,1).") " ."($3*$i-2*$j)%(2*$d - $c) > 3 * $d".": false</p>";
 echo "<br/>".$texto;
 $texto=/*(($i-(3*$j)) % ($c+2*$d) / ($x-$y)>=0)*/false? "<p>". substr($abc,19,1).") " ."(($i-3*$j) % ($c+2*$d) / ($x-$y)>=0)".": true</p>": "<p>". substr($abc,19,1).") " ."(($i-3*$j) % ($c+2*$d) / ($x-$y)>=0)".": false</p>";
 echo "<br/>".$texto;
 
?>