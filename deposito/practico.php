<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
/*
1-Crear un programa en PHP en el cual muestre en la página nombre, apellido, edad, hobbie, editor de código preferido, sistema operativo que utiliza.

2-El programa deber ser subido a un repositorio de GitHub, pegar el link del ejercicio resuelto en el siguiente recuadro

*/

// Matriz:
//  Exacto, pueden, para hacerlo más simple crear un array asociativo 
// con todos los datos y luego recorrerlo con un foreach parar mostrarlo
// en el navegador - Robinson a traves de whatsapp


//fecha y hora
// https://www.php.net/manual/es/function.date-default-timezone-set.php

// muestra la hora mal...
$hora = date("H.i.s");
echo "Muestra mal la hora: " . $hora;

// muestra la hora bien...

// correccion del time zone:
date_default_timezone_set('America/Argentina/Buenos_Aires');
// America/Argentina/Buenos_Aires

// correccion del time zone:
echo "<br>";
$hora = date("H.i.s");
echo "La hora es: ", $hora;
// ahora muestra bien la hora
?>

</body>
</html>