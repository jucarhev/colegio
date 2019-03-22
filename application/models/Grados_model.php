<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Grados_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}

	public function get_all(){
		return $this->db->get('grados')->result();
	}

	public function store($data){
		return $this->db->insert('grados', $data);
	}

	public function update($is,$data){}
	public function delete($id){}

}

/* End of file Grados_model.php */
/* Location: ./application/models/Grados_model.php */