<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Agregar extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->model("Persona_model");
    }

	public function index()
	{
		$data2['titulo'] = 'Agregar';
		$this->load->view('plantillas/header', $data2); 
		$this->load->view('persona/agregar');
		$this->load->view('plantillas/footer');
	}

	public function guardar()
	{
		$ci = $this->input->post("ci");
		$ncompleto = $this->input->post("ncompleto");
		$fnac = $this->input->post("fnac");
		$dep = $this->input->post("dep");
		$telf = $this->input->post("telf");
		
		$data = array(
			"ci"=>$ci,
			"nombre_completo"=>$ncompleto,
			"fecha_de_nacimiento"=>$fnac,
			"departamento"=>$dep,
			"telefono"=>$telf
		);

		$this->Persona_model->guardar($data);
		redirect(base_url()."index.php/Persona");
	}

}
