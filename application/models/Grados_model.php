<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Grados_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}

	public function get_all($per_page=false,$offset= 0,$search=''){
		if ($search != '') {
			$this->db->like('nombre',$search);

			if ($per_page == false and $offset == 0) {
				return $this->db->get('grados')->result();
			}else{
				return $this->db->get('grados',$per_page,$offset)->result();
			}
		}else{
			if ($per_page == false and $offset == 0) {
				return $this->db->get('grados')->result();
			}else{
				return $this->db->get('grados',$per_page,$offset)->result();
			}
		}
	}

	public function store($data){
		return $this->db->insert('grados', $data);
	}

	public function show($id){
		$this->db->where('id', $id);
		$resultado = $this->db->get('grados');
		return $resultado->row();
	}

	public function update($id,$data){
		$this->db->where('id', $id);
		return $this->db->update('grados', $data);
	}

	public function delete($id){
		$this->db->where('id', $id);
		return $this->db->delete('grados');
	}

	public function count_grados(){
		return $this->db->get('grados')->result();
	}

}

/* End of file Grados_model.php */
/* Location: ./application/models/Grados_model.php */