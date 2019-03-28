<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Profesores extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Profesores_model');

		$this->load->model('Home_model');
		$this->menu = array("menu" => $this->Home_model->menu_lateral());
	}

	public function index($nropagina=FALSE){
		$inicio = 0;
		$mostrarpor = 5;

		if ($nropagina) {
			$inicio = ($nropagina - 1) * $mostrarpor;
		}

		$buscar = '';
		if ($this->session->userdata('buscador')) {
			$buscar = $this->session->userdata('buscador');
			$this->session->unset_userdata('buscador');
		}

		$this->configuracion_paginacion($buscar,$mostrarpor);

		$data = array(
			"profesores"=>$this->Profesores_model->get_all($buscar,$inicio,$mostrarpor) 
		);

		$this->layouts('profesores','profesores/index',$data);
	}

	public function new(){
		$this->layouts('Nuevo Profesor','profesores/new');
	}

	public function search(){
		$buscador = $this->input->post('search');
		$array = array(
			'buscador' => $buscador
		);
		$this->session->set_userdata( $array );
		redirect(base_url().'profesores');
	}

	// Metodos privados

	private function layouts($title='Home',$vista="home/index",$data=null){
		$this->load->view('layouts/header',array('title'=>$title));
		$this->load->view($vista, $data);
		$this->load->view('layouts/footer',$this->menu);
	}

	private function configuracion_paginacion($buscar,$mostrarpor){
		$config['base_url'] = base_url().'profesores/pagina/';
		$config['total_rows'] = count($this->Profesores_model->get_all($buscar));
		$config['per_page'] = $mostrarpor;
		$config['uri_segment'] = 3;
		$config['num_links'] = 2;
		$config['use_page_numbers'] = TRUE;
		$config['first_url'] = base_url().'profesores';
		$this->pagination->initialize($config);
	}

}

/* End of file Profesores.php */
/* Location: ./application/controllers/Profesores.php */