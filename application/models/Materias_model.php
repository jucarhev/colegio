<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Materias_model extends CI_Model {

	public function __construct(){
		parent::__construct();
	}

	public function get_all($nombre,$inicio=FALSE,$cantidad=FALSE){
		$this->db->like('nombre', $nombre);
		if ($inicio !== FALSE && $cantidad !== FALSE) {
			$this->db->limit($cantidad,$inicio);
		}
		$result = $this->db->get('materias');
		return $result->result();
	}

	public function store($data){
		return $this->db->insert('materias', $data);
	}

	public function delete($id){
		$this->db->where('id', $id);
		return $this->db->delete('materias');
	}

	public function show($id){
		$this->db->where('id', $id);
		$result = $this->db->get('materias');
		return $result->row();
	}

	public function update($id,$data){
		$this->db->where('id', $id);
		return $this->db->update('materias', $data);
	}

}

/* End of file Materias_model.php */
/* Location: ./application/models/Materias_model.php */