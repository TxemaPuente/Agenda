<?php

	//require_once 'insert_modificar.php';
	require_once 'agenda.php';
	
	//recoger id por GET
	$id=$_GET['id'];
	
	//consultar el detalle del usuario en la bbdd
	$link = mysql_connect('localhost', 'root', '')
	or die('No se pudo conectar: ' . mysql_error());
	echo 'Connected successfully';
	mysql_select_db('contactos') or die('No se pudo seleccionar la base de datos');
	
	// Realizar una consulta MySQL
	$query = 'SELECT * FROM agenda where id='.$id;
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
	$usuario = mysql_fetch_array($result, MYSQL_ASSOC);
	
	
	//var_dump($usuario);
	
	//rellenar el formualrio
	
?>


<form method="post" action="insert_modificar.php">


	<label for="nombre">Introducir Nombre</label>
	<input type="text" name="nombre" id="nombre" value="<?php echo ($usuario['nombre']);?>" >
	 <br>
	 <br>
	 <label for="numero">Introducir Numero</label>
	 <input type="text" name="telefono" id="numero"  value="<?php echo ($usuario['telefono']);?>" >
	 <br>
	 <br>
	 
	 <!-- input hidden donde recibimose el id -->
	 <input type="hidden" name="id" value="<?php echo ($usuario['id']);?>">
	 <input type="submit" value="Modificar">


</form>


<a href="agenda.php">Vover a Agenda</a>
