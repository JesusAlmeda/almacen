<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Inicio_model extends CI_Model {
    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    
    function conexion(){

        $consulta = 3*9;
        return $consulta;       
        
    }

}
?>