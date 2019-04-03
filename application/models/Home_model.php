<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home_model extends CI_Model {

	public function __construct(){
		parent::__construct();
	}

	public function menu_lateral(){
		$data = array(
			'Grados' => count($this->db->get('grados')->result()),
			'Grupos' => count($this->db->get('grupos')->result()),
			'Alumnos' => count($this->db->get('alumnos')->result()),
			'Profesores' => count($this->db->get('profesores')->result()),
			'Materias' => count($this->db->get('materias')->result()),
		);
		return $data;
	}

	public function panel(){
		$data = array(
			'Grados' => ['Grados','grados/index','fa-level',count($this->db->get('grados')->result())]
		);
	}

	public function comprobar_curso_actual(){
		return $this->db->get('grados')->result();
	}

}

/* End of file Home_model.php */
/* Location: ./application/models/Home_model.php */