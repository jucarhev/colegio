<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Alumnos extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Home_model');
		$this->menu = array("menu" => $this->Home_model->menu_lateral());

		$this->load->model('Alumnos_model');
		$this->load->helper('matriculas');
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
			"alumnos"=>$this->Alumnos_model->get_all($buscar,$inicio,$mostrarpor) 
		);
		$this->vistas('Nuevo Alumnos','alumnos/index',$data);
	}

	public function new(){
		$this->vistas('Nuevo Alumnos','alumnos/new');
	}

	public function show(){
		echo matriculas();
	}

	public function create(){
		$nombre = $this->input->post('nombre',TRUE);
		$apellido_paterno = $this->input->post('apellido_paterno',TRUE);
		$apellido_materno = $this->input->post('apellido_materno',TRUE);

		// Validaciones
		$this->form_validation->set_rules('nombre','Nombre','required');
		$this->form_validation->set_rules('apellido_paterno','apellido_paterno','required');
		$this->form_validation->set_rules('apellido_materno','apellido_materno','required');

		if ($this->form_validation->run() == TRUE) {
			$data = array(
				'nombre' => $nombre,
				'apellido_paterno' => $apellido_paterno,
				'apellido_materno' => $apellido_materno,
				'matricula' => matriculas()
			);

			if ($this->Alumnos_model->store($data)) {
				$this->session->set_flashdata('Success','Registro guardado');
				redirect(base_url().'alumnos/index');
			}else{
				$this->session->set_flashdata('Error','Registro no guardado');
				redirect(base_url().'alumnos/new');
			}
		} else {
			$this->new();
		}
	}

	public function search(){
		$buscador = $this->input->post('search');
		$array = array(
			'buscador' => $buscador
		);
		$this->session->set_userdata( $array );
		redirect(base_url().'alumnos');
	}

	public function asignar($id){
		$data = array(
			'id_grupo' => $id,
			"alumnos"=>$this->Alumnos_model->get_all('') 
		);
		$this->vistas('Asignar Alumnos','alumnos/asignar',$data);
	}

	public function asignar_grupo(){
		$id_grupo = $this->input->post('id_grupo',TRUE);
		$id_alumno = $this->input->post('id_alumno',TRUE);

		$this->form_validation->set_rules('id_alumno','Alumno','required');

		if ($this->form_validation->run() == TRUE) {
			$data = array(
				'id_grupo' => $id_grupo,
				'id_alumno' => $id_alumno
			);

			if ($this->Alumnos_model->store_grupos($data)) {
				$this->session->set_flashdata('Success','Registro guardado');
				redirect(base_url().'grupos/show/'.$id_grupo);
			}else{
				$this->session->set_flashdata('Error','Registro no guardado');
				redirect(base_url().'alumnos/asignar/'.$id_grupo);
			}
		} else {
			redirect(base_url().'alumnos/asignar/'.$id_grupo);
		}
	}

	// -------------------------------------------------------------------------------
	// ---------------  Metodos privados
	// -------------------------------------------------------------------------------
	private function vistas($title='Dashboard',$vista='home/index',$data=null){
		$this->load->view('layouts/header',array('title'=>$title));
		$this->load->view($vista,$data);
		$this->load->view('layouts/footer',$this->menu);
	}

	private function configuracion_paginacion($buscar,$mostrarpor){
		$config['base_url'] = base_url().'alumnos/pagina/';
		$config['total_rows'] = count($this->Alumnos_model->get_all($buscar));
		$config['per_page'] = $mostrarpor;
		$config['uri_segment'] = 3;
		$config['num_links'] = 2;
		$config['use_page_numbers'] = TRUE;
		$config['first_url'] = base_url().'alumnos';
		$this->pagination->initialize($config);
	}

}

/* End of file Alumnos.php */
/* Location: ./application/controllers/Alumnos.php */