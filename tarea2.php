<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculos del vendedor</title>
</head>
<body>
    <form method="post"  action="">
    Ingresa el valor de la gaseosa <br> <input type="text" name="Nuevo precio de la gaseosa"><br> Resultado: <br>
    <input type="submit" name="calculo" value="calculo">
    </form>

    
    </form>

    <?php

$precioActualGaseosa = 10.0; // Precio actual de la gaseosa de 3 litros
$cantidadAdquirida = 5; // Cantidad de gaseosas adquiridas


$nuevoPrecioGaseosa = $precioActualGaseosa - ($precioActualGaseosa * 0.05);


$importeCompra = $nuevoPrecioGaseosa * $cantidadAdquirida;

$importeDescuento = $importeCompra * 0.07;


$importeAPagar = $importeCompra - $importeDescuento;

$obsequioCaramelos = $cantidadAdquirida * 2;


echo "Nuevo precio de la gaseosa: $" . number_format($nuevoPrecioGaseosa, 2) . "\n";
echo "Importe de la compra: $" . number_format($importeCompra, 2) . "\n";
echo "Importe del descuento: $" . number_format($importeDescuento, 2) . "\n";
echo "Importe a pagar: $" . number_format($importeAPagar, 2) . "\n";
echo "Obsequio: " . $obsequioCaramelos . " caramelos\n";
?>
</html>