$(function(){
	$("#verultima").click(function(){
			$("#productosMas").load("verUltima.php");	
			
	});

	$("#confirmar").click(function (){
		if(confirm('Desea Eliminar este articulo?')){
			location.href = $this.href;
			return false;
		}else{
			location.href='generarNueva.php';
		}
	});


});



 