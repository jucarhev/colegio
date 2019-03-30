<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Profesores_model extends CI_Model {

	public function __construct(){
		parent::__construct();
	}

	function get_all($nombre,$inicio=FALSE,$cantidad=FALSE){
		$this->db->like('nombre', $nombre);
		if ($inicio !== FALSE && $cantidad !== FALSE) {
			$this->db->limit($cantidad,$inicio);
		}
		$result = $this->db->get('profesores');
		return $result->result();
	}

	public function save($data){
		return $this->db->insert('profesores', $data);
	}

}

/* End of file Profesores_model.php */
/* Location: ./application/models/Profesores_model.php */