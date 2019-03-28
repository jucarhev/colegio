<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Grupos_model extends CI_Model {

	public function __construct()	{
		parent::__construct();
		
	}

	public function get_all($letra,$inicio=FALSE,$cantidad=FALSE){
		$this->db->like('letra', $letra);
		if ($inicio !== FALSE && $cantidad !== FALSE) {
			$this->db->limit($cantidad,$inicio);
		}

		$this->db->select('go.id,go.letra,go.turno,go.id_asesor,go.id_grado,ga.nombre as grado,p.nombre as asesor');
		$this->db->from('grupos as go');
		$this->db->join('grados as ga', 'go.id_grado=ga.id');
		$this->db->join('profesores as p', 'go.id_asesor=p.id');
		$result = $this->db->get();

		return $result->result();
	}

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