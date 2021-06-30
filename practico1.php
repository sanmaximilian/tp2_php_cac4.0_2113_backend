<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabajo practico Backend PHP</title>
</head>
<body>
    <?php 


/*
1-Crear un programa en PHP en el cual muestre en la página nombre, apellido, edad, hobbie, editor de código preferido, sistema operativo que utiliza.
2-El programa deber ser subido a un repositorio de GitHub, pegar el link del ejercicio resuelto en el siguiente recuadro
*/

//  Exacto, pueden, para hacerlo más simple crear un array asociativo 
// con todos los datos y luego recorrerlo con un foreach parar mostrarlo
// en el navegador - Robinson a traves de whatsapp


$fichaalumno1 = [
    "nombre"=>"Santiago Maximiliano",
    "apellido"=>"Bomba",
    "edad"=>"43",    
    // settype($edad,"int");
    "hobbie"=>"preparacion de comidas, karate, rugby, karaoke nivel ninja",
    "editordecodfav"=>"Visual Studio Code / VIM / EDIT del D.O.S",
    "soqueusa"=>"WINDOWS 10, WINDOWS 7, WINDOWS XP, DEBIAN, SLACKWARE, KUBUNTU, UBUNTU"
    
];
echo "<pre>";
var_dump($fichaalumno1);
// echo nl2br("Nombre del alumno: " . $fichaalumno1["nombre"]);

// metodo normal echo linea por linea
echo "<pre>";
echo "<br>" . "Nombre del alumno: " . $fichaalumno1["nombre"];
echo "<br>" . "Apellido: " . $fichaalumno1["apellido"];
echo "<br>" . "Edad: " . $fichaalumno1["edad"];
echo "<br>" . "Hobbies: " . $fichaalumno1["hobbie"];
echo "<br>" . "Editor de codigo favorito: " . $fichaalumno1["editordecodfav"];
echo "<br>" . "Sistema operativo que usa: " . $fichaalumno1["soqueusa"];



// metodo con un foreach
// hacer un foreach mezclado 
echo "<pre>";
echo "Mostrar con foreach";


 
foreach($fichaalumno1 as $etiqueta=>$dato)
	{
	echo $etiqueta . " : " . $dato;
	echo "<br>";
	}

?>

</body>
</html>