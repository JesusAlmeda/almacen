<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {
	function __construct() {
		parent::__construct();
	}
   	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{	
		$datos['conexion']=$this->Inicio_model->conexion();
		if($_POST){
			$nombre = $this->input->post('Nombre');
			$contra = $this->input->post('Contra');
			$datos['usuario'] = $this->Inicio_model->comprobar($nombre, $contra);
			$this->load->view('estructura/head');
			$this->load->view('comprobar', $datos);
			$this->load->view('estructura/foot1');

		}else{
			$this->load->view('estructura/head');
			$this->load->view('entrada', $datos);
			$this->load->view('estructura/foot1');
		}
	}

	public function principal()
	{	
			$this->load->view('estructura/head');
			$this->load->view('estructura/top');
			$this->load->view('principal');
			$this->load->view('estructura/foot1');
		
	}
}
