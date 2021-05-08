<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Controller_crud extends CI_Controller {

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

     function __construct()
     {
         parent::__construct();
		 $this->load->model('model_crud');
		 
     }


	public function index()
	{
		$this->load->view('crud');
		
	}

	public function guardar(){
		
		$fechaRegistro = date("Y-m-d");
		$param['np'] = $this->input->post('exampleInputNamprod');
		$param['re'] = $this->input->post('exampleInputRefe');
		$param['prec'] = $this->input->post('exampleInputPrecio');
		$param['pes'] = $this->input->post('exampleInputPeso');
		$param['cat'] = $this->input->post('inputcategoria');
		$param['st'] = $this->input->post('exampleInputStock');
		$param['fec'] = $fechaRegistro;
		
		$resul  = $this->model_crud->guardar($param);
		
		if($resul > 0){
			$this->load->view('crud');
			echo json_encode(1);
		}
	}

	public function getproductos(){
	
		echo json_encode($this->model_crud->getproductos());
	}

	public function modificar(){
		
		$fechaRegistro = date("Y-m-d");
		$param['np'] = $this->input->post('exampleInputNamprod_m');
		$param['re'] = $this->input->post('exampleInputRefe_m');
		$param['prec'] = $this->input->post('exampleInputPrecio_m');
		$param['pes'] = $this->input->post('exampleInputPeso_m');
		$param['cat'] = $this->input->post('inputcategoria_m');
		$param['st'] = $this->input->post('exampleInputStock_m');
		$param['id'] = $this->input->post('exampleInputID_m');
		$param['fec'] = $fechaRegistro;
	
		$resul  = $this->model_crud->modificar($param);
		
		if($resul > 0){
			echo json_encode(1);
			
		}
	}

	public function eliminar(){
		$param['id'] = $this->input->post('id');
		$resul  = $this->model_crud->eliminar($param);
		
		if($resul > 0){
			echo json_encode(1);
			
		}
	}
}