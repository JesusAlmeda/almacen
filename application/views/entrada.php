<?php
 $attributes = array('class' => 'email', 'id' => 'datosTabla');

 $nombre = array(
 	'name'	=> 'Nombre',
 	'id'   	=> 'Nombre', 
 	'type' => 'text'
 	);

  $contra = array(
 	'name'	=> 'Contra',
 	'id'   	=> 'Contra', 
 	'type' 	=> 'password'
 	);

	echo "<div class='container' id='usuarioAcceso'>";
			echo form_open('',$attributes );
				echo "<table class='table table-bordered' >";
					echo "<thead>";
						echo "<tr><th colspan='2'><center>Datos del usuario</center></th></tr>";
					echo "</thead>";
					echo "<tbody>";
						echo "<tr><th>Usuario</th><td>".form_input($nombre)."</td>";
						echo "<tr><th>Contraseña</th><td>".form_input($contra)."</td>";
						echo "<tr><th colspan=121 ><center><input type='submit' value='Accesar' class='btn btn-default'></center></th></tr>";
					echo "<tbody>";
				echo "<table>";
			echo form_close();
	echo "</div>";
?>

	
		
				
