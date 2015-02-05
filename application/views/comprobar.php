<?php
 if($usuario -> num_rows() > 0){
 	
 		echo base_url();
 		$ruta = "<script>location.href='".base_url() ."index.php/inicio/principal';</script>";
 		echo $ruta;
 	
 }else{

 }

?>