<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Calendario extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Home_model');
	}

	public function index(){
		$data = array("menu" => $this->Home_model->menu_lateral());
		$this->load->view('layouts/header',array('title'=>'Home'));
		$this->load->view('calendario/index');
		$this->load->view('layouts/footer',$data);
	}

}

/* End of file Calendario.php */
/* Location: ./application/controllers/Calendario.php */