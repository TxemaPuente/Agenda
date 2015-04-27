<?php
/*// Conectando, seleccionando la base de datos
$link = mysql_connect('localhost', 'root', '')
    or die('No se pudo conectar: ' . mysql_error());
echo 'Connected successfully';
mysql_select_db('contactos') or die('No se pudo seleccionar la base de datos');*/



// Realizar una consulta MySQL

//$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());



require_once('core/Database.php');
$db = new Database();
$db->connect();
$query = 'SELECT * FROM agenda';
$db->sql($query);
$result = $db->getResult();

// Cerrar la conexión
$db->disconnect();



?>




<h1><a href="insertar.php">Insertar contacto</a></h1>

<table>



	<tbody>
	
	<?php while ($linea = mysql_fetch_array($result, MYSQL_ASSOC)) { ?>
	
	<tr>
		<td><?php echo $linea['id'];?></td>
		<td><?php echo $linea['nombre'];?></td>
		<td><?php echo $linea['telefono'];?></td>
		<td>
			<a href="delete.php?id=<?php echo $linea['id'];?>" >borrar</a>
		</td>
		
		<td>
			<a href="modificar.php?id=<?php echo $linea['id'];?>">Modificar</a>
		</td>
	</tr> 
	
	<?php } ?>
</table>

<?php 



?>
