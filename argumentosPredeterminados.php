
<?php
//valores predeterminados siempre al final
function hacer_yogur($sabor, $tipo = "acidófilo",$marca="Danone")
{
    return "Hacer un tazón de yogur $tipo de $sabor de la marca $marca.\n";
}

echo hacer_yogur("frambuesa");   // Hacer un tazón de yogur acidófilo de frambuesa de la marca Danone.

?>
