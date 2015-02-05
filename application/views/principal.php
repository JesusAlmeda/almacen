<?php
	if($conexion -> num_rows() > 0){
		foreach($conexion -> result() as $row){
			echo $row->Articulo;
		}
	}
?>