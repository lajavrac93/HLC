
<?php
function hacer_café($tipo = "capuchino")
{
    return "Hacer una taza de $tipo.\n";
}
$tipo_cafe="";
echo hacer_café($tipo_cafe)."\n";
echo hacer_café()."\n";
echo hacer_café(null)."\n";
echo hacer_café("espresso")."\n";
?>
