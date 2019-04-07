<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Grados_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}

	function get_all($nombre,$inicio=FALSE,$cantidad=FALSE){
		
		$this->db->select('g.id,g.nombre,g.tipo,g.status,fg.fecha_inicio,fg.fecha_fin');
		$this->db->from('grados as g');
		$this->db->join('fechas_grados as fg', 'fg.id_grado=g.id');
		
		$this->db->like('g.nombre', $nombre);
		if ($inicio !== FALSE && $cantidad !== FALSE) {
			$this->db->limit($cantidad,$inicio);
		}
		$result = $this->db->get();
		return $result->result();
	}

	public function store($data){
		$datos = array(
			'nombre' => $data['nombre'],
			'status' => $data['status'],
			'tipo' => $data['tipo'],
			'created_at' => $data['created_at'],
			);
		if($this->db->insert('grados', $datos)){
			$res = $this->db->select('id')
						->where('nombre' , $data['nombre'])
						->where('status' ,$data['status'] )
						->where('tipo' , $data['tipo'])
						->where('created_at' ,$data['created_at'] )
						->get('grados')
						->row();
			$datosag = array(
				'id_grado' => $res->id,
				'fecha_fin' => $data['inicio'],
				'fecha_inicio' => $data['fin'],
			);
			return $this->db->insert('fechas_grados', $datosag);
		}else{
			return FALSE;
		}
	}

	public function testing(){
			$res = $this->db->select('id')
							->where('nombre' , 'Segundo')
							->where('status' , 'Inactivo')
							->where('tipo' , 'Semestre')
							->where('created_at' , '2019-04-07')
							->get('grados')
							->row();
		print_r($res->id);

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