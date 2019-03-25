<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Grupos extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Grupos_model');
		
		$this->load->model('Home_model');
		$this->menu = array("menu" => $this->Home_model->menu_lateral());
	}

	public function index($offset = 0){
		$this->vistas('Grados','grupos/index');
	}

	public function new(){
		$this->vistas('Nuevo Grupo','grupos/new');
	}

	public function create(){}

	public function show($id){
		$this->vistas('Nuevo Grupo','grupos/show',array('grupo'=>$this->Grupos_model->show($id)));
	}

	public function edit($id){
		$this->vistas('Editar Grado','grupos/edit',array('grado'=>$this->Grados_model->show($id)));
	}

	public function update(){}

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

}

/* End of file Grupos.php */
/* Location: ./application/controllers/Grupos.php */