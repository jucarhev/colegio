<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Grupos extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Grupos_model');
		$this->load->model('Grados_model');
		$this->load->model('Profesores_model');
		$this->load->model('Alumnos_model');
		
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
			"grupos"=>$this->Grupos_model->get_all($buscar,$inicio,$mostrarpor) 
		);

		$this->vistas('grupos','grupos/index',$data);
	}

	public function new(){
		$data = array(
			'grados' => $this->Grados_model->get_all(''),
			'profesores' => $this->Profesores_model->get_all(''), 
		);
		$this->vistas('Nuevo Grupo','grupos/new',$data);
	}

	public function create(){
		$letra = $this->input->post('letra');
		$turno = $this->input->post('turno');
		$id_grado = $this->input->post('id_grado');

		// Validaciones
		$this->form_validation->set_rules('letra','Letra','required');

		if ($this->form_validation->run() == TRUE) {
			$data = array(
				'letra' => $letra,
				'turno' => $turno,
				'id_grado' => $id_grado
			);
			if ($this->Grupos_model->store($data)) {
				$this->session->set_flashdata('Success','Registro guardado');
				redirect(base_url().'grupos/index');
			}else{
				$this->session->set_flashdata('Error','Registro no guardado');
				redirect(base_url().'grupos/new');
			}
		} else {
			$this->new();
		}
	}

	public function show($id){
		$this->vistas('Nuevo Grupo','grupos/show',array(
			'grupo'=>$this->Grupos_model->show($id),
			'alumnos' => $this->Alumnos_model->alumnos_grupo($id)
			));
	}

	public function edit($id){
		$this->vistas('Editar Grado','grupos/edit',array(
			'grupo'=>$this->Grupos_model->show($id),
			'grados' => $this->Grados_model->get_all(''),
			'profesores' => $this->Profesores_model->get_all('')
			));
	}

	public function update(){
		$id = $this->input->post('id');
		$letra = $this->input->post('letra');
		$turno = $this->input->post('turno');
		$id_asesor= $this->input->post('id_asesor');
		$id_grado = $this->input->post('id_grado');

		// Validaciones
		$this->form_validation->set_rules('letra','Letra','required');

		if ($this->form_validation->run() == TRUE) {
			$data = array(
				'letra' => $letra,
				'turno' => $turno,
				'id_asesor' => $id_asesor,
				'id_grado' => $id_grado
			);
			if ($this->Grupos_model->update($id,$data)) {
				$this->session->set_flashdata('Success','Registro actualizado');
				redirect(base_url().'grupos/index');
			}else{
				$this->session->set_flashdata('Error','Registro no actualizado');
				redirect(base_url().'grupos/new');
			}
		} else {
			$this->edit();
		}
	}

	public function delete($id){
		if($this->Grupos_model->delete($id)){
			$this->session->set_flashdata('Success','Registro eliminado');
			redirect(base_url().'grupos/index'); 
		}else{
			$this->session->set_flashdata('Error','Registro no eliminado');
			redirect(base_url().'grupos/index');
		}
	}

	private function vistas($title='Dashboard',$vista='home/index',$data=null){
		$this->load->view('layouts/header',array('title'=>$title));
		$this->load->view($vista,$data);
		$this->load->view('layouts/footer',$this->menu);
	}

	public function search(){
		$buscador = $this->input->post('search');
		$array = array(
			'buscador' => $buscador
		);
		$this->session->set_userdata( $array );
		redirect(base_url().'grupos');
	}

	private function configuracion_paginacion($buscar,$mostrarpor){
		$config['base_url'] = base_url().'grupos/pagina/';
		$config['total_rows'] = count($this->Grupos_model->get_all($buscar));
		$config['per_page'] = $mostrarpor;
		$config['uri_segment'] = 3;
		$config['num_links'] = 2;
		$config['use_page_numbers'] = TRUE;
		$config['first_url'] = base_url().'grupos';
		$this->pagination->initialize($config);
	}

}

/* End of file Grupos.php */
/* Location: ./application/controllers/Grupos.php */