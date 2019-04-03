<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Home_model');
		$this->load->helper('fechas');
	}

	public function index(){
		$data = array("menu" => $this->Home_model->menu_lateral());
		$this->load->view('layouts/header',array('title'=>'Home'));
		$this->load->view('home/home',array('fecha'=>$this->panel()));
		$this->load->view('layouts/footer',$data);
	}

	public function error_404(){
		$data = array("menu" => $this->Home_model->menu_lateral());
		$this->load->view('layouts/header',array('title'=>'Error 404'));
		$this->load->view('home/404.php');
		$this->load->view('layouts/footer',$data);
	}

	public function panel(){
		$datos = [];
		$resultados = $this->Home_model->comprobar_curso_actual();
		foreach ($resultados as $value) {
			array_push($datos,fecha_actual($value->inicio,$value->fin));
		}
		return $datos;
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */