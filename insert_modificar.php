<?php

// Conectando, seleccionando la base de datos
$link = @mysql_connect('localhost', 'root', '')
or die('No se pudo conectar: ' . mysql_error());
echo 'Connected successfully';
@mysql_select_db('contactos') or die('No se pudo seleccionar la base de datos');

//variables para hacer la modificacion

$nombre=$_POST['nombre'];
$telefono=$_POST['telefono'];
$id = $_POST['id'];


// Realizar una modificacion
//$query =  "UPDATE `agenda` SET `nombre`='".$nombre."',`telefono`='".$telefono."' WHERE `id`='.$id";

$query = "UPDATE `agenda` SET `nombre`='".$nombre."',`telefono`='".$telefono."' WHERE `id`=".$id;

echo($query);

// "UPDATE `agenda` SET `id`=$id,`nombre`=$nombre,`telefono`=$telefono WHERE `id`=$id";
$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());




// Cerrar la conexión
mysql_close($link);


//volver al index.php

header('Location: index.php');
