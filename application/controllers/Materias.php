<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Materias extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Home_model');
		$this->menu = array("menu" => $this->Home_model->menu_lateral());

		$this->load->model('Materias_model');
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
			'materias' => $this->Materias_model->get_all($buscar,$inicio,$mostrarpor),
		);
		$this->vistas('Materias','materias/index',$data);
	}

	public function show($id){
		# code...
	}

	public function edit($id){
		$data = array(
			'materia' => $this->Materias_model->show($id)
		);
		$this->vistas('Editar materia','materias/edit',$data);
	}

	public function delete($id){
		if ($this->Materias_model->delete($id)){
			$this->session->set_flashdata('Success', 'Eliminado');
			redirect(base_url().'materias/index');
		}else{
			$this->session->set_flashdata('Error', 'Ocurrio un erros');
			redirect(base_url().'materias/index');
		}
	}

	public function update(){
		$id = $this->input->post('id');
		$nombre = $this->input->post('nombre', TRUE);
		$clave = $this->input->post('clave', TRUE);

		$this->form_validation->set_rules('nombre', 'Nombre', 'trim|required');
		$this->form_validation->set_rules('clave', 'clave', 'trim|required');

		if($this->form_validation->run() == TRUE){
			$data = array(
				'nombre' => $nombre,
				'clave' => $clave,
			);

			if($this->Materias_model->update($id,$data)){
				$this->session->set_flashdata('Success', 'Registro guardado');
				redirect(base_url().'materias/index');
			}else{
				$this->session->set_flashdata('Error', 'Error al guardar datos');
				redirect(base_url().'materias/index');
			}
		}else{
			$this->index();
		}
	}

	public function new(){
		$this->vistas('Nueva materia','materias/new');
	}

	public function store(){
		$nombre = $this->input->post('nombre', TRUE);
		$clave = $this->input->post('clave', TRUE);

		$this->form_validation->set_rules('nombre', 'Nombre', 'trim|required');
		$this->form_validation->set_rules('clave', 'clave', 'trim|required');

		if($this->form_validation->run() == TRUE){
			$data = array(
				'nombre' => $nombre,
				'clave' => $clave,
			);

			if($this->Materias_model->store($data)){
				$this->session->set_flashdata('Success', 'Registro guardado');
				redirect(base_url().'materias/new');
			}else{
				$this->session->set_flashdata('Error', 'Error al guardar datos');
				redirect(base_url().'materias/new');
			}
		}else{
			$this->new();
		}
	}

	/* Metodos privados */
	private function vistas($title='Dashboard',$vista='home/index',$data=null){
		$this->load->view('layouts/header',array('title'=>$title));
		$this->load->view($vista,$data);
		$this->load->view('layouts/footer',$this->menu);
	}

	private function configuracion_paginacion($buscar,$mostrarpor){
		$config['base_url'] = base_url().'materias/pagina/';
		$config['total_rows'] = count($this->Materias_model->get_all($buscar));
		$config['per_page'] = $mostrarpor;
		$config['uri_segment'] = 3;
		$config['num_links'] = 2;
		$config['use_page_numbers'] = TRUE;
		$config['first_url'] = base_url().'materias';
		$this->pagination->initialize($config);
	}

}

/* End of file Materias.php */
/* Location: ./application/controllers/Materias.php */