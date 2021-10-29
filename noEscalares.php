
<?php
function hacer_cafe($tipos = array("capuchino"), $fabricanteCafe = NULL)
{
    $aparato = is_null($fabricanteCafe) ? "las manos" : $fabricanteCafe;
    return "Hacer una taza de ".join(", ", $tipos)." con $aparato.\n";
}
echo hacer_cafe();
echo hacer_cafe(array("capuchino", "lavazza"), "una tetera");
?>
