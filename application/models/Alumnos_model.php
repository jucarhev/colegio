<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Alumnos_model extends CI_Model {

	public function __construct(){
		parent::__construct();
	}

	function get_all($nombre,$inicio=FALSE,$cantidad=FALSE){
		$this->db->like('nombre', $nombre);
		if ($inicio !== FALSE && $cantidad !== FALSE) {
			$this->db->limit($cantidad,$inicio);
		}
		$result = $this->db->get('alumnos');
		return $result->result();
	}

	public function store($data){
		return $this->db->insert('alumnos', $data);
	}

	public function store_grupos($data){
		return $this->db->insert('alumnos_grupo', $data);
	}

	public function alumnos_grupo($id){
		$this->db->select('a.id, a.nombre, a.apellido_paterno, a.apellido_materno, a.matricula');
		$this->db->from('alumnos as a');
		$this->db->join('alumnos_grupo as ag', 'ag.id_alumno=a.id');
		$this->db->join('grupos as g', 'ag.id_grupo=g.id');
		$this->db->where('g.id', $id);
		$result = $this->db->get();
		return $result->result();
	}

}

/* End of file Alumnos_model.php */
/* Location: ./application/models/Alumnos_model.php */