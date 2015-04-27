<?php

require_once 'modelo/ModeloAgenda.php';

$result = getContactos();


?>




<h1><a href="insertar.php">Insertar contacto</a></h1>

<table>



	<tbody>
	
	<?php foreach ($result as $contacto) { ?>
    

	
	<tr>
		<td><?php echo $contacto['id'];?></td>
		<td><?php echo $contacto['nombre'];?></td>
		<td><?php echo $contacto['telefono'];?></td>
		<td>
			<a href="delete.php?id=<?php echo $contacto['id'];?>" >borrar</a>
		</td>
		
		<td>
			<a href="modificar.php?id=<?php echo $contacto['id'];?>">Modificar</a>
		</td>
	</tr> 
	
	<?php } //Final del foreach  ?>
</table>

