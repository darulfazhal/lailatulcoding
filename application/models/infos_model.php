<?php
class Infos_model extends CI_Model{

	public function __construct()
	{
        // Call the CI_Model constructor
        parent::__construct();
	}

	public function getAll()
	{
		$this->db->select("*");
		$this->db->from("infos");
		$this->db->order_by("created_at","desc");
		return $this->db->get();
	}

	public function getById($id)
	{
		$this->db->select("*");
		$this->db->from("infos");
		$this->db->where("id",$id);
		return $this->db->get();
	}

	public function store($data)
	{
		$query=$this->db->insert("infos",$data);
	}

	public function update($id,$data)
	{
		$this->db->where('id',$id);
		$this->db->update('infos',$data);
	}

	public function delete($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('infos');
	}

	public function getCity($year)
	{
		$this->db->select("kota");
		$this->db->from("infos");
		$this->db->where("tahun",$year);
		$this->db->group_by("kota");

		return $this->db->get();
	}

}
?>