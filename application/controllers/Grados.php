<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Grados extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Home_model');
		$this->load->model('Grados_model');

		$this->menu = array("menu" => $this->Home_model->menu_lateral());
	}

	public function index(){
		$this->vistas('Grados','grados/index',array('grados'=> $this->Grados_model->get_all()));
	}

	public function new(){
		$this->vistas('Nuevo Grado','grados/new');
	}

	public function create(){}
	
	public function show($id){
		$this->vistas('Nuevo Grado','grados/show',array('grado'=>$this->Grados_model->show($id)));
	}

	public function edit($id){
		$this->vistas('Nuevo Grado','grados/edit');
	}

	public function update($id){}

	public function delete($id){}

	/* Metodos privados */
	private function vistas($title='Dashboard',$vista='home/index',$data=null){
		$this->load->view('layouts/header',array('title'=>$title));
		$this->load->view($vista,$data);
		$this->load->view('layouts/footer',$this->menu);
	}

}

/* End of file Grados.php */
/* Location: ./application/controllers/Grados.php */