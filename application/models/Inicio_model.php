<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Inicio_model extends CI_Model {
    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    
    function conexion(){
        $conexion = $this->db->get('ab_articulos');
        return $conexion;
    }

    function comprobar($nombre, $contra){
    	$condicion = array(
    			'ab_usuarios.Nombre'	=> $nombre,
    			'ab_usuarios.Contra'	=> $contra
    		);
    	$resultado = $this->db->get_where('ab_usuarios', $condicion);
    	return $resultado;
    }

}
?>