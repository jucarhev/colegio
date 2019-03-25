<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Grupos_model extends CI_Model {

	public function __construct()	{
		parent::__construct();
		
	}

	public function get_all($per_page=false,$offset= 0,$search=''){}

	public function store($data){
		return $this->db->insert('grupos', $data);
	}

	public function delete($id){
		$this->db->where('id', $id);
		return $this->db->delete('grupos');
	}

	public function show($id){
		$this->db->where('id', $id);
		$resultado = $this->db->get('grupos');
		return $resultado->row();
	}

	public function update($id,$data){
		$this->db->where('id', $id);
		return $this->db->update('grupos', $data);
	}

}

/* End of file Grupos_model.php */
/* Location: ./application/models/Grupos_model.php */