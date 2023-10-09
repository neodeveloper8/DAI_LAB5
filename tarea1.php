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
    Ingresa el valor de hijos en edad escolar: <br> <input type="text" name="nro_hijos"><br>
    Ingresa el valor de total vendido: <br> <input type="text" name="total_vendido"><br>
    Resultado: <br>
    <input type="submit" name="calculo" value="calculo">
    </form>

<?php
$total_vendido=$_POST["total_vendido"];
$nro_hijos=$_POST["nro_hijos"];
$sueldobasico=600;
$bonificacion=50*$nro_hijos;
$comision=0.075*$total_vendido;
$sueldobruto=$sueldobasico+$comision+$bonificacion;
$descuento=$sueldobruto*0.11;
$sueldoneto=$sueldobruto-$descuento;
echo "La comision es: ".$comision. "\n";

echo "La bonificacion es: ".$bonificacion.  "\n";
echo "El sueldo bruto es : ".$sueldobruto. "\n";
echo "El descuento es: ".$descuento. "\n";
echo "El sueldo neto  es: ".$sueldoneto. "\n";
?>
</body>
</html>